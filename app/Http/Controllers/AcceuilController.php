<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcceuilController extends Controller
{
    public function ShowAcceuil(){
        $user = Auth::user();
        $account = Account::where('idUser', $user->id)->first();
        $transaction = Transaction::where('idUser', $user->id)->get();
        return view('acceuil', compact('account', 'transaction'));
    }
}
