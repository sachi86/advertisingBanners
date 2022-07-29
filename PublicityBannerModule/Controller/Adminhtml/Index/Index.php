<?php

namespace Project\PublicityBannerModule\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Project\PublicityBannerModule\Api\Data\PublicityBannerInterface;
use Safe\Exceptions\InfoException;

class Index extends Action implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private PageFactory $pageFactory;
    protected PublicityBannerInterface $publicityBannerInterface;

    /**
     * Constructor
     *
     * @param Context $context
     * @param PageFactory $rawFactory
     * @param PublicityBannerInterface $publicityBannerInterface
     */
    public function __construct(
        Context $context,
        PageFactory $rawFactory,
        PublicityBannerInterface $publicityBannerInterface
    ) {
        $this->pageFactory = $rawFactory;
        $this->publicityBannerInterface = $publicityBannerInterface;

        parent::__construct($context);
    }

    public function getPublicityBanner(PublicityBannerInterface $publicityBannerInterface){
        $getData = array($publicityBannerInterface->getLabel(), $publicityBannerInterface->getDescription(), $publicityBannerInterface->getUrlMedia(), $publicityBannerInterface->getDateFrom(), $publicityBannerInterface->getDateTo());
        foreach ($getData as $publicityBanner){
            return $publicityBanner;
        }
    }

    /**
     * Add the main Admin Grid page
     *
     * @return Page
     * @throws InfoException
     */
    public function execute(): Page
    {
        $resultPage = $this->pageFactory->create();
        $resultPage->setActiveMenu('Project_PublicityBannerModule::banner_listing');
        $resultPage->getConfig()->getTitle()->prepend(__('Publicity Banner Listing'));

        return $resultPage;

    }

}
