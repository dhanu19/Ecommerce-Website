<?php

class Customers extends CI_Controller{
    public function register(){
        $data['title'] = 'Sign Up';

        $this->form_validation->set_rules('firstname','Firstname','required');
        $this->form_validation->set_rules('lastname','Lastname','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('zipcode','Zipcode','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password2','Confirm Password','matches[password]');
        

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('customers/register',$data);
            $this->load->view('templates/footer');

        }else{
            //Encrypt password
            $enc_password = md5($this->input->post('password'));
            //$this->load->model('Customer_model');
            $this->Customer_model->register($enc_password);
            
            $this->session->set_flashdata('user_registered','You are now registered and can log in');
            redirect('home');
        }
    }



    //LOGIN USER

    public function login(){
        $data['title'] = 'Sign In';

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('customers/login',$data);
            $this->load->view('templates/footer');

        }else{
            //get username
            $username = $this->input->post('username');
            //get and encrypt password
            $password = md5($this->input->post('password'));

            //login user
            $customer_id = $this->Customer_model->login($username,$password);
            
            if($customer_id){//this customer id is return from login() function in customer_model
                
                //create session
                $customer_data = array(
                    'customer_id' => $customer_id,
                    'username' => $username,
                    'logged_in' =>true
                );


                $this->session->set_userdata($customer_data);

                //set message
                $this->session->set_flashdata('customer_loggedin','You are now logged in ');
                redirect('home');
            }else{
                //set message
                $this->session->set_flashdata('login_failed','login is invalid');
                redirect('customers/login');
            }

            
        }
    }

    public function logout(){
        //unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('username');


        //message
        $this->session->set_flashdata('customer_loggedout','You are now logged out ');
        
        redirect('customers/login');
    }



}











?>