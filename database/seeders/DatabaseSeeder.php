<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Verga Tandika',
        //     'email' => 'verga@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'David',
        //     'email' => 'dave@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati facilis aperiam velit consequuntur tempora accusantium porro magnam odit rerum consectetur?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse soluta quo, sint suscipit iste nihil. Possimus, et at? Corporis fuga nemo officia molestias a eius esse dicta provident dignissimos facilis, omnis excepturi repellat fugit accusamus, quas aperiam qui voluptatem dolorem voluptate exercitationem rem ex. Aperiam quidem tempore dolorem molestiae harum soluta deserunt expedita praesentium laudantium architecto, velit officia eum corporis ducimus. A velit assumenda fugit saepe excepturi praesentium possimus, vero ratione, architecto, consectetur dolores provident pariatur in explicabo! Neque, dolore sapiente alias iure distinctio quos magni error velit vitae cupiditate necessitatibus illum reiciendis ab eum quo dolorem commodi harum. Iure magnam maxime accusamus quod illo delectus, consectetur molestiae voluptatem non mollitia soluta iusto consequatur tenetur fugiat laudantium nostrum quas sunt possimus eaque molestias, debitis nihil laboriosam modi? Magnam provident quis soluta voluptatum iste aspernatur accusamus amet a illo corporis facilis voluptatem, molestias illum nam, ipsam nihil beatae minus cum quasi quibusdam laboriosam, deleniti temporibus. Similique facilis magnam culpa ad corrupti perferendis ipsum? Aperiam vel saepe veniam consectetur aliquid quas, dolore amet esse laboriosam modi sint assumenda necessitatibus minima at officia consequuntur dignissimos porro sed tenetur recusandae pariatur. Molestiae dicta natus ipsam, labore eveniet, unde itaque tenetur numquam omnis, reiciendis tempore.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati facilis aperiam velit consequuntur tempora accusantium porro magnam odit rerum consectetur?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse soluta quo, sint suscipit iste nihil. Possimus, et at? Corporis fuga nemo officia molestias a eius esse dicta provident dignissimos facilis, omnis excepturi repellat fugit accusamus, quas aperiam qui voluptatem dolorem voluptate exercitationem rem ex. Aperiam quidem tempore dolorem molestiae harum soluta deserunt expedita praesentium laudantium architecto, velit officia eum corporis ducimus. A velit assumenda fugit saepe excepturi praesentium possimus, vero ratione, architecto, consectetur dolores provident pariatur in explicabo! Neque, dolore sapiente alias iure distinctio quos magni error velit vitae cupiditate necessitatibus illum reiciendis ab eum quo dolorem commodi harum. Iure magnam maxime accusamus quod illo delectus, consectetur molestiae voluptatem non mollitia soluta iusto consequatur tenetur fugiat laudantium nostrum quas sunt possimus eaque molestias, debitis nihil laboriosam modi? Magnam provident quis soluta voluptatum iste aspernatur accusamus amet a illo corporis facilis voluptatem, molestias illum nam, ipsam nihil beatae minus cum quasi quibusdam laboriosam, deleniti temporibus. Similique facilis magnam culpa ad corrupti perferendis ipsum? Aperiam vel saepe veniam consectetur aliquid quas, dolore amet esse laboriosam modi sint assumenda necessitatibus minima at officia consequuntur dignissimos porro sed tenetur recusandae pariatur. Molestiae dicta natus ipsam, labore eveniet, unde itaque tenetur numquam omnis, reiciendis tempore.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati facilis aperiam velit consequuntur tempora accusantium porro magnam odit rerum consectetur?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse soluta quo, sint suscipit iste nihil. Possimus, et at? Corporis fuga nemo officia molestias a eius esse dicta provident dignissimos facilis, omnis excepturi repellat fugit accusamus, quas aperiam qui voluptatem dolorem voluptate exercitationem rem ex. Aperiam quidem tempore dolorem molestiae harum soluta deserunt expedita praesentium laudantium architecto, velit officia eum corporis ducimus. A velit assumenda fugit saepe excepturi praesentium possimus, vero ratione, architecto, consectetur dolores provident pariatur in explicabo! Neque, dolore sapiente alias iure distinctio quos magni error velit vitae cupiditate necessitatibus illum reiciendis ab eum quo dolorem commodi harum. Iure magnam maxime accusamus quod illo delectus, consectetur molestiae voluptatem non mollitia soluta iusto consequatur tenetur fugiat laudantium nostrum quas sunt possimus eaque molestias, debitis nihil laboriosam modi? Magnam provident quis soluta voluptatum iste aspernatur accusamus amet a illo corporis facilis voluptatem, molestias illum nam, ipsam nihil beatae minus cum quasi quibusdam laboriosam, deleniti temporibus. Similique facilis magnam culpa ad corrupti perferendis ipsum? Aperiam vel saepe veniam consectetur aliquid quas, dolore amet esse laboriosam modi sint assumenda necessitatibus minima at officia consequuntur dignissimos porro sed tenetur recusandae pariatur. Molestiae dicta natus ipsam, labore eveniet, unde itaque tenetur numquam omnis, reiciendis tempore.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
    }
}
