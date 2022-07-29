<?php

namespace Project\PublicityBannerModule\Controller\Adminhtml\Category;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Project\PublicityBannerModule\Api\PublicityBannerRepositoryInterface as PublicityBannerRepository;
use Project\PublicityBannerModule\Model\PublicityBannerModel;
use Magento\Framework\Controller\Result\JsonFactory;
use Project\PublicityBannerModule\Api\Data\PublicityBannerInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\LocalizedException;


class InlineEdit extends Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Project_PublicityBannerModule::banner_listing';

    /**
     * @var PublicityBannerRepository
     */
    protected PublicityBannerRepository $publicityBannerRepository;

    /**
     * @var JsonFactory
     */
    protected JsonFactory $jsonFactory;

    /**
     * @param Context $context
     * @param PublicityBannerRepository $publicityBannerRepository
     * @param JsonFactory $jsonFactory
     */
    public function __construct(
        Context $context,
        PublicityBannerRepository $publicityBannerRepository,
        JsonFactory $jsonFactory
    ) {
        parent::__construct($context);
        $this->publicityBannerRepository = $publicityBannerRepository;
        $this->jsonFactory = $jsonFactory;
    }

    /**
     * @return ResultInterface
     * @throws LocalizedException
     */
    public function execute(): ResultInterface
    {
        $resultJson = $this->jsonFactory->create();
        $error = false;
        $messages = [];

        if ($this->getRequest()->getParam('isAjax')) {
            $postItems = $this->getRequest()->getParam('items', []);
            if (!count($postItems)) {
                $messages[] = __('Please correct the data sent.');
                $error = true;
            } else {
                foreach (array_keys($postItems) as $blockId) {
                    /** @var PublicityBannerModel $publicityBannerModel */
                    $block = $this->publicityBannerRepository->getById($blockId);
                    try {
                        $block->setData(array_merge($publicityBannerModel->getData(), $postItems[$blockId]));
                        $this->publicityBannerRepository->save($publicityBannerModel);
                    } catch (\Exception $e) {
                        $messages[] = $this->getErrorWithBlockId(
                            $publicityBannerModel,
                            __($e->getMessage())
                        );
                        $error = true;
                    }
                }
            }
        }

        return $resultJson->setData([
            'messages' => $messages,
            'error' => $error
        ]);
    }

    /**
     * Add block title to error message
     *
     * @param BlockInterface $block
     * @param string $errorText
     * @return string
     */
    protected function getErrorWithBlockId(BlockInterface $block, $errorText)
    {
        return '[Block ID: ' . $block->getId() . '] ' . $errorText;
    }
}


