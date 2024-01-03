<form class="w-full mt-[3rem]" wire:submit.prevent="store" x-data="{ hasError: '{{ Session::has('error') ? session('error') : '' }}' }" x-init="() => {
    $watch('hasError', (value) => {
        let errorDiv = document.getElementsByClassName('invalid-feedback')[0];
        if (errorDiv) {
            errorDiv.scrollIntoView({ behavior: 'smooth', block: 'center', inline: 'nearest' });
        }
    })
}">
    {{--  @if (Session::has('error'))
        <div class="flex justify-center items-center w-full invalid-feedback">
            <div class="border w-full text-center py-2 rounded-lg shadow-2xl">
                <h1 class="text-red-600 font-bold">Error</h1>
            </div>
        </div>
    @endif --}}
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2">
                Nama Lengkap Anak <span class="dot-required">*</span>
            </label>
            <input class="main-input" type="text" name="nama_lengkap_anak" wire:model.blur="form.nama_lengkap_anak"
                style="{{ $errors->has('form.nama_lengkap_anak') ? 'border-color: red;' : '' }}">
            @error('form.nama_lengkap_anak')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="tanggal_lahir">
                Tempat / Tanggal Lahir <span class="dot-required">*</span>
            </label>
            <div class="flex flex-row items-center justify-center">
                <div class="w-1/2">
                    <input type="text" name="tempat_lahir" class="main-input" wire:model.blur="form.tempat_lahir"
                        style="{{ $errors->has('form.tempat_lahir') ? 'border-color: red;' : '' }}" />
                    @error('form.tempat_lahir')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
                <span class="mx-2">/</span>
                <div class="w-1/2 flex-1">
                    <div class="relative" data-te-datepicker-init>
                        <input class="main-input" id="tanggal_lahir" name="tanggal_lahir" type="text"
                            wire:model="form.tanggal_lahir"
                            style="{{ $errors->has('form.tanggal_lahir') ? 'border-color: red;' : '' }}">
                        <div class="absolute top-0 left-0 right-0 bottom-0" data-te-datepicker-toggle-ref
                            data-te-datepicker-toggle-button-ref></div>
                    </div>
                    @error('form.tanggal_lahir')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2">
                NIK Anak
            </label>
            <input class="main-input" type="text" name="nik_anak" wire:model="form.nik_anak"
                wire:key="form.nik_anak">
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="nama_orang_tua">
                Nama Orang Tua
            </label>
            <input class="main-input" id="nama_orang_tua" name="nama_orang_tua" type="text"
                wire:model="form.nama_orang_tua">
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="alamat">
                Alamat Lengkap <span class="dot-required">*</span>
            </label>
            <textarea rows="5" id="alamat" name="alamat" class="main-input" wire:model="form.alamat"
                style="{{ $errors->has('form.alamat') ? 'border-color: red;' : '' }}"></textarea>
            @error('form.alamat')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="no_hp">
                No. Handphone <span class="dot-required">*</span>
            </label>
            <input class="main-input" id="no_hp" name="no_hp" type="text" wire:model="form.no_hp"
                style="{{ $errors->has('form.no_hp') ? 'border-color: red;' : '' }}">
            @error('form.no_hp')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700 font-bold mb-2" for="tanggal_schedule">
                Hari / Tanggal Rencana Vaksin <span style="font-size: 10px;">(*Hanya berisi tanggal tersedia)</span>
            </label>
            <div class="relative">
                <select class="main-input" id="tanggal_schedule" name="schedule" wire:model.live="form.schedule"
                    style="{{ $errors->has('form.schedule') ? 'border-color: red;' : '' }}">
                    <option value="" disabled selected>Pilih Tanggal</option>
                    @foreach ($scheduleList as $data)
                        <option value="{{ $data->tanggal }}" class="flex justify-between">
                            <span>{{ date('d/m/Y', strtotime($data->tanggal)) }}</span>
                        </option>
                    @endforeach
                </select>
                {{-- <div class="absolute top-2 right-10" wire:loading wire:target="checkSchedule">
                    <i class="fa-solid fa-circle-notch fa-spin"></i>
                </div> --}}
            </div>
            @error('form.schedule')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mb-3 relative">
        <div class="w-full md:px-3" wire:target="form.schedule">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="dokter">
                Dokter
            </label>
            <select class="main-input" id="dokter" wire:model="form.dokter_id">
                <option value="" disabled selected hidden>Pilih Dokter</option>
                @foreach ($dokterList as $data)
                    <option value="{{ $data['id'] }}">{{ $data['nama'] . ', Kuota ' . $data['kuota'] . 'x' }}</option>
                @endforeach
            </select>
        </div>
        <div wire:loading wire:target="form.schedule" class="absolute"
            style="top: 50%; left: 50%; background-color: rgba(250, 250, 250, 0.9)">
            <i class="fa-solid fa-spinner fa-spin fa-xl" style="color: #1662e3;"></i>
        </div>
    </div>
    <div class="flex flex-wrap mb-3">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="cara_bayar">
                Cara Bayar <span class="dot-required">*</span>
            </label>
            <select class="main-input" id="cara_bayar" name="cara_bayar" wire:model="form.cara_bayar">
                <option value="" selected disabled hidden>Pilih Cara Bayar</option>
                <option value="bayar_sendiri">Bayar Sendiri</option>
                <option value="admedika">Admedika</option>
            </select>
        </div>
    </div>
    <div class="flex-shrink-0 flex items-center justify-center mt-5 space-x-5" wire:loading.remove
        wire:target="store">
        <button type="button" class="btn btn-primary btn-back-formulir">Kembali</button>
        <button type="submit" class="btn btn-primary">Registrasi</button>
    </div>
    <div wire:loading wire:target="store" class="w-full">
        <div class="w-full flex items-center justify-center mt-5 space-x-5">
            <i class="fa-solid fa-spinner fa-spin fa-2xl" style="color: #1662e3;"></i>
        </div>
    </div>
</form>
