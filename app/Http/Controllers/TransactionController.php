<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // Fungsi untuk membaca semua transaksi
    public function index()
    {
        $transactions = Transaction::all();

        return response()->json([
            'success' => true,
            'message' => 'List of Transactions',
            'data' => $transactions
        ], 200);
    }

    // Fungsi untuk membaca transaksi berdasarkan ID
    public function show($id)
    {
        $transaction = Transaction::find($id);

        if ($transaction) {
            return response()->json([
                'success' => true,
                'message' => 'Transaction Details',
                'data' => $transaction
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Transaction Not Found'
            ], 404);
        }
    }
}

