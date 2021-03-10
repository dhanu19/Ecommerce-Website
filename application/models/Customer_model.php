<?php

class Customer_model extends CI_Model{

    public function register($enc_password){
        $data = array(
            'firstName' => $this->input->post('firstname'),
            'lastName' => $this->input->post('lastname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $enc_password,
            'zipcode' => $this->input->post('zipcode')

        );

        //INSERT USERS

        return $this->db->insert('customers',$data);
    }

    //log user in
    public function login($username,$password){
        //validate
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        $result = $this->db->get('customers');

        if($result->num_rows() == 1){
            return $result->row(0)->customer_id;
        }else false;
    }

    

     
}






?>