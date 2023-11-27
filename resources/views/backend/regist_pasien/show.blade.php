@extends('backend.layouts.app')

@section('title')
    {{ 'Detail Registrasi' }}
@endsection

@section('content')
    <div class="flex flex-col justify-center">
        <x-section-header title="Detail Registrasi Pasien" subtitle="Detail Pasien Registrasi" />
        <div class="flex flex-row items-start">
            <div class="flex flex-1 flex-col my-10 shadow-lg rounded px-6 py-5 bg-white w-full h-full">
                <div class="flex justify-center">
                    <img src="{{ asset('images/rsia.png') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia">
                </div>
                <form action="{{ route('backend.pasien.p.store') }}" method="POST" class="w-full mt-[3rem]"
                    id="form-pasien">
                    @csrf
                    <div class="flex mb-6">
                        <div class="w-1/2 px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama_lengkap">
                                Nama Lengkap <span class="dot-required">*</span>
                            </label>
                            <input class="main-input" id="nama_lengkap" name="nama_lengkap" type="text" value="{{ $pasien->nama_lengkap }}" required>
                        </div>
                        <div class="w-1/2 px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="tanggal_lahir">
                                Tempat / Tanggal Lahir <span class="dot-required">*</span>
                            </label>
                            <div class="flex flex-row items-center">
                                <input type="text" name="tempat_lahir" class="main-input-row1" value="{{ $pasien->tempatLahir }}" required />
                                <span class="mx-2">/</span>
                                <div class="flex-1 relative" data-te-datepicker-init>
                                    <input class="main-input-row2" id="tanggal_lahir" name="tanggal_lahir" type="text" value="{{ $pasien->tglLahir }}"
                                        required>
                                    <div class="absolute top-0 left-0 right-0 bottom-0" data-te-datepicker-toggle-ref
                                        data-te-datepicker-toggle-button-ref></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex mb-6">
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nik">
                                NIK KTP
                            </label>
                            <input class="main-input" id="nik" name="nik" type="text" value="{{ $pasien->nik }}">
                        </div>
                    </div>
                    <div class="flex mb-6">
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="jenis_kelamin">
                                Jenis Kelamin
                            </label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="main-input">
                                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="agama">
                                Agama
                            </label>
                            <select id="agama" name="agama" class="main-input">
                                <option value="" selected disabled>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Kristen Katolik">Kristen Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex mb-6">
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="pekerjaan">
                                Pekerjaan
                            </label>
                            <input class="main-input" id="pekerjaan" name="pekerjaan" type="text" value="{{ $pasien->pekerjaan }}">
                        </div>
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="pendidikan_terakhir">
                                Pendidikan Terakhir
                            </label>
                            <input class="main-input" id="pendidikan_terakhir" name="pendidikan_terakhir" type="text" value="{{ $pasien->pendidikan_terakhir }}">
                        </div>
                    </div>
                    <div class="flex mb-6">
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="no_hp">
                                No. Handphone
                            </label>
                            <input class="main-input" id="no_hp" name="no_hp" type="text" value="{{ $pasien->no_hp }}">
                        </div>
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="no_rm">
                                No. RM
                            </label>
                            <input class="main-input" id="no_rm" name="no_rm" type="text" value="{{ $pasien->no_rm }}">
                        </div>
                    </div>
                    <div class="flex mb-6">
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="alamat">
                                Alamat Lengkap <span class="dot-required">*</span>
                            </label>
                            <textarea rows="5" id="alamat" name="alamat" class="main-input" required>{{ $pasien->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="flex  mb-6">
                        <div class="w-full px-3">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="status_kawin">
                                Menikah / Belum Menikah
                            </label>
                            <select id="status_kawin" name="status_kawin" class="main-input">
                                <option value="" selected disabled>Pilih Status Kawin</option>
                                <option value="kawin">Kawin</option>
                                <option value="belum_kawin">Belum Kawin</option>
                            </select>
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
                                    <input class="main-input-row2" id="schedule" name="schedule" type="text" value="{{ $pasien->schedule }}">
                                    <div class="absolute top-0 left-0 right-0 bottom-0 z-30" data-te-datepicker-toggle-ref
                                        data-te-datepicker-toggle-button-ref></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mb-6 mt-5">
                        <h2 class="font-bold text-2xl mb-4">Data Pasangan</h2>
                        <div class="flex flex-col">
                            <div class="flex mb-6">
                                <div class="w-full px-3">
                                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama_suami">
                                        Nama Suami
                                    </label>
                                    <input class="main-input" id="nama_suami" name="nama_suami" type="text" value="{{ $pasien->nama_suami }}">
                                </div>
                                <div class="w-full px-3">
                                    <label class="block tracking-wide text-gray-700  font-bold mb-2"
                                        for="pekerjaan_suami">
                                        Pekerjaan Suami
                                    </label>
                                    <input class="main-input" id="pekerjaan_suami" name="pekerjaan_suami"
                                        type="text" value="{{ $pasien->pekerjaan_suami }}">
                                </div>
                            </div>
                            <div class="flex mb-6">
                                <div class="w-full px-3">
                                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nik_suami">
                                        NIK KTP Suami
                                    </label>
                                    <input class="main-input" id="nik_suami" name="nik_suami" type="text" value="{{ $pasien->nik_suami }}">
                                </div>
                                <div class="w-full px-3">
                                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="no_hp_suami">
                                        No. Handphone Suami
                                    </label>
                                    <input class="main-input" id="no_hp_suami" name="no_hp_suami" type="text" value="{{ $pasien->no_hp_suami }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="flex-shrink-0 flex  items-center justify-center mt-5">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div> --}}
                </form>
            </div>
            <div class="flex flex-col my-10 shadow-lg rounded px-6 py-5 bg-white ms-5 h-auto space-y-5">
                <div class="flex items-center">
                    <i class="fa-regular fa-calendar fa-lg mr-3"></i>
                    <p class="font-bold">
                        Tanggal Registrasi {{ $pasien->tglRegist }}
                    </p>
                </div>
                <div class="flex items-center">
                    <a class="font-bold hover:text-primary" href="javascript:void(0)" id="wa-pasien">
                        <i class="fa-brands fa-whatsapp fa-lg mr-2" style="color: #18d82e;"></i>
                        <span>Hubungi Pasien</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(() => {
            $("#form-pasien").find('input, select, textarea').attr("disabled", true);


            $("#agama").val(`{{ $pasien->agama }}`)
            $("#jenis_kelamin").val(`{{ $pasien->jenis_kelamin }}`)
            $("#status_kawin").val(`{{ $pasien->status_kawin }}`)
        })

        $("#wa-pasien").click(() => {
            wa('{{ $pasien->no_hp }}', 'Selamat pagi / siang / malam')
        })
    </script>
@endpush
