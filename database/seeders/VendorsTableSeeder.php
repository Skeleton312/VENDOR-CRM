<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendor;
use App\Models\User;

class VendorsTableSeeder extends Seeder
{
    public function run()
    {
        $vendorUsers = User::where('role', 'Vendor')->get();

        foreach($vendorUsers as $user) {
            Vendor::create([
                'user_id' => $user->id,
                'vendor_name' => fake()->company,
                'vendor_phone' => fake()->phoneNumber,
                'vendor_email' => fake()->email,
                'vendor_address' => fake()->address,
            ]);
        }
    }
}