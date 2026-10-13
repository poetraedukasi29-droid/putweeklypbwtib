<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Berita Mahasiswa TI",
            "slug" => "mahasiswa-ti",
            "penulis" => "Admin",
            "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident incidunt assumenda atque nisi animi eius iusto et odio dicta, necessitatibus consequatur? Consequatur a amet dolor quod necessitatibus. Autem veritatis voluptatum, reiciendis veniam perferendis voluptas dignissimos praesentium et sequi nam, quo, perspiciatis dolores voluptates a quibusdam repellendus possimus facere ratione nisi quas iusto. Aliquid maxime asperiores magnam quo porro maiores sunt corrupti laborum quasi tempore architecto atque, voluptatum recusandae, officiis accusantium, velit quod. A ullam cum, laudantium maxime perferendis nulla fuga sed ab quos voluptate unde ut ipsam corporis atque iure voluptatem exercitationem ipsa quasi mollitia numquam quas! Nobis, dolorem"
        ],
        [
            "judul" => "Dosen TI",
            "slug" => "dosen-ti",
            "penulis" => "Udin S.kom",
            "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident incidunt assumenda atque nisi animi eius iusto et odio dicta, necessitatibus consequatur? Consequatur a amet dolor quod necessitatibus. Autem veritatis voluptatum, reiciendis veniam perferendis voluptas dignissimos praesentium et sequi nam, quo, perspiciatis dolores voluptates a quibusdam repellendus possimus facere ratione nisi quas iusto. Aliquid maxime asperiores magnam quo porro maiores sunt corrupti laborum quasi tempore architecto atque, voluptatum recusandae, officiis accusantium, velit quod. A ullam cum, laudantium maxime perferendis nulla fuga sed ab quos voluptate unde ut ipsam corporis atque iure voluptatem exercitationem ipsa quasi mollitia numquam quas! Nobis, dolorem"
        ]
    ];

    public static function ambilberita()
    {
        return self::$data_berita;
    }
    public static function getBerita($slug)
    {
        $beritas = self::$data_berita;

        $berita = [];
        foreach ($beritas as $b) {
            if ($b["slug"] === $slug) {
                $berita = $b;
            }
        }

        return $berita;
    }

    public static function getTitle($slug)
    {
        $berita = self::getBerita($slug);

        return $berita["judul"];
    }
}
