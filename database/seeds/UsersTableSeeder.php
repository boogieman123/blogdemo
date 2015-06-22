<?php
 
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {
 
    public function run()
    {
        // Wipe the table clean before populating
        DB::table('Users')->delete();
 
        User::create([
            'email' => 'admin@blog.com',
            'name' => 'John Doe',
            'role_id' => 1,
            'password' => Hash::make('pass')
        ]);

        User::create([
            'email' => 'bob@blog.com',
            'name' => 'Bob Brown',
            'role_id' => 2,
            'password' => Hash::make('pass')
        ]);
    }
 
}
