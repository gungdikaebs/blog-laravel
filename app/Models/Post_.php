<?php

namespace App\Models;



class Posts
{
    private static $blog_posts = [
        [
            "title" => "Losestreak menggunakan Figher By EBEZ",
            "slug" => "losestreak-menggunakan-figter",
            "author" => "Ebes Da Lopez",
            "content" => " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit praesentium, incidunt iusto asperiores excepturi sapiente similique perspiciatis quaerat. Aliquam obcaecati quos quis minima dolor, quod odio rerum commodi harum eum accusamus officia modi vitae ipsum in. Nulla voluptatibus explicabo dolores ex autem doloribus repellendus ab aliquid sed neque dolorum distinctio at, eveniet animi eligendi nobis perferendis voluptatum architecto sequi, cupiditate harum maxime perspiciatis quod saepe. Facere velit accusantium hic aliquid animi? Neque voluptatem commodi beatae ut consequatur voluptate velit cum!"
        ],
        [
            "title" => "Losestreak menggunakan Mage By Rika",
            "slug" => "losestreak-menggunakan-mage",
            "author" => "Ebes Da Lopez",
            "content" => " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit praesentium, incidunt iusto asperiores excepturi sapiente similique perspiciatis quaerat. Aliquam obcaecati quos quis minima dolor, quod odio rerum commodi harum eum accusamus officia modi vitae ipsum in. Nulla voluptatibus explicabo dolores ex autem doloribus repellendus ab aliquid sed neque dolorum distinctio at, eveniet animi eligendi nobis perferendis voluptatum architecto sequi, cupiditate harum maxime perspiciatis quod saepe. Facere velit accusantium hic aliquid animi? Neque voluptatem commodi beatae ut consequatur voluptate velit cum!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
