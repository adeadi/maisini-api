<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_category_list()
    {
        $this->db->select('*');
        $this->db->from('category');
        $query = $this->db->get();

		return $query->result();
    }
}
