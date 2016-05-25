<?php  namespace App\Http\Controllers;

use App\Page;

class PagesController extends Controller
{

    public function show()
    {
        //
        $show = Page::where('id',1);
        return $show;
    }
}