<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Song extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'duration'      => [
                'type'           => 'INT',
				'constraint'     => 100,
			],
            'singer'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'label'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'releaseDate'       => [
                'type'           => 'DATE'
                // 'constraint'     => ''
            ],
			'album'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('songs', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('songs');
    }
}
