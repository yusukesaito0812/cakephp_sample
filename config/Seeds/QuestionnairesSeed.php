<?php
use Migrations\AbstractSeed;

/**
 * Questionnaires seed.
 */
class QuestionnairesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = array(
          array(
              'title'    => 'aaa',
              'contents' => 'sampleA',
          ),
          array(
              'title'    => 'bbb',
              'contents' => 'sampleB',
          )
        );

        $table = $this->table('questionnaires');
        $table->insert($data)->save();
    }
}
