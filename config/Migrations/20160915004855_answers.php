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
        $table->addColumn('user_id', 'integer', [
            'null' => false,
        ])
        ->addColumn('questionnaires_list', 'text', [
            'null' => true,
        ])
        ->addColumn('answers_list', 'text', [
            'null' => true,
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
        ->addForeignKey('user_id', 'users', 'id')
        ->create();
    }
    public function down()
    {
        $table = $this->table('answers');
        $table->drop();
    }
}
