<div id="formulir-bkia" class="container should-hide hidden">
    <div class="flex flex-col p-[0] md:p-5">
        <h3 class="mx-auto font-bold text-2xl text-center">
            Formulir Pendaftaran BKIA
        </h3>
        <span class="short-divider"></span>
        @livewire('regist-pasien-bkia')
    </div>
</div>
{{-- <form action="{{ route('frontend.form_bkia') }}" method="POST" class="w-full mt-[3rem]">
    @csrf
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="nama_lengkap_anak">
                Nama Lengkap Anak <span class="dot-required">*</span>
            </label>
            <input
                class="appearance-none block w-full bg-white text-gray-700 border rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                id="nama_lengkap_anak" name="nama_lengkap_anak" type="text" required>
            <p id="error-nama-lengkap" class="text-red-500 text-xs italic hidden">
                Please fill out this field.
            </p>
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="ttl-anak">
                Tempat / Tanggal Lahir <span class="dot-required">*</span>
            </label>
            <div class="flex flex-row items-center">
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="main-input-row1" required />
                <span class="mx-2">/</span>
                <div class="flex-1 relative" data-te-datepicker-init>
                    <input class="main-input-row2" id="tanggal_lahir" name="tanggal_lahir" type="text" required>
                    <div class="absolute top-0 left-0 right-0 bottom-0" data-te-datepicker-toggle-ref
                        data-te-datepicker-toggle-button-ref></div>
                </div>
            </div>
            <p id="error-nama-lengkap" class="text-red-500 text-xs italic hidden">
                Please fill out this field.
            </p>
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nik_anak">
                NIK Anak
            </label>
            <input class="main-input" id="nik_anak" name="nik_anak" type="text">
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama_orang_tua">
                Nama Orang Tua
            </label>
            <input class="main-input" id="nama_orang_tua" name="nama_orang_tua" type="text">
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="alamat">
                Alamat Lengkap <span class="dot-required">*</span>
            </label>
            <textarea rows="5" id="alamat" class="main-input" placeholder="Masukkan Alamat Lengkap" required></textarea>
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="schedule">
                Hari / Tanggal Rencana
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
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="no_hp">
                No. Handphone <span class="dot-required">*</span>
            </label>
            <input class="main-input" id="no_hp" name="no_hp" type="text" required>
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
