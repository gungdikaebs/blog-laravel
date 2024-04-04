<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ebes',
            'username' => 'ebes',
            'email' => 'ebes@gmail.com',
            'password' => bcrypt('ebes'),
        ]);

        \App\Models\User::factory(5)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        //     Post::create([
        //         'title' => 'Judul Pertama',
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //         'content' => ' Provident mollitia suscipit veniam? Rem iusto numquam voluptatem dolor, vero consequatur dicta ut quisquam. Hic aut illo quam eos ratione nam veritatis nemo rem incidunt, sed at alias asperiores reiciendis explicabo. Tempora aperiam, soluta quasi illum rerum, esse quae velit minima temporibus fuga a mollitia quos dolore eum quia provident assumenda officiis ducimus omnis. Nihil mollitia assumenda, maxime a minima vero quaerat ut corporis qui non! Qui voluptatum consequatur eligendi iste. Quis fuga inventore est deserunt at similique officia reiciendis iusto laboriosam possimus consequatur mollitia deleniti perferendis assumenda excepturi dolor, dolores omnis.',
        //         'category_id' => '1',
        //         'user_id' => '1',
        //     ]);
        //     Post::create([
        //         'title' => 'Judul Kedua',
        //         'slug' => 'judul-kedua',
        //         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //         'content' => ' Provident mollitia suscipit veniam? Rem iusto numquam voluptatem dolor, vero consequatur dicta ut quisquam. Hic aut illo quam eos ratione nam veritatis nemo rem incidunt, sed at alias asperiores reiciendis explicabo. Tempora aperiam, soluta quasi illum rerum, esse quae velit minima temporibus fuga a mollitia quos dolore eum quia provident assumenda officiis ducimus omnis. Nihil mollitia assumenda, maxime a minima vero quaerat ut corporis qui non! Qui voluptatum consequatur eligendi iste. Quis fuga inventore est deserunt at similique officia reiciendis iusto laboriosam possimus consequatur mollitia deleniti perferendis assumenda excepturi dolor, dolores omnis.',
        //         'category_id' => '2',
        //         'user_id' => '1',
        //     ]);
    }
}
