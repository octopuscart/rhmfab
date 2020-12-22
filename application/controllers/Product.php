<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        redirect('/');
    }

    //function for product list
    function ProductList($custom_id, $cat_id) {


        $this->db->where('id', $custom_id);
        $query = $this->db->get('custome_items');
        $customeitem = $query->row();

        if ($cat_id == 0) {
            $cat_id = $customeitem->category_id;
        }

        $categories = $this->Product_model->productListCategories($cat_id, $custom_id);
        $data["categorie_parent"] = $this->Product_model->getparent($cat_id);
        $data["categories"] = $categories;
        $data["category"] = $cat_id;
        $data["custom_item"] = $customeitem->item_name;
        $data["custom_id"] = $custom_id;
        $data["item_price"] = $customeitem->price;
        
          $session_last_custom = $this->session->userdata('session_last_custom');

        $data["session_last_custom"] = $session_last_custom;
        
        

        $this->load->view('Product/productList', $data);
    }



}
