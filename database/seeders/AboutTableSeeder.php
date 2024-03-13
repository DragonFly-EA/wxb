<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $about = [
            [
                'title' => 'About RwandAir',
                'content' => '<p data-aos="fade-right">We began toperations on 1st December 2002 as the new national
                                carrier under the name Rwandair Express (passenger air transportation as the core
                                activity) for Rwanda with a concession to carry out airport ground handling (ancillary
                                activity) at Kigali International Airport. In March 2009, we registered a new trademark
                                “RwandAir” which is our current operating name.</p>

                            <p data-aos="fade-right">Operating from Kigali as our hub at the heart of Africa, RwandAir
                                is one of the fastest growing airlines and operates one of the youngest and state of the
                                art fleet on the African continent which comprises of four Boeing 737-800NG, two Boeing
                                737-700NG, two CRJ900NG, two Bombardier Q-400NG all in dual class configuration and two
                                new triple class Airbus A330.</p>

                            <p data-aos="fade-right">The airline, which is also well reputed for an excellent on time
                                performance, reaches out to twenty-two cities in Western,Central, Eastern and Southern
                                Africa, the Middle East, Asia and Europe.</p>

                            <p data-aos="fade-right">RwandAir is a member airline of the International Air
                                Transportation Association (IATA) , an EASA,IOSA and ISAGO certified operator.</p>',
                'title_2' => 'Accreditations',
                'content_1' => '<p>We’re proud to have been awarded Environmental Airline of the Year for 2022 and 2023
                                    in the Airline Excellence Awards.</p>',
                'content_2' => '<p>We’re proud to have been awarded Environmental Airline of the Year for 2022 and 2023
                                    in the Airline Excellence Awards.</p>',
                'banner'=>'images/about-us-banner.jpg',
                'banner_2'=>'images/accreditation-banner.png',
                'icon_1'=>'images/skytrax-award.png',
                'icon_2'=>'images/apex-award.png',
                'language'=>'en'
            ],
            [
                'title' => 'À propos de RwandaAir',
                'content' => '<p data-aos="fade-right">Nous avons débuté nos opérations le 1er décembre 2002 en tant que nouveau transporteur national sous le nom de Rwandair Express (transport aérien de passagers comme activité principale) pour le Rwanda avec une concession pour effectuer l`assistance au sol (activité auxiliaire) à l`aéroport international de Kigali. En mars 2009, nous avons enregistré une nouvelle marque &laquo;RwandAir&raquo; qui est notre nom commercial actuel.</p>

                            <p data-aos="fade-right">Opérant depuis Kigali comme hub au cœur de l`Afrique, RwandAir est l`une des compagnies aériennes à la croissance la plus rapide et exploite l`une des flottes les plus jeunes et les plus modernes du continent africain, composée de quatre Boeing 737-800NG et de deux Boeing 737-700NG. , deux CRJ900NG, deux Bombardier Q-400NG, tous en configuration double classe et deux nouveaux Airbus A330 triple classe.</p>

                            <p data-aos="fade-right">La compagnie aérienne, qui est également réputée pour son excellente ponctualité, dessert vingt-deux villes en Afrique occidentale, centrale, orientale et australe, au Moyen-Orient, en Asie et en Europe.</p>

                            <p data-aos="fade-right">RwandAir est une compagnie aérienne membre de l`Association du transport aérien international (IATA), opérateur certifié EASA, IOSA et ISAGO.</p>',
                'title_2' => 'Accréditations',
                'content_1' => '<p>Nous sommes fiers d`avoir été nommés Compagnie aérienne environnementale de l`année pour 2022 et 2023 lors des Airline Excellence Awards..</p>',
                'content_2' => '<p>Nous sommes fiers d`avoir été nommés Compagnie aérienne environnementale de l`année pour 2022 et 2023 lors des Airline Excellence Awards.</p>',
                'banner'=>'images/about-us-banner.jpg',
                'banner_2'=>'images/accreditation-banner.png',
                'icon_1'=>'images/skytrax-award.png',
                'icon_2'=>'images/apex-award.png',
                'language'=>'fr'
            ],
            [
                'title' => '关于卢旺达航空',
                'content' => '<p data-aos="fade-right">我们于 2002 年 12 月 1 日开始运营，作为卢旺达新的国家航空公司，名称为“卢旺达快运”（客运航空运输作为核心业务），并获得在基加利国际机场进行机场地面服务（辅助业务）的特许权。 2009年3月，我们注册了新商标“RwandAir”这是我们目前的经营名称。</p>

                            <p data-aos="fade-right">卢旺达航空以位于非洲中心的基加利为枢纽，是发展最快的航空公司之一，运营着非洲大陆最年轻、最先进的机队之一，其中包括四架波音 737-800NG、两架波音 737-700NG 、两架 CRJ900NG、两架庞巴迪 Q-400NG 均采用双舱配置，以及两架新型三舱空客 A330。</p>

                            <p data-aos="fade-right">该航空公司还因出色的准点表现而享有盛誉，其航班飞往西部、中部、东部和南部非洲、中东、亚洲和欧洲的 22 个城市。</p>

                            <p data-aos="fade-right">卢旺达航空是国际航空运输协会 (IATA) 的成员航空公司，也是 EASA、IOSA 和 ISAGO 认证的运营商。</p>',
                'title_2' => '认证',
                'content_1' => '<p>我们很荣幸在卓越航空公司奖中荣获 2022 年和 2023 年年度环保航空公司奖。</p>',
                'content_2' => '<p>我们很荣幸在卓越航空公司奖中荣获 2022 年和 2023 年年度环保航空公司奖。</p>',
                'banner'=>'images/about-us-banner.jpg',
                'banner_2'=>'images/accreditation-banner.png',
                'icon_1'=>'images/skytrax-award.png',
                'icon_2'=>'images/apex-award.png',
                'language'=>'cn'
            ]
        ];
         About::insert($about);
    }
}
