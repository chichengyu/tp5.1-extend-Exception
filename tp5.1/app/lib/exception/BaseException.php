<?php 
namespace app\lib\exception;
use think\Exception;

class BaseException extends Exception
{
	// HTTP 状态码
	protected $code;
	// 提示信息
	protected $msg;
	//错误码
	protected $errorCode;

	public function __set($pro,$val)
	{
		if (property_exists($this,$pro)) {
			$this->$pro = $val;
		}
	}
	public function __get($pro)
	{
		if (property_exists($this,$pro)) {
			return $this->$pro;
		}
	}
}