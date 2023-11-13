<div id="formulir-bkia" class="container should-hide hidden">
    <div class="flex flex-col p-[0] md:p-5">
        <h3 class="mx-auto font-bold text-2xl text-center">
            Formulir Pendaftaran BKIA
        </h3>
        <span class="short-divider"></span>
        <form action="{{ route('frontend.form_bkia') }}" method="POST" class="w-full mt-[3rem]">
            @csrf
            <div class="flex flex-wrap mb-3">
                <div class="w-full md:px-3">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="nama-lengkap-anak">
                        Nama Lengkap Anak <span class="dot-required">*</span>
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="nama-lengkap-anak" name="nama-lengkap-anak" type="text" required>
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
                    <div class="flex flex-row items-center justify-center">
                        <input type="text"
                            class="flex-shrink w-[50%] appearance-none block bg-white text-gray-700 border border-red-500 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                            required />
                        <span class="mx-2">/</span>
                        <div class="flex-1 relative" data-te-datepicker-init>
                            <input
                                class="w-full appearance-none block bg-white text-gray-700 border border-red-500 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                                id="ttl-anak" name="ttl-anak" type="text" required>
                            <div class="absolute top-0 left-0 right-0 bottom-0 z-30" data-te-datepicker-toggle-ref
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
                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nik-anak">
                        NIK Anak
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="nik-anak" type="text">
                </div>
            </div>
            <div class="flex flex-wrap mb-3">
                <div class="w-full md:px-3">
                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama-orang-tua">
                        Nama Orang Tua
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="nama-orang-tua" type="text">
                </div>
            </div>
            <div class="flex flex-wrap mb-3">
                <div class="w-full md:px-3">
                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="alamat">
                        Alamat Lengkap <span class="dot-required">*</span>
                    </label>
                    <textarea rows="5" id="alamat"
                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        placeholder="Masukkan Alamat Lengkap" required>
                    </textarea>
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
                    <label class="block tracking-wide text-gray-700  font-bold mb-2" for="no-hp">
                        No. Handphone <span class="dot-required">*</span>
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded-xl py-3 px-2 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="no-hp" type="text" required>
                </div>
            </div>
            <div class="flex-shrink-0 flex  items-center justify-center mt-5">
                <button type="button"
                    class="p-2 rounded-lg shadow-lg text-center w-40 mr-3 btn-back-formulir">Kembali</button>
                <button type="submit" class="p-2 rounded-lg shadow-lg text-center w-40 ml-3">Registrasi</button>
            </div>
        </form>
    </div>
</div>
