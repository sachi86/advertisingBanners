<?php

namespace Project\PublicityBannerModule\Controller\Adminhtml\Display\Submit_form;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultInterface;

class Save extends Action implements HttpPostActionInterface
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
        return $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
    }
}
