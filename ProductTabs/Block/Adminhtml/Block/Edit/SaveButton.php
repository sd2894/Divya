<?php
/**
 * @category  Divya
 * @package   Divya\ProductTabs
 * @author    Divya - divyasekar.2894@gmail.com
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Divya\ProductTabs\Block\Adminhtml\Block\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Magento\Ui\Component\Control\Container;

/**
 * Class SaveButton
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => [
                    'buttonAdapter' => [
                        'actions' => [
                            [
                                'targetName' => 'producttabs_form.producttabs_form',
                                'actionName' => 'save'
                            ],
                        ],
                    ],
                ],
            ]
        ];
    }
}
