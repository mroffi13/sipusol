<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = collect(['User', 'Admin']);
        $roles->each(function ($role) {
            Role::create([
                'name' => $role,
            ]);
        });
    }
}
