<?php

namespace Project\PublicityBannerModule\Api\Data;

interface PublicityBannerCategoryInterface
{
    /**
     * String constants for property names
     */
    const PUBLICITY_BANNER_ID = "publicity_banner_id";
    const CATEGORY_ID = "category_id";

    /**
     * Getter for PublicityBannerId.
     *
     * @return int|null
     */
    public function getPublicityBannerId(): ?int;

    /**
     * Setter for PublicityBannerId.
     *
     * @param int|null $publicityBannerId
     *
     * @return void
     */
    public function setPublicityBannerId(?int $publicityBannerId): void;

    /**
     * Getter for CategoryId.
     *
     * @return int|null
     */
    public function getCategoryId(): ?int;

    /**
     * Setter for CategoryId.
     *
     * @param int|null $categoryId
     *
     * @return void
     */
    public function setCategoryId(?int $categoryId): void;

}
