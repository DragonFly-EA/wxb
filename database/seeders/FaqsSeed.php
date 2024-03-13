<?php

namespace Database\Seeders;

use App\Models\Faqs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faq = [
            [
                'image1' => 'images/imigongo-new.jpg',
                'header1' => 'FAQs',
                'content1' => '<div class="container-rigid">
                    <div class="faqs-wrapper">
                        <div id="parentVerticalTab">
                            <ul class="resp-tabs-list hor_1">
                                <li data-aos="fade-right">Reservation</li>
                                <li data-aos="fade-right">Check-in information</li>
                                <li data-aos="fade-right">On-board</li>
                                <li data-aos="fade-right">For flights to the United Kingdom</li>
                                <li data-aos="fade-right">About Rwandair</li>
                            </ul>
                            <div class="resp-tabs-container hor_1" data-aos="fade-left">
                                <div>
                                    <div class="details-group">
                                        <details class="details" open>
                                          <summary class="details__summary">
                                           How can I make a reservation?
                                          </summary>
                                          <div class="details__content">
                                            <p>You can make reservation through RwandAir Sales Offices, authorized Travel agencies, Our Call Center (International calls: +250788177000 Local calls: 3030) and via our web site; www.rwandair.com.</p>
                                          </div>
                                        </details>
                                        <details class="details">
                                          <summary class="details__summary">What does “class” stand for?</summary>
                                          <div class="details__content">
                                            <p>Class represents the reserved capacity groups for the various fares differentiated by minimum stay time at the destination point, time of purchase of the ticket among others, even though there is no difference in the cabin, service, or seat quality in the same cabin.</p>
                                          </div>
                                        </details>
                                        <details class="details">
                                          <summary class="details__summary">What are the reasons of class differences?</summary>
                                          <div class="details__content">
                                            <p>Even though there is no difference in the cabin or service quality or seat quality in the same cabin, there are class differences caused by minimum stay time at the destination point and time of purchaseof the ticket among others</p>
                                          </div>
                                        </details>
                                        <details class="details">
                                          <summary class="details__summary">Why are there available seats for higher fare classes and no available seats for the low fare classes on the flights I prefer? And why is there a difference among some fares?</summary>
                                          <div class="details__content">
                                            <p>Even though there is no difference in the service or seat quality for the same cabin, various fares are applied on our flights and are differentiated by minimum stay time at the destination point and the time ofpurchase of the ticket among others. Different capacities may be reserved for the classes of these differentiated fares on our flights considering the statistics. The capacity of a class for any of the fares may be sold out due to excess demand but at the same time there may be available seats in the other classes for various fares.</p>
                                            <p>In other words these fares are subject to seat availability and can only available if they haven’t been booked already.</p>
                                          </div>
                                        </details>
                                        <details class="details" >
                                          <summary class="details__summary">
                                           What is a code-share flight?
                                          </summary>
                                          <div class="details__content">
                                            <p>A flight operated by another airline for which RwandAir has an agreement to sell seats using the “WB” airline code.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Will I be notified in case my flight is cancelled?</summary>
                                          <div class="details__content">
                                            <p>Our relevant departments will contact you via the phone number that you provided during your reservation to advise the cancellation and offer alternative flights if required. You may also be informed by e-mail or through you travel agent.</p>
                                          </div>
                                        </details>


                                    </div>

                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                           What time should I arrive at the airport?
                                          </summary>
                                          <div class="details__content">
                                            <p>For international flights, it is recommended to arrive at airport 4 (four) hours before the scheduled departure time of your flight. For domestic flights this duration is 3 (three) hour.</p>

                                            <p>Check-in counters close 60 minutes before departure for domestic flights and 90 minutes before departure for international flights.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">What is the purpose of checking the passengers passports and visas?</summary>
                                          <div class="details__content">
                                            <p>According to aviation rules; passengers are responsible to get information and valid documents of the country where they travel to. Passport-Visa checks are controlled at the time of check-in and during boarding. The aim of these checks is to prevent passengers from traveling with invalid/faulty visas or passports hence preventing them from deportation and paying steep penalties.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Do you have control “ID check” for domestic flights?</summary>
                                          <div class="details__content">
                                            <p>Yes. Passengers have to carry their identification card, driving license or passport with them.</p>
                                          </div>
                                        </details>

                                    </div>

                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                            Can I smoke in the aircraft?
                                          </summary>
                                          <div class="details__content">
                                            <p>All RwandAir flights are Non-smoking flights.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Can I sit by the window?</summary>
                                          <div class="details__content">
                                            <p>Seat request must be made to the boarding staff while at check-in, during online booking, through the call center or at our offices while making your booking</p>
                                          </div>
                                        </details>

                                        <details class="details" >
                                          <summary class="details__summary">
                                            Can I use the lavatory in business class section?
                                          </summary>
                                          <div class="details__content">
                                            <p>When business class passengers are on board the lavatory is used by the business class passengers only.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Can I sit in the business class section?</summary>
                                          <div class="details__content">
                                            <p>Since business class is a different class and a different airfare is paid for its ticket, the cabin attendant has no authority to upgrade economy class passengers.</p>
                                          </div>
                                        </details>

                                        <details class="details" >
                                          <summary class="details__summary">
                                            Why can’t I sit together with my family?
                                          </summary>
                                          <div class="details__content">
                                            <p>You need to make your request at reservation. (At the sales office, via the call center, on the website for online booking or through your travel agent in case you use one.) Requests made at the check-in point are subject to availability of the seats left in the aircraft.</p>
                                          </div>
                                        </details>



                                        <details class="details">
                                          <summary class="details__summary">Why are we still waiting for the aircraft to take off?</summary>
                                          <div class="details__content">
                                            <ul>
                                              <li>Due To: The Late Arrival Of A Connecting Flight</li>
                                              <li>Restrictions of Air Traffic</li>
                                              <li>A Last Minute Technical Incident</li>
                                              <li>Operational Reasons</li>
                                              <li>Security Check</li>
                                              <li>Baggage Loading</li>
                                              <li>Weather Conditions</li>
                                              <li>Slow Down</li>
                                              <li>Strike</li>
                                            </ul>
                                          </div>
                                        </details>


                                    </div>
                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                            Do you share my booking information (PNR data) with the UK’s home office?
                                          </summary>
                                          <div class="details__content">
                                            <p>Yes. For more information setting out how PNR data is acquired; what PNR data is used for; how PNR data is protected; how PNR data might be used or transferred, individuals’ data protection rights and contact information click here</p>
                                          </div>
                                        </details>

                                    </div>
                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                            Where can I find out more about Rwandair
                                          </summary>
                                          <div class="details__content">
                                            <p>The Rwandair website is a fantastic resource for learning more about Rwanda, and can help you to get the most out of your stay.</p>
                                          </div>
                                        </details>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="important-information">

                            <h4>Important information about Covid</h4>

                            <p>We have shared information about the hotel bookings, emergency contacts and more with all customers at their registered email addresses. In case you have not received any communication, please check your junk and spam folders.</p>

                            <p>We have shared information about the hotel bookings, emergency contacts and more with all customers at their registered email addresses. In case you have not received any communication, please check your junk and spam folders.</p>

                            <p>We have shared information about the hotel bookings, emergency contacts and more with all customers at their registered email addresses. In case you have not received any communication, please check your junk and spam folders.</p>

                        </div>


                    </div>

            </div>',
                'language' => 'en'
            ],
            [
                'image1' => 'images/imigongo-new.jpg',
                'header1' => 'FAQs',
                'content1' => '<div class="container-rigid">
                    <div class="faqs-wrapper">
                        <div id="parentVerticalTab">
                            <ul class="resp-tabs-list hor_1">
                                <li data-aos="fade-right">Reservation</li>
                                <li data-aos="fade-right">Check-in information</li>
                                <li data-aos="fade-right">On-board</li>
                                <li data-aos="fade-right">For flights to the United Kingdom</li>
                                <li data-aos="fade-right">About Rwandair</li>
                            </ul>
                            <div class="resp-tabs-container hor_1" data-aos="fade-left">
                                <div>
                                    <div class="details-group">
                                        <details class="details" open>
                                          <summary class="details__summary">
                                           How can I make a reservation?
                                          </summary>
                                          <div class="details__content">
                                            <p>You can make reservation through RwandAir Sales Offices, authorized Travel agencies, Our Call Center (International calls: +250788177000 Local calls: 3030) and via our web site; www.rwandair.com.</p>
                                          </div>
                                        </details>
                                        <details class="details">
                                          <summary class="details__summary">What does “class” stand for?</summary>
                                          <div class="details__content">
                                            <p>Class represents the reserved capacity groups for the various fares differentiated by minimum stay time at the destination point, time of purchase of the ticket among others, even though there is no difference in the cabin, service, or seat quality in the same cabin.</p>
                                          </div>
                                        </details>
                                        <details class="details">
                                          <summary class="details__summary">What are the reasons of class differences?</summary>
                                          <div class="details__content">
                                            <p>Even though there is no difference in the cabin or service quality or seat quality in the same cabin, there are class differences caused by minimum stay time at the destination point and time of purchaseof the ticket among others</p>
                                          </div>
                                        </details>
                                        <details class="details">
                                          <summary class="details__summary">Why are there available seats for higher fare classes and no available seats for the low fare classes on the flights I prefer? And why is there a difference among some fares?</summary>
                                          <div class="details__content">
                                            <p>Even though there is no difference in the service or seat quality for the same cabin, various fares are applied on our flights and are differentiated by minimum stay time at the destination point and the time ofpurchase of the ticket among others. Different capacities may be reserved for the classes of these differentiated fares on our flights considering the statistics. The capacity of a class for any of the fares may be sold out due to excess demand but at the same time there may be available seats in the other classes for various fares.</p>
                                            <p>In other words these fares are subject to seat availability and can only available if they haven’t been booked already.</p>
                                          </div>
                                        </details>
                                        <details class="details" >
                                          <summary class="details__summary">
                                           What is a code-share flight?
                                          </summary>
                                          <div class="details__content">
                                            <p>A flight operated by another airline for which RwandAir has an agreement to sell seats using the “WB” airline code.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Will I be notified in case my flight is cancelled?</summary>
                                          <div class="details__content">
                                            <p>Our relevant departments will contact you via the phone number that you provided during your reservation to advise the cancellation and offer alternative flights if required. You may also be informed by e-mail or through you travel agent.</p>
                                          </div>
                                        </details>


                                    </div>

                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                           What time should I arrive at the airport?
                                          </summary>
                                          <div class="details__content">
                                            <p>For international flights, it is recommended to arrive at airport 4 (four) hours before the scheduled departure time of your flight. For domestic flights this duration is 3 (three) hour.</p>

                                            <p>Check-in counters close 60 minutes before departure for domestic flights and 90 minutes before departure for international flights.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">What is the purpose of checking the passengers passports and visas?</summary>
                                          <div class="details__content">
                                            <p>According to aviation rules; passengers are responsible to get information and valid documents of the country where they travel to. Passport-Visa checks are controlled at the time of check-in and during boarding. The aim of these checks is to prevent passengers from traveling with invalid/faulty visas or passports hence preventing them from deportation and paying steep penalties.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Do you have control “ID check” for domestic flights?</summary>
                                          <div class="details__content">
                                            <p>Yes. Passengers have to carry their identification card, driving license or passport with them.</p>
                                          </div>
                                        </details>

                                    </div>

                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                            Can I smoke in the aircraft?
                                          </summary>
                                          <div class="details__content">
                                            <p>All RwandAir flights are Non-smoking flights.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Can I sit by the window?</summary>
                                          <div class="details__content">
                                            <p>Seat request must be made to the boarding staff while at check-in, during online booking, through the call center or at our offices while making your booking</p>
                                          </div>
                                        </details>

                                        <details class="details" >
                                          <summary class="details__summary">
                                            Can I use the lavatory in business class section?
                                          </summary>
                                          <div class="details__content">
                                            <p>When business class passengers are on board the lavatory is used by the business class passengers only.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Can I sit in the business class section?</summary>
                                          <div class="details__content">
                                            <p>Since business class is a different class and a different airfare is paid for its ticket, the cabin attendant has no authority to upgrade economy class passengers.</p>
                                          </div>
                                        </details>

                                        <details class="details" >
                                          <summary class="details__summary">
                                            Why can’t I sit together with my family?
                                          </summary>
                                          <div class="details__content">
                                            <p>You need to make your request at reservation. (At the sales office, via the call center, on the website for online booking or through your travel agent in case you use one.) Requests made at the check-in point are subject to availability of the seats left in the aircraft.</p>
                                          </div>
                                        </details>



                                        <details class="details">
                                          <summary class="details__summary">Why are we still waiting for the aircraft to take off?</summary>
                                          <div class="details__content">
                                            <ul>
                                              <li>Due To: The Late Arrival Of A Connecting Flight</li>
                                              <li>Restrictions of Air Traffic</li>
                                              <li>A Last Minute Technical Incident</li>
                                              <li>Operational Reasons</li>
                                              <li>Security Check</li>
                                              <li>Baggage Loading</li>
                                              <li>Weather Conditions</li>
                                              <li>Slow Down</li>
                                              <li>Strike</li>
                                            </ul>
                                          </div>
                                        </details>


                                    </div>
                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                            Do you share my booking information (PNR data) with the UK’s home office?
                                          </summary>
                                          <div class="details__content">
                                            <p>Yes. For more information setting out how PNR data is acquired; what PNR data is used for; how PNR data is protected; how PNR data might be used or transferred, individuals’ data protection rights and contact information click here</p>
                                          </div>
                                        </details>

                                    </div>
                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                            Where can I find out more about Rwandair
                                          </summary>
                                          <div class="details__content">
                                            <p>The Rwandair website is a fantastic resource for learning more about Rwanda, and can help you to get the most out of your stay.</p>
                                          </div>
                                        </details>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="important-information">

                            <h4>Important information about Covid</h4>

                            <p>We have shared information about the hotel bookings, emergency contacts and more with all customers at their registered email addresses. In case you have not received any communication, please check your junk and spam folders.</p>

                            <p>We have shared information about the hotel bookings, emergency contacts and more with all customers at their registered email addresses. In case you have not received any communication, please check your junk and spam folders.</p>

                            <p>We have shared information about the hotel bookings, emergency contacts and more with all customers at their registered email addresses. In case you have not received any communication, please check your junk and spam folders.</p>

                        </div>


                    </div>

            </div>',
                'language' => 'fr'
            ],
            [
                'image1' => 'images/imigongo-new.jpg',
                'header1' => 'FAQs',
                'content1' => '<div class="container-rigid">
                    <div class="faqs-wrapper">
                        <div id="parentVerticalTab">
                            <ul class="resp-tabs-list hor_1">
                                <li data-aos="fade-right">Reservation</li>
                                <li data-aos="fade-right">Check-in information</li>
                                <li data-aos="fade-right">On-board</li>
                                <li data-aos="fade-right">For flights to the United Kingdom</li>
                                <li data-aos="fade-right">About Rwandair</li>
                            </ul>
                            <div class="resp-tabs-container hor_1" data-aos="fade-left">
                                <div>
                                    <div class="details-group">
                                        <details class="details" open>
                                          <summary class="details__summary">
                                           How can I make a reservation?
                                          </summary>
                                          <div class="details__content">
                                            <p>You can make reservation through RwandAir Sales Offices, authorized Travel agencies, Our Call Center (International calls: +250788177000 Local calls: 3030) and via our web site; www.rwandair.com.</p>
                                          </div>
                                        </details>
                                        <details class="details">
                                          <summary class="details__summary">What does “class” stand for?</summary>
                                          <div class="details__content">
                                            <p>Class represents the reserved capacity groups for the various fares differentiated by minimum stay time at the destination point, time of purchase of the ticket among others, even though there is no difference in the cabin, service, or seat quality in the same cabin.</p>
                                          </div>
                                        </details>
                                        <details class="details">
                                          <summary class="details__summary">What are the reasons of class differences?</summary>
                                          <div class="details__content">
                                            <p>Even though there is no difference in the cabin or service quality or seat quality in the same cabin, there are class differences caused by minimum stay time at the destination point and time of purchaseof the ticket among others</p>
                                          </div>
                                        </details>
                                        <details class="details">
                                          <summary class="details__summary">Why are there available seats for higher fare classes and no available seats for the low fare classes on the flights I prefer? And why is there a difference among some fares?</summary>
                                          <div class="details__content">
                                            <p>Even though there is no difference in the service or seat quality for the same cabin, various fares are applied on our flights and are differentiated by minimum stay time at the destination point and the time ofpurchase of the ticket among others. Different capacities may be reserved for the classes of these differentiated fares on our flights considering the statistics. The capacity of a class for any of the fares may be sold out due to excess demand but at the same time there may be available seats in the other classes for various fares.</p>
                                            <p>In other words these fares are subject to seat availability and can only available if they haven’t been booked already.</p>
                                          </div>
                                        </details>
                                        <details class="details" >
                                          <summary class="details__summary">
                                           What is a code-share flight?
                                          </summary>
                                          <div class="details__content">
                                            <p>A flight operated by another airline for which RwandAir has an agreement to sell seats using the “WB” airline code.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Will I be notified in case my flight is cancelled?</summary>
                                          <div class="details__content">
                                            <p>Our relevant departments will contact you via the phone number that you provided during your reservation to advise the cancellation and offer alternative flights if required. You may also be informed by e-mail or through you travel agent.</p>
                                          </div>
                                        </details>


                                    </div>

                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                           What time should I arrive at the airport?
                                          </summary>
                                          <div class="details__content">
                                            <p>For international flights, it is recommended to arrive at airport 4 (four) hours before the scheduled departure time of your flight. For domestic flights this duration is 3 (three) hour.</p>

                                            <p>Check-in counters close 60 minutes before departure for domestic flights and 90 minutes before departure for international flights.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">What is the purpose of checking the passengers passports and visas?</summary>
                                          <div class="details__content">
                                            <p>According to aviation rules; passengers are responsible to get information and valid documents of the country where they travel to. Passport-Visa checks are controlled at the time of check-in and during boarding. The aim of these checks is to prevent passengers from traveling with invalid/faulty visas or passports hence preventing them from deportation and paying steep penalties.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Do you have control “ID check” for domestic flights?</summary>
                                          <div class="details__content">
                                            <p>Yes. Passengers have to carry their identification card, driving license or passport with them.</p>
                                          </div>
                                        </details>

                                    </div>

                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                            Can I smoke in the aircraft?
                                          </summary>
                                          <div class="details__content">
                                            <p>All RwandAir flights are Non-smoking flights.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Can I sit by the window?</summary>
                                          <div class="details__content">
                                            <p>Seat request must be made to the boarding staff while at check-in, during online booking, through the call center or at our offices while making your booking</p>
                                          </div>
                                        </details>

                                        <details class="details" >
                                          <summary class="details__summary">
                                            Can I use the lavatory in business class section?
                                          </summary>
                                          <div class="details__content">
                                            <p>When business class passengers are on board the lavatory is used by the business class passengers only.</p>
                                          </div>
                                        </details>

                                        <details class="details">
                                          <summary class="details__summary">Can I sit in the business class section?</summary>
                                          <div class="details__content">
                                            <p>Since business class is a different class and a different airfare is paid for its ticket, the cabin attendant has no authority to upgrade economy class passengers.</p>
                                          </div>
                                        </details>

                                        <details class="details" >
                                          <summary class="details__summary">
                                            Why can’t I sit together with my family?
                                          </summary>
                                          <div class="details__content">
                                            <p>You need to make your request at reservation. (At the sales office, via the call center, on the website for online booking or through your travel agent in case you use one.) Requests made at the check-in point are subject to availability of the seats left in the aircraft.</p>
                                          </div>
                                        </details>



                                        <details class="details">
                                          <summary class="details__summary">Why are we still waiting for the aircraft to take off?</summary>
                                          <div class="details__content">
                                            <ul>
                                              <li>Due To: The Late Arrival Of A Connecting Flight</li>
                                              <li>Restrictions of Air Traffic</li>
                                              <li>A Last Minute Technical Incident</li>
                                              <li>Operational Reasons</li>
                                              <li>Security Check</li>
                                              <li>Baggage Loading</li>
                                              <li>Weather Conditions</li>
                                              <li>Slow Down</li>
                                              <li>Strike</li>
                                            </ul>
                                          </div>
                                        </details>


                                    </div>
                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                            Do you share my booking information (PNR data) with the UK’s home office?
                                          </summary>
                                          <div class="details__content">
                                            <p>Yes. For more information setting out how PNR data is acquired; what PNR data is used for; how PNR data is protected; how PNR data might be used or transferred, individuals’ data protection rights and contact information click here</p>
                                          </div>
                                        </details>

                                    </div>
                                </div>

                                <div>
                                    <div class="details-group">

                                        <details class="details" open>
                                          <summary class="details__summary">
                                            Where can I find out more about Rwandair
                                          </summary>
                                          <div class="details__content">
                                            <p>The Rwandair website is a fantastic resource for learning more about Rwanda, and can help you to get the most out of your stay.</p>
                                          </div>
                                        </details>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="important-information">

                            <h4>Important information about Covid</h4>

                            <p>We have shared information about the hotel bookings, emergency contacts and more with all customers at their registered email addresses. In case you have not received any communication, please check your junk and spam folders.</p>

                            <p>We have shared information about the hotel bookings, emergency contacts and more with all customers at their registered email addresses. In case you have not received any communication, please check your junk and spam folders.</p>

                            <p>We have shared information about the hotel bookings, emergency contacts and more with all customers at their registered email addresses. In case you have not received any communication, please check your junk and spam folders.</p>

                        </div>


                    </div>

            </div>',
                'language' => 'cn'
            ]
        ];
        Faqs::insert($faq);
    }
}
