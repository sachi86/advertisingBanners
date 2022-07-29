<?php

namespace Project\PublicityBannerModule\Controller\Adminhtml\Category;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NotFoundException;
use Magento\Ui\Component\MassAction\Filter;
use Project\PublicityBannerModule\Model\ResourceModel\PublicityBannerModel\CollectionFactory;
use Magento\Framework\Controller\ResultFactory;

class MassDelete extends Action
{
    /**
     * @var Filter
     */
    protected Filter $filter;

    /**
     * @var CollectionFactory
     */
    protected CollectionFactory $collectionFactory;

    /**
     * @param Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(Context $context, Filter $filter, CollectionFactory $collectionFactory)
    {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    /**
     * Dispatch request
     *
     * @return ResultInterface
     * @throws NotFoundException
     * @throws LocalizedException
     */
    public function execute(): ResultInterface
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $collectionSize = $collection->getSize();

        foreach ($collection as $item) {
            $item->delete();
        }

        $this->messageManager->addSuccess(__('A total of %1 element(s) have been deleted.', $collectionSize));

        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('*/*/');
    }
}
