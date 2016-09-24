<?php

use Phinx\Migration\AbstractMigration;

class Questionnaires extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('questionnaires');
        $table->addColumn('contents', 'string')
            ->addColumn('point_rate', 'float', [
                'default' => 1,
                'null' => false,
            ])
            ->addColumn('category_id', 'integer', [
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
            ->addForeignKey('category_id', 'categories', 'id')
            ->create();
    }
    public function down()
    {
        $table = $this->table('questionnaires');
        $table->drop();        
    }
}
