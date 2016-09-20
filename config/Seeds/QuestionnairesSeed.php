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
              'title'    => 'blank',
              'contents' => '非常にたくさんの仕事をしなければならない',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '時間内に仕事が処理しきれない',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '一生懸命働かなければならない',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => 'かなり注意を集中する必要がある',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '高度の知識や技術が必要なむずかしい仕事だ',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '勤務時間中はいつも仕事のことを考えていなければならない',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => 'からだを大変よく使う仕事だ',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '自分のペースで仕事ができる',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '自分で仕事の順番・やり方を決めることができる',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '職場の仕事の方針に自分の意見を反映できる',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '自分の技能や知識を仕事で使うことが少ない',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '私の部署内で意見のくい違いがある',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '私の部署と他の部署とはうまが合わない',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '私の職場の雰囲気は友好的である',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '私の職場の作業環境（騒音、照明、温度、換気など）はよくない',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '仕事の内容は自分にあっている',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
          array(
              'title'    => 'blank',
              'contents' => '働きがいのある仕事だ',
              'point_rate' => 1,
              'category_id' => 1,
              'is_show' => true,
          ),
        );

        $table = $this->table('questionnaires');
        $table->insert($data)->save();
    }
}
