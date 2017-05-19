<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/19 0019
 * Time: 16:55
 * @author:xjw129xjt(駿濤) xjt@ourstu.com
 */
namespace Api\Model;
use Think\Model;

class IndexModel extends Model {
    public function  getData()
    {
        dump(123);
        exit();
        $data=D('weibo')->where(array('id'=>1))->select();
        return $data;
    }
}