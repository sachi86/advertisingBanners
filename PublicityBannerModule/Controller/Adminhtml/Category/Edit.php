<?php
namespace Project\PublicityBannerModule\Controller\Adminhtml\Category;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Registry;
use Project\PublicityBannerModule\Model\ResourceModel\PublicityBannerModel\CollectionFactory;

class Edit extends Action
{
    /**
     * @var Registry
     */
    private Registry $coreRegistry;

    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;

    /**
     * @param Context $context
     * @param Registry $coreRegistry,
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        CollectionFactory $collectionFactory
    ) {
        parent::__construct($context);
        $this->coreRegistry = $coreRegistry;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * Mapped Grid List page.
     * @return Page
     */
    public function execute(): Page
    {
        $rowId = (int) $this->getRequest()->getParam('entity_id');
        $rowData = $this->collectionFactory->create();
        /** @var Page $resultPage */
        if ($rowId) {
            $rowData = $rowData->load($rowId);
            $rowTitle = $rowData->getData();
            if (!$rowData->getData()) {
                $this->messageManager->addError(__('Banner data no longer exist.'));
                $this->_redirect('publicity_banner/display/form/index');
                return $resultPage;
            }
        }

        $this->coreRegistry->register('row_data', $rowData);
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $title = $rowId ? __('Edit Banner Data ').$rowTitle : __('Add Banner Data');
        $resultPage->getConfig()->getTitle()->prepend($title);
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Project_PublicityBannerModule::edit');
    }
}
