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
        ])
            ->addColumn('is_show', 'boolean', [
                'default' => true,
                'null' => false,
            ])
        ->addColumn('created_at', 'datetime', [
            'default' => null,
            'null' => true,
            ])
        ->addColumn('updated_at', 'datetime', [
            'default' => null,
            'null' => true,
            ])
        ->addColumn('deleted', 'datetime', [
            'default' => null,
            'null' => true,
        ])
        ->create();
    }
    public function down()
    {
        $table = $this->table('categories');
        $table->drop();
    }
}
