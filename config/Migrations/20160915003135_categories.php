<?php
use Migrations\AbstractMigration;

class Categories extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('categories');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created_at', 'datetime', [
            'null' => true,
        ]);
        $table->addColumn('updated_at', 'datetime', [
            'null' => true,
        ]);
        $table->create();
    }
    public function down()
    {
        $table = $this->table('categories');
        $table->drop();
    }
}
