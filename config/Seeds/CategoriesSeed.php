<?php
use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
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
              'name'    => '仕事の意欲',
          ),
          array(
              'name'    => '成長の機会',
          ),
          array(
              'name'    => '仕事のコントロール',
          ),
          array(
              'name'    => '仕事の適性',
          ),
          array(
              'name'    => '技能の活用度',
          ),
          array(
              'name'    => '役割の明確さ',
          ),
          array(
              'name'    => '上司の公正な態度',
          ),
        );

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
