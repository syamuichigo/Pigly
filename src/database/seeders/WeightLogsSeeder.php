<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\WeightLog;

class WeightLogsSeeder extends Seeder
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
        WeightLog::factory()->count(35)->create([
            'user_id' => $user->id,
        ]);
    }
}
