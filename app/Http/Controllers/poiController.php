<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 4/9/16
 * Time: 9:52 PM
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class poiController extends Controller
{
    public function getIndex()
    {
        $mddid = Input::get('mdd');
        $mdd = DB::select('SELECT * FROM pink.mdd where mddid='.$mddid);
        $data = DB::select('SELECT * FROM pink.poi where mddid='.$mddid);
//        var_dump($mdd);exit();
        view()->share("pois",$data);
        view()->share("mdd",$mdd[0]);

        return view("poi");
    }

    public function getIns()
    {
        $data = array(
            "title"=>Input::get('title'),
            "content"=>Input::get('comment'),
            "star"=>Input::get('star'),
            "uid"=>$_SESSION['user']['uid'],
            "time"=>date('y-m-d h:i:s',time())
        );

        $mess  = DB::table('bbs')->insertGetId($data);

        return array("cid"=>$mess,"name"=>$_SESSION['user']['name']);
    }
}