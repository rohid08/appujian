<?php

declare(strict_types=1);

use Phoenix\Database\Element\Index;
use Phoenix\Migration\AbstractMigration;

final class FirstInit extends AbstractMigration
{
    protected function up(): void
    {
        $this->table('user')
            ->addColumn('id', 'integer', ['autoincrement' => true])
            ->addColumn('username', 'string')
            ->addColumn('email', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->addIndex('username', Index::TYPE_UNIQUE)
            ->addIndex('email', Index::TYPE_UNIQUE)
            ->create();

        $this->table('post')
            ->addColumn('id', 'integer', ['autoincrement' => true])
            ->addColumn('user_id', 'integer')
            ->addColumn('article', 'string')
            ->addColumn('jenis', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->addForeignKey('user_id', 'user', 'id', 'restrict', 'no action')
            ->create();

        $this->insert('user', [
            [
                'username' => 'luffy',
                'email' => 'luffy@pirate.com',
                'created_at' => date('Y-m-d'),
            ],
            [
                'username' => 'zorro',
                'email' => 'zorro@pirate.com',
                'created_at' => date('Y-m-d'),
            ],
            [
                'username' => 'sanji',
                'email' => 'sanji@pirate.com',
                'created_at' => date('Y-m-d'),
            ],
            [
                'username' => 'nami',
                'email' => 'nami@pirate.com',
                'created_at' => date('Y-m-d'),
            ],
            [
                'username' => 'franky',
                'email' => 'franky@pirate.com',
                'created_at' => date('Y-m-d'),
            ],
        ]);
    }


    protected function down(): void
    {
        $this->table('post')
            ->drop();

        $this->table('user')
            ->drop();
    }
}
