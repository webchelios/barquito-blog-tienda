<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use Illuminate\Support\Facades\Session;

class IsPremiumVerificationController extends Controller
{
    public function formIsPremium(int $id) {
        return view('entries.ispremium-verification', [
            'entry' => Entry::findOrFail($id)
        ]);
    }

    public function processIsPremium(int $id) {
        Session::put('confirmedIsPremium', true);
        return to_route('blog',['id' => $id]);
    }
}
