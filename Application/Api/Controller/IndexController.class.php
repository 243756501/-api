<?php
namespace Api\Controller;
use Think\Controller;
class IndexController extends Controller {
   public function getData()
  {
//      $data=D('Api/Index')->getData();
      $data=D('weibo')->where(array('id'=>1))->select();
      $this->apiSuccess($data);
  }
}