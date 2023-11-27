@extends('auth.layouts.app')

@section('title')
    Login Admin
@endsection

@section('content')
    <div class="m-auto">
        <img src="{{ asset('images/rsia.png') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia mx-auto">
        <div class="w-96 rounded-lg shadow-xl p-5 bg-white mt-5">
            <h1 class="text-xl text-center font-bold">Login Admin</h1>
            <div class="flex mt-10">
                <form action="{{ route('auth.admin_login.action') }}" method="POST" class="w-full p-4">
                    <div class="flex flex-col">
                        <div class="w-full mb-3">
                            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="email">
                                Email
                            </label>
                            <div class="container-input-group">
                                <span>
                                    <i class="fa-solid fa-envelope text-gray-400"></i>
                                </span>
                                <input id="email" name="email" type="text" required>
                            </div>
                        </div>
                        <div class="w-full mb-10">
                            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <div class="container-input-group">
                                <span>
                                    <i class="fa-solid fa-key text-gray-400"></i>
                                </span>
                                <input id="password" name="password" type="password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
