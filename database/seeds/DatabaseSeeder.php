<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		$password_ian = password_hash("ian", PASSWORD_BCRYPT);
		User::create([
			"name"=>"ian",
			"email"=>"ian@mail.com",
			"password"=>$password_ian
		]);
		$password_hiro = password_hash("hiro", PASSWORD_BCRYPT);
		User::create([
			"name"=>"hiro",
			"email"=>"hiro@mail.com",
			"password"=>$password_hiro
		]);
		$password_hanabusa = password_hash("hanabusa", PASSWORD_BCRYPT);
		User::create([
			"name"=>"hanabusa",
			"email"=>"hanabusa@mail.com",
			"password"=>$password_hanabusa
		]);
	}

}
