<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * disini kita akana memeberitahu field mana aja yang boleh diisi,
     *kalau tidak maka field tersebut tidak bisa diisi dengan method create
     *yang nantinya akan diisi otomatis diisi oleh dengan apa yang kita buat didalam schema
     */

    //!nantinya kita langsung bisa memasukkan kode dibawah kedalam tinker

    //  Post::create(
    //     [
    //     'title' => 'Judul Ke Empat',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores blanditiis iusto, officiis deserunt dolorum vel nihil
    //     reprehenderit',
    //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores blanditiis iusto, officiis deserunt dolorum vel
    //         nihil
    //         reprehenderit, alias similique libero expedita sunt amet laudantium fugiat ipsa dolores, saepe enim quidem aut!
    //         Quibusdam eligendi</p>
    //     <p> sunt culpa nam minima assumenda inventore similique soluta odio! Earum dolor cum itaque tenetur quam
    //         placeat, tempore perferendis dolorum minus facilis quidem consequuntur error aliquam obcaecati a hic in voluptas
    //         facere
    //         numquam quod repellendus, sit vero, nobis nulla! Voluptatibus, dolorem ipsum? Ratione dicta eaque ad fugiat possimus
    //         et
    //         debitis dolorum unde quam quas </p>
    //     <p> asperiores reiciendis quod alias deserunt aliquid earum quia explicabo odit aperiam
    //         architecto laboriosam, laudantium consectetur ea suscipit? Veritatis facere commodi nostrum reiciendis quam, ad,
    //         voluptatem veniam incidunt, earum neque deleniti voluptas ipsum fugiat? Rem distinctio, quos ipsa ipsam tempore
    //         labore
    //         sint error blanditiis inventore saepe cum doloribus, cupiditate optio eaque dignissimos modi nemo sed in aut
    //         recusandae
    //         praesentium suscipit? Excepturi, tempore iusto? Animi, minima.</p>
    //     '
    //     ]
    //     )

    //? lawan dari fillable adalah guarded
    protected $guarded = [
        'id'
    ];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //    return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            //use disini untuk mengakses variabel catagory diatas
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // $query->when(
        //     $filters['author'] ?? false,
        //     fn ($query, $author) =>
        //     $query->whereHas(
        //         'author',
        //         fn ($query) =>
        //         $query->where('username', $author)
        //     )
        // );
    }

    // disini kita akan membuat relasi antara post dengan category

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
