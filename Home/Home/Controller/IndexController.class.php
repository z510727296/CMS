<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public $product;
    public function _initialize()
    {
        $this->product = M('product');
    }
    /**
     * 主页加载
     */
    public function index()
    {
        $this->newPro();
        $this->featPro();
        $this->display();
    }

    /**
     * 主页推荐产品
     */
    private function featPro()
    {
        $datas = $this->product->where(rand())->limit(2)->select();
        $this->assign('featPro',$datas);
    }

    /**
     * 最新产品推荐
     */
    private function newPro()
    {
        $datas = $this->product->order('id')->limit(3)->select();
        $this->assign('newPro',$datas);
    }
}