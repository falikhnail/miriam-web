@if ($countBkia > 0)
    <div class="{{ $countVaksin > 0 ? 'w-1/2' : 'w-full' }} shadow-lg rounded px-6 py-5 bg-white">
        <div class="flex justify-between items-center">
            <h1 class="font-bold text-xl">Pasien BKIA</h1>
            <a href="{{ route('backend.pasien.bkia.index') }}" class="btn btn-sm">Selengkapnya</a>
        </div>
        <table id="datatable" class="min-w-full text-center text-sm font-light mt-5">
            <thead class="border-b font-medium text-center">
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Schedule</th>
                <th>Registrasi</th>
            </thead>
            <tbody>
                @foreach ($bkia as $data)
                    @if ($loop->iteration % 2 == 0)
                        <tr class="even">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_lengkap_anak }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>
                                {{ $data->schedule != null && !empty($data->schedule) ? date('d/m/Y', strtotime($data->schedule)) : null }}
                            </td>
                            <td>{{ date('d/m/Y', strtotime($data->created_at)) }}</td>
                        </tr>
                    @else
                        <tr class="odd">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_lengkap_anak }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>
                                {{ $data->schedule != null && !empty($data->schedule) ? date('d/m/Y', strtotime($data->schedule)) : null }}
                            </td>
                            <td>{{ date('d/m/Y', strtotime($data->created_at)) }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endif
