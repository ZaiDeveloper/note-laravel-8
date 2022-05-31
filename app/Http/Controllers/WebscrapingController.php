<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QL\QueryList;

class WebscrapingController extends Controller
{
    public function sample(Request $request)
    {
        $ql = QueryList::getInstance();
        $data = $ql->get('https://www.goldrate24.com/gold-prices/asia/malaysia/gram/22K/')->find('table tr > td')->texts();
        dd($data->all());
    }
}
