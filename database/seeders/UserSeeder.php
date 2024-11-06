<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create(['username' => 'admin', 'password' => bcrypt('adminpass'), 'role' => 'admin']);
        User::create(['username' => 'approver1', 'password' => bcrypt('approverpass'), 'role' => 'approver']);
    }
}
