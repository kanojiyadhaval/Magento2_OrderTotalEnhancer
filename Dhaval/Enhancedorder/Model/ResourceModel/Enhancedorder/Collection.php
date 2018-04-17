<?php
namespace Dhaval\Enhancedorder\Model\ResourceModel\Enhancedorder;
  
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
  
class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Dhaval\Enhancedorder\Model\Enhancedorder',
            'Dhaval\Enhancedorder\Model\ResourceModel\Enhancedorder'
        );
    }
}
