@extends('layout')
@section('content')
    <div class="card">
        <h5 class="card-header">
            1. Apa itu unit testing dan mengapa penting dalam pengembangan perangkat lunak?
        </h5>
        <div class="card-body">
            <p>Dalam pengembangan perangkat lunak, testing adalah pengujian sebuah code oleh programmer untuk meminimalisir
                terjadinya bug. Terdapat beberapa jenis testing yang saya ketahui
            <ul>
                <li>Feature Test (untuk sebagian kecil code, bahkan 1 statement saja)</li>
                <li>Integration Test (Keseluruhan yang sudah terintegrasi dengan kode2 lainnya)</li>
            </ul>
            </p>
            <p>
                Tentunya dalam penulisan code kita akan menguji sebuah statement baik itu pemanggilan fungsi, class maupun
                operasi sederhana. Karena terkadang ada hal seperti versi sistem yang berbeda tidak sesuai dengan code kita.
            </p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">
            2. Bagaimana Anda akan melakukan unit testing dalam bahasa pemrograman yang Anda kuasai? Berikan contoh
            sederhana.
        </h5>
        <div class="card-body">
            <p>
                Dalam pengalaman saya mengembangkan laravel, saya sangat jarang menggunakan fitur testing bawaan laravel.
                Mungkin hanya sekedar menggunakan tinker pada terminal. Hal ini dikarenakan setup dan penggunaan yang lebih
                cepat daripada unit test dari Laravel yang perlu membuat file sedemikian rupa agar bisa berjalan.
            </p>
            <p>
                Tetapi di sisi lain saya juga mengexplor fitur tersebut hanya sebatas prove of concept biasa. Untuk
                melakukan testing di Laravel, kita hanya perlu menjalankan <span class="text-danger">php artisan test</span>
                Perintah tersebut akan menjalankan file ExampleTest.php pada folder Feature dan Unit.
            </p>
        </div>
    </div>
@endsection
