<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use App\Models\State;
use App\Models\Division;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = [
            'employee' => Employee::count(),
            'department' => Department::count(),
            'division' => Division::count(),
            'country' => Country::count(),
            'state' => State::count(),
            'city' => City::count(),
        ];

        return view('dashboard', $stats);
    }
}
