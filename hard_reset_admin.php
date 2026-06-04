<?php
use Illuminate\Support\Facades\Hash;
use App\User;

require __DIR__.'/bootstrap/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$email = 'admin@local.test';
$password = 'Admin@1234';

$user = User::where('email', $email)->first();

if ($user) {
    $user->password = Hash::make($password);
    $user->save();
    echo "Password reset successfully for existing user: $email\n";
} else {
    User::create([
        'name' => 'Admin User',
        'email' => $email,
        'password' => Hash::make($password),
    ]);
    echo "New admin user created successfully: $email\n";
}

echo "You can now login with:\nEmail: $email\nPassword: $password\n";
