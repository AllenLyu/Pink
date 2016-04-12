<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 4/9/16
 * Time: 9:40 AM
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class bbsController extends Controller
{
    public function getIndex()
    {
        $conments = DB::select('select * from bbs left join pink.user on bbs.uid=pink.user.uid');
        $art = DB::select('select artitleid,title from artitle');
        view()->share("comments",$conments);
        view()->share("arts",$art);

        return view("bbs");
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