<?php

namespace Project\PublicityBannerModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PublicityBannerResource extends AbstractDb
{
    /**
     * @var string
     */
    protected string $_eventPrefix = 'publicity_banner_resource_model';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init('publicity_banner', 'entity_id');
        $this->_useIsObjectNew = true;
    }
}
