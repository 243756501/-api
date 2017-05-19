<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/19 0019
 * Time: 17:26
 * @author:xjw129xjt(駿濤) xjt@ourstu.com
 */

//api success方法
function apiSuccess($data)
{
    $data['code']=200;
    $data['info']='数据获取成功';
    $data['data']=$data;
    $this->ajaxReturn($data);
}