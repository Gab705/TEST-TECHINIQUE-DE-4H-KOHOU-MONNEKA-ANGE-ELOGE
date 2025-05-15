<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcccountController extends Controller
{
    public function storeBalance(Request $request){
        $request->validate([
            'balance' => 'required|string'
        ]);

        $user = Auth::user();
        $account = Account::where('idUser', $user->id)->first();

        $balance = Account::create([
            'idUser' => $user->id,
            'balance' => $request->balance
        ]);

        $account->balance += $request->balance;
        $account->save();

        return redirect()->route('acceuil');
    }

    public function ShowBalance(){
        return view('balance');
    }
}
