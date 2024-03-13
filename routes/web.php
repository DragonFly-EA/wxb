<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Admin\ValuesController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\SliderController;
use App\Http\Controllers\Site\AccessibilityController;
use App\Http\Controllers\Site\AwardsController;
use App\Http\Controllers\Site\BaggageController;
use App\Http\Controllers\Site\BookController;
use App\Http\Controllers\Site\BusinessClassController;
use App\Http\Controllers\Site\CareersController;
use App\Http\Controllers\Site\CheckInOnlineController;
use App\Http\Controllers\Site\ContractController;
use App\Http\Controllers\Site\CookiesController;
use App\Http\Controllers\Site\CuisineController;
use App\Http\Controllers\Site\DestinationController;
use App\Http\Controllers\Site\DreammilesController;
use App\Http\Controllers\Site\DutyFreeController;
use App\Http\Controllers\Site\EconomyController;
use App\Http\Controllers\Site\FaqsController;
use App\Http\Controllers\Site\FaresController;
use App\Http\Controllers\Site\FleetController;
use App\Http\Controllers\Site\HelpCenterController;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Site\InflightEntertainmentController;
use App\Http\Controllers\Site\InzoziController;
use App\Http\Controllers\Site\LegalController;
use App\Http\Controllers\Site\LougesController;
use App\Http\Controllers\Site\MediaCenterController;
use App\Http\Controllers\Site\MediaInformationController;
use App\Http\Controllers\Site\NewsLetterOfferController;
use App\Http\Controllers\Site\NewsLetterPreferenceController;
use App\Http\Controllers\Site\NewsLetterUnsuscribeController;
use App\Http\Controllers\Site\OffersController;
use App\Http\Controllers\Site\OnlineFraudController;
use App\Http\Controllers\Site\OnlineServicesController;
use App\Http\Controllers\Site\PartnershipController;
use App\Http\Controllers\Site\PaymentOptionsController;
use App\Http\Controllers\Site\PrivacyPolicyController;
use App\Http\Controllers\Site\RouteMapController;
use App\Http\Controllers\Site\SearchController;
use App\Http\Controllers\Site\SeatController;
use App\Http\Controllers\Site\SingleCareerController;
use App\Http\Controllers\Site\SingleFleetController;
use App\Http\Controllers\Site\SingleFleetEntertainmentController;
use App\Http\Controllers\Site\SingleHelpCenterController;
use App\Http\Controllers\Site\SingleMediaCenterController;
use App\Http\Controllers\Site\SingleTravelInformationController;
use App\Http\Controllers\Site\SitemapController;
use App\Http\Controllers\Site\SpecialAssistanceController;
use App\Http\Controllers\Site\SustainabilityController;
use App\Http\Controllers\Site\TermsController;
use App\Http\Controllers\Site\TravelInformationController;
use App\Http\Controllers\Site\TravelInsuranceController;
use App\Http\Controllers\Site\TravelRequirementsController;
use App\Http\Controllers\Site\WifiController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\BaggageController as AdminBaggageController;
use App\Http\Controllers\Admin\FleetController as AdminFleetController;
use App\Http\Controllers\Admin\PartnershipController as AdminPartnershipController;
use  App\Http\Controllers\Admin\AccessibilityController as AdminAccessibilityController;
use App\Http\Controllers\Admin\MedicalInformationController as AdminMedicalInformationController;
use App\Http\Controllers\Admin\PaymentOptionsController as AdminPaymentOptionsController;
use App\Http\Controllers\Admin\SpecialAssistanceController as AdminSpecialAssistanceController;
use App\Http\Controllers\Admin\TravelInsuranceController as AdmimTravelInsuranceController;
use App\Http\Controllers\Admin\CheckInOnlineController as AdminCheckInOnlineController;
use App\Http\Controllers\Admin\SeatController as AdminSeatController;
use App\Http\Controllers\Admin\FaqsController as AdminFaqsController;
use App\Http\Controllers\Admin\SustainabilityController as AdminSustainabilityController;
use App\Http\Controllers\Admin\CareersController as AdminCareersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test1');
});

Route::group(['prefix' => '/cn'], function () {
    Route::get('/about', [AboutController::class, 'chinese']);
    Route::get('/accessibility', [AccessibilityController::class, 'chinese']);
    Route::get('/sustainability', [SustainabilityController::class, 'chinese']);
    Route::get('/awards', [AwardsController::class, 'chinese']);
    Route::get('/baggage', [BaggageController::class, 'chinese']);
    Route::get('/book', [BookController::class, 'chinese']);
    Route::get('/business-class', [BusinessClassController::class, 'chinese']);
    Route::get('/careers', [CareersController::class, 'chinese']);
    Route::get('/checkin-online', [CheckInOnlineController::class, 'chinese']);
    Route::get('/contract', [ContractController::class, 'chinese']);
    Route::get('/cookies', [CookiesController::class, 'chinese']);
    Route::get('/cuisine', [CuisineController::class, 'chinese']);
    Route::get('/destination/{destination}/{iata_code}', [DestinationController::class, 'chinese']);
    Route::get('/dreammiles', [DreammilesController::class, 'chinese']);
    Route::get('/duty-free', [DutyFreeController::class, 'chinese']);
    Route::get('/economy', [EconomyController::class, 'chinese']);
    Route::get('/faqs', [FaqsController::class, 'chinese']);
    Route::get('/fares', [FaresController::class, 'chinese']);
    Route::get('/fleet', [FleetController::class, 'chinese']);
    Route::get('/fleet/{slug}', [FleetController::class, 'view']);
    Route::get('/help-center', [HelpCenterController::class, 'chinese']);
    Route::get('/', [IndexController::class, 'chinese']);
    Route::get('/inflight-entertainment', [InflightEntertainmentController::class, 'chinese']);
    Route::get('/inzozi', [InzoziController::class, 'chinese']);
    Route::get('/legal', [LegalController::class, 'chinese']);
    Route::get('/lounges', [LougesController::class, 'chinese']);
    Route::get('/media-center', [MediaCenterController::class, 'chinese']);
    Route::get('/medical-information', [MediaInformationController::class, 'chinese']);
    Route::get('/newsletter-offers', [NewsLetterOfferController::class, 'index']);
    Route::get('/newsletter-preference', [NewsLetterPreferenceController::class, 'chinese']);
    Route::get('/newsletter-unsubscribe', [NewsLetterUnsuscribeController::class, 'chinese']);
    Route::get('/offers', [OffersController::class, 'chinese']);
    Route::get('/offers/{offer}', [OffersController::class, 'view']);
    Route::get('/online-fraud', [OnlineFraudController::class, 'chinese']);
    Route::get('/online-services', [OnlineServicesController::class, 'chinese']);
    Route::get('/partnership', [PartnershipController::class, 'chinese']);
    Route::get('/payment-options', [PaymentOptionsController::class, 'chinese']);
    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'chinese']);
    Route::get('/route-map', [RouteMapController::class, 'chinese']);
    Route::get('/search', [SearchController::class, 'chinese']);
    Route::get('/search/results/{search}', [SearchController::class, 'search']);
    Route::get('/seat', [SeatController::class, 'chinese']);
    Route::get('/single-career', [SingleCareerController::class, 'chinese']);
    Route::get('/single-fleet-entertainment', [SingleFleetEntertainmentController::class, 'chinese']);
    Route::get('/single-fleet', [SingleFleetController::class, 'chinese']);
    Route::get('/single-help-center', [SingleHelpCenterController::class, 'chinese']);
    Route::get('/single-media-center', [SingleMediaCenterController::class, 'chinese']);
    Route::get('/single-travel-information', [SingleTravelInformationController::class, 'chinese']);
    Route::get('/sitemap', [SitemapController::class, 'chinese']);
    Route::get('/special-assistance', [SpecialAssistanceController::class, 'chinese']);
    Route::get('/terms', [TermsController::class, 'chinese']);
    Route::get('/travel-information', [TravelInformationController::class, 'chinese']);
    Route::get('/travel-insurance', [TravelInsuranceController::class, 'chinese']);
    Route::get('/travel-requirements', [TravelRequirementsController::class, 'chinese']);
    Route::get('/wifi', [WifiController::class, 'chinese']);
});
Route::group(['prefix' => '/fr'], function () {
    Route::get('/about', [AboutController::class, 'french']);
    Route::get('/accessibility', [AccessibilityController::class, 'french']);
    Route::get('/sustainability', [SustainabilityController::class, 'french']);
    Route::get('/awards', [AwardsController::class, 'french']);
    Route::get('/baggage', [BaggageController::class, 'french']);
    Route::get('/book', [BookController::class, 'french']);
    Route::get('/business-class', [BusinessClassController::class, 'french']);
    Route::get('/careers', [CareersController::class, 'french']);
    Route::get('/checkin-online', [CheckInOnlineController::class, 'french']);
    Route::get('/contract', [ContractController::class, 'french']);
    Route::get('/cookies', [CookiesController::class, 'french']);
    Route::get('/cuisine', [CuisineController::class, 'french']);
    Route::get('/destination/{destination}/{iata_code}', [DestinationController::class, 'french']);
    Route::get('/dreammiles', [DreammilesController::class, 'french']);
    Route::get('/duty-free', [DutyFreeController::class, 'french']);
    Route::get('/economy', [EconomyController::class, 'french']);
    Route::get('/faqs', [FaqsController::class, 'french']);
    Route::get('/fares', [FaresController::class, 'french']);
    Route::get('/fleet', [FleetController::class, 'french']);
    Route::get('/fleet/{slug}', [FleetController::class, 'view']);
    Route::get('/help-center', [HelpCenterController::class, 'french']);
    Route::get('/', [IndexController::class, 'french']);
    Route::get('/inflight-entertainment', [InflightEntertainmentController::class, 'french']);
    Route::get('/inzozi', [InzoziController::class, 'french']);
    Route::get('/legal', [LegalController::class, 'french']);
    Route::get('/lounges', [LougesController::class, 'french']);
    Route::get('/media-center', [MediaCenterController::class, 'french']);
    Route::get('/medical-information', [MediaInformationController::class, 'french']);
    Route::get('/newsletter-offers', [NewsLetterOfferController::class, 'french']);
    Route::get('/newsletter-preference', [NewsLetterPreferenceController::class, 'french']);
    Route::get('/newsletter-unsubscribe', [NewsLetterUnsuscribeController::class, 'french']);
    Route::get('/offers', [OffersController::class, 'french']);
    Route::get('/offers/{offer}', [OffersController::class, 'view']);
    Route::get('/online-fraud', [OnlineFraudController::class, 'french']);
    Route::get('/online-services', [OnlineServicesController::class, 'french']);
    Route::get('/partnership', [PartnershipController::class, 'french']);
    Route::get('/payment-options', [PaymentOptionsController::class, 'french']);
    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'french']);
    Route::get('/route-map', [RouteMapController::class, 'french']);
    Route::get('/search', [SearchController::class, 'french']);
    Route::get('/search/results/{search}', [SearchController::class, 'search']);
    Route::get('/seat', [SeatController::class, 'french']);
    Route::get('/single-career', [SingleCareerController::class, 'french']);
    Route::get('/single-fleet-entertainment', [SingleFleetEntertainmentController::class, 'french']);
    Route::get('/single-fleet', [SingleFleetController::class, 'french']);
    Route::get('/single-help-center', [SingleHelpCenterController::class, 'french']);
    Route::get('/single-media-center', [SingleMediaCenterController::class, 'french']);
    Route::get('/single-travel-information', [SingleTravelInformationController::class, 'french']);
    Route::get('/sitemap', [SitemapController::class, 'french']);
    Route::get('/special-assistance', [SpecialAssistanceController::class, 'french']);
    Route::get('/terms', [TermsController::class, 'french']);
    Route::get('/travel-information', [TravelInformationController::class, 'french']);
    Route::get('/travel-insurance', [TravelInsuranceController::class, 'french']);
    Route::get('/travel-requirements', [TravelRequirementsController::class, 'french']);
    Route::get('/wifi', [WifiController::class, 'french']);
});
Route::group(['prefix' => '/'], function () {
    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/accessibility', [AccessibilityController::class, 'index']);
    Route::get('/awards', [AwardsController::class, 'index']);
    Route::get('/baggage', [BaggageController::class, 'index']);
    Route::get('/book', [BookController::class, 'index']);
    Route::get('/business-class', [BusinessClassController::class, 'index']);
    Route::get('/careers', [CareersController::class, 'index']);
    Route::get('/checkin-online', [CheckInOnlineController::class, 'index']);
    Route::get('/contract', [ContractController::class, 'index']);
    Route::get('/cookies', [CookiesController::class, 'index']);
    Route::get('/cuisine', [CuisineController::class, 'index']);
    Route::get('/destination/{destination}/{iata_code}', [DestinationController::class, 'index']);
    Route::get('/dreammiles', [DreammilesController::class, 'index']);
    Route::get('/duty-free', [DutyFreeController::class, 'index']);
    Route::get('/economy', [EconomyController::class, 'index']);
    Route::get('/faqs', [FaqsController::class, 'index']);
    Route::get('/fares', [FaresController::class, 'index']);
    Route::get('/fleet', [FleetController::class, 'index']);
    Route::get('/fleet/{slug}', [FleetController::class, 'view']);
    Route::get('/help-center', [HelpCenterController::class, 'index']);
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/inflight-entertainment', [InflightEntertainmentController::class, 'index']);
    Route::get('/inzozi', [InzoziController::class, 'index']);
    Route::get('/legal', [LegalController::class, 'index']);
    Route::get('/lounges', [LougesController::class, 'index']);
    Route::get('/media-center', [MediaCenterController::class, 'index']);
    Route::get('/medical-information', [MediaInformationController::class, 'index']);
    Route::get('/newsletter-offers', [NewsLetterOfferController::class, 'index']);
    Route::get('/newsletter-preference', [NewsLetterPreferenceController::class, 'index']);
    Route::get('/newsletter-unsubscribe', [NewsLetterUnsuscribeController::class, 'index']);
    Route::get('/offers', [OffersController::class, 'index']);
    Route::get('/offers/{offer}', [OffersController::class, 'view']);
    Route::get('/online-fraud', [OnlineFraudController::class, 'index']);
    Route::get('/online-services', [OnlineServicesController::class, 'index']);
    Route::get('/partnership', [PartnershipController::class, 'index']);
    Route::get('/payment-options', [PaymentOptionsController::class, 'index']);
    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index']);
    Route::get('/route-map', [RouteMapController::class, 'index']);
    Route::get('/search', [SearchController::class, 'index']);
    Route::get('/search/results/{search}', [SearchController::class, 'search']);
    Route::get('/seat', [SeatController::class, 'index']);
    Route::get('/single-career', [SingleCareerController::class, 'index']);
    Route::get('/single-fleet-entertainment', [SingleFleetEntertainmentController::class, 'index']);
    Route::get('/single-fleet', [SingleFleetController::class, 'index']);
    Route::get('/single-help-center', [SingleHelpCenterController::class, 'index']);
    Route::get('/single-media-center', [SingleMediaCenterController::class, 'index']);
    Route::get('/single-travel-information', [SingleTravelInformationController::class, 'index']);
    Route::get('/sitemap', [SitemapController::class, 'index']);
    Route::get('/special-assistance', [SpecialAssistanceController::class, 'index']);
    Route::get('/sustainability', [SustainabilityController::class, 'index']);
    Route::get('/terms', [TermsController::class, 'index']);
    Route::get('/travel-information', [TravelInformationController::class, 'index']);
    Route::get('/travel-insurance', [TravelInsuranceController::class, 'index']);
    Route::get('/travel-requirements', [TravelRequirementsController::class, 'index']);
    Route::get('/wifi', [WifiController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/destination/{id}', [App\Http\Controllers\HomeController::class, 'destination']);
/*
 * Sliders
 * */
Route::group(['prefix' => 'sliders'], function () {
    Route::get('/', [SliderController::class, 'index']);
    Route::post('/store', [SliderController::class, 'store']);
    Route::post('/update/{id}', [SliderController::class, 'update']);
    Route::delete('/delete/{id}', [SliderController::class, 'delete']);

});
/**
 * Menu
 */
Route::group(['prefix' => 'menus'], function () {
    Route::get('/', [MenuController::class, 'index']);
    Route::post('/store', [MenuController::class, 'store']);
    Route::get('/menu_title/{id}', [MenuController::class, 'getMenuTitle']);
    Route::post('/store/sub_menus', [MenuController::class, 'storeSubMenu']);
});

/*
 * Values
 * */
Route::group(['prefix' => 'values'], function () {
    Route::get('/', [ValuesController::class, 'index']);
    Route::post('/store', [ValuesController::class, 'store']);
    Route::post('/update', [ValuesController::class, 'update']);
    Route::get('/delete/{id}', [ValuesController::class, 'delete']);
});
Route::group(['prefix' => 'cms'], function () {
    //About
    Route::get('about', [AdminAboutController::class, 'index']);
    Route::post('about/update', [AdminAboutController::class, 'update']);
    //Baggage
    Route::get('baggage', [AdminBaggageController::class, 'index']);
    Route::post('baggage/update', [AdminBaggageController::class, 'update']);
    //Partnership
    Route::get('partnership', [AdminPartnershipController::class, 'index']);
    Route::post('partnership/update', [AdminPartnershipController::class, 'update']);
    // Accessibility
    Route::get('accessibility', [AdminAccessibilityController::class, 'index']);
    Route::post('accessibility/update', [AdminAccessibilityController::class, 'update']);
    //Fleet
    Route::group(['prefix'=>'fleet'],function (){
        Route::get('/', [AdminFleetController::class, 'index']);
        Route::post('/store', [AdminFleetController::class, 'store']);
        Route::post('/update/{id}', [AdminFleetController::class, 'update']);
        Route::delete('/delete/{id}', [AdminFleetController::class, 'delete']);
    });
    // MedicalInfo
    Route::get('medical-information', [AdminMedicalInformationController::class, 'index']);
    Route::post('medical-information/update', [AdminMedicalInformationController::class, 'update']);
    // paymentInfo
    Route::get('payment-option', [AdminPaymentOptionsController::class, 'index']);
    Route::post('payment-option/update', [AdminPaymentOptionsController::class, 'update']);
    // specialAssistance
    Route::get('special-assistance', [AdminSpecialAssistanceController::class, 'index']);
    Route::post('special-assistance/update', [AdminSpecialAssistanceController::class, 'update']);
    //travelInsurance
    Route::get('travel-insurance', [AdmimTravelInsuranceController::class, 'index']);
    Route::post('travel-insurance/update', [AdmimTravelInsuranceController::class, 'update']);
    // Check In Online
    Route::get('check-online', [AdminCheckInOnlineController::class, 'index']);
    Route::post('check-online/update', [AdminCheckInOnlineController::class, 'update']);
    // Seat
    Route::get('seat', [AdminSeatController::class, 'index']);
    Route::post('seat/update', [AdminSeatController::class, 'update']);
    //Faqs
    Route::get('faqs', [AdminFaqsController::class, 'index']);
    //sustainability
    Route::get('sustainability', [AdminSustainabilityController::class, 'index']);
    Route::post('update/sustainability', [AdminSustainabilityController::class, 'index']);

    /*
     * Careers
     * */
    Route::group(['prefix'=>'careers'],function (){
        Route::get('/',[AdminCareersController::class,'index']);
        Route::post('/store',[AdminCareersController::class,'store']);
    });

});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['prefix'=>'users'],function (){
    Route::get('/',[UserController::class,'index']);
    Route::get('/view/{id}',[UserController::class,'view']);
    Route::post('/store',[UserController::class,'store']);
    Route::post('/update',[UserController::class,'update']);
    Route::post('/updatePassword',[UserController::class,'updatePassword']);

});

