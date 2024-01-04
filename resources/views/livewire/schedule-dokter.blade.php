<div class="flex flex-col mb-3">
    <div class="flex flex-wrap mb-6">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700 font-bold mb-2" for="tanggal_schedule">
                Hari / Tanggal Rencana Vaksin <span style="font-size: 10px;">(*Hanya berisi tanggal tersedia)</span>
            </label>
            <div class="relative">
                <select class="main-input" id="tanggal_schedule" name="schedule" wire:model.live="schedule"
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
            @error('schedule')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mb-3 relative">
        <div class="w-full md:px-3">
            <label class="block tracking-wide text-gray-700  font-bold mb-2" for="dokter">
                Dokter
            </label>
            <select class="main-input" id="dokter" name="dokter" wire:model.live="dokterId">
                <option value="" disabled selected hidden>Pilih Dokter</option>
                @foreach ($dokterList as $data)
                    <option value="{{ $data['id'] }}">{{ $data['nama'] . ', Kuota ' . $data['kuota'] . 'x' }}</option>
                @endforeach
            </select>
        </div>
        <div wire:loading wire:target="schedule" class="absolute "
            style="top: 50%; left: 50%; background-color: rgba(250, 250, 250, 0.9)">
            <i class="fa-solid fa-spinner fa-spin fa-xl" style="color: #1662e3;"></i>
        </div>
        <div wire:loading wire:target="dokterId" class="absolute"
            style="top: 55%; right: 55px; background-color: rgba(250, 250, 250, 0.9)">
            <i class="fa-solid fa-spinner fa-spin fa-xl" style="color: #1662e3;"></i>
        </div>
    </div>
</div>
