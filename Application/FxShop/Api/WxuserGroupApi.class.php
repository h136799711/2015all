<?php
// .-----------------------------------------------------------------------------------
// | WE TRY THE BEST WAY
// |-----------------------------------------------------------------------------------
// | Author: 贝贝 <hebiduhebi@163.com>
// | Copyright (c) 2013-2016 杭州博也网络科技, http://www.itboye.com. All Rights Reserved.
// |-----------------------------------------------------------------------------------


namespace FxShop\Api;

use Common\Model\WxuserGroupModel;
use Common\Model\GroupAccessModel;

class WxuserGroupApi extends \Common\Api\Api{
		
	protected function _init(){
		$this->model = new WxuserGroupModel();
	}
	
}
