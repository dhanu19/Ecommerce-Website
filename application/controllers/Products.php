<?php #         CONTROLLER
class Products extends CI_Controller {
 
       public function __construct()
       {
            parent::__construct();
            // Your custom constructor code goes here
            // This local constructor overrides the parent controller constructor
       }
        //LIST ALL PRODUCTS
        public function dispProducts(){
            $this->load->model('Products_model');

            $products = $this->Products_model->dispProducts();
            $data = array();
            $data['products'] = $products;
            $this->load->view("Pages/list",$data);

            
        }

        /***    NEW CODE          *************/

        // INSERT FUNCTION
       public function addProduct(){
        $this->load->model('Products_model');

        $data = array(
             'productName' => $this->input->post('productName'),
             'productCategory' => $this->input->post('productCategory'),
             'productPrice' => $this->input->post('productPrice'),
             'productStock' => $this->input->post('productStock'),
             #'productImage' => $this->input->post('productImage'),
         );
     
         $this->Products_model->addProduct($data);
         redirect(base_url()."Products/dispProducts");
     }













        /******* END *************/

       // INSERT FUNCTION
        /* OLD CODE


        public function addProduct(){
           $this->load->model('Products_model');
            $data = array(
                'productName' => $this->input->post('productName'),
                'productCategory' => $this->input->post('productCategory'),
                'productPrice' => $this->input->post('productPrice'),
                'productStock' => $this->input->post('productStock'),
                #'productImage' => $this->input->post('productImage'),
            );
        
            $this->Products_model->addProduct($data);
            redirect(base_url()."Products/dispProducts");
        }


        */

        
        // EDIT FUNCTION
        public function editProduct($product_id){

            $this->load->model('Products_model');
            $product = $this->Products_model->getProduct($product_id);
            $data = array();
            $data['product'] = $product;
            $this->load->view('Pages/edit',$data);

         
        }
        
        public function updateProduct($product_id){

            $this->load->model('Products_model');
            $product = $this->Products_model->getProduct($product_id);
            $data = array();
            $data['product'] = $product;
            
            //update user record
            $updateData = array();
            $updateData['productName'] = $this->input->post('productName');
            $updateData['productCategory'] = $this->input->post('productCategory');
            $updateData['productPrice'] = $this->input->post('productPrice');
            $updateData['productStock'] = $this->input->post('productStock');
            $this->Products_model->updateProduct($product_id,$updateData);
            redirect(base_url().'Products/dispProducts/');
        }

        public function deleteProduct($product_id){

            $this->load->model('Products_model');
            $product = $this->Products_model->getProduct($product_id);
            if(empty($product)){
                redirect(base_url().'Products/dispProducts');
            }

            $this->Products_model->deleteProduct($product_id);
            redirect(base_url().'Products/dispProducts');



        }


        






}
?>