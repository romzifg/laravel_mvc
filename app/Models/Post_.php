<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Romzi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ex odit labore libero quidem soluta rerum autem optio facilis modi?, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ex odit labore libero quidem soluta rerum autem optio facilis modi?"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Ghozi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ex odit labore libero quidem soluta rerum autem optio facilis modi?, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ex odit labore libero quidem soluta rerum autem optio facilis modi?, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ex odit labore libero quidem soluta rerum autem optio facilis modi?, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ex odit labore libero quidem soluta rerum autem optio facilis modi?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ex odit labore libero quidem soluta rerum autem optio facilis modi?"
        ]
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }
 
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
