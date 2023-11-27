<div id="formulir-vaksin" class="container should-hide hidden">
    <div class="flex flex-col p-[0] md:p-5">
        <h3 class="mx-auto font-bold text-2xl text-center">
            Formulir Pendaftaran Vaksin
        </h3>
        <span class="short-divider"></span>
        <form action="{{ route('frontend.form_vaksin') }}" method="POST" class="w-full mt-[3rem]">
            @csrf
            <div class="flex flex-wrap mb-3">
                <div class="w-full md:px-3">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="nama_lengkap_anak">
                        Nama Lengkap Anak <span class="dot-required">*</span>
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="nama_lengkap_anak" name="nama_lengkap_anak" type="text"
                        value="{{ old('nama_lengkap_anak') }}" required>
                    <p id="error-nama-lengkap" class="text-red-500 text-xs italic hidden">
                        Please fill out this field.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mb-3">
                <div class="w-full md:px-3">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="tanggal_lahir">
                        Tempat / Tanggal Lahir <span class="dot-required">*</span>
                    </label>
                    <div class="flex flex-row items-center justify-center">
                        <input type="text" name="tempat_lahir"
                            class="flex-shrink w-[50%] appearance-none block bg-white text-gray-700 border rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                            value="{{ old('tempat_lahir') }}" required/>
                        <span class="mx-2">/</span>
                        <div class="flex-1 relative" data-te-datepicker-init>
                            <input
                                class="w-full appearance-none block bg-white text-gray-700 border rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                                id="tanggal_lahir" name="tanggal_lahir" type="text" required>
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
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="nik_anak" name="nik_anak" type="text">
                </div>
            </div>
            <div class="flex flex-wrap mb-3">
                <div class="w-full md:px-3">
                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama_orang_tua">
                        Nama Orang Tua
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="nama_orang_tua" name="nama_orang_tua" type="text">
                </div>
            </div>
            <div class="flex flex-wrap mb-3">
                <div class="w-full md:px-3">
                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="alamat">
                        Alamat Lengkap <span class="dot-required">*</span>
                    </label>
                    <textarea rows="5" id="alamat" name="alamat"
                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        required></textarea>
                </div>
            </div>
            <div class="flex flex-wrap mb-3">
                <div class="w-full md:px-3">
                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="vaksin">
                        Vaksin
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="vaksin" name="vaksin" type="text">
                </div>
            </div>
            <div class="flex flex-wrap mb-3">
                <div class="w-full md:px-3">
                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="schedule">
                        Hari / Tanggal Rencana Vaksin
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
            <div class="flex flex-wrap mb-1">
                <div class="w-full md:px-3">
                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="no-hp">
                        No. Handphone <span class="dot-required">*</span>
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-2 mb-3 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="no_hp" name="no_hp" type="text" required>
                </div>
            </div>
            <div class="flex-shrink-0 flex  items-center justify-center mt-5 space-x-5">
                <button type="button"
                    class="btn btn-primary btn-back-formulir">Kembali</button>
                <button type="submit" class="btn btn-primary">Registrasi</button>
            </div>
        </form>
    </div>
</div>
