<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLeadsTable extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id'           => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'nome'         => ['type' => 'VARCHAR', 'constraint' => 255],
            'email'        => ['type' => 'VARCHAR', 'constraint' => 255],
            'celular'      => ['type' => 'VARCHAR', 'constraint' => 20],
            'regiao'       => ['type' => 'VARCHAR', 'constraint' => 100],
            'area_atuacao' => ['type' => 'VARCHAR', 'constraint' => 100],
            'created_at'   => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('leads');
    }

    public function down(): void
    {
        $this->forge->dropTable('leads');
    }
}
