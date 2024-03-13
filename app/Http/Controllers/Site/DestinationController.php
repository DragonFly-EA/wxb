<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DestinationController extends Controller
{
    public function index($destination,$iata_code){
        $banner_url  = "https://wb.digilab.co.ke/img/".$iata_code.".lg.jpg";
        $check = $this->checkUrls($banner_url);
        if($check)
        {
            $banner_url = "https://wb.digilab.co.ke/images/London.jpg";
        }
        else{
            $banner_url = "https://wb.digilab.co.ke/img/".$iata_code.".lg.jpg";
        }
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        $destination_content = Http::get('https://flyingwithdragonfly.com/wp-content/themes/rwandairajax/destination_page_query.php',['municipality'=>$destination]);
        $requirements = $destination_content->body();
        return view('cms.destination',compact('menus','banner_url','destination','requirements'));

    }
    public function french($destination,$iata_code){
        $banner_url  = "https://wb.digilab.co.ke/img/".$iata_code.".lg.jpg";
        $check = $this->checkUrls($banner_url);
        if($check)
        {
            $banner_url = "https://wb.digilab.co.ke/images/London.jpg";
        }
        else{
            $banner_url = "https://wb.digilab.co.ke/img/".$iata_code.".lg.jpg";
        }
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        $destination_content = Http::get('https://flyingwithdragonfly.com/wp-content/themes/rwandairajax/destination_page_query.php',['municipality'=>$destination]);
        $requirements = $destination_content->body();
        return view('cms.french.destination',compact('menus','banner_url','destination','requirements'));

    }
    public function chinese($destination,$iata_code){
        $banner_url  = "https://wb.digilab.co.ke/img/".$iata_code.".lg.jpg";
        $check = $this->checkUrls($banner_url);
        if($check)
        {
            $banner_url = "https://wb.digilab.co.ke/images/London.jpg";
        }
        else{
            $banner_url = "https://wb.digilab.co.ke/img/".$iata_code.".lg.jpg";
        }
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        $destination_content = Http::get('https://flyingwithdragonfly.com/wp-content/themes/rwandairajax/destination_page_query.php',['municipality'=>$destination]);
        $requirements = $destination_content->body();
        return view('cms.chinese.destination',compact('menus','banner_url','destination','requirements'));
    }
    private function checkUrls($url){
        $headers = get_headers($url);
        $statusCode = isset($headers[0]) ? explode(' ', $headers[0])[1] : null;
        return $statusCode === '404';
    }
}
