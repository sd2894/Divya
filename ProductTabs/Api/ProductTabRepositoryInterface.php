<?php
/**
 * @category  Divya
 * @package   Divya\ProductTabs
 * @author    Divya - divyasekar.2894@gmail.com
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Divya\ProductTabs\Api;

use Divya\ProductTabs\Api\Data\ProductTabInterface;
use Divya\ProductTabs\Api\Data\ProductTabSearchResultsInterface;
use Divya\ProductTabs\Model\ProductTab;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

interface ProductTabRepositoryInterface
{
    /**
     * Save tab data
     *
     * @param ProductTabInterface $tab
     * @throws CouldNotSaveException
     * @return ProductTab
     */
    public function save(ProductTabInterface $tab);

    /**
     * Load tab data by id
     *
     * @param string $tabId
     * @throws NoSuchEntityException
     * @return ProductTab
     */
    public function get($tabId);

    /**
     * Load tab data collection by given search criteria
     *
     * @param SearchCriteriaInterface $criteria
     * @return ProductTabSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete tab
     *
     * @param ProductTabInterface $tab
     * @throws CouldNotDeleteException
     * @return bool
     */
    public function delete(ProductTabInterface $tab);

    /**
     * Delete tab by ID
     *
     * @param string $tabId
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     * @return bool
     */
    public function deleteById($tabId);
}
