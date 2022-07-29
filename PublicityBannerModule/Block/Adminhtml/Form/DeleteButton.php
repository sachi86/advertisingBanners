<?php

namespace Project\PublicityBannerModule\Block\Adminhtml\Form;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Project\PublicityBannerModule\Block\Adminhtml\Form\GenericButton;

/**
 * Delete entity button.
 */
class DeleteButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * Retrieve Delete button settings.
     *
     * @return array
     */
    public function getButtonData(): array
    {
        return $this->wrapButtonSettings(
            'Delete',
            'delete',
            'deleteConfirm(\''
            . __('Are you sure you want to delete this entity?')
            . '\', \'' . $this->getUrl('*/*/delete', ['entity_id' => $this->getEntityId()]) . '\')',
            [],
            20
        );
    }
}
