<?php

namespace Project\PublicityBannerModule\Model\Data;

use Magento\Framework\DataObject;

use Project\PublicityBannerModule\Api\Data\PublicityBannerInterface;

class PublicityBanner extends DataObject implements PublicityBannerInterface
{

    /**
     * @inheritDoc
     */
    public function getEntityId(): ?int
    {
        return $this->getData(self::ENTITY_ID) === null ? null
            : (int)$this->getData(self::ENTITY_ID);
    }

    /**
     * @inheritDoc
     */
    public function setEntityId(?int $entityId): void
    {
        $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * @inheritDoc
     */
    public function getLabel(): ?string
    {
        return $this->getData(self::LABEL);
    }

    /**
     * @inheritDoc
     */
    public function setLabel(?string $label): void
    {
        $this->setData(self::LABEL, $label);
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): ?string
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * @inheritDoc
     */
    public function setDescription(?string $description): void
    {
        $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * @inheritDoc
     */
    public function getUrlMedia(): ?string
    {
        return $this->getData(self::URL_MEDIA);
    }

    /**
     * @inheritDoc
     */
    public function setUrlMedia(?string $urlMedia): void
    {
        $this->setData(self::URL_MEDIA, $urlMedia);
    }

    /**
     * @inheritDoc
     */
    public function getDateFrom(): ?int
    {
        return $this->getData(self::DATE_FROM) === null ? null
            : (int)$this->getData(self::DATE_FROM);
    }

    /**
     * @inheritDoc
     */
    public function setDateFrom(?int $dateFrom): void
    {
        $this->setData(self::DATE_FROM, $dateFrom);
    }

    /**
     * @inheritDoc
     */
    public function getDateTo(): ?int
    {
        return $this->getData(self::DATE_TO) === null ? null
            : (int)$this->getData(self::DATE_TO);
    }

    /**
     * @inheritDoc
     */
    public function setDateTo(?int $dateTo): void
    {
        $this->setData(self::DATE_TO, $dateTo);
    }
}
