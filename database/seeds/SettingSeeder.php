<?php

use Modules\Setting\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => 'Title',
            'key' => 'common.title',
            'value' => 'الكحال | خبراء طب العيون علي مدار 35 عاماً'
        ]);

        Setting::create([
            'name' => 'Services Section Description',
            'key' => 'services.description',
            'value' => 'نحن نقدم لكم خدمات عالية الجودة في تخصص العيون بأفضل وأحدث الأجهزة المتطورة لأن هي الحفاظ على أعينكم دوماًً'
        ]);

        Setting::create([
            'name' => 'Doctors Section Title',
            'key' => 'doctors.title',
            'value' => 'نخبة من الاستشاريين وأساتذة الجامعةً'
        ]);

        Setting::create([
            'name' => 'Footer Youtube URL',
            'key' => 'footer.youtube',
            'value' => 'https://www.youtube.com/embed/tZQNPCWkp8A'
        ]);

        Setting::create([
            'name' => 'Main Video URL',
            'key' => 'common.youtube',
            'value' => 'https://www.youtube.com/embed/I7-l_rOSwPk'
        ]);

        Setting::create([
            'name' => 'Phone Number',
            'key' => 'common.phone',
            'value' => '920022066'
        ]);

        Setting::create([
            'name' => 'El Damam Branch Address',
            'key' => 'address.dammam',
            'value' => 'الدمام - حي الحمراء'
        ]);

        Setting::create([
            'name' => 'Al Ehsaa Branch Address',
            'key' => 'address.ehsaa',
            'value' => 'فرع الإحساء - محاسن , المبرز'
        ]);


        Setting::create([
            'name' => 'Offer Slider Images (Comma Seprated)',
            'key' => 'offers.images',
            'value' => '/web/assets/images/offers/01.jpg,/web/assets/images/offers/02.jpg'
        ]);

        Setting::create([
            'name' => 'Emails list that the leads will be sent to',
            'key' => 'leads.mails.to',
            'value' => 'alkahhalmedicalcomplex@gmail.com,tech@jumppeak.net'
        ]);

        Setting::create([
            'name' => 'Email subject when leads are sent in the email',
            'key' => 'leads.mails.subject',
            'value' => 'عميل جديد يريد الإستعلام عن عروض الكحال'
        ]);
    }
}
