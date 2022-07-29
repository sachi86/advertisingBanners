<?php

namespace Project\PublicityBannerModule\Model\ResourceModel\PublicityBannerModel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


class Collection extends AbstractCollection
{

    protected function _construct()
    {
        $this->_init('Project\PublicityBannerModule\Model\PublicityBannerModel', 'Project\PublicityBannerModule\Model\ResourceModel\PublicityBannerResource');
    }
}
