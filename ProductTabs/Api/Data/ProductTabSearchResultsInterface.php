<?php
/**
 * @category  Divya
 * @package   Divya\ProductTabs
 * @author    Divya - divyasekar.2894@gmail.com
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Divya\ProductTabs\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface ProductTabSearchResultsInterface
 */
interface ProductTabSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get tab list.
     *
     * @return ProductTabInterface[]
     */
    public function getItems();

    /**
     * Set tab list.
     *
     * @param ProductTabInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
