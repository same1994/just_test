<?php
namespace app\index\controller;

use think\Controller;

class Before extends Controller
{
    protected $beforeActionList = [
        'first',
        'second'=>['except'=>'two'],
        'third'=>['only'=>'one,two']
    ];

    protected function first()
    {
        echo  '一';
    }
    protected function second()
    {
        echo  '二';
    }
    protected function third()
    {
        echo  '三';
    }
    public function before()
    {
        return 'before';
    }

    public function one()
    {
        return 'one';
    }

    public function two()
    {
        return 'two';
    }
}
