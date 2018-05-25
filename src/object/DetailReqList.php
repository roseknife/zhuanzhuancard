<?php
/**
 * Created by PhpStorm.
 * User: RoseKnife Hua
 * Date: 2018/5/24 0024
 * Time: 17:37
 */

namespace RoseKnife\Zhuanzhancard\object;


class DetailReqList
{
    /**
     * @var 地址
     */
    public $address = "";

    /**
     * @var 兑换码。注：仅当优惠方式为01兑换码时此处为16位兑换码，其他优惠方式此处为空
     */
    public $chargeNo = "";

    /**
     * @var 客户姓名
     */
    public $custName = "";

    /**
     * @var 联系电话
     */
    public $custPhone = "";

    /**
     * @var 子订单流水号
     */
    public $detailNo = "";

    /**
     * @var 优惠金额，单位分
     */
    public $discountMoney = "0";

    /**
     * @var 优惠方式。00：无，01兑换码，02：优惠券，03：教育一卡通，04：招行VIP
     */
    public $discountType = "00";

    /**
     * @var 默认填1
     */
    public $num = "1";

    /**
     * @var 订单类型：0购卡开通1购买兑换券
     */
    public $orderType = "0";


    /**
     * @var 套餐金额，单位分
     */
    public $packageMoney = "0";


    /**
     * @var 套餐类型如:Z1（200套餐），Z2（288套餐）
     */
    public $packageType = "";


    /**
     * @var 预充值金额，单位分
     */
    public $preSupplyMoney = "0";


    /**
     * @var 备注
     */
    public $remark = "";


}