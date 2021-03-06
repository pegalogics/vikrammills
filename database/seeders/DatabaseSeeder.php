<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(FailedJobsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(ContactSubmitsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(ProductVersionsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(HomesTableSeeder::class);
        $this->call(OrderReturnControllersTableSeeder::class);
    }
}
