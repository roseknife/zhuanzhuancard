<?php
/**
 * Created by PhpStorm.
 * User: yuetao
 * Date: 2018/11/12
 * Time: 09:38
 */

namespace RoseKnife\Zhuanzhancard\object;

/**
 * 退款对象
 * Class OrderRefund
 * @package RoseKnife\Zhuanzhancard\object
 */
class OrderRefund
{
    /**
     * @var string 操作员
     */
    public $operateStaffNo ="";

    /**
     * @var string 操作部门
     */
    public $operateDepartID = "";

    /**
     * @var string 子订单号(必填)
     */
    public $detailNo = "";
}