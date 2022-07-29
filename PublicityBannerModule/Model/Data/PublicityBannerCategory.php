<?php

namespace Project\PublicityBannerModule\Model\Data;

use Magento\Framework\DataObject;
use Project\PublicityBannerModule\Api\Data\PublicityBannerCategoryInterface;

class PublicityBannerCategory extends DataObject implements PublicityBannerCategoryInterface
{
    /**
     * @inheritDoc
     */
    public function getPublicityBannerId(): ?int
    {
        return $this->getData(self::PUBLICITY_BANNER_ID) === null ? null
            : (int)$this->getData(self::PUBLICITY_BANNER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setPublicityBannerId(?int $publicityBannerId): void
    {
        $this->setData(self::PUBLICITY_BANNER_ID, $publicityBannerId);
    }

    /**
     * @inheritDoc
     */
    public function getCategoryId(): ?int
    {
        return $this->getData(self::CATEGORY_ID) === null ? null
            : (int)$this->getData(self::CATEGORY_ID);
    }

    /**
     * @inheritDoc
     */
    public function setCategoryId(?int $categoryId): void
    {
        $this->setData(self::CATEGORY_ID, $categoryId);
    }
}
