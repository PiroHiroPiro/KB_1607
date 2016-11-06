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
            "message"=>"お久しぶりです。おかげさまでウィーンに留学することができ、今ウィーン市内にある音楽大学でよりレベルの高い講義を受けています。気候も良く、学生は皆音楽に熱心に取り組んでおり、毎日楽しく過ごしています。",
            "picture1"=>"/img/image3.jpg",
            "picture2"=>"/img/image3.jpg",
            "picture3"=>"/img/image3.jpg",
            "picture4"=>"/img/image3.jpg",
            "picture5"=>"/img/image3.jpg",
            "video"=>"/img/image3.jpg"
        ]);
        Timelines::create([
            "content_id"=>2,
            "title"=>"無事に留学することができました。",
            "message"=>"今、イギリスにいます。",
            "picture1"=>"/img/image6.png",
            "picture2"=>"/img/image6.png",
            "picture3"=>"/img/image6.png",
            "picture4"=>"/img/image6.png",
            "picture5"=>"/img/image6.png",
            "video"=>"/img/image6.png"
        ]);
        Timelines::create([
            "content_id"=>1,
            "title"=>"日本に一度戻ります",
            "message"=>"お久しぶりです。今日は皆様に報告があります。今度一度日本に帰ることになりました。そこで皆様に一度私のピアノを聞いていただけたらなと考えています！また詳細は連絡したいと考えているので、ぜひいらしてください！",
            "picture1"=>"/img/image4.jpg",
            "picture2"=>"/img/image4.jpg",
            "picture3"=>"/img/image4.jpg",
            "picture4"=>"/img/image4.jpg",
            "picture5"=>"/img/image4.jpg",
            "video"=>"/img/image4.jpg"
        ]);
        Timelines::create([
            "content_id"=>3,
            "title"=>"おかげでイタリアに留学することができました。",
            "message"=>"ありがとうございます。",
            "picture1"=>"/img/image8.png",
            "picture2"=>"/img/image8.png",
            "picture3"=>"/img/image8.png",
            "picture4"=>"/img/image8.png",
            "picture5"=>"/img/image8.png",
            "video"=>"/img/image8.png"
        ]);
        Timelines::create([
            "content_id"=>4,
            "title"=>"山登ってます！",
            "message"=>"募金ありがとうございました。最高です。",
            "picture1"=>"/img/image10.jpg",
            "picture2"=>"/img/image10.jpg",
            "picture3"=>"/img/image10.jpg",
            "picture4"=>"/img/image10.jpg",
            "picture5"=>"/img/image10.jpg",
            "video"=>"/img/image10.jpg"
        ]);
        Timelines::create([
            "content_id"=>6,
            "title"=>"ヨセミテ国立公園！",
            "message"=>"お久しぶりです。今ヨセミテ国立公園に来ています!!あのMac OSの名前になったところです！地味に真ん中の山はちょっと前にOSの名前にもなったEl Capitanです！！！！",
            "picture1"=>"/img/image13.JPG",
            "picture2"=>"/img/image13.JPG",
            "picture3"=>"/img/image13.JPG",
            "picture4"=>"/img/image13.JPG",
            "picture5"=>"/img/image13.JPG",
            "video"=>"/img/image13.JPG"
        ]);
        Timelines::create([
            "content_id"=>3,
            "title"=>"日本に一度戻ります",
            "message"=>"お久しぶりです。今度大会に出れることになりました。",
            "picture1"=>"/img/image7.jpg",
            "picture2"=>"/img/image7.jpg",
            "picture3"=>"/img/image7.jpg",
            "picture4"=>"/img/image7.jpg",
            "picture5"=>"/img/image7.jpg",
            "video"=>"/img/image7.jpg"
        ]);
        Timelines::create([
            "content_id"=>6,
            "title"=>"Apple本社に来ました！",
            "message"=>"世界最先端を味わっています。最高です。ありがとうございます。(と言えるようにサンフランシスコに行きたいです。)",
            "picture1"=>"/img/image14.JPG",
            "picture2"=>"/img/image14.JPG",
            "picture3"=>"/img/image14.JPG",
            "picture4"=>"/img/image14.JPG",
            "picture5"=>"/img/image14.JPG",
            "video"=>"/img/image14.JPG"
        ]);
        Timelines::create([
            "content_id"=>7,
            "title"=>"お久しぶりです",
            "message"=>"お久しぶりです。おかげさまでウィーンに留学することができ、今ウィーン市内にある音楽大学でよりレベルの高い講義を受けています。気候も良く、学生は皆音楽に熱心に取り組んでおり、毎日楽しく過ごしています。",
            "picture1"=>"/img/image3.jpg",
            "picture2"=>"/img/image3.jpg",
            "picture3"=>"/img/image3.jpg",
            "picture4"=>"/img/image3.jpg",
            "picture5"=>"/img/image3.jpg",
            "video"=>"/img/image3.jpg"
        ]);
        Timelines::create([
            "content_id"=>8,
            "title"=>"無事に留学することができました。",
            "message"=>"今、イギリスにいます。",
            "picture1"=>"/img/image6.png",
            "picture2"=>"/img/image6.png",
            "picture3"=>"/img/image6.png",
            "picture4"=>"/img/image6.png",
            "picture5"=>"/img/image6.png",
            "video"=>"/img/image6.png"
        ]);
        Timelines::create([
            "content_id"=>7,
            "title"=>"日本に一度戻ります",
            "message"=>"お久しぶりです。今日は皆様に報告があります。今度一度日本に帰ることになりました。そこで皆様に一度私のピアノを聞いていただけたらなと考えています！また詳細は連絡したいと考えているので、ぜひいらしてください！",
            "picture1"=>"/img/image4.jpg",
            "picture2"=>"/img/image4.jpg",
            "picture3"=>"/img/image4.jpg",
            "picture4"=>"/img/image4.jpg",
            "picture5"=>"/img/image4.jpg",
            "video"=>"/img/image4.jpg"
        ]);
        Timelines::create([
            "content_id"=>9,
            "title"=>"おかげでイタリアに留学することができました。",
            "message"=>"ありがとうございます。",
            "picture1"=>"/img/image8.png",
            "picture2"=>"/img/image8.png",
            "picture3"=>"/img/image8.png",
            "picture4"=>"/img/image8.png",
            "picture5"=>"/img/image8.png",
            "video"=>"/img/image8.png"
        ]);
        Timelines::create([
            "content_id"=>12,
            "title"=>"ヨセミテ国立公園！",
            "message"=>"お久しぶりです。今ヨセミテ国立公園に来ています!!あのMac OSの名前になったところです！地味に真ん中の山はちょっと前にOSの名前にもなったEl Capitanです！！！！",
            "picture1"=>"/img/image13.JPG",
            "picture2"=>"/img/image13.JPG",
            "picture3"=>"/img/image13.JPG",
            "picture4"=>"/img/image13.JPG",
            "picture5"=>"/img/image13.JPG",
            "video"=>"/img/image13.JPG"
        ]);
        Timelines::create([
            "content_id"=>10,
            "title"=>"山登ってます！",
            "message"=>"募金ありがとうございました。最高です。",
            "picture1"=>"/img/image10.jpg",
            "picture2"=>"/img/image10.jpg",
            "picture3"=>"/img/image10.jpg",
            "picture4"=>"/img/image10.jpg",
            "picture5"=>"/img/image10.jpg",
            "video"=>"/img/image10.jpg"
        ]);
        Timelines::create([
            "content_id"=>9,
            "title"=>"日本に一度戻ります",
            "message"=>"お久しぶりです。今度大会に出れることになりました。",
            "picture1"=>"/img/image7.jpg",
            "picture2"=>"/img/image7.jpg",
            "picture3"=>"/img/image7.jpg",
            "picture4"=>"/img/image7.jpg",
            "picture5"=>"/img/image7.jpg",
            "video"=>"/img/image7.jpg"
        ]);
        Timelines::create([
            "content_id"=>12,
            "title"=>"Apple本社に来ました！",
            "message"=>"世界最先端を味わっています。最高です。ありがとうございます。(と言えるようにサンフランシスコに行きたいです。)",
            "picture1"=>"/img/image14.JPG",
            "picture2"=>"/img/image14.JPG",
            "picture3"=>"/img/image14.JPG",
            "picture4"=>"/img/image14.JPG",
            "picture5"=>"/img/image14.JPG",
            "video"=>"/img/image14.JPG"
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
            "description"=>"私は小さい頃からピアノを弾いてきました。高校では全国大会に出場し、大学は音楽大学に進学しピアノを専攻しています。来年卒業するのですが、まだまだ自分では未熟だと感じており、さらにレベルの高い場所でピアノの勉強をしたいと考えています。そこでオーストリア・ウィーンに海外留学をしたいと考えています。しかし、実家が裕福ではなく私もアルバイトは生活費となってしまうため、海外にいく余裕はありません。もし応援していただけるなら応援をよろしくお願いします。",
            "picture1"=>"/img/image1.jpg",
            "picture2"=>"/img/image2.jpg",
            "picture3"=>"/img/image1.jpg",
            "picture4"=>"/img/image2.jpg",
            "picture5"=>"/img/image1.jpg",
            "video"=>"/img/image2.jpg"
        ]);
        Contents::create([
            "name"=>"山田 太郎",
            "title"=>" 留学に行きたいです。",
            "description"=>"大学で英語の勉強をしています。将来、海外で働きたいと思っています。ネイティブとも話せる英語を学ぶためにイギリスに留学に行きたいです。しかし、留学するお金が足りません。どうか私に募金してください。",
            "picture1"=>"/img/image5.jpg",
            "picture2"=>"/img/image5.jpg",
            "picture3"=>"/img/image5.jpg",
            "picture4"=>"/img/image5.jpg",
            "picture5"=>"/img/image5.jpg",
            "video"=>"/img/image5.jpg"
        ]);
        Contents::create([
            "name"=>"永井 翔",
            "title"=>"海外に行きたい",
            "description"=>"小学生からずっとサッカーをしています。高校では大会に出て優勝したこともあります。もっと練習するためにイタリアに行きたいです。海外で活躍できるような選手になるので協力してください。",
            "picture1"=>"/img/image7.jpg",
            "picture2"=>"/img/image7.jpg",
            "picture3"=>"/img/image7.jpg",
            "picture4"=>"/img/image7.jpg",
            "picture5"=>"/img/image7.jpg",
            "video"=>"/img/image7.jpg"
        ]);
        Contents::create([
            "name"=>"橘 久美",
            "title"=>" 世界に挑戦したいです！",
            "description"=>"ボルダリングを趣味でやっています。最近自信がついたので次はフリークライミングに挑戦したいなと考えています。そこで海外の山に行きたいと考えています！もしよければ海外への交通費を補助してください！",
            "picture1"=>"/img/image9.jpg",
            "picture2"=>"/img/image9.jpg",
            "picture3"=>"/img/image9.jpg",
            "picture4"=>"/img/image9.jpg",
            "picture5"=>"/img/image9.jpg",
            "video"=>"/img/image9.jpg"
        ]);
        Contents::create([
            "name"=>"山本 孝介",
            "title"=>"研究費が必要です！！",
            "description"=>"今新薬を作っているのですが資金が足りません。難病を治す薬です。これが完成したらきっと世界が変わります！ぜひ援助をお願いします！",
            "picture1"=>"/img/image11.jpg",
            "picture2"=>"/img/image11.jpg",
            "picture3"=>"/img/image11.jpg",
            "picture4"=>"/img/image11.jpg",
            "picture5"=>"/img/image11.jpg",
            "video"=>"/img/image11.jpg"
        ]);
        Contents::create([
            "name"=>"西澤 浩之",
            "title"=>"最先端を見たい！",
            "description"=>"僕は情報を専攻している大学生です。就職して休みがなくなる前にシリコンバレーに行って世界最先端を感じてみたいです。しかし、シリコンバレーにはSFOまでの往復の飛行機代に移動費などが必要です。その金額はとても学生で出すことはできません。どうか援助していただくことはできませんか？宜しくお願いします。",
            "picture1"=>"/img/image12.jpg",
            "picture2"=>"/img/image12.jpg",
            "picture3"=>"/img/image12.jpg",
            "picture4"=>"/img/image12.jpg",
            "picture5"=>"/img/image12.jpg",
            "video"=>"/img/image12.jpg"
        ]);
        Contents::create([
            "name"=>"松田 美香",
            "title"=>"海外留学がしたいです",
            "description"=>"私は小さい頃からピアノを弾いてきました。高校では全国大会に出場し、大学は音楽大学に進学しピアノを専攻しています。来年卒業するのですが、まだまだ自分では未熟だと感じており、さらにレベルの高い場所でピアノの勉強をしたいと考えています。そこでオーストリア・ウィーンに海外留学をしたいと考えています。しかし、実家が裕福ではなく私もアルバイトは生活費となってしまうため、海外にいく余裕はありません。もし応援していただけるなら応援をよろしくお願いします。",
            "picture1"=>"/img/image1.jpg",
            "picture2"=>"/img/image2.jpg",
            "picture3"=>"/img/image1.jpg",
            "picture4"=>"/img/image2.jpg",
            "picture5"=>"/img/image1.jpg",
            "video"=>"/img/image2.jpg"
        ]);
        Contents::create([
            "name"=>"山田 太郎",
            "title"=>" 留学に行きたいです。",
            "description"=>"大学で英語の勉強をしています。将来、海外で働きたいと思っています。ネイティブとも話せる英語を学ぶためにイギリスに留学に行きたいです。しかし、留学するお金が足りません。どうか私に募金してください。",
            "picture1"=>"/img/image5.jpg",
            "picture2"=>"/img/image5.jpg",
            "picture3"=>"/img/image5.jpg",
            "picture4"=>"/img/image5.jpg",
            "picture5"=>"/img/image5.jpg",
            "video"=>"/img/image5.jpg"
        ]);
        Contents::create([
            "name"=>"永井 翔",
            "title"=>"海外に行きたい",
            "description"=>"小学生からずっとサッカーをしています。高校では大会に出て優勝したこともあります。もっと練習するためにイタリアに行きたいです。海外で活躍できるような選手になるので協力してください。",
            "picture1"=>"/img/image7.jpg",
            "picture2"=>"/img/image7.jpg",
            "picture3"=>"/img/image7.jpg",
            "picture4"=>"/img/image7.jpg",
            "picture5"=>"/img/image7.jpg",
            "video"=>"/img/image7.jpg"
        ]);
        Contents::create([
            "name"=>"橘 久美",
            "title"=>" 世界に挑戦したいです！",
            "description"=>"ボルダリングを趣味でやっています。最近自信がついたので次はフリークライミングに挑戦したいなと考えています。そこで海外の山に行きたいと考えています！もしよければ海外への交通費を補助してください！",
            "picture1"=>"/img/image9.jpg",
            "picture2"=>"/img/image9.jpg",
            "picture3"=>"/img/image9.jpg",
            "picture4"=>"/img/image9.jpg",
            "picture5"=>"/img/image9.jpg",
            "video"=>"/img/image9.jpg"
        ]);
        Contents::create([
            "name"=>"山本 孝介",
            "title"=>"研究費が必要です！！",
            "description"=>"今新薬を作っているのですが資金が足りません。難病を治す薬です。これが完成したらきっと世界が変わります！ぜひ援助をお願いします！",
            "picture1"=>"/img/image11.jpg",
            "picture2"=>"/img/image11.jpg",
            "picture3"=>"/img/image11.jpg",
            "picture4"=>"/img/image11.jpg",
            "picture5"=>"/img/image11.jpg",
            "video"=>"/img/image11.jpg"
        ]);
        Contents::create([
            "name"=>"西澤 浩之",
            "title"=>"最先端を見たい！",
            "description"=>"僕は情報を専攻している大学生です。就職して休みがなくなる前にシリコンバレーに行って世界最先端を感じてみたいです。しかし、シリコンバレーにはSFOまでの往復の飛行機代に移動費などが必要です。その金額はとても学生で出すことはできません。どうか援助していただくことはできませんか？宜しくお願いします。",
            "picture1"=>"/img/image12.jpg",
            "picture2"=>"/img/image12.jpg",
            "picture3"=>"/img/image12.jpg",
            "picture4"=>"/img/image12.jpg",
            "picture5"=>"/img/image12.jpg",
            "video"=>"/img/image12.jpg"
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
