<?php
namespace Custom\Catalog\Block\Product\ProductList;

class Toolbar extends \Magento\Catalog\Block\Product\ProductList\Toolbar
{
    /**
     * Set collection to pager
     *
     * @param \Magento\Framework\Data\Collection $collection
     * @return $this
     */
    public function setCollection($collection)
    {
        if ($this->getCurrentOrder()) {
            if($this->getCurrentOrder() == 'qty_ordered') {
                $collection->getSelect()
                     ->joinLeft( 
						'sales_order_item', 
						'e.entity_id = sales_order_item.product_id and sales_order_item.updated_at > date_add(now(), interval -30 day)', 
						array('qty_ordered'=>'SUM(sales_order_item.qty_invoiced)')) 
					->group('e.entity_id')
					->order('qty_ordered '.$this->getCurrentDirection());

				$this->_collection = $collection;
				
				$this->_collection->setCurPage($this->getCurrentPage());

				$this->_collection->setOrder($this->getCurrentOrder(), $this->getCurrentDirectionReverse());
				
				// we need to set pagination only if passed value integer and more that 0
				$limit = (int)$this->getLimit();
				if ($limit) {
					$this->_collection->setPageSize($limit);
				}
            }
			else {
				parent::setCollection($collection);
			}
        }
		
        return $this;
    }
}
