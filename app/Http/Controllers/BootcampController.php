<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datas = DB::table('bootcamps')
                ->join('organizers', 'bootcamps.organizer_id', '=', 'organizers.id')
                ->select('*', 'bootcamps.name as bootcamp_name', 'organizers.name as organizer_name')
                ->get();
        return view('Bootcamp/index', compact(['datas']));

    }

}
