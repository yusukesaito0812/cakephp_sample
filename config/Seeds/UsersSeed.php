<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
            'username' => 'yusuke',
            'email' => 'yusuke.saito@axis-ing.com',
            'password' => '$2y$10$q91A1vaxcDfwuqwPHU1uYesVneFix9A2FTC4slzBu4nRYaLO4kaAe',
            'first_name' => 'yusuke',
            'last_name' => 'saito',
            'hospital' => 'AA病院',
            'ward' => 'A棟',
            'section' => '内科',
            'occupation' => 'nurse',
            'token' => 'a8a1c16a964446a4a88e0e5b646565b1',
            'token_expires' => '2016-09-15 02:56:19',
            'api_token' => 'NULL',
            'activation_date' => '2016-09-15 02:56:20',
            'tos_date' => '2016-09-15 01:56:19',
            'active' => '1',
            'is_superuser' => '0',
            'role' => 'user',
            ),
            array(
            'username' => 'admin',
            'email' => 'admin@axis-ing.com',
            'password' => '$2y$10$q91A1vaxcDfwuqwPHU1uYesVneFix9A2FTC4slzBu4nRYaLO4kaAe',
            'first_name' => 'admin',
            'last_name' => 'admin',
            'hospital' => 'AA病院',
            'ward' => 'A棟',
            'section' => '内科',
            'occupation' => 'nurse',
            'token' => 'a8a1c16a964446a4a88e0e5b646565b1',
            'token_expires' => '2016-09-15 02:56:19',
            'api_token' => 'NULL',
            'activation_date' => '2016-09-15 02:56:20',
            'tos_date' => '2016-09-15 01:56:19',
            'active' => '1',
            'is_superuser' => '1',
            'role' => 'admin',
            )
        );

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
