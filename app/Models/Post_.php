<?php

namespace App\Models;


class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Verga Tandika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ut tenetur ex corporis dolores quod. Voluptatibus, eius quaerat? At repudiandae adipisci consequatur provident quas! Excepturi assumenda aliquam hic voluptates quia praesentium accusamus corrupti pariatur adipisci, cumque quae sit repellendus, magni nemo! Eius quis ad voluptatum sit maxime odio veniam asperiores provident, minima commodi voluptate veritatis deserunt perspiciatis sapiente suscipit ratione facere a? Ullam hic molestias aperiam placeat sed id, quo culpa provident itaque qui debitis ut. Excepturi numquam recusandae dignissimos."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Verga Tandiono",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ut tenetur ex corporis dolores quod. Voluptatibus, eius quaerat? At repudiandae adipisci consequatur provident quas! Excepturi assumenda aliquam hic voluptates quia praesentium accusamus corrupti pariatur adipisci, cumque quae sit repellendus, magni nemo! Eius quis ad voluptatum sit maxime odio veniam asperiores provident, minima commodi voluptate veritatis deserunt perspiciatis sapiente suscipit ratione facere a? Ullam hic molestias aperiam placeat sed id, quo culpa provident itaque qui debitis ut. Excepturi numquam recusandae dignissimos."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
