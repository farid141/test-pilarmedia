@extends('layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <label class="" for="province">
                        Province
                    </label>
                    <br>
                    <select name="" id="province"></select>
                </div>

                <div class="col-4">
                    <label class="" for="regency">
                        Regency
                    </label>
                    <br>
                    <select name="" id="regency"></select>
                </div>

                <div class="col-4">
                    <label class="" for="district">
                        District
                    </label>
                    <br>
                    <select name="" id="district"></select>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">
            1. Apa itu dependent dropdown (pilihan terkait) dan kapan Anda akan menggunakannya dalam pengembangan web?
            berikan contoh implementasi dalam koding.
        </h5>
        <div class="card-body">
            <p>
                Pilihan terikat adalah sebuah input yang memiliki opsi pilihan berdasarkan sebuah kondisi tertentu. Seperti
                pada pemilihan
            </p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">
            2. Bagaimana Anda akan mengimplementasikan dependent dropdown dalam JavaScript atau kerangka kerja tertentu yang
            anda kuasai ?
        </h5>
        <div class="card-body">
            <p>Mendapatkan data dari select yang memiliki data parent dengan default null, kemudian meletakkan callback pada
                saat parent2 dipilh yang isinya mengkosongkan seluruh pilihan pada child, kemudian membuat pemanggilan data
                untuk next child.
            </p>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">
            3. Berikan contoh penggunaan Dependent Dropdown dalam bahasa pemrograman yang anda kuasai. (Negara, Propinsi,
            Kabupaten/Kota, Kecamatan, Kelurahan) berikan contoh implementasi dalam koding.
            refrensi OpenApi: https://github.com/emsifa/api-wilayah-indonesia.git
        </h5>
        <div class="card-body">
            <p>
            </p>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let province_id, regency_id;
        $.getJSON('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json', function(provinces) {
            // Get the select element
            const $selectProvince = $('#province');

            // Loop through the provinces and add them as options
            $selectProvince.append(new Option('Select Province', ''));
            $.each(provinces, function(index, province) {
                $selectProvince.append(new Option(province.name, province.id));
            });
        }).fail(function() {
            console.error('Error fetching provinces');
        });

        $('#province').change(function(e) {
            e.preventDefault();

            province_id = e.target.value;
            $('#regency').html('');
            $('#district').html('');

            $.getJSON(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${province_id}.json`, function(
                regencies) {
                // Get the select element
                const $selectregency = $('#regency');

                // Loop through the regencies and add them as options
                $selectregency.append(new Option('Select Regency', ''));
                $.each(regencies, function(index, regency) {
                    $selectregency.append(new Option(regency.name, regency.id));
                });
            }).fail(function() {
                console.error('Error fetching regencies');
            });
        });

        $('#regency').change(function(e) {
            e.preventDefault();
            $('#district').html('');
            regency_id = e.target.value;

            $.getJSON(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${regency_id}.json`, function(
                districts) {
                // Get the select element
                const $selectdistrict = $('#district');

                // Loop through the districts and add them as options
                $selectdistrict.append(new Option('Select District', ''));
                $.each(districts, function(index, district) {
                    $selectdistrict.append(new Option(district.name, district.id));
                });
            }).fail(function() {
                console.error('Error fetching districts');
            });
        });
    </script>
@endpush
