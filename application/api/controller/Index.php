<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\model\admin;

/**
 * 首页接口
 */
class Index extends Api
{
    protected $noNeedLogin = ['*'];
    protected $noNeedRight = ['*'];

    /**
     * 首页
     *
     */
    public function index()
    {
        $this->success('请求成功');
    }

    public function login()
    {
        echo '13';
//        return json(admin::all());
    }
}
