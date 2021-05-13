<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Users extends CI_Migration {
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'register_date' => array(
                'type' => 'timestamp',
                'current_timestamp' => true
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');

        $data = [
            [
                'id' => 1,
                'name' => "admin",
                'email' => "admin@email.d",
                'username' => "admin",
                'password' => "e3274be5c857fb42ab72d786e281b4b8",
                'register_date' => "2020-11-02 16:05:46"
            ], [
                'id' => 2,
                'name' => "Florian Nelles",
                'email' => "abc@email.de",
                'username' => "Flo",
                'password' => "900150983cd24fb0d6963f7d28e17f72",
                'register_date' => "2020-11-02 14:17:20"
            ], [
                'id' => 8,
                'name' => "test",
                'email' => "test@test",
                'username' => "test",
                'password' => "912ec803b2ce49e4a541068d495ab570",
                'register_date' => "2020-11-02 15:33:21"
            ]
        ];

        include_once (APPPATH . "controllers/Migrate.php");
        Migrate::seed($this,'users', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}