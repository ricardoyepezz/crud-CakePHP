<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Bookmarks seed.
 */
class BookmarksSeed extends AbstractSeed
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
    public function run(): void
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 120; $i++)
        {
            $data[] = [
                'title'         => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'url'           => $faker->url,
                'created'       => date("Y-m-d H:i:s"),
                'modified'      => date("Y-m-d H:i:s"),
                'user_id'       => $faker->numberBetween($min = 1, $max = 120)
            ];
        }

        $table = $this->table('bookmarks');
        $table->insert($data)->save();
    }
}
