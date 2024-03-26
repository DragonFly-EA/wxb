<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Spatie\Analytics\Facades\Analytics;

use Illuminate\Http\Request;
use Carbon;
use Spatie\Analytics\Period;
use Khill\Lavacharts\Lavacharts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
        $devices = Analytics::get(Period::days(365), (array)"activeUsers", (array)"deviceCategory");
        $active_devices = $devices->toArray();
        //  dd($active_devices);

        $activeDevices = 0;
        $device_keys = array_keys($active_devices);
        for($i=0, $iMax = count($active_devices); $i< $iMax; $i++)
        {
            $activeDevices+=$active_devices[$device_keys[$i]]['activeUsers'];
        }
        $topDevices = \Lava::DataTable();
        $topDevices->addStringColumn('Reason')
            ->addNumberColumn('Percent');
        $active_devices1 = $devices->toArray();
        $device_keys1 = array_keys($active_devices1);
        for($i=0, $iMax = count($active_devices1); $i< $iMax; $i++)
        {
            $topDevices->addRow([$active_devices1[$device_keys1[$i]]['deviceCategory'],($active_devices1[$device_keys1[$i]]['activeUsers']/$activeDevices)*100]);
        }
        \Lava::DonutChart('topDevices', $topDevices, [
            'title' => 'Top Devices'
        ]);
        //Active Users
        $active_data = Analytics::fetchTotalVisitorsAndPageViews(Period::days(365));
//        $active_data = Analytics::fetchVisitorsAndPageViewsByDate(Period::days(365));
        $active = $active_data->toArray();
        $activeUsers = 0;
        $keys_active  = array_keys($active);
        for($i=0, $iMax = count($active); $i< $iMax; $i++)
        {
            $activeUsers+=$active[$keys_active[$i]]['activeUsers'];
        }
        $activeChart = \Lava::DataTable();
        $activeChart->addStringColumn('Type')
            ->addNumberColumn('Value')
            ->addRow(['Users', $activeUsers]);
        \Lava::GaugeChart('Active', $activeChart, [
            'width'      => 400,
            'greenFrom'  => 0,
            'greenTo'    => 69,
            'yellowFrom' => 70,
            'yellowTo'   => 89,
            'redFrom'    => 90,
            'redTo'      => 100,
            'majorTicks' => [
                'Safe',
                'Critical'
            ]
        ]);

        /*
         * Top Browsers
         * */
        $browserData = Analytics::fetchTopBrowsers(Period::days(365));
        $browserResult = $browserData->toArray();
        //dd($browserData[0]);
        $totalBrowerData = 0;

        //Getting the total
        $keys = array_keys($browserResult);
        //dd($keys);
        for ($i = 0, $iMax = count($browserResult); $i < $iMax; $i++) {

            $totalBrowerData += $browserResult[$keys[$i]]['screenPageViews'];

        }
        $topBrowsers = \Lava::DataTable();
        $topBrowsers->addStringColumn('Reasons')
            ->addNumberColumn('Percent');
        //Displaying Graph values
        $browserResult1 = $browserData->toArray();
        $keys1 = array_keys($browserResult1);
        for ($i = 0, $iMax = count($browserResult1); $i < $iMax; $i++) {

            $topBrowsers->addRow([$browserResult1[$keys1[$i]]['browser'], ($browserResult1[$keys1[$i]]['screenPageViews'] / $totalBrowerData) * 100]);
        }
        \Lava::DonutChart('topBrowsers', $topBrowsers, [
            'title' => 'Top Browsers'
        ]);
        //
        $country = Analytics::fetchTopCountries(Period::days(365));
        $countryResult = $country->toArray();
        //dd($countryResult);
        $country_keys = array_keys($countryResult);
        $totalCountryData = 0;

        for($i=0, $iMax = count($countryResult); $i< $iMax; $i++)
        {
            $totalCountryData+=$countryResult[$country_keys[$i]]['screenPageViews'];
        }
        $topCountry = \Lava::DataTable();
        $topCountry->addStringColumn('Reasons')
            ->addNumberColumn('Percent');

        $countryKeys = array_keys($countryResult);
        for($i = 0, $iMax = count($countryResult); $i < $iMax; $i++) {

            $topCountry->addRow([$countryResult[$countryKeys[$i]]['country'],($countryResult[$countryKeys[$i]]['screenPageViews']/$totalCountryData)*100 ]);
        }

        \Lava::DonutChart('topCountries', $topCountry, [
            'title' => 'Top Countries'
        ]);
        //
        $countrySessions = \Lava::DataTable();

        $countrySessions->addStringColumn('Country')
            ->addNumberColumn('Page Views');
        for($i = 0, $iMax = count($countryResult); $i < $iMax; $i++) {
            $countrySessions->addRow([$countryResult[$countryKeys[$i]]['country'],$countryResult[$countryKeys[$i]]['screenPageViews']]);
        }

        \Lava::GeoChart('countrySessions', $countrySessions);
        //visitors

        $pageViewsAndVisitors = Analytics::fetchTotalVisitorsAndPageViews(Period::days(365))->toArray();
        //   dd($pageViewsAndVisitors);
        $visitKeys = array_keys($pageViewsAndVisitors);
        //visitors
        $pageVisitorsAnalytics = \Lava::DataTable();
        $pageVisitorsAnalytics->addDateColumn('Date')
            ->addNumberColumn('Visitors');
        for ($i = 0, $iMax = count($pageViewsAndVisitors); $i < $iMax; $i++) {

            $visitors = $pageViewsAndVisitors[$visitKeys[$i]]['activeUsers'];
            $date = date_format($pageViewsAndVisitors[$visitKeys[$i]]['date'], "d-m-Y");

            $pageVisitorsAnalytics->addRow([$date, $visitors]);
        }
        \Lava::LineChart('pageVisitorsAnalytics', $pageVisitorsAnalytics, [
            'title' => 'Web Visitors'
        ]);
        //page views
        $pageVisitorsAnalytics1 = \Lava::DataTable();
        $pageVisitorsAnalytics1->addDateColumn('Date')
            ->addNumberColumn('Page Views');
        for ($i = 0, $iMax = count($pageViewsAndVisitors); $i < $iMax; $i++) {
            $pageViews = $pageViewsAndVisitors[$visitKeys[$i]]['screenPageViews'];
            $date = date_format($pageViewsAndVisitors[$visitKeys[$i]]['date'], "d-m-Y");
            $pageVisitorsAnalytics1->addRow([$date, $pageViews]);
        }
        \Lava::LineChart('pageVisitorsAnalytics1', $pageVisitorsAnalytics1, [
            'title' => 'Page Views'
        ]);

        return view('home',compact('activeUsers'));
    }
    public function  performQuery()
    {

    }
}
