<?php
namespace Project\PublicityBannerModule\Controller\Adminhtml\Category;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\Controller\ResultInterface;
use Project\PublicityBannerModule\Model\PublicityBannerModel;

class Save extends Action
{
    /**
     * @var PublicityBannerModel
     */
    protected PublicityBannerModel $_model;

    /**
     * @param Action\Context $context
     * @param PublicityBannerModel $model
     */
    public function __construct(
        Action\Context $context,
        PublicityBannerModel $model
    ) {
        parent::__construct($context);
        $this->_model = $model;
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed(): bool
    {
        return $this->_authorization->isAllowed('Project_PublicityBannerModule::save');
    }

    /**
     * Save action
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        $data = $this->getRequest()->getPostValue();
        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($data) {
            $model = $this->_model;

            $id = $this->getRequest()->getParam('entity_id');
            if ($id) {
                $model->load($id);
            }

            $model->setData($data);

            $this->_eventManager->dispatch(
                'publicity_banner_department_prepare_save',
                ['publicity_banner' => $model, 'request' => $this->getRequest()]
            );

            try {
                $model->save();
                $this->messageManager->addSuccess(__('Banner saved'));
                $this->_getSession()->setData(false);
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['id' => $model->getId(), '_current' => true]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\RuntimeException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the banner'));
            }

            $this->_getSession()->setData($data);
            return $resultRedirect->setPath('*/*/edit', ['entity_id' => $this->getRequest()->getParam('entity_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
