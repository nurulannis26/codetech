<?php

namespace App\Models;


class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul_post_pertama",
            "author" => "Nurul Annisa",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ullam quia accusantium perferendis reprehenderit! Aperiam, necessitatibus dolore rem voluptatem minima temporibus nemo ad nam magni odio ea enim delectus fugit cum. Voluptates consequuntur, ex iste ab suscipit repellendus nostrum culpa nobis non assumenda facere praesentium, iure magnam atque aperiam, sequi magni quod sit exercitationem? Sint culpa nam alias qui iste at totam reprehenderit non ducimus vero! Tempora sint nemo animi quo sed, cumque explicabo, nam reprehenderit rerum illo quidem eveniet!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul_post_kedua",
            "author" => "Zaroh Khoerunisa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quas ea eveniet, itaque alias eaque sapiente, enim, odit ullam veniam odio perspiciatis neque asperiores. Voluptatem nobis aliquid ea, dignissimos similique laborum autem quisquam, ullam, maxime reprehenderit soluta ex! Quasi ad illum nobis aut in, officia maiores error temporibus explicabo saepe est deleniti pariatur quaerat assumenda! Corrupti recusandae in eveniet sint nobis. Unde quidem quae ea itaque praesentium explicabo quasi eligendi temporibus nemo libero, aperiam necessitatibus facere odio! Labore similique, aliquam incidunt nisi ullam ipsam obcaecati ad error quis inventore rem est dicta dolore debitis dolorem? Magni asperiores hic enim esse."
        ]
    ];

    //method all()
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    //method find()
    public static function find($slug)
    {
        $posts = self::all();
        return $posts->firstWhere('slug', $slug);
    }
}
