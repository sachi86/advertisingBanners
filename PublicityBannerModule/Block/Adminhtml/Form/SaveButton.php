<?php

namespace Project\PublicityBannerModule\Block\Adminhtml\Form;

use JetBrains\PhpStorm\Pure;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Project\PublicityBannerMOdule\Block\Adminhtml\Form\GenericButton;

/**
 * Save entity button.
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * Retrieve Save button settings.
     *
     * @return array
     */
   public function getButtonData(): array
    {
        return $this->wrapButtonSettings(
            'Save',
            'save primary',
            '',
            [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save'
            ],
            10
        );
    }
}
