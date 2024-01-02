<form method="POST" class="w-full mt-[3rem]" id="form-pasien">
    @csrf
    <div class="flex mb-6">
        <div class="w-1/2 px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama_lengkap_anak">
                Nama Lengkap <span class="dot-required">*</span>
            </label>
            <input class="main-input" id="nama_lengkap_anak" name="nama_lengkap_anak" type="text" required>
        </div>
        <div class="w-1/2 px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="tanggal_lahir">
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
                Alamat Lengkap <span class="dot-required">*</span>
            </label>
            <textarea rows="5" id="alamat" name="alamat" class="main-input" required></textarea>
        </div>
    </div>
    <div class="flex flex-wrap mb-6">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700 font-bold mb-2" for="schedule">
                Hari / Tanggal Rencana Periksa <span style="font-size: 10px;">(*Hanya berisi tanggal tersedia)</span>
            </label>
            <div class="relative">
                <select class="main-input" id="schedule" name="schedule"
                    style="{{ $errors->has('form.schedule') ? 'border-color: red;' : '' }}">
                    <option value="" disabled selected>Pilih Tanggal</option>
                    @foreach ($scheduleList as $data)
                        <option value="{{ $data->id }}" class="flex justify-between">
                            <span>{{ date('d/m/Y', strtotime($data->tanggal)) }}</span>
                        </option>
                    @endforeach
                </select>
            </div>
            @error('schedule')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mb-6">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="dokter_id">
                Dokter
            </label>
            <select class="main-input" id="dokter_id" name="dokter_id">
                <option value="" disabled selected hidden>Pilih Dokter</option>
                @foreach ($dokterList as $data)
                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="flex flex-wrap mb-6">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="cara_bayar">
                Cara Bayar <span class="dot-required">*</span>
            </label>
            <select class="main-input" id="cara_bayar" name="cara_bayar">
                <option value="" selected disabled hidden>Pilih Cara Bayar</option>
                <option value="bayar_sendiri">Bayar Sendiri</option>
                <option value="admedika">Admedika</option>
            </select>
        </div>
    </div>
    @can('edit_pasien_bkia')
        <div class="flex-shrink-0 flex  items-center justify-center mt-5">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    @endcan
</form>
