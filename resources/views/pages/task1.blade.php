@extends('layout')
@section('content')
    <div class="card">
        <h5 class="card-header">
            1. Apa itu OOP (Pemrograman Berorientasi Objek) dan mengapa itu penting dalam pengembangan perangkat lunak?
        </h5>
        <div class="card-body">
            <span class="text-danger">php artisan app:task1bag1</span>
            <p>
                Object-Oriented Programming (OOP) adalah paradigma pemrograman yang berfokus pada konsep objek. Objek adalah
                entitas yang memiliki data (disebut atribut) dan perilaku (disebut metode). Setiap objek dibentuk dari
                sebuah blueprint yang bernama class yang akan menentukan bagaimana sebuah objek bekerja
            </p>
            <p>
                Mengapa OOP Penting?
            </p>

            <ul>
                <li>
                    Organisasi dan Pemeliharaan Kode: OOP membantu mengorganisir kode dengan lebih baik, memisahkan fungsi
                    dalam
                    unit logis (kelas), dan mempermudah pemeliharaan kode.
                </li>
                <li>
                    Reusability (Daur Ulang Kode): Dengan fitur seperti inheritance, kita bisa membuat kelas baru yang
                    mewarisi
                    fitur dari kelas yang ada.
                </li>
                <li>
                    Modularity (Modularitas): Setiap objek bertanggung jawab atas perilakunya sendiri, membuat pengembangan
                    lebih modular.
                </li>
                <li>
                    Scalability (Skalabilitas): Dengan OOP, program besar dapat dengan mudah di-skala menggunakan objek dan
                    hubungan antar objek.
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">
            2. Jelaskan konsep utama dalam OOP seperti encapsulation, inheritance, dan polymorphism.
        </h5>
        <div class="card-body">
            <span class="text-danger">php artisan app:task1bag2</span>
            <P>Encapsulation (Enkapsulasi):
                Ini adalah proses menyembunyikan detail internal dari sebuah objek dan hanya menampilkan bagian yang
                diperlukan ke pengguna. Hal ini dilakukan dengan mengontrol akses ke atribut dan metode melalui access
                modifiers seperti private, protected, dan public. Hal ini bisa diamati pada pengaksesan atribut nama dan
                umur tidak bisa dilakkukan secara langsung
            </P>
            <p>
                Inheritance (Pewarisan):
                Inheritance memungkinkan sebuah kelas mewarisi sifat dan metode dari kelas lain. Ini membantu mengurangi
                pengulangan kode dan mempromosikan reusability. Hal ini dapat diamati pada objek student dan teacher dapat
                mewarisi method getName() dan getAge() dari class Person
            </p>
            <p>
                Polymorphism (Polimorfisme):
                Polymorphism memungkinkan satu antarmuka digunakan untuk banyak implementasi. Dengan kata lain, fungsi yang
                sama dapat berperilaku berbeda tergantung pada objek yang memanggilnya. Hal ini dapat diamati pada class
                Student dan Teacher memiliki fungsi info() yang berperilaku berbeda
            </p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">
            3. Berikan contoh penggunaan OOP encapsulation, inheritance, polimorphism juga menerapkan SOLID principles dalam
            bahasa pemrograman yang Anda kuasai
        </h5>
        <div class="card-body">
            <span class="text-danger">php artisan app:task1bag3</span>
            <ul>
                <li>Single Responsibility Principle: Class Student dan Teacher hanya memiliki satu tanggung jawab, yaitu
                    menangani informasi spesifik
                    untuk masing-masing.
                </li>
                <li>
                    Open/Closed Principle: Class Person dapat diperluas dengan Student dan Teacher tanpa mengubah kode yang
                    ada di Person.
                </li>
                <li>LSP: Objek Student dan Teacher dapat digunakan di tempat yang mengharapkan Person (contohnya di
                    PersonService).</li>
                <li>
                    ISP: Class Person mengimplementasikan interface PersonInterface, yang hanya berisi method-method yang
                    diperlukan.
                </li>
                <li>
                    DIP: PersonService bergantung pada PersonInterface dan bukan pada class konkret Student atau Teacher,
                    sehingga mudah untuk mengubah atau memperluas implementasi.
                </li>
            </ul>
        </div>
    </div>
@endsection
