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
array('contents' => '非常にたくさんの仕事をしなければならない','point_rate' => 1,'category_id' => 1,'is_show' => 1),
array('contents' => '時間内に仕事が処理しきれない','point_rate' => 1.1,'category_id' => 1,'is_show' => 1),
array('contents' => '一生懸命働かなければならない','point_rate' => 1.2,'category_id' => 1,'is_show' => 1),
array('contents' => 'かなり注意を集中する必要がある','point_rate' => 1.3,'category_id' => 1,'is_show' => 1),
array('contents' => '高度の知識や技術が必要なむずかしい仕事だ','point_rate' => 1.4,'category_id' => 1,'is_show' => 1),
array('contents' => '勤務時間中はいつも仕事のことを考えていなければならない','point_rate' => 1.5,'category_id' => 1,'is_show' => 1),
array('contents' => 'からだを大変よく使う仕事だ','point_rate' => 1.6,'category_id' => 1,'is_show' => 1),
array('contents' => '自分のペースで仕事ができる','point_rate' => 1.7,'category_id' => 1,'is_show' => 1),
array('contents' => '自分で仕事の順番・やり方を決めることができる','point_rate' => 1.8,'category_id' => 1,'is_show' => 1),
array('contents' => '職場の仕事の方針に自分の意見を反映できる','point_rate' => 1.9,'category_id' => 1,'is_show' => 1),
array('contents' => '非常にたくさんの仕事をしなければならない','point_rate' => 1,'category_id' => 2,'is_show' => 1),
array('contents' => '時間内に仕事が処理しきれない','point_rate' => 1.1,'category_id' => 2,'is_show' => 1),
array('contents' => '一生懸命働かなければならない','point_rate' => 1.2,'category_id' => 2,'is_show' => 1),
array('contents' => 'かなり注意を集中する必要がある','point_rate' => 1.3,'category_id' => 2,'is_show' => 1),
array('contents' => '高度の知識や技術が必要なむずかしい仕事だ','point_rate' => 1.4,'category_id' => 2,'is_show' => 1),
array('contents' => '勤務時間中はいつも仕事のことを考えていなければならない','point_rate' => 1.5,'category_id' => 2,'is_show' => 1),
array('contents' => 'からだを大変よく使う仕事だ','point_rate' => 1.6,'category_id' => 2,'is_show' => 1),
array('contents' => '自分のペースで仕事ができる','point_rate' => 1.7,'category_id' => 2,'is_show' => 1),
array('contents' => '自分で仕事の順番・やり方を決めることができる','point_rate' => 1.8,'category_id' => 2,'is_show' => 1),
array('contents' => '職場の仕事の方針に自分の意見を反映できる','point_rate' => 1.9,'category_id' => 2,'is_show' => 1),
array('contents' => '非常にたくさんの仕事をしなければならない','point_rate' => 1,'category_id' => 3,'is_show' => 1),
array('contents' => '時間内に仕事が処理しきれない','point_rate' => 1.1,'category_id' => 3,'is_show' => 1),
array('contents' => '一生懸命働かなければならない','point_rate' => 1.2,'category_id' => 3,'is_show' => 1),
array('contents' => 'かなり注意を集中する必要がある','point_rate' => 1.3,'category_id' => 3,'is_show' => 1),
array('contents' => '高度の知識や技術が必要なむずかしい仕事だ','point_rate' => 1.4,'category_id' => 3,'is_show' => 1),
array('contents' => '勤務時間中はいつも仕事のことを考えていなければならない','point_rate' => 1.5,'category_id' => 3,'is_show' => 1),
array('contents' => 'からだを大変よく使う仕事だ','point_rate' => 1.6,'category_id' => 3,'is_show' => 1),
array('contents' => '自分のペースで仕事ができる','point_rate' => 1.7,'category_id' => 3,'is_show' => 1),
array('contents' => '自分で仕事の順番・やり方を決めることができる','point_rate' => 1.8,'category_id' => 3,'is_show' => 1),
array('contents' => '職場の仕事の方針に自分の意見を反映できる','point_rate' => 1.9,'category_id' => 3,'is_show' => 1),
array('contents' => '非常にたくさんの仕事をしなければならない','point_rate' => 1,'category_id' => 4,'is_show' => 1),
array('contents' => '時間内に仕事が処理しきれない','point_rate' => 1.1,'category_id' => 4,'is_show' => 1),
array('contents' => '一生懸命働かなければならない','point_rate' => 1.2,'category_id' => 4,'is_show' => 1),
array('contents' => 'かなり注意を集中する必要がある','point_rate' => 1.3,'category_id' => 4,'is_show' => 1),
array('contents' => '高度の知識や技術が必要なむずかしい仕事だ','point_rate' => 1.4,'category_id' => 4,'is_show' => 1),
array('contents' => '勤務時間中はいつも仕事のことを考えていなければならない','point_rate' => 1.5,'category_id' => 4,'is_show' => 1),
array('contents' => 'からだを大変よく使う仕事だ','point_rate' => 1.6,'category_id' => 4,'is_show' => 1),
array('contents' => '自分のペースで仕事ができる','point_rate' => 1.7,'category_id' => 4,'is_show' => 1),
array('contents' => '自分で仕事の順番・やり方を決めることができる','point_rate' => 1.8,'category_id' => 4,'is_show' => 1),
array('contents' => '職場の仕事の方針に自分の意見を反映できる','point_rate' => 1.9,'category_id' => 4,'is_show' => 1),
array('contents' => '非常にたくさんの仕事をしなければならない','point_rate' => 1,'category_id' => 5,'is_show' => 1),
array('contents' => '時間内に仕事が処理しきれない','point_rate' => 1.1,'category_id' => 5,'is_show' => 1),
array('contents' => '一生懸命働かなければならない','point_rate' => 1.2,'category_id' => 5,'is_show' => 1),
array('contents' => 'かなり注意を集中する必要がある','point_rate' => 1.3,'category_id' => 5,'is_show' => 1),
array('contents' => '高度の知識や技術が必要なむずかしい仕事だ','point_rate' => 1.4,'category_id' => 5,'is_show' => 1),
array('contents' => '勤務時間中はいつも仕事のことを考えていなければならない','point_rate' => 1.5,'category_id' => 5,'is_show' => 1),
array('contents' => 'からだを大変よく使う仕事だ','point_rate' => 1.6,'category_id' => 5,'is_show' => 1),
array('contents' => '自分のペースで仕事ができる','point_rate' => 1.7,'category_id' => 5,'is_show' => 1),
array('contents' => '自分で仕事の順番・やり方を決めることができる','point_rate' => 1.8,'category_id' => 5,'is_show' => 1),
array('contents' => '職場の仕事の方針に自分の意見を反映できる','point_rate' => 1.9,'category_id' => 5,'is_show' => 1),
array('contents' => '非常にたくさんの仕事をしなければならない','point_rate' => 1,'category_id' => 6,'is_show' => 1),
array('contents' => '時間内に仕事が処理しきれない','point_rate' => 1.1,'category_id' => 6,'is_show' => 1),
array('contents' => '一生懸命働かなければならない','point_rate' => 1.2,'category_id' => 6,'is_show' => 1),
array('contents' => 'かなり注意を集中する必要がある','point_rate' => 1.3,'category_id' => 6,'is_show' => 1),
array('contents' => '高度の知識や技術が必要なむずかしい仕事だ','point_rate' => 1.4,'category_id' => 6,'is_show' => 1),
array('contents' => '勤務時間中はいつも仕事のことを考えていなければならない','point_rate' => 1.5,'category_id' => 6,'is_show' => 1),
array('contents' => 'からだを大変よく使う仕事だ','point_rate' => 1.6,'category_id' => 6,'is_show' => 1),
array('contents' => '自分のペースで仕事ができる','point_rate' => 1.7,'category_id' => 6,'is_show' => 1),
array('contents' => '自分で仕事の順番・やり方を決めることができる','point_rate' => 1.8,'category_id' => 6,'is_show' => 1),
array('contents' => '職場の仕事の方針に自分の意見を反映できる','point_rate' => 1.9,'category_id' => 6,'is_show' => 1),

        );

        $table = $this->table('questionnaires');
        $table->insert($data)->save();
    }
}
