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

class lineController extends Controller
{
    public function getIndex()
    {
        $conments = DB::select('select * from bbs left join pink.user on bbs.uid=pink.user.uid');

        view()->share("comments",$conments);

        return view("bbs");
    }

    public function getBucket()
    {

        $data = DB::select('select * from bucket WHERE uid='.$_SESSION['user']['uid']);

        echo json_encode($data);
    }

    public function getNewbucket()
    {
        $bucket = array(
            'name'=>Input::get('name'),
            'uid'=>$_SESSION['user']['uid'],
        );
//        DB::table('bucket')->insertGetId($bucket);
        return DB::table('bucket')->insertGetId($bucket);
    }

    public function getAddline()
    {
        $bucket = array(
            'poiid'=>Input::get('poi'),
            'bid'=>Input::get('bid'),
            'uid'=>$_SESSION['user']['uid'],
        );
//        DB::table('bucket')->insertGetId($bucket);
        return DB::table('line')->insertGetId($bucket);
    }
}