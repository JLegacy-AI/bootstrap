<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HelpCenterCategories;
use App\HelpCenterContent;
use SebastianBergmann\Environment\Console;

class HelpCenterController extends Controller
{
    public function helpcenterfrontview(){
        $helpcenter['helpcentercategories'] = HelpCenterCategories::where('status', '=', '1')->get();
        $helpcenter['helpcentercontent'] = HelpCenterContent::with('helpcentercategory')->where('status', '=', '1')->get();
        return view('pages/help-center', $helpcenter);
    }
    public function helpcenterfrontviewsingle($maincat, $subcat){
        $getCategoryID = HelpCenterCategories::where('category_slug', '=', $maincat)->first()->category_id;
        $helpcenter['helpcentercontentall'] = HelpCenterContent::with('helpcentercategory')->where('status', '=', '1')->get();
        $helpcenter['helpcentercontentcount'] = HelpCenterContent::with('helpcentercategory')->where('status', '=', '1')->where('category_id', '=', $getCategoryID)->count();
        $helpcenter['helpcentercontent'] = HelpCenterContent::with('helpcentercategory')->where('slug', '=', $subcat)->first();
        return view('pages/help-center-single', $helpcenter);
    }
}
