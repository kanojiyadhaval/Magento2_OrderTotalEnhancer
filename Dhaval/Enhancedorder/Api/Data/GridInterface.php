<?php
/**
 * Dhaval_Enhancedorder Grid Interface.
 */
namespace Dhaval\Enhancedorder\Api\Data;
 
interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ID = 'id';
    const ORDER_ID = 'order_id';
    const ORDERTOTAL = 'ordertotal';
    const MULTIPLYBY = 'multiplyby';
    
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getId();
 
    /**
     * Set EntityId.
     */
    public function setId($entityId);
 
    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getOrderId();
 
    /**
     * Set Title.
     */
    public function setOrderId($title);
 
    /**
     * Get Content.
     *
     * @return varchar
     */
    public function getOrdertotal();
 
    /**
     * Set Content.
     */
    public function setOrdertotal($content);
 
    /**
     * Get Publish Date.
     *
     * @return varchar
     */
    public function getMultiplyby();
 
    /**
     * Set PublishDate.
     */
    public function setMultiplyby($publishDate);
}