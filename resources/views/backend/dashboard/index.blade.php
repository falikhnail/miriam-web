@extends('backend.layouts.app')

@section('title')
    {{ 'Dashboard' }}
@endsection

@section('content')
    <div class="flex flex-col justify-center">
        <x-section-header title="Dashboard" subtitle="Ringkasan dan Preview Data" />
        <div class="flex flex-col my-10 px-6 py-5">
            <div class="grid grid-cols-3 gap-x-8 gap-y-4">
                <div class="flex flex-col justify-center items-center px-3 py-5 bg-white rounded-lg shadow-lg">
                    <h1 class="text-2xl">{{ $countVaksin }}</h1>
                    <h3 class="font-bold text-lg mt-10">Pasien Vaksin</h3>
                </div>
                <div class="flex flex-col justify-center items-center px-3 py-5 bg-white rounded-lg shadow-lg">
                    <h1 class="text-2xl">{{ $countBkia }}</h1>
                    <h3 class="font-bold text-lg mt-10">Pasien BKIA</h3>
                </div>
                <div class="flex flex-col justify-center items-center px-3 py-5 bg-white rounded-lg shadow-lg">
                    <h1 class="text-2xl">{{ $countPasien }}</h1>
                    <h3 class="font-bold text-lg mt-10">Pasien</h3>
                </div>
            </div>
            @include('backend.dashboard.includes.schedule')
            <div class="flex space-x-5 my-5">
                @include('backend.dashboard.includes.bkia')
                @include('backend.dashboard.includes.vaksin')
            </div>
        </div>
    </div>
@endsection
