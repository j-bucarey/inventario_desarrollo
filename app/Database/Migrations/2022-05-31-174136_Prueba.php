<?php

namespace App\Database\Migrations; 
use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id'          => [
                    'type'           => 'INT',
                    'constraint'     => 50,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
            ],
            'nombre'      => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
            ],  
            'apellido'    => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
            ],
            'email'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
            ],
            'password'    => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
            ],
            'created_at'  => [
                    'type'           => 'DATETIME',
                    'null'           => true,
            ],          
            'updated_at'  => [
                    'type'           => 'DATETIME',
                    'null'           => true,
            ],
            'deleted_at'  => [
                    'type'           => 'DATETIME',
                    'null'           => true,
            ],
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('usuario');
    }

    public function down()
    {
        //
        $this->forge->dropTable('usuario');
    }
}
