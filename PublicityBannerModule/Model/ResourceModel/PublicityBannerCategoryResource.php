<?php

namespace Project\PublicityBannerModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PublicityBannerCategoryResource extends AbstractDb
{
    /**
     * @var string
     */
    protected string $_eventPrefix = 'publicity_banner_category_resource_model';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init('publicity_banner_category', 'publicity_banner_id');
        $this->_useIsObjectNew = true;
    }
}
