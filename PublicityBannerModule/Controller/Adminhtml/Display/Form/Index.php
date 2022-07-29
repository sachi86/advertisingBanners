<?php

namespace Project\PublicityBannerModule\Controller\Adminhtml\Display\Form;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;

class Index extends Action implements HttpGetActionInterface
{
    /**
     * Authorization level of a basic admin session
     */
    const ADMIN_RESOURCE = 'Project_PublicityBannerModule::banner_form';

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        $resultInterface = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
        $resultInterface->getConfig()->getTitle()->append(__('Publicity Banner Form'));
        $resultInterface->setActiveMenu('Project_PublicityBannerModule::banner_form');

        return $resultInterface;

    }
}
