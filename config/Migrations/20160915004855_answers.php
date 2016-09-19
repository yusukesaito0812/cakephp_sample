<?php
use Migrations\AbstractMigration;

class Answers extends AbstractMigration
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
        $table = $this->table('answers');
        $table->addColumn('user_id', 'string', [
            'null' => false,
        ]);
        $table->addColumn('questionnaires_list', 'string', [
            'default' => '[]',
            'null' => false,
        ]);
        $table->addColumn('answers_list', 'string', [
            'default' => '[]',
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
        $table = $this->table('answers');
        $table->drop();
    }
}
