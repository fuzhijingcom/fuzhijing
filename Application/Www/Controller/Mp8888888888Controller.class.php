<?php
namespace Home\Controller;
use Think\Controller;
class MpController extends Controller {
    public function index(){
       //ToUserName
       
        $log_content = I('log_content');
        
        $content = html_entity_decode($log_content);
        
        $log_content = json_decode($content,ture);

        $data['ToUserName'] = $log_content['ToUserName'];
        $data['FromUserName'] = $log_content['FromUserName'];
        $data['CreateTime'] = $log_content['CreateTime'];
        $data['MsgType'] = $log_content['MsgType'];
        $data['CreateTime'] = date('Y-m-d H:i:s',$log_content['CreateTime']);
        $data['Content'] = $log_content['Content'];
        
       
        M('log')->data($data)->add();
       
        //echo $log_content;
        
    }
    
   
}