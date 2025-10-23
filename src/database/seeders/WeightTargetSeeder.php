<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\WeightTarget;
use Illuminate\Database\Seeder;

class WeightTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        if (!$user) {
            User::factory()->count(1)->create();
            $user = User::first();
        }
        WeightTarget::factory()->count(1)->create([
            'user_id' => $user->id,
        ]);
    }
}
