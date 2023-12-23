@extends('frontend.layouts.app')

@section('title')
    Pendaftaran
@endsection

@section('content')
    <section class="p-0 overflow-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="hidden" id="formulir-type" value="{{ Session::has('formulir') ? session('formulir') : '' }}">
        <div class="flex flex-col rounded shadow-lg py-5 px-[0.5rem] m-[0.5rem] lg:px-[7rem] md:m-[7rem]">
            @if (Session::has('success'))
                <div>
                    <h1 class="text-center font-bold text-2xl">Pendaftaran Formulir Berhasil</h1>
                    <span class="short-divider"></span>
                    <div class="container my-3">
                        <div class="flex flex-col space-y-3 justify-center items-center text-center">
                            <img src="{{ asset('images/checklist.png') }}" width="50" height="50" />
                            <h1 class="font-bold">Silahkan Lanjutkan Pendaftaran Melalui Customer Services di Whatsapp</h1>
                        </div>
                    </div>
                </div>
            @else
                <div>
                    <h1 class="text-center font-bold text-2xl should-hide">Pendaftaran Pasien</h1>
                    <span class="short-divider should-hide"></span>
                    <div id="complete-pasien-baru" class="container my-3 hidden">
                        <div class="flex flex-col space-y-3 justify-center items-center text-center">
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
                                    class="btn btn-primary md:hover:scale-125 ease-in duration-300 md:hover:mr-10 w-40 md:w-52 mr-0 sm:mr-0 md:mr-3 lg:mr-3">
                                    Pasien Lama
                                </button>
                                <button id="btn-pasien-baru"
                                    class="btn btn-primary md:hover:scale-125 ease-in duration-300 md:hover:ml-10 w-40 md:w-52 text-center ml-0 sm:ml-0 md:ml-3 lg:ml-3 mt-[20px] md:mt-0">
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
                            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 mt-[20px]">
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
                                <button id="btn-back-formulir" class="btn btn-primary w-40 mr-3">Kembali</button>
                                <button id="btn-next-formulir" class="btn btn-primary w-40 ml-3">Lanjutkan</button>
                            </div>
                        </div>
                    </div>
                    @include('frontend.includes.formulir_vaksin')
                    @include('frontend.includes.formulir_bkia')
                    @include('frontend.includes.formulir_pasien')
                </div>
            @endif
        </div>

    </section>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function() {
            // determine loaded session when error in form appears
            const formulir = $("#formulir-type").val()
            if (formulir) {
                showForm(formulir)
            }
        });

        $("#btn-pasien-lama").click(() => {
            $("#jenis-pasien").hide()
            $("#jenis-formulir").show()
        })

        $("#btn-pasien-baru").click(() => {
            $(".should-hide").hide()
            $("#complete-pasien-baru").show()

            wa('6285329473535', 'Selamat pagi / siang / malam Saya ingin mendaftar sebagai pasien baru')
        })

        $("#btn-back-formulir").click(() => {
            $("#jenis-pasien").show()
            $("#jenis-formulir").hide()

            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        })

        $("#btn-next-formulir").click(() => {
            showForm($("input[name='formulir']:checked").val())
        })

        $(".btn-back-formulir").click(() => {
            $("#jenis-formulir").show()

            $("#formulir-vaksin").hide()
            $("#formulir-bkia").hide()
            $("#formulir-pasien").hide()

            $("html, body").animate({
                scrollTop: 0
            }, "smooth");
        })

        function showForm(formulir) {
            $(".should-hide").hide()
            $("#jenis-formulir").hide()

            if (formulir == 'vaksin') {
                $("#formulir-vaksin").show()
            } else if (formulir == 'bkia') {
                $("#formulir-bkia").show()
            } else if (formulir == 'pasien') {
                $("#formulir-pasien").show()
            }
        }
    </script>
@endpush
