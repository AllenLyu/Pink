<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 4/10/16
 * Time: 6:02 PM
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class favorController extends Controller
{
    public function getAdd()
    {
        $favor = array(
            'fid'=>Input::get('id'),
            'type'=>Input::get('type'),
            'uid'=>$_SESSION['user']['uid'],
        );
        return DB::table('favor')->insertGetId($favor);

    }
}
