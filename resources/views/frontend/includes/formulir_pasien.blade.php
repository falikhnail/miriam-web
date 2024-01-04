<div id="formulir-pasien" class="container should-hide hidden">
    <div class="flex flex-col p-[0] md:p-5">
        <h3 class="mx-auto font-bold text-2xl text-center">
            Formulir Pendaftaran Pasien
        </h3>
        <span class="short-divider"></span>
        @livewire('regist-pasien-umum', ['id' => ''])
    </div>
</div>

{{-- <form action="{{ route('frontend.form_pasien') }}" method="POST" class="w-full mt-[3rem]">
    @csrf
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="nama_lengkap">
                Nama Lengkap <span class="dot-required">*</span>
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="nama_lengkap" name="nama_lengkap" type="text" required>
            <p id="error-nama-lengkap" class="text-red-500 text-xs italic hidden">
                Please fill out this field.
            </p>
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-2" for="jenis_kelamin">
                Jenis Kelamin
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="jenis_kelamin" name="jenis_kelamin" type="text">
            <p id="error-jenis-kelamin" class="text-red-500 text-xs italic hidden">
                Please fill out this field.
            </p>
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-2" for="no_rm">
                No. RM
                <span class="text-xs">(Jika sudah pernah mendaftar)</span>
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="no_rm" name="no_rm" type="text">
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="tanggal_lahir">
                Tempat / Tanggal Lahir <span class="dot-required">*</span>
            </label>
            <div class="flex flex-row items-center justify-center">
                <input name="tempat_lahir" type="text"
                    class="flex-shrink w-[50%] appearance-none block bg-white text-gray-700 border border-red-500 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                    required />
                <span class="mx-2">/</span>
                <div class="flex-1 relative" data-te-datepicker-init>
                    <input
                        class="w-full appearance-none block bg-white text-gray-700 border border-red-500 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="tanggal_lahir" name="tanggal_lahir" type="text" required>
                    <div class="absolute top-0 left-0 right-0 bottom-0 z-30" data-te-datepicker-toggle-ref
                        data-te-datepicker-toggle-button-ref></div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="alamat">
                Alamat Lengkap <span class="dot-required">*</span>
            </label>
            <textarea rows="5" id="alamat" name="alamat"
                class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                placeholder="Masukkan Alamat Lengkap" required></textarea>
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="no_hp">
                No. Handphone <span class="dot-required">*</span>
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="no_hp" name="no_hp" type="text" required>
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="pendidikan">
                Pendidikan Terakhir
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="pendidikan" name="pendidikan" type="text">
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="agama">
                Agama
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="agama" name="agama" type="text">
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="pekerjaan">
                Pekerjaan
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="pekerjaan" name="pekerjaan" type="text">
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nik_ktp">
                NIK KTP
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="nik_ktp" name="nik_ktp" type="text">
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="status_kawin">
                Menikah / Belum Menikah
            </label>
            <select id="status_kawin" name="status_kawin"
                class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md">
                <option value="" selected disabled>Pilih Status Kawin</option>
                <option value="kawin">Kawin</option>
                <option value="belum_kawin">Belum Kawin</option>
            </select>
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama_pasangan">
                Nama Suami
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="nama_pasangan" name="nama_pasangan" type="text">
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="pekerjaan_pasangan">
                Pekerjaan Suami
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="pekerjaan_pasangan" name="pekerjaan_pasangan" type="text">
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nik_pasangan">
                NIK KTP Suami
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="nik_pasangan" name="nik_pasangan" type="text">
        </div>
    </div>
    <div class="flex flex-wrap mb-1">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="no_hp_pasangan">
                No. Handphone Suami
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="no_hp_pasangan" name="no_hp_pasangan" type="text">
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="schedule">
                Hari / Tanggal Periksa
            </label>
            <div class="flex flex-row items-center justify-center">
                <input id="hari" name="hari" type="text"
                    class="flex-shrink w-[50%] appearance-none block bg-white text-gray-700 border border-red-500 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md" />
                <span class="mx-2">/</span>
                <div class="flex-1 relative" data-te-datepicker-init>
                    <input
                        class="w-full appearance-none block bg-white text-gray-700 border border-red-500 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="schedule" name="schedule" type="text">
                    <div class="absolute top-0 left-0 right-0 bottom-0 z-30" data-te-datepicker-toggle-ref
                        data-te-datepicker-toggle-button-ref></div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="cara_bayar">
                Cara Bayar <span class="dot-required">*</span>
            </label>
            <select class="main-input" id="cara_bayar" name="cara_bayar" type="text" required>
                <option value="" selected disabled>Pilih Cara Bayar</option>
                <option value="bayar_sendiri">Bayar Sendiri</option>
                <option value="admediak">Admedika</option>
            </select>
        </div>
    </div>
    <div class="flex-shrink-0 flex  items-center justify-center mt-5 space-x-5">
        <button type="button" class="btn btn-primary btn-back-formulir">Kembali</button>
        <button type="submit" class="btn btn-primary">Registrasi</button>
    </div>
</form> --}}
