<?php
/**
 * Created by wanxin on 2018/5/13.
 * Email: 987763485@qq.com
 */

namespace app\lib\exception;


class GroupException extends BaseException
{
    public $code = 404;
    public $msg = '团购不存在';
    public $errorCode = '50000';

}