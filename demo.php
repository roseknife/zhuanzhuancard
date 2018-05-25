<?php
header("Content-Type: text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: RoseKnife Hua
 * Date: 2018/5/24 0024
 * Time: 16:19
 */
require_once "src/Lite.php";
require_once "src/object/TradeInfo.php";
require_once "src/object/DetailReqList.php";

//子订单信息

$detail=new RoseKnife\Zhuanzhancard\object\DetailReqList();
$detail->address = "浙江省绍兴市";
$detail->custName = "管利春";
$detail->custPhone = "18657555484";
$detail->detailNo = "405125334321";  //子订单号，与主订单一样不可重复
$detail->discountMoney = "0";
$detail->num = "1";
$detail->orderType = "0";
$detail->packageMoney="1080";
$detail->packageType="";
$detail->preSupplyMoney = "0";
$detail->remark = "";

$detailArr[0]=$detail; //给到数组
//$arr[1]=$detail;

//订单信息
$trade = new \RoseKnife\Zhuanzhancard\object\TradeInfo();
$trade->address = "浙江省绍兴市";
$trade->custName ="管利春";
$trade->custPhone = "18657555484";
$trade->custPost = "000000";
$trade->fetchType = "00";
$trade->orderId = "897829647827";  //主订单号，不可重复
$trade->orderMoney = "1080";
$trade->payCanal = "04";
$trade->payTradeId = "";
$trade->postAge = "800";
$trade->remark = "";
$trade->tradeType = "1";
$trade->userId = "0002";

$trade->detailReqList = $detailArr;  //给订单赋对象

//下单

$result=\RoseKnife\Zhuanzhancard\Lite::orderOpening($trade);
print_r($result);


