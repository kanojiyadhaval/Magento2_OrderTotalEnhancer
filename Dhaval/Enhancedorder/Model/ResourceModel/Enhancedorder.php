<?php
namespace Dhaval\Enhancedorder\Model\ResourceModel;
  
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
  
class Enhancedorder extends AbstractDb
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';
    
    /**
     * Construct.
     *
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param \Magento\Framework\Stdlib\DateTime\DateTime       $date
     * @param string|null                                       $resourcePrefix
     */
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    ) 
    {
        parent::__construct($context);
    }
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('dhaval_enhancedorder', 'id');
    }
}
