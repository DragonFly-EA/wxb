<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            AboutTableSeeder::class,
            ValuesTableSeeder::class,
            BaggageTableSeeder::class,
            FleetTableSeeder::class,
            PartnershipTableSeed::class,
            TravelInsuranceSeed::class,
            MedicalInformationSeed::class,
            PaymentOptionSeed::class,
            SpecialAssistanceSeed::class,
            AwardTableSeed::class,
            AccessbilitySeed::class,
            SeatSeed::class,
            SpecialAssistanceSeed::class,
            FaqsSeed::class,
            CheckInOnlineSeed::class,
            SustainabilitySeed::class,
            ContractSeeder::class,
            TravelRequirementsSeed::class,
            TravelInformationSeed::class,
            SiteMapSeed::class,
            TermsSeed::class,
            SearchSeeder::class,
            PrivacyPolicySeed::class,
//            NewsLetterOfferSeed::class,
            OnlineFraudSeed::class,
            LegalSeed::class,
            LoungesSeeder::class,
            InflightEntertainmentSeed::class,
            PermissionSeeder::class,
        ]);
    }
}
