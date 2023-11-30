@extends('backend.layouts.app')

@section('title')
    {{ 'Detail Registrasi' }}
@endsection

@section('content')
    <div class="flex flex-col justify-center">
        <x-section-header title="Detail Registrasi Pasien" subtitle="Detail Pasien Registrasi" :showBack="true" />
        <div class="flex flex-row items-start">
            <div class="flex flex-1 flex-col my-10 shadow-lg rounded px-6 py-5 bg-white w-full h-full">
                @can('delete_pasien')
                    <div class="flex justify-end">
                        {{-- <img src="{{ asset('images/rsia.png') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia"> --}}
                        <button type="button" class="btn btn-sm-danger" id="btn-hapus-pasien">Hapus Pasien</button>
                    </div>
                @endcan
                @include('backend.regist_pasien.includes.form')
            </div>
            <div id="info" class="flex flex-col my-10 shadow-lg rounded px-6 py-5 bg-white ms-5 h-auto space-y-5">
                <div class="flex items-center">
                    <i class="fa-regular fa-calendar fa-lg mr-3"></i>
                    <p class="font-bold" id="tgl-regist">
                        Tanggal Registrasi
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
        const canUpdate = `{{ Auth::user()->can('edit_pasien') }}` == 1
        const canDelete = `{{ Auth::user()->can('delete_pasien') }}` == 1
        const canAdd = `{{ Auth::user()->can('add_pasien') }}` == 1

        $(document).ready(() => {
            var route = `{{ Route::current()->getName() }}`.split('.');
            route = route[route.length - 1]

            if (route == 'edit' || route == 'show') {
                setEditShowForm(route == 'show')
            } else if (route == 'create') {
                $("#section-title").text("Tambah Pasien")
                $("#section-subtitle").text("Lengkapi form mandatory untuk menyimpan Pasien")
                $("#info").hide()
                $("#btn-hapus-pasien").hide()

                if (canAdd) {
                    $("#form-pasien").attr('action', '{{ route('backend.pasien.p.store') }}')
                }
            }
        })

        function setEditShowForm(isShow = false) {
            const data = @json(isset($pasien) ? $pasien : []);
            //console.log(data)
            if (data) {


                $("#nama_lengkap").val(data.nama_lengkap)
                $("#tanggal_lahir").val(data.tglLahir)
                $("#tempat_lahir").val(data.tempatLahir)
                $("#nik").val(data.nik)
                $("#pekerjaan").val(data.pekerjaan)
                $("#pendidikan_terakhir").val(data.pendidikan_terakhir)
                $("#alamat").text(data.alamat)
                $("#schedule_id").val(data.schedule_id)
                $("#dokter_id").val(data.dokter_id)
                $("#cara_bayar").val(data.cara_bayar)
                $("#no_hp").val(data.no_hp)
                $("#no_rm").val(data.no_rm)
                $("#tgl-regist").text(`Tanggal Registrasi ${data.tglRegist}`)

                // * data pasangan
                $("#nama_suami").val(data.nama_suami)
                $("#pekerjaan_suami").val(data.pekerjaan_suami)
                $("#nik_suami").val(data.nik_suami)
                $("#no_hp_suami").val(data.no_hp_suami)

                // * select
                $("#agama").val(data.agama)
                $("#jenis_kelamin").val(data.jenis_kelamin)
                $("#status_kawin").val(data.status_kawin)

                $("#info").show()

                if (!isShow) {
                    if (canUpdate) {
                        const updateRoute = "{{ route('backend.pasien.p.update', ':id') }}".replace(":id", data.id);
                        $("#form-pasien").prepend(`{{ method_field('PUT') }}`)
                        $("#form-pasien").attr("action", updateRoute)
                    }
                    if (canDelete) {
                        $("#btn-hapus-pasien").click(() => {
                            showDeleteConfirm(() => {
                                const route = `{{ route('backend.pasien.p.destroy', ':id') }}`.replace(
                                    ':id', data.id);

                                deleteLinked(route, `{{ csrf_token() }}`)
                            })
                        })
                    }

                } else {
                    $("#btn-hapus-pasien").hide()
                    $("#form-pasien").find('input, select, textarea').attr("disabled", true);
                    $(`#form-pasien button[type="submit"]`).hide()
                }

                $("#wa-pasien").click(() => {
                    wa(data.no_hp, 'Selamat pagi / siang / malam')
                })
            }
        }
    </script>
@endpush
