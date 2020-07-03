<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index() {
        $rows = JawabanModel::get_all();
        return view('jawaban.index');
    }

    public function create() {
        return view('jawaban.form');
    }

    public function store(Request $request) {
        $new_question = JawabanModel::save($request);
        return redirect('/jawaban');
    }
}
