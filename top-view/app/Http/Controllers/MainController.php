<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    protected $data = array (
          'USD' => 
          array (
            "15m"=>8037.61,
            "last"=>8037.61,
            "buy"=>8038.92,
            "sell"=>8036.29,
            "symbol"=>"$",
          ),
          "AUD" => 
          array (
            "15m" => 10609.44, 
            "last" => 10609.44, 
            "buy" => 10610.31, 
            "sell" => 10608.56, 
            "symbol" => "$"
          ),
          "BRL" => array (
            "15m" => 26126.74, 
            "last" => 26126.74, 
            "buy" => 26128.91, 
            "sell" => 26124.58, 
            "symbol" => "R$"
          ),
          "CAD" => array (
            "15m" => 10256.51, 
            "last" => 10256.51, 
            "buy" => 10257.37, 
            "sell" => 10255.66, 
            "symbol" => "$"
          ),
          "CHF" => array (
            "15m" => 7938.72, 
            "last" => 7938.72,
            "buy" => 7939.38, 
            "sell" => 7938.06,
            "symbol" => "CHF"
          ),
          "CLP" => array (
            "15m" => 5028723.4, 
            "last" => 5028723.4, 
            "buy" => 5029140.33, 
            "sell" => 5028306.47,
            "symbol" => "$"
          ),
          "CNY" => array (
            "15m" => 53637.03, 
            "last" => 53637.03,
            "buy" => 55426.43, 
            "sell" => 51847.62,
            "symbol" => "¥"
          ),
          "DKK" => array (
            "15m" => 50812.67,
            "last" => 50812.67,
            "buy" => 50816.88,
            "sell" => 50808.46,
            "symbol" => "kr"
          ),
          "EUR" => array (
            "15m" => 6779.27, 
            "last" => 6779.27,
            "buy" => 6780.63, 
            "sell" => 6777.9,
            "symbol" => "€"
          ),
          "GBP" => array (
            "15m" => 6076.08, 
            "last" => 6076.08, 
            "buy" => 6076.59, 
            "sell" => 6075.58,
            "symbol" => "£"
          ),
          "HKD" => array (
            "15m" => 62661.03, 
            "last" => 62661.03, 
            "buy" => 62666.22, 
            "sell" => 62655.83,
            "symbol" => "$"
          ),
          "INR" => array (
            "15m" => 520756.65, 
            "last" => 520756.65, 
            "buy" => 520799.82, 
            "sell" => 520713.47,
            "symbol" => "₹"
          ),
          "ISK" => array (
            "15m" => 832391.88, 
            "last" => 832391.88, 
            "buy" => 832460.89,
            "sell" => 832322.86,
            "symbol" => "kr"
          ),
          "JPY" => array (
            "15m" => 895417.75, 
            "last" => 895417.75,
            "buy" => 895492.56, 
            "sell" => 895342.95,
            "symbol" => "¥"
          ),
          "KRW" => array (
            "15m" => 8793532.82, 
            "last" => 8793532.82,
            "buy" => 8794261.89, 
            "sell" => 8792803.74,
            "symbol" => "₩"
          ),
          "NZD" => array (
            "15m" => 11781.34,
            "last" => 11781.34,
            "buy" => 11782.31,
            "sell" => 11780.36,
            "symbol" => "$"
          ),
          "PLN" => array (
            "15m" => 28892.69, 
            "last" => 28892.69,
            "buy" => 28895.09, 
            "sell" => 28890.3, 
            "symbol" => "zł"
          ),
          "RUB" => array (
            "15m" => 473898.71,
            "last" => 473898.71,
            "buy" => 473938.0,
            "sell" => 473859.42,
            "symbol" => "RUB"
          ),
          "SEK" => array (
            "15m" => 67671.01, 
            "last" => 67671.01, 
            "buy" => 67676.62, 
            "sell" => 67665.4,
            "symbol" => "kr"
          ),
          "SGD" => array (
            "15m" => 10880.93,
            "last" => 10880.93,
            "buy" => 10881.83,
            "sell" => 10880.03,
            "symbol" => "$"
          ),
          "THB" => array (
            "15m" => 262987.87,
            "last" => 262987.87,
            "buy" => 263009.67, 
            "sell" => 262966.07,
            "symbol" => "฿"
          ),
          "TWD" => array (
            "15m" => 241207.56,
            "last" => 241207.56,
            "buy" => 241227.56, 
            "sell" => 241187.57,
            "symbol" => "NT$"
          ),
        );
    
    public function index() {
        return view('home', ['data' => json_encode($this->data)]);
    }
    
    public function show($num) {
      
      $result = json_encode(array_slice($this->data, 0, $num));
      return $result;
    }
}
