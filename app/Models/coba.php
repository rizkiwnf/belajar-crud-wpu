<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }
class Post
{
    private static $blog_post = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizki Wahyu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet neque commodi laboriosam tenetur saepe obcaecati a, reiciendis perspiciatis. Itaque exercitationem beatae quasi quis, nam assumenda omnis earum tempore non reiciendis facere, qui laborum. Debitis laudantium rerum repellat odio tempora ducimus doloribus maiores recusandae enim saepe harum tempore architecto, quo alias consectetur quos maxime amet accusamus non ut deleniti nihil in iste. Accusantium fugiat porro quae dolore quos sunt ullam aut, error, totam animi dolorem, saepe facere! Fuga magnam pariatur culpa?"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Shaffa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus praesentium ipsa quo minima iste eum inventore, temporibus quas veniam qui adipisci culpa aliquam quam ratione earum commodi aspernatur, eaque corporis, incidunt ipsum! Odit, nobis blanditiis illum facere modi praesentium. Totam velit vitae excepturi earum maxime, ad rem nam? Repellat eos labore doloribus accusamus aliquam! Aut dignissimos aperiam ex quo ipsam, molestias officiis fuga doloremque accusantium tempore vitae facilis pariatur voluptas asperiores! Reiciendis qui ipsa ea voluptatem ipsam iusto odio ratione pariatur nemo. Iusto quas numquam dicta in aspernatur blanditiis possimus, ipsum mollitia at quis voluptatem tempore enim saepe harum eum."
        ],

        [
            "tittle" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Cantika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem incidunt esse neque dicta deleniti sequi repudiandae, rem perspiciatis reiciendis, et quae, dignissimos ullam optio aliquid aperiam eum obcaecati maxime quisquam fugit! Numquam, quam. Quidem pariatur animi soluta eum maiores, quasi facere nam, voluptas illum vitae ea quod ad omnis? Possimus assumenda saepe dolorum minus dolorem. Aliquid repellat voluptatibus ad dolore similique obcaecati sint animi commodi vel nulla. Autem, aspernatur saepe illo aperiam soluta molestiae eaque non nobis beatae cum distinctio magni accusantium eligendi incidunt sapiente nesciunt consequatur iste ipsum debitis dolore ut id repellendus tempora? Ipsum culpa exercitationem ipsam nam earum perspiciatis quaerat aut consequatur vel voluptatem minus veritatis, obcaecati ipsa sequi aliquid cupiditate ab sit est possimus. Eveniet sequi, iusto ab neque enim saepe voluptates accusamus eaque minima. Odit tempore fuga hic, ex omnis tempora provident repudiandae eos cumque illo, adipisci, eum praesentium dolor non a asperiores esse."
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
