<?php

use Illuminate\Database\Seeder;
use App\Models\JobSeeker;
use App\Models\Employer;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
    	factory('App\Models\JobSeeker',50)->create();
    	factory('App\Models\Employer',50)->create();
    }
}
