<?php

namespace App\Http\Controllers;

use App\Groupproduct;
use Illuminate\Http\Request;

class GroupProductController extends Controller
{

    public function show(Groupproduct $groupproduct)
    {
        return view('groupproducts.detail', ['groupproduct' => $groupproduct]);
    }
}
