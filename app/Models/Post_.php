<?php


//! file ini berisikan pembelajaran pada database,
//! migration dan eloquent dan tidak dihapus supaya nanti bisa dipelajari lagi


namespace App\Models;

//bagian ini untuk terhubung ke database, karna blm butuh bisa di coment terlebih dahulu
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Salim Maula",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptatum eos quibusdam blanditiis, eaque praesentium
        iure optio totam fugiat autem cumque quas sunt deserunt earum modi provident delectus repudiandae tempore magni porro
        quia iste! Enim optio distinctio sit aperiam modi id perspiciatis incidunt nihil sapiente labore est iste quaerat ab
        quisquam laudantium, nemo ipsam eum corrupti, delectus ullam. A et praesentium nam voluptate inventore rem eveniet nulla
        facere cumque tenetur. Soluta, voluptas corrupti optio suscipit explicabo tempora veritatis? Consequuntur, facere?
        "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hafiz Salim",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel quisquam nesciunt dolores corporis autem nam quos fugiat
        soluta quis neque beatae animi, ex quidem porro magni. At magnam nam sint cupiditate est ullam impedit dicta! Quod,
        temporibus est. Sequi deleniti iure rerum sed dolor, aliquam saepe minus iusto numquam sit molestias corporis
        repudiandae, fugiat exercitationem eos dignissimos quae laudantium iste! Quis obcaecati doloribus voluptatibus
        laboriosam rem esse cupiditate officiis hic ipsum distinctio a architecto aspernatur, ratione consequatur, debitis id
        alias enim neque! Animi voluptatem architecto soluta beatae quas! Maxime eum tempore voluptate ut ullam qui laudantium,
        officia culpa. Quos, in!"
        ],
    ];

    public static function all()
    {
        //karna dia property static maka kita perlu keyword self
        //kalau dia sebagai property biasa maka kita bisa menggunakan this

        //disini kita ubah self::$blog_posts dibungkus dengan collect,
        //agar kita bisa mendapatkan function bawaan dari laravelnya
        //untuk mengaksesnya kita bisa menggunakannya pada func find
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        //! Cara mengambil datanya iaitu ambil dlu semua datanya kemudian baru dilooping satu2
        //gantilah self menjadi static karna kita akan memanggil fungsi static
        $posts = static::all();

        //! karna kita sudah menggunakan collection maka kita tidak memerlukan perulangan ini
        //dan langusung mengubahnya pada bagian return menjadi sebuah function
        // $post = [];

        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
