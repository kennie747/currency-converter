<?php
function convertCurrency($amount,$from_currency,$to_currency){
  $apikey = 'your-api-key-here';

  $from_Currency = urlencode($from_currency);
  $to_Currency = urlencode($to_currency);
  $query =  "{$from_Currency}_{$to_Currency}";
	//https://free.currencyconverterapi.com/api/v5/convert?q=USD_PHP&compact=ultra
  $json = file_get_contents("https://free.currencyconverterapi.com/api/v5/convert?q={$query}&compact=ultra");
 	//$json = file_get_contents("https://www.currencyconverterapi.com/api/v5/convert?q={$query}&compact=ultra&apiKey={$apikey}");
  $obj = json_decode($json, true);

  $val = floatval($obj["$query"]);


  $total = $val * $amount;
  return number_format($total, 2, '.', '');
}

//uncomment to test
echo convertCurrency(10, 'USD', 'NGN');
?>
<html>
<br/>
Hello world!!!
<br/>
<?php
echo convertCurrency(10, 'USD', 'PHP')
?>
</html>