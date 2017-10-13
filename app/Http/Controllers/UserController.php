<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Machine;

class UserController extends Controller
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

    public function machines()
    {
    	$machines = \request()->user()->machines()->get();
    	// dd($machines);
    	return view('machines', [
            'machines' => $machines,
        ] );
    }

    public function addMachine()
    {
    	return view('add_machine');
    }

    public function storeMachine()
    {
        // dd(\request()->all());
        $machine = new Machine([
            'user_id'=>\request()->user()->id,
            'machine_name' => \request('machine_name'),
            'machine_ipaddress' => \request()->ip()
        ]);
        $machine->save();
        return back()->with('status', 'Thêm máy thành công!');

        // dd($machine);
    }
}
