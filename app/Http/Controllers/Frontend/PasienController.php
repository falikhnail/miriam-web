<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasienController extends Controller {
    public function index() {
        return view("frontend.register");
    }

    public function store(Request $request) {
    }
}
