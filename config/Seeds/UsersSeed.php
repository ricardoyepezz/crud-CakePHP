<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;
 
 
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run():void
    {
        $hasher = new DefaultPasswordHasher();
        $password = $hasher->hash('secret');
 
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 80; $i++)
        {
            $data[] = [
                'first_name' => $faker->firstName(),
                'last_name'  => $faker->lastName(),
                'email'      => $faker->email,
                'password'   => $password,
                'role'       => $faker->randomElement($array = array ('user','editor')),
                'active'     => $faker->boolean,
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")
            ];
        }
 
        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
