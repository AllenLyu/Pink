<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 4/12/16
 * Time: 11:23 PM
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class artController extends Controller
{
    public function getIndex()
    {
        $art = DB::select('select * from artitle where artitleid='.Input::get('id'));
        view()->share("art", $art[0]);
        return view("artitle");
    }
}