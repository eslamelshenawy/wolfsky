<?php

use Illuminate\Database\Seeder;

class Airport extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $ContactsGroup = new Airport();
        $ContactsGroup->iata = "Newsletter Emails";
        $ContactsGroup->created_by = 1;
        $ContactsGroup->save();

    }
}
