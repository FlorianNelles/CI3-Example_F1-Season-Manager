<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Update_Drivers extends CI_Migration {
    public function up()
    {
        $fields = array(
            'drivers_image' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            )
        );
        $this->dbforge->add_column('drivers', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_table('users', 'dirvers_image');
    }
}