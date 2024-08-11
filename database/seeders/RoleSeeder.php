<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Freelancer = new Role;
        $Freelancer->name = 'Freelancer';
        $Freelancer->description = 'Freelancer providing service and/or looking for work';
        $Freelancer->save();
        
        $Client = new Role;
        $Client->name = 'Client';
        $Client->description = 'Client looking for freelancer to provide service';
        $Client->save();        

    }
}
