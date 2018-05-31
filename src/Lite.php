<?php

namespace RoseKnife\Zhuanzhancard;

/**
 * 转转卡
 *
 * @see http://www.xmainc.com/
 * @author: roseknife 2018-05-24
 */

class Lite
{

    private $API_URL = "";
    private $CHANNELKEY = "";
    private $CHANNEL_CODE = "";

    public function __construct($config)
    {
        $this->CHANNEL_CODE = $config['channel_code'];
        $this->CHANNELKEY = $config['channel_key'];
        $this->API_URL = $config['api_url'];
    }

    /**
     * 发送请求
     * @param $url
     * @param $data
     * @return mixed
     */
    function postData($url, $data)
    {
        $headers = array(
            "Content-type: application/json;charset='utf-8'",
            "Accept: application/json",
            "Cache-Control: no-cache",
            "Pragma: no-cache"
        );
        $ch = curl_init();
        $timeout = 60;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);  // 从证书中检查SSL加密算法是否存在
        $handles = curl_exec($ch);
        curl_close($ch);
        return json_decode($handles, true);
    }


    /**
     * 转转卡下单
     */
    public function orderOpening($trade)
    {
        $obj = array_filter((array)$trade); //转数组移除空值
        $obj['channelCode'] = $this->CHANNEL_CODE; //添加渠道值
        $tempDetail = $obj['detailReqList']; //临时存放子订单
        unset($obj['detailReqList']); //移除子订单
        ksort($obj); //进行排序
        $signStr = "";
        foreach ($obj as $k => $v) {
            $signStr .= strtoupper($k . "=" . $v . "&");
        }
        $signStr .= "CHANNELKEY=" . $this->CHANNELKEY;
        $obj['token'] = strtoupper(md5($signStr)); //设置签名
        $obj['detailReqList'] = $tempDetail; //归还子订单

        ksort($obj);
        $data = json_encode($obj);
        $result = self::postData($this->API_URL . 'interface/orderopening', $data);
        return $result;
    }


}
