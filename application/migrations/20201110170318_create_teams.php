<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Teams extends CI_Migration {
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
            'teamchef' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'motor' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'sitz' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('teams');

        $data = [
            [
                'id' => 1,
                'name' => "Mercedes",
                'teamchef' => "Toto Wolff",
                'motor' => "Mercedes",
                'sitz' => "Brackley, Vereinigtes Königreich"
            ], [
                'id' => 2,
                'name' => "Ferrari",
                'teamchef' => "Mattia Binotto",
                'motor' => "Ferrari",
                'sitz' => "Maranello, Italien"
            ], [
                'id' => 3,
                'name' => "Red Bull",
                'teamchef' => "Christian Horner",
                'motor' => "Honda",
                'sitz' => "Militon Keynes, Vereinigtes Königreich"
            ], [
                'id' => 4,
                'name' => "Renault",
                'teamchef' => "Cyril Abiteboul",
                'motor' => "Renault",
                'sitz' => "Viry-Chatillon, Frankreich"
            ], [
                'id' => 5,
                'name' => "McLaren",
                'teamchef' => "Andres Seidl",
                'motor' => "Renault",
                'sitz' => "Woking, Vereinigtes Königreich"
            ], [
                'id' => 6,
                'name' => "Racing Point",
                'teamchef' => "Otmar Szafnauer",
                'motor' => "Mercedes",
                'sitz' => "Silverstone, Vereinigtes Königreich"
            ], [
                'id' => 7,
                'name' => "AlphaTauri",
                'teamchef' => "Franz Tost",
                'motor' => "Honda",
                'sitz' => "Faenza, Italien"
            ], [
                'id' => 8,
                'name' => "Alfa Romeo",
                'teamchef' => "Frederic Vasseur",
                'motor' => "Ferrari",
                'sitz' => "Hinwil, Schweiz"
            ], [
                'id' => 9,
                'name' => "Haas",
                'teamchef' => "Günther Steiner",
                'motor' => "Ferrari",
                'sitz' => "Kannapolis, Vereinigte Staaten"
            ], [
                'id' => 10,
                'name' => "Williams",
                'teamchef' => "Simon Roberts",
                'motor' => "Mercedes",
                'sitz' => "Grove, Vereinigtes Königreich"
            ], [
                'id' => 11,
                'name' => "Eigenes Team",
                'teamchef' => "Eigener Chef",
                'motor' => "Eigenes Motor",
                'sitz' => "Eigener Sitz"
            ], [
                'id' => 12,
                'name' => "Kein Team",
                'teamchef' => "Kein Chef",
                'motor' => "Kein Motor",
                'sitz' => "Kein Sitz"
            ]
        ];

        include_once (APPPATH . "controllers/Migrate.php");
        Migrate::seed($this,'teams', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('teams');
    }
}