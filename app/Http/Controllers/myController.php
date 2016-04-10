<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 4/10/16
 * Time: 7:16 PM
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class myController extends Controller
{
    public function getIndex()
    {
        $data = DB::select('select * from pink.bucket where uid=' . $_SESSION['user']['uid']);
        $mdds= DB::select('select * from favor left join mdd on favor.fid=mdd.mddid where favor.type =1 and favor.uid='.$_SESSION['user']['uid']);
        $pois = DB::select('select * from favor left join poi on favor.fid=poi.poiid where favor.type =2 and favor.uid='.$_SESSION['user']['uid']);
        $hotels = DB::select('select * from favor left join hotel on favor.fid=hotel.hid where favor.type =3 and favor.uid='.$_SESSION['user']['uid']);




        view()->share('builder', $data);
        view()->share('mdds', $mdds);
        view()->share('pois', $pois);
        view()->share('hotels', $hotels);
        return view('my');

    }

    public function getLine()
    {
        $data = DB::select('select * from line left join bucket on line.bid=bucket.bid left join poi on line.poiid=poi.poiid  where line.bid=' . Input::get('bid'));
//        var_dump($data);
        view()->share('pois',$data);
        return view('myline');
    }
}