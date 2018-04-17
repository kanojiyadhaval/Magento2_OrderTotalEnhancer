<?php

namespace Dhaval\Enhancedorder\Observer;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\App\ObjectManager;


//use Magento\Framework\App\Action\Context;
use Dhaval\Enhancedorder\Model\EnhancedorderFactory;

use Magento\Framework\Exception\LocalizedException;

class Invoicepay implements \Magento\Framework\Event\ObserverInterface
{

	protected $_order;
	protected $_modelEnhancedorderFactory;
    protected $helperData;
	
    public function __construct(
        \Magento\Sales\Api\Data\OrderInterface $order,
        EnhancedorderFactory $modelEnhancedorderFactory,
        \Dhaval\Enhancedorder\Helper\Data $helperData
    ) {
    	$this->_order = $order;
        $this->helperData = $helperData;
       	$this->_modelEnhancedorderFactory = $modelEnhancedorderFactory;
    }
 
    /**
     * customer register event handler
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if($this->helperData->getGeneralConfig('enable')==1){
        	$model = $this->_modelEnhancedorderFactory->create();
            $orderId = $observer->getInvoice()->getOrder()->getId();
            $orderId = sprintf("%09d", $orderId);
            
            $grandTotal = $observer->getInvoice()->getOrder()->getBaseGrandTotal();

            if($this->helperData->getGeneralConfig('multiplyby')){
                $multiplyBy = $this->helperData->getGeneralConfig('multiplyby');
                $grandTotal = $grandTotal*$multiplyBy;
            }
            $newData = array('order_id'=>$orderId,'ordertotal'=>$grandTotal,'multiplyby'=>$multiplyBy);
            $model->setData($newData);
            $model->save();
        }
            
    }
}
?>