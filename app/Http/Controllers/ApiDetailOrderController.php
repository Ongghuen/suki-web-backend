<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class ApiDetailOrderController extends Controller
{
  public function index()
  {
    return response()->json(['results' => Transaction::find(auth()->user()->transactions()->where('status', "Pending")->latest('id')->first()->id)->products()->get()]);
    // return response()->json(['results' => Transaction::all()->products()]);
  }

  public function store(Request $request)
  {
    return auth()->user()->wishlists()->attach($request->product_id);
  }

  public function show($id)
  {
    return response()->json(['results' => TransactionDetail::where('transaction_id', $id)->get()]);
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}
