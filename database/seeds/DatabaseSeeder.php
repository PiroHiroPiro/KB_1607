<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Timelines;
use App\Contents;
use App\Supports;

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
        $this->call('TimelinesTableSeeder');
        $this->call('ContentsTableSeeder');
        $this->call('SupportsTableSeeder');

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

class TimelinesTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('Timelines')->delete();
		Timelines::create([
			"content_id"=>1,
			"title"=>"世界大会予選で負けました",
			"message"=>"いつもお世話になっています。最近ドリフトの世界大会に行ってきました。
                        予選で負けてしまいましたが、これからも応援お願いします。",
            "picture1"=>"/img/IAN2.JPG",
            "picture2"=>"/img/IAN2.JPG",
            "picture3"=>"/img/IAN2.JPG",
            "picture4"=>"/img/IAN2.JPG",
            "picture5"=>"/img/IAN2.JPG",
            "video"=>"/img/IAN2.JPG"
		]);
        Timelines::create([
			"content_id"=>1,
			"title"=>"サポーターがつきました！",
			"message"=>"いつもお世話になっています。
                        最近ACAという会社がサポーターになってくれました。
                        これからも応援お願いします。",
            "picture1"=>"/img/IAN3.JPG",
            "picture2"=>"/img/IAN3.JPG",
            "picture3"=>"/img/IAN3.JPG",
            "picture4"=>"/img/IAN3.JPG",
            "picture5"=>"/img/IAN3.JPG",
            "video"=>"/img/IAN3.JPG"
		]);
        Timelines::create([
			"content_id"=>2,
			"title"=>"あああああああ",
			"message"=>"あああ",
            "picture1"=>"/img/IAN.JPG",
            "picture2"=>"/img/IAN2.JPG",
            "picture3"=>"/img/IAN3.JPG",
            "picture4"=>"/img/IAN.JPG",
            "picture5"=>"/img/IAN2.JPG",
            "video"=>"/img/IAN3.JPG"
		]);
        Timelines::create([
			"content_id"=>3,
			"title"=>"あああああああ",
			"message"=>"あああ",
            "picture1"=>"/img/IAN.JPG",
            "picture2"=>"/img/IAN.JPG",
            "picture3"=>"/img/IAN.JPG",
            "picture4"=>"/img/IAN.JPG",
            "picture5"=>"/img/IAN.JPG",
            "video"=>"/img/IAN.JPG"
		]);
	}

}

class ContentsTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('Contents')->delete();
		Contents::create([
			"name"=>"Iam Brison",
			"title"=>"Plz Money...",
			"description"=>"お金が欲しい。。。。。。欲しいよおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお",
            "picture1"=>"/img/IAN2.JPG",
            "picture2"=>"/img/IAN2.JPG",
            "picture3"=>"/img/IAN2.JPG",
            "picture4"=>"/img/IAN2.JPG",
            "picture5"=>"/img/IAN2.JPG",
            "video"=>"/img/IAN2.JPG"
		]);
        Contents::create([
			"name"=>"Ian",
			"title"=>"シリコンバレーに行きたい",
			"description"=>"飛行機代が出せません、、、誰かお願いします。",
            "picture1"=>"/img/IAN.JPG",
            "picture2"=>"/img/IAN.JPG",
            "picture3"=>"/img/IAN.JPG",
            "picture4"=>"/img/IAN.JPG",
            "picture5"=>"/img/IAN.JPG",
            "video"=>"/img/IAN.JPG"
		]);
        Contents::create([
			"name"=>"Buraison",
			"title"=>"だるいいいい",
			"description"=>"aaaaaaassssssdfdsgdfsgdfslgdfsigisfdn",
            "picture1"=>"/img/IAN3.JPG",
            "picture2"=>"/img/IAN3.JPG",
            "picture3"=>"/img/IAN3.JPG",
            "picture4"=>"/img/IAN3.JPG",
            "picture5"=>"/img/IAN3.JPG",
            "video"=>"/img/IAN3.JPG"
		]);
        Contents::create([
			"name"=>"hiro",
			"title"=>"help me",
			"description"=>"大dbvfbdsヴィウダhsヴィm杯smふはs痔v日青hみhヴォアdふmhv",
            "picture1"=>"/img/IAN.JPG",
            "picture2"=>"/img/IAN2.JPG",
            "picture3"=>"/img/IAN3.JPG",
            "picture4"=>"/img/IAN.JPG",
            "picture5"=>"/img/IAN2.JPG",
            "video"=>"/img/IAN3.JPG"
		]);
        Contents::create([
			"name"=>"イアンノーネ",
			"title"=>"adsf",
			"description"=>"dfadgafasdfasd",
            "picture1"=>"/img/IAN2.JPG",
            "picture2"=>"/img/IAN2.JPG",
            "picture3"=>"/img/IAN2.JPG",
            "picture4"=>"/img/IAN2.JPG",
            "picture5"=>"/img/IAN2.JPG",
            "video"=>"/img/IAN2.JPG"
		]);
        Contents::create([
			"name"=>"青shv",
			"title"=>"fasdfasdf",
			"description"=>"asdfasdfas",
            "picture1"=>"/img/IAN1.JPG",
            "picture2"=>"/img/IAN1.JPG",
            "picture3"=>"/img/IAN1.JPG",
            "picture4"=>"/img/IAN1.JPG",
            "picture5"=>"/img/IAN1.JPG",
            "video"=>"/img/IAN1.JPG"
		]);
	}

}

class SupportsTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('Supports')->delete();
		Supports::create([
			"user_id"=>1,
            "content_id"=>2,
            "money"=>1000000
		]);
        Supports::create([
			"user_id"=>2,
            "content_id"=>3,
            "money"=>1000000
		]);
        Supports::create([
			"user_id"=>2,
            "content_id"=>1,
            "money"=>1000000
		]);
        Supports::create([
			"user_id"=>3,
            "content_id"=>3,
            "money"=>1000000
		]);
	}

}
