<?php

namespace Modules\Doctor\Seeds;


use Illuminate\Database\Seeder;
use Modules\Doctor\Models\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::create([
            'name' => 'د. عادل عبدالعزيز الرشود',
            'branch' => 'الدمام',
            'description' =>'استشاري القرنية والماء الأبيض وتصحيح عيوب النظر الانكسارية',
            'image' => '/web/assets/images/drs/01.jpg',
        ]);

        Doctor::create([
            'name' => 'د. عادل عبدالعزيز الرشود',
            'branch' => 'الدمام والاحساء',
            'description' =>'استشاري الشبكية والسائل الزجاجي والماء الأبيض',
            'image' => '/web/assets/images/drs/02.jpg',
        ]);

        Doctor::create([
            'name' => 'أ.د. عبد الرحمن الغديان',
            'branch' => 'الدمام',
            'description' =>'استشاري الشبكية والسائل الزجاجي',
            'image' => '/web/assets/images/drs/03.jpg',
        ]);

        Doctor::create([
            'name' => 'د. سناء عبد الكریم',
            'branch' => 'الدمام',
            'description' =>'استشاري الحول للأطفال والبالغين',
            'image' => '/web/assets/images/drs/women.jpg',
        ]);

        Doctor::create([
            'name' => 'د. محمد النجار',
            'branch' => 'الدمام',
            'description' =>'',
            'image' => '/web/assets/images/drs/05.jpeg',
        ]);


        Doctor::create([
            'name' => 'د. مهنا الجندان',
            'branch' => 'الدمام',
            'description' =>'',
            'image' => '/web/assets/images/drs/06.jpeg',
        ]);

        Doctor::create([
            'name' => 'د. وقار مصفطي',
            'branch' => 'الدمام',
            'description' =>'',
            'image' => '/web/assets/images/drs/07.jpeg',
        ]);

        Doctor::create([
            'name' => 'د. محمود سليمان',
            'branch' => 'الدمام',
            'description' =>'',
            'image' => '/web/assets/images/drs/08.jpeg',
        ]);

        Doctor::create([
            'name' => 'د. محمد الخولي',
            'branch' => 'الدمام',
            'description' =>'',
            'image' => '/web/assets/images/drs/09.jpeg',
        ]);

    }
}
