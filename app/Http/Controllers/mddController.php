<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 4/9/16
 * Time: 9:29 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class mddController extends Controller
{
    public function getIndex()
    {
        $mdds = DB::table('mdd')->get();
//        var_dump($mdds);exit();
        view()->share("mdds",$mdds);

        return view("mdd");
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