<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEntryController extends Controller
{
    public function index() {
        return view('admin.entries.index');
    }
}
