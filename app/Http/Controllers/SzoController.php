<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szo;
use App\Models\Tema;



class SzoController extends Controller
{
    public function index()
    {
        return Szo::all();
    }

    public function show($temaId)
    {
        $result = Szo::where('temaId',$temaId)->get();
            foreach($result as &$row){
                $row->tema_temanev = Tema::where('id',$row->temaId)->first()->temanev ?? '-';
            }
        return $result; 

    }
}
