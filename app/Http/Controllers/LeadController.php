<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index(Request $request)
    {


        if($request->search != ""){
            $input = $request->search;
            $leads = Lead::where('firstName', 'LIKE', '%' . $input . '%')
            ->orWhere('lastName', 'LIKE', '%' . $input . '%')
            ->orWhere('title', 'LIKE', '%' . $input . '%')
            ->orWhere('homePhone', 'LIKE', '%' . $input . '%')
            ->orWhere('type', 'LIKE', '%' . $input . '%')
            ->take(100)->get();
        }else{
            $leads = Lead::take(100)->get();
        }

        return view('welcome', compact('leads'));
    }
}
