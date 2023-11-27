@extends('backend.layouts.app')

@section('title')
    {{ 'Tambah Pasien' }}
@endsection

@section('content')
    <div class="flex flex-col justify-center">
        <x-section-header title="Tamabah Pasien BKIA" subtitle="Tambah Pasien BKIA" />
        <div class="flex flex-row items-start">
            <div class="flex flex-1 flex-col my-10 shadow-lg rounded px-6 py-5 bg-white w-full h-full">
                <div class="flex justify-center">
                    <img src="{{ asset('images/rsia.png') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia">
                </div>
                <form action="{{ route('backend.pasien.bkia.store') }}" method="POST" class="w-full mt-[3rem]"
                    id="form-pasien">
                    @csrf
                    <div class="flex mb-6">
                        <div class="w-1/2 px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama_lengkap_anak">
                                Nama Lengkap Anak <span class="dot-required">*</span>
                            </label>
                            <input class="main-input" id="nama_lengkap_anak" name="nama_lengkap_anak"
                                type="text"required>
                        </div>
                        <div class="w-1/2 px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="tanggal_lahir">
                                Tempat / Tanggal Lahir <span class="dot-required">*</span>
                            </label>
                            <div class="flex flex-row items-center">
                                <input type="text" name="tempat_lahir" class="main-input-row1" required />
                                <span class="mx-2">/</span>
                                <div class="flex-1 relative" data-te-datepicker-init>
                                    <input class="main-input-row2" id="tanggal_lahir" name="tanggal_lahir" type="text"
                                        required>
                                    <div class="absolute top-0 left-0 right-0 bottom-0" data-te-datepicker-toggle-ref
                                        data-te-datepicker-toggle-button-ref></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex mb-6">
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nik_anak">
                                NIK Anak
                            </label>
                            <input class="main-input" id="nik_anak" name="nik_anak" type="text">
                        </div>
                    </div>
                    <div class="flex mb-6">
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama_orang_tua">
                                Nama Orang Tua
                            </label>
                            <input class="main-input" id="nama_orang_tua" name="nama_orang_tua" type="text">
                        </div>
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="no_hp">
                                No. Handphone
                            </label>
                            <input class="main-input" id="no_hp" name="no_hp" type="text">
                        </div>
                    </div>
                    <div class="flex mb-6">
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="alamat">
                                Alamat <span class="dot-required">*</span>
                            </label>
                            <textarea rows="5" id="alamat" name="alamat" class="main-input" required></textarea>
                        </div>
                    </div>
                    <div class="flex flex-wrap mb-6">
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="schedule">
                                Hari / Tanggal Periksa
                            </label>
                            <div class="flex flex-row items-center justify-center">
                                <input id="hari" name="hari" type="text" class="main-input-row1" />
                                <span class="mx-2">/</span>
                                <div class="flex-1 relative" data-te-datepicker-init>
                                    <input class="main-input-row2" id="schedule" name="schedule" type="text">
                                    <div class="absolute top-0 left-0 right-0 bottom-0 z-30" data-te-datepicker-toggle-ref
                                        data-te-datepicker-toggle-button-ref></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 flex  items-center justify-center mt-5">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(() => {

        })

        function debugInit() {

        }
    </script>
@endpush
