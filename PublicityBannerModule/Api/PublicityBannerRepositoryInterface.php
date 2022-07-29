<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Project\PublicityBannerModule\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;
use Project\PublicityBannerModule\Api\Data\PublicityBannerInterface;

/**
 * CMS block CRUD interface.
 * @api
 * @since 100.0.2
 */
interface PublicityBannerRepositoryInterface
{
    /**
     * Save block.
     *
     * @param PublicityBannerInterface $publicityBannerInterface
     * @return PublicityBannerInterface
     * @throws LocalizedException
     */
    public function save(Data\PublicityBannerInterface $block): PublicityBannerInterface;

    /**
     * Retrieve block.
     *
     * @param string $entityId
     * @return PublicityBannerInterface
     * @throws LocalizedException
     */
    public function getById(string $entityId): PublicityBannerInterface;

    /**
     * Retrieve blocks matching the specified criteria.
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return PublicityBannerInterface
     * @throws LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria): PublicityBannerInterface;



}
