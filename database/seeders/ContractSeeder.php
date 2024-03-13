<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $contract = [
            [
                'image1' => 'images/imigongo-new.jpg',
                'title1' => 'Terms & Conditions of carriage',
                'content1' =>
                    '<div class="policies-content">

                            <p data-aos="fade-up">This Privacy Statement describes the ways in which we, RwandAir, collect, hold and use information about individual persons who visit this website. BY USING THIS WEBSITE, YOU CONSENT TO THE COLLECTION AND USE OF INFORMATION AS SET FORTH IN THIS PRIVACY POLICY. YOU ALSO ACKNOWLEDGE THAT RWANDAIR MAY PERIODICALLY CHANGE, MODIFY, ADD OR REMOVE OR OTHERWISE UPDATE THIS PRIVACY POLICY AT ITS DISCRETION, WITHOUT PRIOR NOTIFICATION.</p>

                            <p data-aos="fade-up">RwandAir undertakes to always handle your Personal Information in accordance with the Privacy Policy in effect at the time of collection. It is our intention to post changes to our privacy policy on this page so that you are fully informed concerning the types of information we are gathering, how we use it, and under what circumstances it may be disclosed. Our Privacy Policy can be located on our homepage and is also available on any page where Personal Data are requested. At such data collection points, further explanation may be provided, where appropriate, as to the purposes for which the data will be used.</p>

                            <h3 data-aos="fade-up">Pledge on privacy</h3>

                            <p data-aos="fade-up">The term “Personal Data” as used in this Privacy Policy refers to information such as your name, birth date, e-mail address, mailing address, or telephone number that can be used to identify you. Generally, we will only process your Personal Data as described in this Privacy Policy. However, we reserve the right, to conduct additional processing to the extent permitted or required by law, or in support of any legal or criminal investigation.</p>

                            <p data-aos="fade-up">RwandAir has established industry-standard measures to ensure the safety of your personal information and will continuously improve on them. Personal information provided on rwandair.com, the website for which these standards are set, are only used and processed to the extent necessary for RwandAir to fulfill its obligations to you, and/or to comply with our legal obligations.</p>

                            <p data-aos="fade-up">RwandAir does NOT store or keep your personal information in its servers, but rather relies on a secure storage environment that meets the safest industry standards to protect and keep your personal information out of reach from any unauthorized third party. RwandAir may request that you disclose certain information for the particular purpose of the obligation being undertaken such as an online transaction, an account with Dream Miles frequent flyer program, a subscription to our newsletter, a registration to an event, etc. You may be requested to provide certain personal identifiable information such as your name, address, telephone numbers, fax numbers, email address and/or debit/credit card details including billing address, passport number and nationality. RwandAir may access some of this information for the purpose of its customer management services. You have the right to access, change, and oppose any information that concerns you (read “Use of your Personal Information” below). In the event that you wish to exercise your right, please contact us at the address provided below.</p>

                            <p data-aos="fade-up">RwandAir reserves the right to update or modify the Privacy Policy, at any time and without prior notice, by posting the revised version of the Policy on rwandair.com. If we decide to change and/or modify our Privacy Policy, we will post those changes on rwandair.com so you are always aware of what information we collect, how we use it, and under what circumstances, if any, we disclose it. If at any point we decide to use personally identifiable information in a manner different from that stated at the time it was collected, we will notify you by way of an email. If you so wish, you may withdraw your consent to such use subject to and in accordance with the terms of our Privacy Policy.</p>

                            <h3 data-aos="fade-up">Use of Your Personal Informatio</h3>

                            <p data-aos="fade-up">As a general policy, RwandAir does NOT collect personal identifiable information. However, if you wish to use a certain service or product available on rwandair.com, or receive information, or participate in a program, you will be asked to provide certain information in order to process your request. In the event that such service or product is provided through a partnership with a third party, your personal information will NOT be collected by the said party on our behalf. RwandAir may disclose your information to a third party ONLY in order to fulfill its obligation to you, or to comply with our legal duties. For such cases, RwandAir will notify you and request your consent before proceeding. RwandAir shall take all reasonable steps to protect the personal information on the website.</p>

                            <p data-aos="fade-up">Records of your activity or transactions will be stored alongside your personal information as you keep using our products/services on rwandair.com. These records will only serve in the management and administration of the services rendered to you and will help enhance your overall online experience.</p>

                            <h3 data-aos="fade-up">Access to Your Personal Information</h3>

                            <p data-aos="fade-up">You have the right to access, change and oppose any action on your personal information at any time. If you no longer wish to disclose your personal information to us you may opt-out of our services for which personal information is collected. But remember, doing so may hinder our abilities to fulfill our obligation(s) to you, or exercise good servicing to you.</p>

                            <p data-aos="fade-up">Access to historical records associated with your personal information may be availed to you for free (at no charge) or for a nominal fee.</p>

                            <h3 data-aos="fade-up">Personal information of children</h3>

                            <p data-aos="fade-up">Most of the services available on this site are intended for persons 18 years of age and older. Any individual who requests information about any of the services indicated for use by children must be 18 or over. We will not knowingly collect, use or disclose Personal Data from a minor under the age of 18, without obtaining prior consent from a person with parental responsibility (e.g: a parent or guardian) through direct off-line contact. We will provide the parent with (i) notice of the specific types of personal data being collected from the minor, and (ii) the opportunity to object to any further collection, use, or storage of such information. We abide by laws designed to protect children.</p>

                            <h3 data-aos="fade-up">Credit & Visa Cards</h3>

                            <p data-aos="fade-up">All card transactions are processed by and via our payment processing partner Pay Gate (Pty) Ltd. Pay Gate stores your card information in a secure environment. RwandAir does NOT store and process your card information. Card transactions will be acquired for RwandAir via Pay Gate (Pty) Ltd who are an internationally approved payment gateway. The transaction currency is United States Dollar (USD), however, this website and privacy policy is governed by the laws of Rwanda.</p>

                            <p data-aos="fade-up">If you have purchased your ticket using a credit or visa card, on rwandair.com; RwandAir reserves the right to require you to provide additional payment verification upon request by either submitting an online form or visiting the nearest RwandAir office, or at the airport at the time of check-in.</p>

                            <p data-aos="fade-up">RwandAir reserves the right to deny boarding or to collect a guarantee payment (in cash or from another card) if the card originally used for the purchase cannot be presented by the cardholder at check-in or when collecting the tickets, or in case the original payment has been withheld or disputed by the card issuing bank.</p>

                            <h3 data-aos="fade-up">Links to other sites</h3>

                            <p data-aos="fade-up">This Privacy Policy applies only to this website. We may provide links to other websites which we believe may be of interest to our visitors. We aim to ensure that such websites are of the highest standard. However, due to the nature of the internet, we cannot guarantee the privacy standards of websites to which we link or be responsible for the contents of sites other than this one, and this Privacy Policy is not intended to be applicable to any linked, non-RwandAir site.</p>

                            <h3 data-aos="fade-up">Contact Us</h3>

                            <p data-aos="fade-up">If you have any queries or complaints about our compliance with this Privacy Policy, or if you would like to make any recommendations or comments to improve the quality of our Privacy Policy, please contact us at this address:</p>

                            <ul>
                                <li data-aos="fade-up">RwandAir, Kigali International Airport, top floor. P.O. Box 7275 Kigali, Rwanda. </li>
                                <li data-aos="fade-up">Attn Commerce and Online Marketing, Commercial Department.</li>
                                <li data-aos="fade-up">Support email: <a href="mailto:support@rwandair.com">support@rwandair.com</a></li>
                                <li data-aos="fade-up">Support telephone: <a href="tel:+250788177000">+250788 177 000</a></li>
                            </ul>

                        </div>',
                'language'=>'en',
            ],
            [
                'image1' => 'images/imigongo-new.jpg',
                'title1' => 'Terms & Conditions of carriage',
                'content1' =>
                    '<div class="policies-content">

                            <p data-aos="fade-up">This Privacy Statement describes the ways in which we, RwandAir, collect, hold and use information about individual persons who visit this website. BY USING THIS WEBSITE, YOU CONSENT TO THE COLLECTION AND USE OF INFORMATION AS SET FORTH IN THIS PRIVACY POLICY. YOU ALSO ACKNOWLEDGE THAT RWANDAIR MAY PERIODICALLY CHANGE, MODIFY, ADD OR REMOVE OR OTHERWISE UPDATE THIS PRIVACY POLICY AT ITS DISCRETION, WITHOUT PRIOR NOTIFICATION.</p>

                            <p data-aos="fade-up">RwandAir undertakes to always handle your Personal Information in accordance with the Privacy Policy in effect at the time of collection. It is our intention to post changes to our privacy policy on this page so that you are fully informed concerning the types of information we are gathering, how we use it, and under what circumstances it may be disclosed. Our Privacy Policy can be located on our homepage and is also available on any page where Personal Data are requested. At such data collection points, further explanation may be provided, where appropriate, as to the purposes for which the data will be used.</p>

                            <h3 data-aos="fade-up">Pledge on privacy</h3>

                            <p data-aos="fade-up">The term “Personal Data” as used in this Privacy Policy refers to information such as your name, birth date, e-mail address, mailing address, or telephone number that can be used to identify you. Generally, we will only process your Personal Data as described in this Privacy Policy. However, we reserve the right, to conduct additional processing to the extent permitted or required by law, or in support of any legal or criminal investigation.</p>

                            <p data-aos="fade-up">RwandAir has established industry-standard measures to ensure the safety of your personal information and will continuously improve on them. Personal information provided on rwandair.com, the website for which these standards are set, are only used and processed to the extent necessary for RwandAir to fulfill its obligations to you, and/or to comply with our legal obligations.</p>

                            <p data-aos="fade-up">RwandAir does NOT store or keep your personal information in its servers, but rather relies on a secure storage environment that meets the safest industry standards to protect and keep your personal information out of reach from any unauthorized third party. RwandAir may request that you disclose certain information for the particular purpose of the obligation being undertaken such as an online transaction, an account with Dream Miles frequent flyer program, a subscription to our newsletter, a registration to an event, etc. You may be requested to provide certain personal identifiable information such as your name, address, telephone numbers, fax numbers, email address and/or debit/credit card details including billing address, passport number and nationality. RwandAir may access some of this information for the purpose of its customer management services. You have the right to access, change, and oppose any information that concerns you (read “Use of your Personal Information” below). In the event that you wish to exercise your right, please contact us at the address provided below.</p>

                            <p data-aos="fade-up">RwandAir reserves the right to update or modify the Privacy Policy, at any time and without prior notice, by posting the revised version of the Policy on rwandair.com. If we decide to change and/or modify our Privacy Policy, we will post those changes on rwandair.com so you are always aware of what information we collect, how we use it, and under what circumstances, if any, we disclose it. If at any point we decide to use personally identifiable information in a manner different from that stated at the time it was collected, we will notify you by way of an email. If you so wish, you may withdraw your consent to such use subject to and in accordance with the terms of our Privacy Policy.</p>

                            <h3 data-aos="fade-up">Use of Your Personal Informatio</h3>

                            <p data-aos="fade-up">As a general policy, RwandAir does NOT collect personal identifiable information. However, if you wish to use a certain service or product available on rwandair.com, or receive information, or participate in a program, you will be asked to provide certain information in order to process your request. In the event that such service or product is provided through a partnership with a third party, your personal information will NOT be collected by the said party on our behalf. RwandAir may disclose your information to a third party ONLY in order to fulfill its obligation to you, or to comply with our legal duties. For such cases, RwandAir will notify you and request your consent before proceeding. RwandAir shall take all reasonable steps to protect the personal information on the website.</p>

                            <p data-aos="fade-up">Records of your activity or transactions will be stored alongside your personal information as you keep using our products/services on rwandair.com. These records will only serve in the management and administration of the services rendered to you and will help enhance your overall online experience.</p>

                            <h3 data-aos="fade-up">Access to Your Personal Information</h3>

                            <p data-aos="fade-up">You have the right to access, change and oppose any action on your personal information at any time. If you no longer wish to disclose your personal information to us you may opt-out of our services for which personal information is collected. But remember, doing so may hinder our abilities to fulfill our obligation(s) to you, or exercise good servicing to you.</p>

                            <p data-aos="fade-up">Access to historical records associated with your personal information may be availed to you for free (at no charge) or for a nominal fee.</p>

                            <h3 data-aos="fade-up">Personal information of children</h3>

                            <p data-aos="fade-up">Most of the services available on this site are intended for persons 18 years of age and older. Any individual who requests information about any of the services indicated for use by children must be 18 or over. We will not knowingly collect, use or disclose Personal Data from a minor under the age of 18, without obtaining prior consent from a person with parental responsibility (e.g: a parent or guardian) through direct off-line contact. We will provide the parent with (i) notice of the specific types of personal data being collected from the minor, and (ii) the opportunity to object to any further collection, use, or storage of such information. We abide by laws designed to protect children.</p>

                            <h3 data-aos="fade-up">Credit & Visa Cards</h3>

                            <p data-aos="fade-up">All card transactions are processed by and via our payment processing partner Pay Gate (Pty) Ltd. Pay Gate stores your card information in a secure environment. RwandAir does NOT store and process your card information. Card transactions will be acquired for RwandAir via Pay Gate (Pty) Ltd who are an internationally approved payment gateway. The transaction currency is United States Dollar (USD), however, this website and privacy policy is governed by the laws of Rwanda.</p>

                            <p data-aos="fade-up">If you have purchased your ticket using a credit or visa card, on rwandair.com; RwandAir reserves the right to require you to provide additional payment verification upon request by either submitting an online form or visiting the nearest RwandAir office, or at the airport at the time of check-in.</p>

                            <p data-aos="fade-up">RwandAir reserves the right to deny boarding or to collect a guarantee payment (in cash or from another card) if the card originally used for the purchase cannot be presented by the cardholder at check-in or when collecting the tickets, or in case the original payment has been withheld or disputed by the card issuing bank.</p>

                            <h3 data-aos="fade-up">Links to other sites</h3>

                            <p data-aos="fade-up">This Privacy Policy applies only to this website. We may provide links to other websites which we believe may be of interest to our visitors. We aim to ensure that such websites are of the highest standard. However, due to the nature of the internet, we cannot guarantee the privacy standards of websites to which we link or be responsible for the contents of sites other than this one, and this Privacy Policy is not intended to be applicable to any linked, non-RwandAir site.</p>

                            <h3 data-aos="fade-up">Contact Us</h3>

                            <p data-aos="fade-up">If you have any queries or complaints about our compliance with this Privacy Policy, or if you would like to make any recommendations or comments to improve the quality of our Privacy Policy, please contact us at this address:</p>

                            <ul>
                                <li data-aos="fade-up">RwandAir, Kigali International Airport, top floor. P.O. Box 7275 Kigali, Rwanda. </li>
                                <li data-aos="fade-up">Attn Commerce and Online Marketing, Commercial Department.</li>
                                <li data-aos="fade-up">Support email: <a href="mailto:support@rwandair.com">support@rwandair.com</a></li>
                                <li data-aos="fade-up">Support telephone: <a href="tel:+250788177000">+250788 177 000</a></li>
                            </ul>

                        </div>',
                'language'=>'fr',
            ],
            [
                'image1' => 'images/imigongo-new.jpg',
                'title1' => 'Terms & Conditions of carriage',
                'content1' =>
                    '<div class="policies-content">

                            <p data-aos="fade-up">This Privacy Statement describes the ways in which we, RwandAir, collect, hold and use information about individual persons who visit this website. BY USING THIS WEBSITE, YOU CONSENT TO THE COLLECTION AND USE OF INFORMATION AS SET FORTH IN THIS PRIVACY POLICY. YOU ALSO ACKNOWLEDGE THAT RWANDAIR MAY PERIODICALLY CHANGE, MODIFY, ADD OR REMOVE OR OTHERWISE UPDATE THIS PRIVACY POLICY AT ITS DISCRETION, WITHOUT PRIOR NOTIFICATION.</p>

                            <p data-aos="fade-up">RwandAir undertakes to always handle your Personal Information in accordance with the Privacy Policy in effect at the time of collection. It is our intention to post changes to our privacy policy on this page so that you are fully informed concerning the types of information we are gathering, how we use it, and under what circumstances it may be disclosed. Our Privacy Policy can be located on our homepage and is also available on any page where Personal Data are requested. At such data collection points, further explanation may be provided, where appropriate, as to the purposes for which the data will be used.</p>

                            <h3 data-aos="fade-up">Pledge on privacy</h3>

                            <p data-aos="fade-up">The term “Personal Data” as used in this Privacy Policy refers to information such as your name, birth date, e-mail address, mailing address, or telephone number that can be used to identify you. Generally, we will only process your Personal Data as described in this Privacy Policy. However, we reserve the right, to conduct additional processing to the extent permitted or required by law, or in support of any legal or criminal investigation.</p>

                            <p data-aos="fade-up">RwandAir has established industry-standard measures to ensure the safety of your personal information and will continuously improve on them. Personal information provided on rwandair.com, the website for which these standards are set, are only used and processed to the extent necessary for RwandAir to fulfill its obligations to you, and/or to comply with our legal obligations.</p>

                            <p data-aos="fade-up">RwandAir does NOT store or keep your personal information in its servers, but rather relies on a secure storage environment that meets the safest industry standards to protect and keep your personal information out of reach from any unauthorized third party. RwandAir may request that you disclose certain information for the particular purpose of the obligation being undertaken such as an online transaction, an account with Dream Miles frequent flyer program, a subscription to our newsletter, a registration to an event, etc. You may be requested to provide certain personal identifiable information such as your name, address, telephone numbers, fax numbers, email address and/or debit/credit card details including billing address, passport number and nationality. RwandAir may access some of this information for the purpose of its customer management services. You have the right to access, change, and oppose any information that concerns you (read “Use of your Personal Information” below). In the event that you wish to exercise your right, please contact us at the address provided below.</p>

                            <p data-aos="fade-up">RwandAir reserves the right to update or modify the Privacy Policy, at any time and without prior notice, by posting the revised version of the Policy on rwandair.com. If we decide to change and/or modify our Privacy Policy, we will post those changes on rwandair.com so you are always aware of what information we collect, how we use it, and under what circumstances, if any, we disclose it. If at any point we decide to use personally identifiable information in a manner different from that stated at the time it was collected, we will notify you by way of an email. If you so wish, you may withdraw your consent to such use subject to and in accordance with the terms of our Privacy Policy.</p>

                            <h3 data-aos="fade-up">Use of Your Personal Informatio</h3>

                            <p data-aos="fade-up">As a general policy, RwandAir does NOT collect personal identifiable information. However, if you wish to use a certain service or product available on rwandair.com, or receive information, or participate in a program, you will be asked to provide certain information in order to process your request. In the event that such service or product is provided through a partnership with a third party, your personal information will NOT be collected by the said party on our behalf. RwandAir may disclose your information to a third party ONLY in order to fulfill its obligation to you, or to comply with our legal duties. For such cases, RwandAir will notify you and request your consent before proceeding. RwandAir shall take all reasonable steps to protect the personal information on the website.</p>

                            <p data-aos="fade-up">Records of your activity or transactions will be stored alongside your personal information as you keep using our products/services on rwandair.com. These records will only serve in the management and administration of the services rendered to you and will help enhance your overall online experience.</p>

                            <h3 data-aos="fade-up">Access to Your Personal Information</h3>

                            <p data-aos="fade-up">You have the right to access, change and oppose any action on your personal information at any time. If you no longer wish to disclose your personal information to us you may opt-out of our services for which personal information is collected. But remember, doing so may hinder our abilities to fulfill our obligation(s) to you, or exercise good servicing to you.</p>

                            <p data-aos="fade-up">Access to historical records associated with your personal information may be availed to you for free (at no charge) or for a nominal fee.</p>

                            <h3 data-aos="fade-up">Personal information of children</h3>

                            <p data-aos="fade-up">Most of the services available on this site are intended for persons 18 years of age and older. Any individual who requests information about any of the services indicated for use by children must be 18 or over. We will not knowingly collect, use or disclose Personal Data from a minor under the age of 18, without obtaining prior consent from a person with parental responsibility (e.g: a parent or guardian) through direct off-line contact. We will provide the parent with (i) notice of the specific types of personal data being collected from the minor, and (ii) the opportunity to object to any further collection, use, or storage of such information. We abide by laws designed to protect children.</p>

                            <h3 data-aos="fade-up">Credit & Visa Cards</h3>

                            <p data-aos="fade-up">All card transactions are processed by and via our payment processing partner Pay Gate (Pty) Ltd. Pay Gate stores your card information in a secure environment. RwandAir does NOT store and process your card information. Card transactions will be acquired for RwandAir via Pay Gate (Pty) Ltd who are an internationally approved payment gateway. The transaction currency is United States Dollar (USD), however, this website and privacy policy is governed by the laws of Rwanda.</p>

                            <p data-aos="fade-up">If you have purchased your ticket using a credit or visa card, on rwandair.com; RwandAir reserves the right to require you to provide additional payment verification upon request by either submitting an online form or visiting the nearest RwandAir office, or at the airport at the time of check-in.</p>

                            <p data-aos="fade-up">RwandAir reserves the right to deny boarding or to collect a guarantee payment (in cash or from another card) if the card originally used for the purchase cannot be presented by the cardholder at check-in or when collecting the tickets, or in case the original payment has been withheld or disputed by the card issuing bank.</p>

                            <h3 data-aos="fade-up">Links to other sites</h3>

                            <p data-aos="fade-up">This Privacy Policy applies only to this website. We may provide links to other websites which we believe may be of interest to our visitors. We aim to ensure that such websites are of the highest standard. However, due to the nature of the internet, we cannot guarantee the privacy standards of websites to which we link or be responsible for the contents of sites other than this one, and this Privacy Policy is not intended to be applicable to any linked, non-RwandAir site.</p>

                            <h3 data-aos="fade-up">Contact Us</h3>

                            <p data-aos="fade-up">If you have any queries or complaints about our compliance with this Privacy Policy, or if you would like to make any recommendations or comments to improve the quality of our Privacy Policy, please contact us at this address:</p>

                            <ul>
                                <li data-aos="fade-up">RwandAir, Kigali International Airport, top floor. P.O. Box 7275 Kigali, Rwanda. </li>
                                <li data-aos="fade-up">Attn Commerce and Online Marketing, Commercial Department.</li>
                                <li data-aos="fade-up">Support email: <a href="mailto:support@rwandair.com">support@rwandair.com</a></li>
                                <li data-aos="fade-up">Support telephone: <a href="tel:+250788177000">+250788 177 000</a></li>
                            </ul>

                        </div>',
                'language'=>'cn',
            ],
        ];
        Contract::insert(
            $contract
        );

    }
}
