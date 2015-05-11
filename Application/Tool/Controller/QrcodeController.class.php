<?php
// .-----------------------------------------------------------------------------------
// | WE TRY THE BEST WAY 杭州博也网络科技有限公司
// |-----------------------------------------------------------------------------------
// | Author: 贝贝 <hebiduhebi@163.com>
// | Copyright (c) 2013-2016, http://www.itboye.com. All Rights Reserved.
// |-----------------------------------------------------------------------------------

namespace Tool\Controller;

class QrcodeController extends Controller{
	
	public function index(){
		//TODO: 生成二维码
		vendor("Org.PhpQrcode.QrcodeHelper");
		$qrcode = new QrcodeHelper();
		
		dump($qrcode);
		
	}
}
/**
 * 测试二维码代码
 * author 王玉国
 * <?php
namespace Home\Controller;
use Think\Controller;


class IndexController extends Controller {
    public function index(){
    	$this->display('MyQrcode');
    }
	
	public function qrcode(){
	
		//$this->display('qrcode');
		
		Vendor('phpqrcode.phpqrcode','','.php');
		$QRcode = new \QRcode();
		//定义纠错级别
		$errorLevel = "L";
		//定义生成图片宽度和高度;默认为3
		$size = "8";
		//定义生成内容
		$content=urldecode(I('get.text'));
		//保存的文件夹
		$path = "Public/img/";
		//将二维码保存到本地的名称
		$fileName = $path.$size.strlen($content).'.png';
		if(file_exists($fileName)){ 
				// 以二进制格式打开文件
				$fp = fopen($fileName, 'rb');
				
				// 发送合适的报头
				header("Content-Type: image/png");
				header("Content-Length: " . filesize($fileName));
				
				// 发送图片并终止脚本
				fpassthru($fp);
				exit;
		}else{ 
				//调用QRcode类的静态方法png生成二维码图片//
				\QRcode::png($content, $fileName, $errorLevel, $size);
				$fp = fopen($fileName, 'rb');
				
				// 发送合适的报头
				header("Content-Type: image/png");
				header("Content-Length: " . filesize($fileName));
				
				// 发送图片并终止脚本
				fpassthru($fp);
				exit;
				
		}
	}
}
 * 
 * 
 * 
 */