<?php
use Migrations\AbstractMigration;

class AddColumnsToQuestionnaires extends AbstractMigration
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
        $table = $this->table('questionnaires');
        $table->addColumn('point_rate', 'float', [
            'default' => 1,
            'null' => false,
        ]);
        $table->addColumn('category_id', 'integer', [
            'null' => false,
        ]);
        $table->addColumn('is_show', 'boolean', [
            'null' => false,
        ]);
        $table->addForeignKey('category_id', 'categories', 'id');
        $table->update();
    }
    public function down()
    {
        $table = $this->table('questionnaires');
        $table->removeColumn('point_rate');
        $table->removeColumn('category_id');
        $table->removeColumn('is_show');
    }
}
