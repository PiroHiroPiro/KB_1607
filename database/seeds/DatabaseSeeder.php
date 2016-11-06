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
            "title"=>"お久しぶりです",
            "message"=>"お久しぶりです。\n
            おかげさまでウィーンに留学することができ、今ウィーン市内にある音楽大学でよりレベルの高い講義を受けています。\n
            気候も良く、学生は皆音楽に熱心に取り組んでおり、毎日楽しく過ごしています。\n",
            "picture1"=>"/img/vienna.jpg",
            "picture2"=>"/img/pianowinner.jpg",
            "picture3"=>"/img/vienna.jpg",
            "picture4"=>"/img/pianowinner.jpg",
            "picture5"=>"/img/vienna.jpg",
            "video"=>"/img/vienna.jpg"
        ]);
        Timelines::create([
            "content_id"=>2,
            "title"=>"無事に留学することができました。",
            "message"=>"今、イギリスにいます。",
            "picture1"=>"/img/images15.png",
            "picture2"=>"/img/images15.png",
            "picture3"=>"/img/images15.png",
            "picture4"=>"/img/images15.png",
            "picture5"=>"/img/images15.png",
            "video"=>"/img/images15.png"
        ]);
        Timelines::create([
            "content_id"=>1,
            "title"=>"日本に一度戻ります",
            "message"=>"お久しぶりです。
            今日は皆様に報告があります。
            今度一度日本に帰ることになりました。\n
            そこで皆様に一度私のピアノを聞いていただけたらなと考えています！\n
            また詳細は連絡したいと考えているので、ぜひいらしてください！",
            "picture1"=>"/img/concert.jpg",
            "picture2"=>"/img/concert.jpg",
            "picture3"=>"/img/concert.jpg",
            "picture4"=>"/img/concert.jpg",
            "picture5"=>"/img/concert.jpg",
            "video"=>"/img/concert.jpg"
        ]);
    }

}

class ContentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('Contents')->delete();
        Contents::create([
            "name"=>"松田 美香",
            "title"=>"海外留学がしたいです",
            "description"=>"私は小さい頃からピアノを弾いてきました。高校では全国大会に出場し、大学は音楽大学に進学しピアノを専攻しています。\n
            来年卒業するのですが、まだまだ自分では未熟だと感じており、さらにレベルの高い場所でピアノの勉強をしたいと考えています。\n
            そこでオーストリア・ウィーンに海外留学をしたいと考えています。\n
            しかし、実家が裕福ではなく私もアルバイトは生活費となってしまうため、海外にいく余裕はありません。\n
            \n
            もし応援していただけるなら応援をよろしくお願いします。\n",
            "picture1"=>"/img/images10.jpg",
            "picture2"=>"/img/images10.jpg",
            "picture3"=>"/img/images10.jpg",
            "picture4"=>"/img/images10.jpg",
            "picture5"=>"/img/images10.jpg",
            "video"=>"/img/images10.jpg"
        ]);
        Contents::create([
            "name"=>"山田 太郎",
            "title"=>" 留学に行きたいです。",
            "description"=>"大学で英語の勉強をしています。将来、海外で働きたいと思っています。ネイティブとも話せる英語を学ぶためにイギリスに留学に行きたいです。しかし、留学するお金が足りません。どうか私に募金してください。",
            "picture1"=>"/img/images3.jpg",
            "picture2"=>"/img/images3.jpg",
            "picture3"=>"/img/images3.jpg",
            "picture4"=>"/img/images3.jpg",
            "picture5"=>"/img/images3.jpg",
            "video"=>"/img/images3.jpg"
        ]);
    }

}

class SupportsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('Supports')->delete();
    }

}
