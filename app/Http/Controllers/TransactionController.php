<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function showTransation(){
        return view('transaction');
    }
    public function transfert(Request $request)
{
    $request->validate([
        'sender' => 'required|string|max:255',
        'receiver' => 'required|string|max:255',
        'montant' => 'required|numeric|min:1',
    ]);

    $user = Auth::user();
    $account = Account::where('idUser', $user->id)->first();

    if (!$account) {
        return back()->with('error', 'Aucun compte associé à cet utilisateur.');
    }

    $montant = floatval($request->montant);

    if ($account->balance >= $montant) {
        Transaction::create([
            'idUser' => $user->id,
            'sender' => $request->sender,
            'receiver' => $request->receiver,
            'montant' => $montant,
        ]);

        $account->balance -= $montant;
        $account->save();

        return redirect()->route('acceuil')->with('success', 'Transfert effectué avec succès.');
    }

    return back()->with('error', 'Solde insuffisant pour effectuer le transfert.');
}

}
