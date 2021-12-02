<?php
/**
 * @category  Divya
 * @package   Divya\ProductTabs
 * @author    Divya - divyasekar.2894@gmail.com
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Divya\ProductTabs\Block\Adminhtml\Block\Edit;

use Divya\ProductTabs\Model\ProductTabFactory;
use Divya\ProductTabs\Model\ResourceModel\ProductTab;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class GenericButton
 */
class GenericButton
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var ProductTab
     */
    protected $tabResource;

    /**
     * @var ProductTabFactory
     */
    protected $tabFactory;

    /**
     * @param Context $context
     * @param ProductTab $tabResource
     * @param ProductTabFactory $tabFactory
     */
    public function __construct(
        Context $context,
        ProductTab $tabResource,
        ProductTabFactory $tabFactory
    ) {
        $this->context = $context;
        $this->tabResource = $tabResource;
        $this->tabFactory = $tabFactory;
    }

    /**
     * Return tab ID
     *
     * @return int|null
     */
    public function getProductTabId()
    {
        $tab = $this->tabFactory->create();
        try {
            $this->tabResource->load($tab, $this->context->getRequest()->getParam('tab_id'));
            return $tab->getId();
        } catch (NoSuchEntityException $e) {
        }

        return null;
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $params
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
