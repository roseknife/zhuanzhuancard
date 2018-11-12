<?php
/**
 * Created by PhpStorm.
 * User: yuetao
 * Date: 2018/11/12
 * Time: 10:32
 */

namespace RoseKnife\Zhuanzhancard\object;


class Orderinqury
{
    /**
     * @var string 用户ID
     */
    public $userId = "";

    /**
     * @var string 订单号
     */
    public $orderNo = "";

    /**
     * @var string  子订单号
     */
    public $detailNo ="";

    /**
     * @var string 支付类型  0 购物车（未提交）1我的订单;
     */
    public $paymentType = "1";
}