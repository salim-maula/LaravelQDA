@extends('layouts.main')

@section('container')
<h1>Halaman Home</h1>
<hr>

<p><h5>Pada web ini saya membuat web artikel, yang mana artikelnya terdiri dari Web Programing, Web Design dan Personal</h5></p>
<p><h5>Data-data yang saya masukkan pada web ini merupakan data faker yg disediakan oleh laravel</h5></p>
<p><h5>Jadi ketika melakukan migrate sertakan flag seed untuk mengenerate datanya, <b> php artisan migrate:fresh --seed</b></h5></p>
<p><h5>Untuk melihat flow dan relasi databasenya silahkan lihat <a href="https://lucid.app/documents/view/c2db7448-7ce2-483f-8f06-816560c5d68a">Link ini</a></h5></p>

@endsection
