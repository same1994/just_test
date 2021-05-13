<?php

namespace  app\Model;


use think\Model;

class User extends Model{

    protected  $autoWriteTimestamp = 'datetime';

    public function getStatusAttr($value)
    {
        $status = [
            0 =>'待审核',
            -1=> '已驳回',
            1=>'审核通过',
            2=>'滚蛋'
        ];
        return $status[$value];
    }

    public function setEmailAttr($value)
    {
       return strtoupper($value);
    }

    public function searchEmailAttr($query,$value)
    {
        $query->where('email','like',$value.'%');
    }

    public function searchCreateTimeAttr($query,$value)
    {
        $query->whereBetweenTime('create_time',$value[0],$value[1]);
    }
}