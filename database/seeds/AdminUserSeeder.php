<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Check if user already exists
        $email = 'newadmin@redbrigade.org';
        $user = User::where('email', $email)->first();

        if (!$user) {
            User::create([
                'name' => 'New Admin',
                'email' => $email,
                'password' => Hash::make('Admin@12345'),
                'number' => '0000000000',
                'address' => 'Lucknow',
            ]);
            $this->command->info("Admin user $email created successfully.");
        } else {
            $user->password = Hash::make('Admin@12345');
            $user->save();
            $this->command->info("Admin user $email already exists. Password reset to Admin@12345.");
        }
    }
}
