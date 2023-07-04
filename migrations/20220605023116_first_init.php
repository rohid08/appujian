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
            ->addColumn('artikel', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->addForeignKey('user_id', 'user', 'id', 'restrict', 'no action')
            ->create();
    }

    protected function down(): void
    {
        $this->table('post')
            ->drop();

        $this->table('user')
            ->drop();
    }
}
