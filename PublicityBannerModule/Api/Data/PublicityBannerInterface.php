<?php

namespace Project\PublicityBannerModule\Api\Data;

use Magento\Framework\Exception\LocalizedException;

interface PublicityBannerInterface
{
    /**
     * String constants for property names
     */
    const ENTITY_ID = "entity_id";
    const LABEL = "label";
    const DESCRIPTION = "description";
    const URL_MEDIA = "url_media";
    const DATE_FROM = "date_from";
    const DATE_TO = "date_to";

    /**
     * Getter for entity_id.
     *
     * @return int|null
     */
    public function getEntityId(): ?int;

    /**
     * Setter for entity_id.
     *
     * @param int|null $entityId
     *
     * @return void
     */
    public function setEntityId(?int $entityId): void;

    /**
     * Getter for Label.
     *
     * @return string|null
     */
    public function getLabel(): ?string;

    /**
     * Setter for Label.
     *
     * @param string|null $label
     *
     * @return void
     */
    public function setLabel(?string $label): void;

    /**
     * Getter for Description.
     *
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * Setter for Description.
     *
     * @param string|null $description
     *
     * @return void
     */
    public function setDescription(?string $description): void;

    /**
     * Getter for UrlMedia.
     *
     * @return string|null
     */
    public function getUrlMedia(): ?string;

    /**
     * Setter for UrlMedia.
     *
     * @param string|null $urlMedia
     *
     * @return void
     */
    public function setUrlMedia(?string $urlMedia): void;

    /**
     * Getter for DateFrom.
     *
     * @return int|null
     */
    public function getDateFrom(): ?int;

    /**
     * Setter for DateFrom.
     *
     * @param int|null $dateFrom
     *
     * @return void
     */
    public function setDateFrom(?int $dateFrom): void;

    /**
     * Getter for DateTo.
     *
     * @return int|null
     */
    public function getDateTo(): ?int;

    /**
     * Setter for DateTo.
     *
     * @param int|null $dateTo
     *
     * @return void
     */
    public function setDateTo(?int $dateTo): void;

}
