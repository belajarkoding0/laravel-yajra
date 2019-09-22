<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\User;

class DatatablesController extends Controller
{
    public function Index()
    {
        return view('datatables.index');
    }

    public function getdata()
    {
        return Datatables::of(User::query())->make(true);
    }
}
