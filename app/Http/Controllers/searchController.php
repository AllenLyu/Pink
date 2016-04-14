<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 4/14/16
 * Time: 6:08 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class searchController extends Controller
{
    public function getIndex()
    {
        return view('search');
    }

    public function getData()
    {
        $pois = DB::select('select * from poi where mddid='.Input::get('mddid'));
        $hotel= DB::select('select * from hotel where price<='.Input::get('price').' and people<='.Input::get('person').' and poiid!='.Input::get('poi'));

        $result = array('poi'=>$pois,'hotels'=>$hotel);
        return json_encode($result);
    }
}