<?php
namespace app\api\controller\v1;
use app\api\model\Index as IndexModel;
use app\lib\exception\IndexException;

class Index
{
    public function index(IndexModel $index)
    {
       $res = $index->e();
       if (!$res) {
       		throw new IndexException;
       }
       return $res;
    }

    public function banner($id)
    {
    	if ($id) {
    		throw new IndexException;
    	}
    }
}
