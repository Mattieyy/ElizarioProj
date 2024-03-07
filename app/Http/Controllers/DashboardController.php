<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard');
    }
    public function users()
    {
        return view('users');
    }
    public function loans()
    {
        return view('loans.loans');
    }
    public function loantypes()
    {
        return view('loans.loantypes');
    }
    public function loanplans()
    {
        return view('loans.loanplans');
    }
        public function borrowers()
    {
        return view('borrowers.borrowers');
    }
    public function payment()
    {
        return view('borrowers.payments');
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
