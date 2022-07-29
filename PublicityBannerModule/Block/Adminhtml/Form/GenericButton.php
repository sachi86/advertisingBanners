<?php

namespace Project\PublicityBannerModule\Block\Adminhtml\Form;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;
use Magento\Framework\UrlInterface;

class GenericButton
{
    /**
     * Url Builder
     *
     * @var UrlInterface
     */
    protected UrlInterface $urlBuilder;
    protected Registry $registry;

    /**
     * Constructor
     *
     * @param Context $context
     * @param Registry $registry
     */
    public function __construct(
        Context $context,
        Registry $registry
    ) {
        $this->urlBuilder = $context->getUrlBuilder();
        $this->registry = $registry;
    }

    /**
     * Return the synonyms group Id.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        $publicity = $this->registry->registry('publicity');
        return $publicity->getId();
    }

    /**
     * Generate url by route and parameters
     *
     * @param string $route
     * @param array $params
     * @return  string
     */
    public function getUrl(string $route = '', array $params = []): string
    {
        return $this->urlBuilder->getUrl($route, $params);
    }

    public function wrapButtonSettings($label, $class, $onClick, $sortOrder, $dataAttribute='', $className='', $options=''): array
    {
        return $data = [
            'label' => $label,
            'class' => $class,
            'on_click' => $onClick,
            'sort_order' => $sortOrder,
        ];
    }
}
