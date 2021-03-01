<?php

class Admin extends CI_Controller{
    public function view($page = 'home'){
        if(!file_exists(APPPATH.'views/Admin/'.$page.'.php')){
            show_404();
        }

        $data['title'] = ucfirst($page);
        $this->load->view('admin/header');
        $this->load->view('admin/'.$page,$data);
        $this->load->view('admin/footer');

    }
}




?>