<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'login' => 'admin@koinot.com',
      'role' => 'admin',
      'password' => bcrypt('(I@_TO##=&Zd'),
    ]);

    $this->call([
      BannersSeeder::class,
      HistoriesSeeder::class,
      NewsSeeder::class,
      ImagesSeeder::class,
      ProjectsSeeder::class,
      ContributionsSeeder::class,
    ]);
  }
}
