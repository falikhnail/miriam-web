<div x-data="addSceduleModal">
    <button type="button" class="hidden" id="btn-show-modal" @click="toggleModal()"></button>
    <div id="modal" role="dialog" aria-labelledby="modal1_label" aria-modal="true" tabindex="0" x-show="openModal"
        class="fixed top-0 left-0 w-full h-screen flex justify-center items-center z-20 modal">
        <div aria-hidden="true" class="absolute top-0 left-0 w-full h-screen bg-black transition duration-300"
            :class="{ 'opacity-60': openModal, 'opacity-0': !openModal }" x-show="openModal"
            x-transition:leave="delay-150">
        </div>
        <div data-modal-document @click.stop="" x-show="openModal" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="transform scale-50 opacity-0"
            x-transition:enter-end="transform scale-100 opacity-100"
            x-transition:leave="transition ease-out duration-300"
            x-transition:leave-start="transform scale-100 opacity-100"
            x-transition:leave-end="transform scale-50 opacity-0"
            class="flex flex-col rounded-lg shadow-lg overflow-hidden bg-white w-2/5 z-10">
            <div class="p-6 border-b">
                <div class="flex justify-between">
                    <div class="flex justify-between items-center">
                        <h1 class="font-bold text-2xl" id="tittle-modal">Tambah Schedule</h1>
                        <button id="btn-delete-schedule" class="btn btn-sm-danger hidden">Hapus Schedule</button>
                    </div>
                    <div class="hover:text-red-700">
                        <a href="javascript:;" @click="openModal = false" class="">
                            <i class="fa-solid fa-xmark fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-6" x-data="{ model: 0 }">
                <div class="flex flex-col gap-2">
                    <form class="form" id="form-detail" method="POST">
                        @csrf
                        <input type="hidden" name="tanggal" wire:model.live="tanggal">
                        <div class="flex mb-6">
                            <div class="w-full px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="kuota">
                                    Kuota
                                </label>
                                <input type="number" class="main-input" id="kuota" name="kuota"
                                    x-model.number="model.kuota" required>
                            </div>
                        </div>
                        <div class="flex mb-6"  wire:ignore>
                            <div class="w-full px-3">
                                <label class="block tracking-wide text-gray-700  font-bold mb-2" for="dokter">
                                    Nama Dokter
                                </label>
                                <select id="dokter" name="dokter[]" multiple required>
                                    {{-- <option value="" disabled selected>Pilih Dokter</option> --}}
                                    @foreach ($dokterList as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex-shrink-0 flex  items-center justify-center mt-5">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        /* $(document).ready(function() {
                $("#dokter").select2({
                    placeholder: 'Pilih Dokter',
                })
                $('#dokter').on('change', function(e) {

                    @this.Livewire.emit('listenerReferenceHere',
                        $('#dokter').select2("val"));
                });
            }) */

        window.addSceduleModal = (tanggal) => {
            return {
                openModal: false,
                tanggal: '',
                init(tanggal) {
                    this.tanggal = tanggal;
                },
                toggleModal() {
                    this.openModal = !this.openModal;
                },
                setTanggal(value) {
                    this.tanggal = value;
                },
            };
        }
    </script>
</div>
