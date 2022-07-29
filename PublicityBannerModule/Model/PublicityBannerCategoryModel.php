<?php

namespace Project\PublicityBannerModule\Model;

use Magento\Framework\Model\AbstractModel;
use Project\PublicityBannerModule\Model\ResourceModel\PublicityBannerCategoryResource;

class PublicityBannerCategoryModel extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'publicity_banner_category_model';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(PublicityBannerCategoryResource::class);
    }
}
