<?php

namespace Project\PublicityBannerModule\Model;

use Magento\Framework\Model\AbstractModel;
use Project\PublicityBannerModule\Model\ResourceModel\PublicityBannerResource;

class PublicityBannerModel extends AbstractModel implements \Project\PublicityBannerModule\Api\Data\PublicityBannerInterface
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'publicity_banner_model';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(PublicityBannerResource::class);    }
}
