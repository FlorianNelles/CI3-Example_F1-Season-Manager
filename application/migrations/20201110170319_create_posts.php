<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Posts extends CI_Migration {
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'body' => array(
                'type' => 'TEXT',
            ),
            'created_at' => array(
                'type' => 'timestamp',
                'current_timestamp' => true
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('posts');

        $data = [
            [
                'id' => 2,
                'title' => "Erste Nachricht",
                'slug' => "Erste-Nachricht",
                'body' => "_Dies ist die erste Nachricht\nbearbeitet\n",
                'created_at' => "2020-10-14 19:41:52",
                'user_id' => 1
            ], [
                'id' => 13,
                'title' => "neue message",
                'slug' => "neue-message",
                'body' => "abc",
                'created_at' => "2020-11-02 16:02:04",
                'user_id' => 8
            ], [
                'id' => 17,
                'title' => "test1",
                'slug' => "test1",
                'body' => "adsga",
                'created_at' => "2020-11-03 16:44:10",
                'user_id' => 2
            ],
        ];

        include_once (APPPATH . "controllers/Migrate.php");
        Migrate::seed($this,'posts', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('posts');
    }
}