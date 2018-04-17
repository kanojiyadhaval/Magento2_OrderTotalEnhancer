<?php
namespace Dhaval\Enhancedorder\Model;
  
use Magento\Framework\Model\AbstractModel;
use Dhaval\Enhancedorder\Api\Data\GridInterface;
class Enhancedorder extends AbstractModel implements GridInterface
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Dhaval\Enhancedorder\Model\ResourceModel\Enhancedorder');
    }
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'dhaval_enhancedorder';
 
    /**
     * @var string
     */
    protected $_cacheTag = 'dhaval_enhancedorder';
 
    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'dhaval_enhancedorder';
 
   
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }
 
    /**
     * Set EntityId.
     */
    public function setId($entityId)
    {
        return $this->setData(self::ID, $entityId);
    }
 
    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getOrderId()
    {
        return $this->getData(self::ORDER_ID);
    }
 
    /**
     * Set Title.
     */
    public function setOrderId($orderId)
    {
        return $this->setData(self::ORDER_ID, $orderId);
    }
 
    /**
     * Get getContent.
     *
     * @return varchar
     */
    public function getOrdertotal()
    {
        return $this->getData(self::ORDERTOTAL);
    }
 
    /**
     * Set ORDERTOTAL.
     */
    public function setOrdertotal($ordertotal)
    {
        return $this->setData(self::ORDERTOTAL, $ordertotal);
    }
 
    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getMultiplyby()
    {
        return $this->getData(self::MULTIPLYBY);
    }
 
    /**
     * Set IsActive.
     */
    public function setMultiplyby($multiplyby)
    {
        return $this->setData(self::MULTIPLYBY, $multiplyby);
    }
}
