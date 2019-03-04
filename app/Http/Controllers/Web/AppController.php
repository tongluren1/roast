<?php
/**
 * Created by PhpStorm.
 * User: 20847
 * Date: 2019/2/25
 * Time: 22:06
 */

namespace app\Http\COntrollers\Web;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function getApp()
    {
        return view('login');
    }
}