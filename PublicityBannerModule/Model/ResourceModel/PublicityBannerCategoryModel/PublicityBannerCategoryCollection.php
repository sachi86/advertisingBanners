<?php

namespace Project\PublicityBannerModule\Model\ResourceModel\PublicityBannerCategoryModel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Project\PublicityBannerModule\Model\PublicityBannerCategoryModel;
use Project\PublicityBannerModule\Model\ResourceModel\PublicityBannerCategoryResource;

class PublicityBannerCategoryCollection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'publicity_banner_category_collection';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(PublicityBannerCategoryModel::class, PublicityBannerCategoryResource::class);
    }
}
