<?php

namespace Project\PublicityBannerModule\Block;

use Magento\Framework\View\Element\Template;
use Project\PublicityBannerModule\Api\Data\PublicityBannerInterface;

class PublicityBanner extends Template
{
    protected PublicityBannerInterface $publicityBannerInterface;

    public function getPublicityIsActive():bool {
        // TODO : If current date is superior to date_from and inferior to date_to
        // TODO: if  is active for this current category

        return true;
    }
    public function getLabel():string {
        return $this->publicityBannerInterface->getLabel();
    }

    public function getDescription():string {
        return $this->publicityBannerInterface->getDescription();
    }

    public function getImageUrl():string {
        return $this->publicityBannerInterface->getUrlMedia();
    }

}
