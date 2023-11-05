@extends('frontend.layouts.app')

@section('title')
    Pendaftaran
@endsection

@section('content')
    <section class="p-0 overflow-auto">
        <div class="flex flex-col rounded shadow-lg py-5 px-[0.5rem] m-[0.5rem] md:px-[7rem] md:m-[7rem]">
            <h1 class="text-center font-bold text-2xl should-hide">Pendaftaran Pasien</h1>
            <span class="short-divider should-hide"></span>
            <div id="complete-pasien-baru" class="container my-3 hidden">
                <div class="flex flex-col space-y-3 justify-center items-center">
                    <img src="{{ asset('images/checklist.png') }}" width="50" height="50" />
                    <h1 class="font-bold">Silahkan Lanjutkan Pendaftaran Melalui Customer Services di Whatsapp</h1>
                </div>
            </div>
            <div id="jenis-pasien" class="container should-hide">
                <div class="flex flex-col">
                    <p class="mt-10 mx-auto">
                        Pilih Jenis Pasien
                    </p>
                    <div class="flex-shrink-0 flex flex-column flex-md-row items-center justify-center mt-5">
                        <button id="btn-pasien-lama"
                            class="{{ $primary_btn }} md:hover:scale-125 ease-in duration-300 md:hover:mr-10 w-40 md:w-52 mr-0 sm:mr-0 md:mr-3 lg:mr-3">
                            Pasien Lama
                        </button>
                        <button id="btn-pasien-baru"
                            class="{{ $primary_btn }} md:hover:scale-125 ease-in duration-300 md:hover:ml-10 w-40 md:w-52 text-center ml-0 sm:ml-0 md:ml-3 lg:ml-3 mt-[20px] md:mt-0">
                            Pasien Baru
                        </button>
                    </div>
                </div>
            </div>
            <div id="jenis-formulir" class="container should-hide hidden">
                <div class="flex flex-col">
                    <p class="mt-10 mx-auto">
                        Pilih Jenis Pendaftaran
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 mt-[20px]">
                        <div class="mr-0 md:mx-5 my-5 md:my-0">
                            <input class="hidden" id="vaksin" type="radio" name="formulir" value="vaksin" />
                            <label for="vaksin" class="flex flex-col rounded shadow-md cursor-pointer">
                                <img class="w-full object-fill h-4/6" src="{{ asset('images/vaccine.jpeg') }}"
                                    alt="Vaccine">
                                <div class="flex flex-col my-[30px] px-2">
                                    <h3 class="text-center font-bold">Pendaftaran Formulir Vaksin</h3>
                                    <span class="short-divider"></span>
                                    <p>
                                        Melakukan pengisian formulir untuk vaksin dan pemilihan tanggal
                                    </p>
                                </div>
                            </label>
                        </div>
                        <div class="mr-0 md:mx-5 my-5 md:my-0">
                            <input class="hidden" id="bkia" type="radio" name="formulir" value="bkia" />
                            <label for="bkia" class="flex flex-col rounded shadow-md cursor-pointer">
                                <img class="w-full object-fill h-4/6" src="{{ asset('images/vaccine.jpeg') }}"
                                    alt="Vaccine">
                                <div class="flex flex-col my-[30px] px-2">
                                    <h3 class="font-bold text-center">Pendaftaran Formulir BKIA</h3>
                                    <span class="short-divider"></span>
                                    <p>
                                        Melakukan pengisian formulir untuk BKIA dan pemilihan tanggal
                                    </p>
                                </div>
                            </label>
                        </div>
                        <div class="mr-0 md:mx-5 my-5 md:my-0">
                            <input class="hidden" id="pasien" type="radio" name="formulir" value="pasien" />
                            <label for="pasien" class="flex flex-col rounded shadow-md cursor-pointer">
                                <img class="w-full object-fill h-4/6" src="{{ asset('images/vaccine.jpeg') }}"
                                    alt="Vaccine">
                                <div class="flex flex-col my-[30px] px-2">
                                    <h3 class="font-bold text-center">Pendaftaran Formulir Pasien</h3>
                                    <span class="short-divider"></span>
                                    <p>
                                        Melakukan pengisian formulir dan pemilihan tanggal
                                    </p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="flex-shrink-0 flex  items-center justify-center mt-5">
                        <button class="{{ $primary_btn }} w-40 mr-3">Kembali</button>
                        <button class="{{ $primary_btn }} w-40 ml-3">Lanjutkan</button>
                    </div>
                </div>
            </div>
            <div id="formulir-vaksin" class="container should-hide mt-[3rem] hidden">
                <div class="flex flex-col p-[0] md:p-5">
                    <h3 class="mt-10 mx-auto font-bold text-2xl text-center">
                        Formulir Pendaftaran Vaksin
                    </h3>
                    <span class="short-divider"></span>
                    <form class="w-full mt-[3rem]">
                        <div class="flex flex-wrap mb-1">
                            <div class="w-full md:w-1/2 px-[0] md:px-3 mb-1 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    for="nama-lengkap-anak">
                                    Nama Lengkap Anak
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white text-gray-700 border rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                                    id="nama-lengkap-anak" name="nama-lengkap-anak" type="text">
                                <p id="error-nama-lengkap" class="text-red-500 text-xs italic hidden">
                                    Please fill out this field.
                                </p>
                            </div>
                            <div class="w-full md:w-1/2 md:px-3 mb-1 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    for="ttl-anak">
                                    Tempat / Tanggal Lahir
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                                    id="ttl-anak" name="ttl-anak" type="text">
                                <p id="error-nama-lengkap" class="text-red-500 text-xs italic hidden">
                                    Please fill out this field.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-1">
                            <div class="w-full md:px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nik-anak">
                                    NIK Anak
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                                    id="nik-anak" type="text">
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-1">
                            <div class="w-full md:px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama-orang-tua">
                                    Masukkan Nama Orang Tua
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                                    id="nama-orang-tua" type="text">
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-1">
                            <div class="w-full md:px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="alamat">
                                    Alamat Lengkap
                                </label>
                                <textarea rows="5" id="alamat"
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                                    placeholder="Masukkan Alamat Lengkap">

                                </textarea>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-1">
                            <div class="w-full md:px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="vaksin">
                                    Vaksin
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                                    id="vaksin" type="text">
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-1">
                            <div class="w-full md:px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="schedule-vaksin">
                                    Hari / Tanggal Rencana Vaksin
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                                    id="schedule-vaksin" type="text">
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-1">
                            <div class="w-full md:px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="no-hp">
                                    No. Handphone
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                                    id="no-hp" type="text">
                            </div>
                        </div>
                        <div class="flex-shrink-0 flex  items-center justify-center mt-5">
                            <button class="{{ $primary_btn }} w-40 mr-3">Kembali</button>
                            <button class="{{ $primary_btn }} w-40 ml-3">Registrasi</button>
                        </div>
                    </form>
                </div>

            </div>
            <div id="formulir-bkia" class="container should-hide hidden">

            </div>
            <div id="formulir-pasien" class="container should-hide hidden">

            </div>
        </div>
    </section>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function() {
            var radioValue = $("input[name='gender']:checked").val();
            console.log('form', radioValue)
        });

        $("#btn-pasien-lama").click(() => {
            $("#jenis-pasien").hide()
            $("#jenis-formulir").show()
        })

        $("#btn-pasien-baru").click(() => {
            $(".should-hide").hide()
            $("#complete-pasien-baru").show()
        })
    </script>
@endpush
