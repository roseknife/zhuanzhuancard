<?php
/**
 * Created by PhpStorm.
 * User: RoseKnife Hua
 * Date: 2018/5/24 0024
 * Time: 16:45
 */

namespace RoseKnife\Zhuanzhancard\object;


class TradeInfo
{
    /**
     * @var 用户ID
     */
    public $userId = "";

    /**
     * @var 订单号
     */
    public $orderId = "";

    /**
     * @var 邮费分
     */
    public $postAge = "";

    /**
     * @var 实际交易金额，单位分
     */
    public $orderMoney = "";

    /**
     * @var 支付渠道 01支付宝,02微信,03银联,04其他（使用兑换码后无其他金额情况）
     */
    public $payCanal = "04";

    /**
     * @var 关联第三方渠道的付款流水号
     */
    public $payTradeId = "";

    /**
     * @var 收货人
     */
    public $custName = "";

    /**
     * @var 收货地址
     */
    public $address = "";

    /**
     * @var 联系电话
     */
    public $custPhone = "";

    /**
     * @var 邮编
     */
    public $custPost = "";

    /**
     * @var 取货方式：00快递，01自取
     */
    public $fetchType = "";

    /**
     * @var 留言
     */
    public $remark = "";


    /**
     * @var 子订单详细信息array
     */
    public $detailReqList;

    /**
     * @var 操作类型：0加入购物车，1提交订单，2修改资料，3购物车订单删除4未支付订单删除
     */
    public $tradeType = "1";


}