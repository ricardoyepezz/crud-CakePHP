<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('first_name', 'string', ['limit'=> 100])
              ->addColumn('last_name', 'string', ['limit'=> 100])
              ->addColumn('email', 'string', ['limit'=> 100])
              ->addColumn('password', 'string')
              ->addColumn('role', 'enum', ['values'=> ['admin', 'user']]) //colocar valores dentro de otro array para que no dé error de enum
              ->addColumn('active', 'boolean')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();
    }
}
