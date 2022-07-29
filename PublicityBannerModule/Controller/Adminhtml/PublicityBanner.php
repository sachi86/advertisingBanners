<?php

namespace Project\PublicityBannerModule\Controller\Adminhtml;
use \Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

abstract class PublicityBanner extends Action
{
    protected PageFactory $resultPageFactory;

        protected Forward $forward;


        public function __construct(
            PageFactory $pageFactory,
            Forward $forward,
            Action\Context $context
        ) {
            $this->resultPageFactory = $pageFactory;
            $this->forward = $forward;
            parent::__construct($context);
        }

        public function __initPage(): Page
        {
            return $this->resultPageFactory->create();
        }

}
