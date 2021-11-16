<?php
class Tests extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $lang = ($this->session->userdata('language'))?
            $this->session->userdata('language') : $this->input->config_item('language');

        $this->lang->load('navbar', $lang);
        $this->lang->load('testpage', $lang);
    }

    public function index(){

        $this->load->library('parser');
        $this->load->library('encryption');  //setting encryption key in config.php
        $this->load->library('table');


        $message = $this->input->post('message');
        if (!$message ){
            $encrypt_message = '';
            $decrypt_message = '';
        }else{
            $encrypt_message = $this->encryption->encrypt($message);
            $decrypt_message = $this->encryption->decrypt($encrypt_message);
        }


        $data = array(
            'test_title' => $this->lang->line('test_title'),
            'message' => $message,
            'encryption_test_title' => $this->lang->line('encrypt_test_title'),
            'placeholder' => $this->lang->line('placeholder_message'),
            'encrypt_button' => $this->lang->line('encrypt_button'),
            'encrypt_title' => $this->lang->line('encrypt_title'),
            'decrypt_title' => $this->lang->line('decrypt_title'),
            'encrypt_message' => $encrypt_message,
            'decrypt_message' => $decrypt_message
        );

        //html table example with Users
        $this->table->set_heading('ID', 'Name' , $this->lang->line('table_username'), $this->lang->line('table_created_at') );
        $query = $this->db->query('SELECT id,name,username,register_date FROM Users');

        $template = array(
            'table_open'            => '<table class="table" border="2" cellpadding="10" cellspacing="2">',

            'thead_open'            => '<thead class="thead-dark">',
            'thead_close'           => '</thead>',
            'heading_row_start'     => '<tr>',
            'heading_row_end'       => '</tr>',
            'heading_cell_start'    => '<th>',
            'heading_cell_end'      => '</th>',
            'tbody_open'            => '<tbody>',
            'tbody_close'           => '</tbody>',
            'row_start'             => '<tr>',
            'row_end'               => '</tr>',
            'cell_start'            => '<td>',
            'cell_end'              => '</td>',
            'row_alt_start'         => '<tr>',
            'row_alt_end'           => '</tr>',
            'cell_alt_start'        => '<td>',
            'cell_alt_end'          => '</td>',
            'table_close'           => '</table>'
        );
        $this->table->set_template($template);
        $data['table'] = $this->table->generate($query);


        $this->load->view('templates/header');
        $this->parser->parse('tests/index', $data);
        $this->load->view('templates/footer');


    }

}