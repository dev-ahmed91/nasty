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
            'name' => 'Sendgrid key',
            'key' => 'emails.sendgrid.key',
            'value' => 'rXoUiOnPztSpeasbC2kD6n7YYmQgPrMH4dODB9BX578'
        ]);


        Setting::create([
            'name' => 'SMS provider key',
            'key' => 'sms.aws.key',
            'value' => 'rXoUiOnPztSpeasbC2kD6n7YYmQgPrMH4dODB9BX578'
        ]);

        Setting::create([
            'name' => 'Firebase  key',
            'key' => 'push.firebase.key',
            'value' => 'rXoUiOnPztSpeasbC2kD6n7YYmQgPrMH4dODB9BX578'
        ]);


        //factory(Setting::class, 100)->create();
    }
}
