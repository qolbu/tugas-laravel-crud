<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index() {
        $rows = PertanyaanModel::get_all();
        return view('pertanyaan.index');
    }

    public function create() {
        return view('pertanyaan.form');
    }

    public function store(Request $request) {
        $new_question = PertanyaanModel::save($request);
        return redirect('/pertanyaan');
    }
}
