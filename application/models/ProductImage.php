<?php
class Model_ProductImage extends Zend_Db_Table{
    protected $_name = 'product_images';
    protected $_primary = 'id';

    public function getListItem(){
        $list_result = $this->fetchAll()->toArray();
        return $list_result;
    }

    public function getItemDetail($arrParam){
        $where = 'id = '.$arrParam['id'];
        $detail = $this->fetchRow($where);
        return $detail;
    }

    public function addItem($arrParam){
        $row = $this->fetchNew();
        $row->product_id = $arrParam['product_id'];
        $row->image = $arrParam['image'];
        $row->save();
    }

    public function deleteItem($arrParam){
        $where = 'id = '.$arrParam['id'];
        $this->delete($where);
    }
}