<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Drivers extends CI_Migration {
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
            'startnr' => array(
                'type' => 'INT',
                'constraint' => 2,
            ),
            'team_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'points' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('drivers');

        $data = [
            [
                'name' => 'Lewis Hamilton',
                'startnr' => '44',
                'team_id' => '1',
                'points' => '71',
                'id' => '19',
                'user_id' => '1',
            ], [
                'name' => 'Max Verstappen',
                'startnr' => '33',
                'team_id' => '3',
                'points' => '67',
                'id' => '20',
                'user_id' => '1',
            ], [
                'name' => 'Valtteri Bottas',
                'startnr' => '77',
                'team_id' => '1',
                'points' => '60',
                'id' => '21',
                'user_id' => '1',
            ], [
                'name' => 'test',
                'startnr' => '24',
                'team_id' => '3',
                'points' => '1',
                'id' => '29',
                'user_id' => '8',
            ], [
                'name' => 'Florian Nelles',
                'startnr' => '97',
                'team_id' => '4',
                'points' => '107',
                'id' => '37',
                'user_id' => '2',
            ], [
                'name' => 'Sebastian Vettel',
                'startnr' => '5',
                'team_id' => '2',
                'points' => '24',
                'id' => '42',
                'user_id' => '1',
            ], [
                'name' => 'Charles Leclerc',
                'startnr' => '16',
                'team_id' => '2',
                'points' => '25',
                'id' => '43',
                'user_id' => '1',
            ], [
                'name' => 'Alexander Albon',
                'startnr' => '23',
                'team_id' => '3',
                'points' => '35',
                'id' => '44',
                'user_id' => '1',
            ], [
                'name' => 'Lando Norris',
                'startnr' => '4',
                'team_id' => '5',
                'points' => '32',
                'id' => '45',
                'user_id' => '1',
            ], [
                'name' => 'Charlos Sainz',
                'startnr' => '55',
                'team_id' => '5',
                'points' => '29',
                'id' => '46',
                'user_id' => '1',
            ], [
                'name' => 'Daniel Ricciardo',
                'startnr' => '3',
                'team_id' => '4',
                'points' => '40',
                'id' => '47',
                'user_id' => '1',
            ], [
                'name' => 'Esteban Ocon',
                'startnr' => '31',
                'team_id' => '4',
                'points' => '20',
                'id' => '48',
                'user_id' => '1',
            ], [
                'name' => 'Pierre Gasly',
                'startnr' => '10',
                'team_id' => '7',
                'points' => '35',
                'id' => '49',
                'user_id' => '1',
            ], [
                'name' => 'Daniil Kwjat',
                'startnr' => '26',
                'team_id' => '7',
                'points' => '19',
                'id' => '50',
                'user_id' => '1',
            ], [
                'name' => 'Sergio Perez',
                'startnr' => '11',
                'team_id' => '6',
                'points' => '42',
                'id' => '51',
                'user_id' => '1',
            ], [
                'name' => 'Lance Stroll',
                'startnr' => '18',
                'team_id' => '6',
                'points' => '29',
                'id' => '52',
                'user_id' => '1',
            ], [
                'name' => 'Kimi Räikönen',
                'startnr' => '7',
                'team_id' => '8',
                'points' => '12',
                'id' => '53',
                'user_id' => '1',
            ], [
                'name' => 'Antiono Giovinazzi',
                'startnr' => '99',
                'team_id' => '8',
                'points' => '8',
                'id' => '54',
                'user_id' => '1',
            ], [
                'name' => 'Romain Grosjean',
                'startnr' => '8',
                'team_id' => '9',
                'points' => '5',
                'id' => '55',
                'user_id' => '1',
            ], [
                'name' => 'Kevin Magnussen',
                'startnr' => '20',
                'team_id' => '9',
                'points' => '9',
                'id' => '56',
                'user_id' => '1',
            ], [
                'name' => 'George Russel',
                'startnr' => '63',
                'team_id' => '10',
                'points' => '2',
                'id' => '57',
                'user_id' => '1',
            ], [
                'name' => 'Nicholas Latifi',
                'startnr' => '6',
                'team_id' => '10',
                'points' => '0',
                'id' => '58',
                'user_id' => '1',
            ], [
                'name' => 'TestFahre',
                'startnr' => '5',
                'team_id' => '6',
                'points' => '10',
                'id' => '59',
                'user_id' => '2',
            ], [
                'name' => 'mil',
                'startnr' => '27',
                'team_id' => '8',
                'points' => '57',
                'id' => '61',
                'user_id' => '2',
            ]
        ];

        include_once (APPPATH . "controllers/Migrate.php");
        Migrate::seed($this,'drivers', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('drivers');
    }
}