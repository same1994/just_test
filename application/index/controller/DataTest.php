<?php


namespace app\index\controller;


use app\Model\User;
use think\Db;
use think\db\exception\DataNotFoundException;

class DataTest
{
    public function index()
    {
        return 'database';
    }

    public function test()
    {
        //try {
        //    $a = Db::table('tp_user')->where('id','123')->findOrFail();
        //}catch (DataNotFoundException $e){
        //   return  $e->getMessage();
        //}
        //$a = Db::name('user')->select();
        //$data = [
        //    'user_name' => '付盟'
        //];
        // Db::name('user')->where('id',4)->setField('user_name','付盟蠢猪');
        //$a =  Db::name('user')->count();
        //return Db::name('user')->insertGetId($data);
        //$a = User::get(225);
        //$a->price = Db::raw('price +1');
        //$a->save();
        //$user = new User();
        //$user->username = '猪猪侠';
        //$user->password = '123';
        //$user->gender = '男';
        //$user->email = 'libai@163.com';
        //$user->price = 100;
        //$user->details = '235';
        //$user->uid = 1011;
        //$user->save();
        $user = User::get(237);
        $user->username = '付盟黑猪子p';
        $user->save();
        //$a = User::withSearch(['email','create_time'],['email'=>'xiao','create_time'=>['2015-1-1','2017-1-1']])->select();
        //echo Db::getLastSql();
        //return $user->id;
       // return json($a);
    }

    public function model()
    {
        $a = User::where('id', '123')->findOrFail();
        return json($a);
    }
}