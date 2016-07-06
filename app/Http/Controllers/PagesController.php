<?php  namespace App\Http\Controllers;

use App\Page;

class PagesController extends Controller
{

    public function show()
    {

        $show = ['a' => 1,'b' => 2,'c' => 3];
        $r = array_get($show,'d',9);
        return $r;
    }
}