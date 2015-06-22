<?php
 
use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder {
 
    public function run()
    {
        // Wipe the table clean before populating
        DB::table('roles')->delete();
 
        Role::create([
			'name' => 'Administrator',
			'slug' => 'admin'
		]);

		Role::create([
			'name' => 'Member',
			'slug' => 'member'
		]);
    }
 
}
