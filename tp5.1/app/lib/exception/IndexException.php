<?php 
namespace app\lib\exception;

class IndexException extends BaseException
{
	protected $code = 404;
	protected $msg = 'Source Not Exists';
	protected $errorCode = 10001;
}