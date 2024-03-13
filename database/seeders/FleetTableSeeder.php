<?php

namespace Database\Seeders;

use App\Models\Fleet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FleetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $fleets = [
            [
                'banner' => 'images/fleet1.png',
                'title' => 'One Airbus A330 – 300',
                'title_1' => 'Business Class',
                'input_1' => 20,
                'title_2' => 'Economy Class',
                'input_2' => 244,
                'content' => '<ol>
                            <li>Cargo Capacity 132.20m³</li>
                            <li>Overall Length 63.69m</li>
                            <li>Wingspan 60.30m</li>
                            <li>Overall Height 17.18m</li>
                            <li>Cabin Width 5.18m (Inside)</li>
                            <li>Cabin Height 2.38m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 242t</li>
                            <li>Cruising Speed / Max. Speed 1062.kph</li>
                        </ol>',
                'description' => '<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'One-Airbus-A330-300',
                'language'=>'en',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet2.png',
                'title' => 'One Airbus A330 – 200',
                'title_1' => 'Business Class',
                'input_1' => 30,
                'title_2' => 'Economy Class',
                'input_2' => 244,
                'content' => '<ol>
                            <li>Cargo Capacity 132.20m³</li>
                            <li>Overall Length 63.69m</li>
                            <li>Wingspan 60.30m</li>
                            <li>Overall Height 17.18m</li>
                            <li>Cabin Width 5.18m (Inside)</li>
                            <li>Cabin Height 2.38m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 235t</li>
                            <li>Cruising Speed / Max. Speed 1062.kph</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'One-Airbus-A330-200',
                'language'=>'en',
                'created_at'=>now(),
                'updated_at'=>now(),

            ],
            [
                'banner' => 'images/fleet3.png',
                'title' => 'Four Boeing 737-800NG',
                'title_1' => 'Business Class',
                'input_1' => 16,
                'title_2' => 'Economy Class',
                'input_2' => 138,
                'content' => '<ol>
                            <li>Cargo Capacity 21.4 – 52.0m³</li>
                            <li>Overall Length 39.5m</li>
                            <li>Wingspan 34.3m</li>
                            <li>Overall Height 12.5m</li>
                            <li>Cabin Width  3.54m/- (Inside)</li>
                            <li>Cabin Height 3.54m/- (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 155,500lb</li>
                            <li>Cruising Speed / Max. Speed 809.5kph</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'Four-Boeing-737-800NG',
                'language'=>'en',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet4.png',
                'title' => 'Two Bombardier Q-400 Next Gen',
                'title_1' => 'Business Class',
                'input_1' => 7,
                'title_2' => 'Economy Class',
                'input_2' => 60,
                'content' => '<ol>
                            <li>Cargo Capacity After Baggage comportment 411 Cu/Ft</li>
                            <li>Forward Baggage Comportment 91 Cu/Ft</li>
                            <li>Overall Length 107ft 9in</li>
                            <li>Wingspan 93ft 3in</li>
                            <li>Overall Height 27ft 4in</li>
                            <li>Cabin Width 105.9in (Inside)</li>
                            <li>Cabin Height 76.1in (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 65,200lb(29,574kg)</li>
                            <li>Cruising Speed / Max. Speed 360 Kts</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'Two-Bombardier-Q-400-Next-Gen',
                'language'=>'en',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet5.png',
                'title' => 'Two Bombardier CRJ-900 NextGen',
                'title_1' => 'Business Class',
                'input_1' => 7,
                'title_2' => 'Economy Class',
                'input_2' => 68,
                'content' => '<ol>
                            <li>Cargo Capacity 16.8m³</li>
                            <li>Overall Length 36.2m</li>
                            <li>Wingspan 24.9m</li>
                            <li>Overall Height 7.5m</li>
                            <li>Cabin Width 2.16m (Inside)</li>
                            <li>Cabin Height 1.89m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 84,500lb</li>
                            <li>Cruising Speed / Mach 0.78 / Mach 0.83</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'Two-Bombardier-CRJ-900-NextGen',
                'language'=>'en',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet6.png',
                'title' => 'Two Boeing 737-700NG',
                'title_1' => 'Business Class',
                'input_1' => 12,
                'title_2' => 'Economy Class',
                'input_2' => 108,
                'content' => '<ol>
                            <li>Cargo Capacity 27.3m³</li>
                            <li>Overall Length 33.6m</li>
                            <li>Wingspan 35.7m</li>
                            <li>Overall Height 12.5m</li>
                            <li>Cabin Width 3.54m (Inside)</li>
                            <li>Cabin Height 2.20m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 70,080 kgs</li>
                            <li>Cruising Speed / Mach 0.78 / Mach 0.82</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.  Nelson</p>',
                'slug'=>'Two-Boeing-737-700NG',
                'language'=>'en',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet1.png',
                'title' => 'One Airbus A330 – 300',
                'title_1' => 'Business Class',
                'input_1' => 20,
                'title_2' => 'Economy Class',
                'input_2' => 244,
                'content' => '<ol>
                            <li>Cargo Capacity 132.20m³</li>
                            <li>Overall Length 63.69m</li>
                            <li>Wingspan 60.30m</li>
                            <li>Overall Height 17.18m</li>
                            <li>Cabin Width 5.18m (Inside)</li>
                            <li>Cabin Height 2.38m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 242t</li>
                            <li>Cruising Speed / Max. Speed 1062.kph</li>
                        </ol>',
                'description' => '<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'One-Airbus-A330-300',
                'language'=>'fr',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet2.png',
                'title' => 'One Airbus A330 – 200',
                'title_1' => 'Business Class',
                'input_1' => 30,
                'title_2' => 'Economy Class',
                'input_2' => 244,
                'content' => '<ol>
                            <li>Cargo Capacity 132.20m³</li>
                            <li>Overall Length 63.69m</li>
                            <li>Wingspan 60.30m</li>
                            <li>Overall Height 17.18m</li>
                            <li>Cabin Width 5.18m (Inside)</li>
                            <li>Cabin Height 2.38m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 235t</li>
                            <li>Cruising Speed / Max. Speed 1062.kph</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'One-Airbus-A330-200',
                'language'=>'fr',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet3.png',
                'title' => 'Four Boeing 737-800NG',
                'title_1' => 'Business Class',
                'input_1' => 16,
                'title_2' => 'Economy Class',
                'input_2' => 138,
                'content' => '<ol>
                            <li>Cargo Capacity 21.4 – 52.0m³</li>
                            <li>Overall Length 39.5m</li>
                            <li>Wingspan 34.3m</li>
                            <li>Overall Height 12.5m</li>
                            <li>Cabin Width  3.54m/- (Inside)</li>
                            <li>Cabin Height 3.54m/- (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 155,500lb</li>
                            <li>Cruising Speed / Max. Speed 809.5kph</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'Four-Boeing-737-800NG',
                'language'=>'fr',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet4.png',
                'title' => 'Two Bombardier Q-400 Next Gen',
                'title_1' => 'Business Class',
                'input_1' => 7,
                'title_2' => 'Economy Class',
                'input_2' => 60,
                'content' => '<ol>
                            <li>Cargo Capacity After Baggage comportment 411 Cu/Ft</li>
                            <li>Forward Baggage Comportment 91 Cu/Ft</li>
                            <li>Overall Length 107ft 9in</li>
                            <li>Wingspan 93ft 3in</li>
                            <li>Overall Height 27ft 4in</li>
                            <li>Cabin Width 105.9in (Inside)</li>
                            <li>Cabin Height 76.1in (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 65,200lb(29,574kg)</li>
                            <li>Cruising Speed / Max. Speed 360 Kts</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'Two-Bombardier-Q-400-Next-Gen',
                'language'=>'fr',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet5.png',
                'title' => 'Two Bombardier CRJ-900 NextGen',
                'title_1' => 'Business Class',
                'input_1' => 7,
                'title_2' => 'Economy Class',
                'input_2' => 68,
                'content' => '<ol>
                            <li>Cargo Capacity 16.8m³</li>
                            <li>Overall Length 36.2m</li>
                            <li>Wingspan 24.9m</li>
                            <li>Overall Height 7.5m</li>
                            <li>Cabin Width 2.16m (Inside)</li>
                            <li>Cabin Height 1.89m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 84,500lb</li>
                            <li>Cruising Speed / Mach 0.78 / Mach 0.83</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'Two-Bombardier-CRJ-900-NextGen',
                'language'=>'fr',
                'created_at'=>now(),
                'updated_at'=>now(),

            ],
            [
                'banner' => 'images/fleet6.png',
                'title' => 'Two Boeing 737-700NG',
                'title_1' => 'Business Class',
                'input_1' => 12,
                'title_2' => 'Economy Class',
                'input_2' => 108,
                'content' => '<ol>
                            <li>Cargo Capacity 27.3m³</li>
                            <li>Overall Length 33.6m</li>
                            <li>Wingspan 35.7m</li>
                            <li>Overall Height 12.5m</li>
                            <li>Cabin Width 3.54m (Inside)</li>
                            <li>Cabin Height 2.20m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 70,080 kgs</li>
                            <li>Cruising Speed / Mach 0.78 / Mach 0.82</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.  Nelson</p>',
                'slug'=>'Two-Boeing-737-700NG',
                'language'=>'fr',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet1.png',
                'title' => 'One Airbus A330 – 300',
                'title_1' => 'Business Class',
                'input_1' => 20,
                'title_2' => 'Economy Class',
                'input_2' => 244,
                'content' => '<ol>
                            <li>Cargo Capacity 132.20m³</li>
                            <li>Overall Length 63.69m</li>
                            <li>Wingspan 60.30m</li>
                            <li>Overall Height 17.18m</li>
                            <li>Cabin Width 5.18m (Inside)</li>
                            <li>Cabin Height 2.38m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 242t</li>
                            <li>Cruising Speed / Max. Speed 1062.kph</li>
                        </ol>',
                'description' => '<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'One-Airbus-A330-300',
                'language'=>'cn',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet2.png',
                'title' => 'One Airbus A330 – 200',
                'title_1' => 'Business Class',
                'input_1' => 30,
                'title_2' => 'Economy Class',
                'input_2' => 244,
                'content' => '<ol>
                            <li>Cargo Capacity 132.20m³</li>
                            <li>Overall Length 63.69m</li>
                            <li>Wingspan 60.30m</li>
                            <li>Overall Height 17.18m</li>
                            <li>Cabin Width 5.18m (Inside)</li>
                            <li>Cabin Height 2.38m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 235t</li>
                            <li>Cruising Speed / Max. Speed 1062.kph</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'One-Airbus-A330-200',
                'language'=>'cn',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet3.png',
                'title' => 'Four Boeing 737-800NG',
                'title_1' => 'Business Class',
                'input_1' => 16,
                'title_2' => 'Economy Class',
                'input_2' => 138,
                'content' => '<ol>
                            <li>Cargo Capacity 21.4 – 52.0m³</li>
                            <li>Overall Length 39.5m</li>
                            <li>Wingspan 34.3m</li>
                            <li>Overall Height 12.5m</li>
                            <li>Cabin Width  3.54m/- (Inside)</li>
                            <li>Cabin Height 3.54m/- (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 155,500lb</li>
                            <li>Cruising Speed / Max. Speed 809.5kph</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'Four-Boeing-737-800NG',
                'language'=>'cn',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet4.png',
                'title' => 'Two Bombardier Q-400 Next Gen',
                'title_1' => 'Business Class',
                'input_1' => 7,
                'title_2' => 'Economy Class',
                'input_2' => 60,
                'content' => '<ol>
                            <li>Cargo Capacity After Baggage comportment 411 Cu/Ft</li>
                            <li>Forward Baggage Comportment 91 Cu/Ft</li>
                            <li>Overall Length 107ft 9in</li>
                            <li>Wingspan 93ft 3in</li>
                            <li>Overall Height 27ft 4in</li>
                            <li>Cabin Width 105.9in (Inside)</li>
                            <li>Cabin Height 76.1in (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 65,200lb(29,574kg)</li>
                            <li>Cruising Speed / Max. Speed 360 Kts</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'Two-Bombardier-Q-400-Next-Gen',
                'language'=>'cn',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet5.png',
                'title' => 'Two Bombardier CRJ-900 NextGen',
                'title_1' => 'Business Class',
                'input_1' => 7,
                'title_2' => 'Economy Class',
                'input_2' => 68,
                'content' => '<ol>
                            <li>Cargo Capacity 16.8m³</li>
                            <li>Overall Length 36.2m</li>
                            <li>Wingspan 24.9m</li>
                            <li>Overall Height 7.5m</li>
                            <li>Cabin Width 2.16m (Inside)</li>
                            <li>Cabin Height 1.89m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 84,500lb</li>
                            <li>Cruising Speed / Mach 0.78 / Mach 0.83</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.</p>',
                'slug'=>'Two-Bombardier-CRJ-900-NextGen',
                'language'=>'cn',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'banner' => 'images/fleet6.png',
                'title' => 'Two Boeing 737-700NG',
                'title_1' => 'Business Class',
                'input_1' => 12,
                'title_2' => 'Economy Class',
                'input_2' => 108,
                'content' => '<ol>
                            <li>Cargo Capacity 27.3m³</li>
                            <li>Overall Length 33.6m</li>
                            <li>Wingspan 35.7m</li>
                            <li>Overall Height 12.5m</li>
                            <li>Cabin Width 3.54m (Inside)</li>
                            <li>Cabin Height 2.20m (Floor to ceiling)</li>
                            <li>Max. Takeoff Weight 70,080 kgs</li>
                            <li>Cruising Speed / Mach 0.78 / Mach 0.82</li>
                        </ol>',
                'description'=>'<p data-aos="fade-right">A 360º tour of our Boeing 737- 800 NG.  Nelson</p>',
                'slug'=>'Two-Boeing-737-700NG',
                'language'=>'cn',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ];
        Fleet::insert($fleets);
    }
}
