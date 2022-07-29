<?php

namespace Project\PublicityBannerModule\Ui\Component\Listing\Column;

use Magento\Framework\Url;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;


class Actions extends Column
{
    /**
     * @var UrlInterface
     */
    protected UrlInterface $_urlBuilder;

    /**
     * @var string
     */
    protected string $_viewUrl;

    /**
     * Constructor
     *
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param Url $urlBuilder
     * @param string $viewUrl
     * @param array $components
     * @param array $data
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        Url $urlBuilder,
        $viewUrl = '',
        array $components = [],
        array $data = []
    ) {
        $this->_urlBuilder = $urlBuilder;
        $this->_viewUrl    = $viewUrl;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource): array
    {
        if (isset($dataSource['data']['items'])) {
            $publicityBannerId = $this->context->getFilterParam('entity_id');

            foreach ($dataSource['data']['items'] as &$item) {
                $item[$this->getData('name')]['edit'] = [
                    'href' => $this->_urlBuilder->getUrl(
                        'mage_admin/publicity_banner/category/form/index',
                        ['entity_id' => $item['entity_id'], 'publicity_banner' => $publicityBannerId]
                    ),
                    'label' => __('Edit'),
                    'hidden' => false,
                ];
            }
        }
        return $dataSource;
    }
}
