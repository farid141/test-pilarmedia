@extends('layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="" class="row">
                <div class="col-10">
                    <input type="text" class="form-control flatpickr-range mb-3 flatpickr-input active"
                        placeholder="Select date.." readonly="readonly" name="date_range" value="{{ request()->date_range }}">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </form>
            <canvas id="salesChart"></canvas>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">
            1. Bagaimana Anda akan mengoptimalkan query SQL untuk mengambil data dari tabel yang memiliki jutaan baris?
            berikan contoh implementasi dalam koding. Seed 2juta record dan running
        </h5>
        <div class="card-body">
            <span class="text-danger">php artisan app:task1bag1</span>
            <p>
                Menggunakan eager loading (meload relasi bersamaan dengan query utama)
            </p>
            <p>Hasil pembuktian load 100 data tanpa dan dengan eager loading
            <ul>
                <li>
                    Execution time with eager load: 0.028910160064697 seconds
                </li>
                <li>
                    Execution time without eager load: 0.10662984848022 seconds
                </li>
            </ul>
            </p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">
            2. Jelaskan apa yang dimaksud dengan indeks dalam basis data dan bagaimana penggunaannya dapat meningkatkan
            performa query.
        </h5>
        <div class="card-body">
            <p>Jalankan command <span class="text-danger">php artisan app:task3bag2</span> tanpa index
                kemudian pindah file migrationuntuk index dari folder seeder ke folder migration dan jalankan
                <span class="text-danger">php artisan migrate</span>. Setelah itu coba jalankan
                <span class="text-danger">php artisan app:task3bag2</span>
            </p>

            <p>
                Indeks dalam basis data adalah sebuah lookup spesial yang digunakan oleh mesin pencarian database untuk
                mempercepat pengambilan data. Contohnya adalah pada saat kita sering menggunakan pencarian where dengan
                kolom tanggal, kita dapat menggunakannya.
            </p>
            <p>
                Namun kekurangan dari index adalah dapat memperlambat operasi tulis pada tabel tersebut seperti (CREATE,
                UPDATE, DELETE)
            </p>
            <p>
                Namun dari hasil pengujian saya, waktu yang diperlukan ternyata lebih panjang
                pada saat menggunakan index daripada tidak
            <ul>
                <li>
                    Tanpa index
                    <br>
                    Execution time (indexing prove): 0.48009991645813 seconds
                </li>
                <li>
                    Menggunakan index
                    <br>
                    Execution time (indexing prove): 6.0909309387207 seconds
                </li>
            </ul>
            </p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">
            3. Berikan Contoh Bagaimana Anda akan membuat dashboard grafik interaktif dari data yang diambil dari basis data
            (misal: grafik penjualan perbulan/pertahun/persales dengan jumlah data 2juta record) ?berikan contoh
            implementasi dalam koding.
        </h5>
        <div class="card-body">
            <p>
                Diatas
            </p>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        console.log(@json($salesPerMonth->pluck('month')));
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($salesPerMonth->pluck('month')),
                datasets: [{
                    label: 'Sales per Month',
                    data: @json($salesPerMonth->pluck('total')),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        $('.flatpickr-range').flatpickr({
            mode: "range",
            maxDate: "today",
            dateFormat: "d-m-Y",
        })
    </script>
@endpush
