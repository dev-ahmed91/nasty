<?php

namespace Modules\Lead\Seeds;


use Illuminate\Database\Seeder;
use Modules\Lead\Models\Lead;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lead::create([
            'name' => 'Islam Gad',
            'phone' => '01018055565',
            'branch' => 'Dammam',
        ]);
    }
}
