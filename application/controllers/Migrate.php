<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->load->library('migration');
        if ($this->migration->current() === FALSE)
        {
            echo $this->migration->error_string();
        }else{
            echo "Table Migrated Successfully.";
        }
    }

    public static function seed($context, $table, $data){
        foreach($data as $item){
            $context->db->insert($table, $item);
        }
    }
}