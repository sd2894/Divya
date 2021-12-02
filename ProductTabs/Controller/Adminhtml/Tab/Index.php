<?php
/**
 * @category  Divya
 * @package   Divya\ProductTabs
 * @author    Divya - divyasekar.2894@gmail.com
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Divya\ProductTabs\Controller\Adminhtml\Tab;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 */
class Index extends Action implements HttpGetActionInterface
{
    /**
     * Authorization
     */
    const ADMIN_RESOURCE = 'Divya_ProductTabs::producttabs';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index Action
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Product Tabs'));

        return $resultPage;
    }
}
