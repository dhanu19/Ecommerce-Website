<?php

class Products_model extends CI_Model {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart'); 
        $this->load->database();
    }

    public function addProduct($data){
        //create method
        $this->db->insert('products',$data);
    }
    public function dispProducts(){
        return $products = $this->db->get('products')->result_array();
    }

    //for edit
    //to fetch single user form database
    public function getProduct($product_id){
        $this->db->where('product_id',$product_id);
        return $product = $this->db->get('products')->row_array();
    }

    //UPDATE FUNCTION
    public function updateProduct($product_id,$data){
        $this->db->where('product_id',$product_id);

        $this->db->update('products',$data);
    }

    public function deleteProduct($product_id){
        $this->db->where('product_id',$product_id);
        $this->db->delete('products');
    }
}










?>