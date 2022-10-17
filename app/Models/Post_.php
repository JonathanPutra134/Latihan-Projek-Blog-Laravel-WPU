<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Sandhika Galih",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illo possimus, pariatur voluptatem modi perspiciatis soluta saepe porro libero quaerat reprehenderit asperiores maiores magnam eaque, excepturi harum voluptatum qui aliquam. Repudiandae numquam amet doloribus hic consequatur exercitationem eligendi rem delectus. Quidem rerum, ut cum provident cupiditate error ea minima earum eum fugit inventore voluptatum numquam veniam possimus quos. Nobis doloremque fuga doloribus quisquam soluta vero aliquam illo ipsa rem nam repudiandae, et ipsam voluptatem nisi eligendi cum placeat, id asperiores.",

    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Anjing",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illo possimus, pariatur voluptatem modi perspiciatis soluta saepe porro libero quaerat reprehenderit asperiores maiores magnam eaque, excepturi harum voluptatum qui aliquam. Repudiandae numquam amet doloribus hic consequatur exercitationem eligendi rem delectus. Quidem rerum, ut cum provident cupiditate error ea minima earum eum fugit inventore voluptatum numquam veniam possimus quos. Nobis doloremque fuga doloribus quisquam soluta vero aliquam illo ipsa rem nam repudiandae, et ipsam voluptatem nisi eligendi cum placeat, id asperiores.",

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
