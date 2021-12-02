<?php
/**
 * @category  Divya
 * @package   Divya\ProductTabs
 * @author    Divya - divyasekar.2894@gmail.com
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Divya\ProductTabs\Controller\Adminhtml\Tab;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\ForwardFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;

/**
 * Class NewAction
 */
class NewAction extends Action implements HttpGetActionInterface
{
    /**
     * Authorization
     */
    const ADMIN_RESOURCE = 'Divya_ProductTabs::producttabs';

    /**
     * @var ForwardFactory
     */
    protected $resultForwardFactory;

    /**
     * NewAction constructor.
     * @param Action\Context $context
     * @param ForwardFactory $resultForwardFactory
     */
    public function __construct(Action\Context $context, ForwardFactory $resultForwardFactory)
    {
        parent::__construct($context);
        $this->resultForwardFactory = $resultForwardFactory;
    }

    /**
     * Create new tab action
     *
     * @return ResultInterface
     */
    public function execute()
    {
        $resultForward = $this->resultForwardFactory->create();
        return $resultForward->forward('edit');
    }
}
