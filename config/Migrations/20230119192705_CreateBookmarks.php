<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateBookmarks extends AbstractMigration
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
        $table = $this->table('bookmarks');
        $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('url', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();

        $refTable = $this->table('bookmarks');
        $refTable->addColumn('user_id', 'integer', ['signed' => 'disable'])
                 //se añade columna user_id (tabla en singular, y columna) y signed para tener solo nums positivos
                 ->addForeignKey('user_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']) 
                 //addForeignKey(colum_bookmarks, tabla users, colum_id de users - [cuando se elimina usuario tambien sus bookmarks]) 
                 ->update();
    }
}
