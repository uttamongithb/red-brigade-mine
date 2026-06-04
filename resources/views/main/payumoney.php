<?php
// echo "<pre>";
// print_r($_GET);DIE;
// Merchant key here as provided by Payu
// test payumoney details
// Test Card Number: 5123456789012346
// Test CVV: 123
// Test Expiry: May 2020
//
$rootserver="http://". $_SERVER['SERVER_NAME'];
$MERCHANT_KEY = config('services.payu.merchant_key');
$SALT = config('services.payu.salt');
$txnid=$userdata->transId;
$name=$userdata->fast_name;
$email=$userdata->email;
$amount=$userdata->amount;
$phone=$userdata->mobile;
$surl=$rootserver."/paysuccess?order=".$txnid;
$furl=$rootserver."/failure?order=".$txnid;
$productInfo="xyzabc"; 
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashString=$MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
$hash = strtolower(hash('sha512', $hashString));
?>
 <script>
	function submitform(){
		var postForm=document.forms.postForm;
		postForm.submit();
	}
</script>
<body onload="submitform();">
	<form action="https://test.payu.in/_payment"  name="postForm" method="post" >
		<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
		<input type="hidden" name="hash" value="<?php echo $hash; ?>" />
		<input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
		<table>
			<tr>
			<td><input type="hidden" name="amount"  value="<?php echo $amount; ?>"  /></td>
			<td><input type="hidden" name="firstname" id="firstname"  value="<?php echo $name; ?>"  /></td>
			</tr>
			<tr>
			<td><input type="hidden" name="email" id="email"   value="<?php echo $email; ?>"/></td>
			<td><input type="hidden" name="phone" value="<?php echo $phone; ?>"/></td>
			</tr>
			<tr>
			<td colspan="3"><input type="hidden" name="productinfo" value="xyzabc"/> </td>
			</tr>
			<tr>

			<td colspan="3"><input type="hidden" name="surl"  size="64" value="<?php echo $surl; ?>"  /></td>
			</tr>
			<tr>

			<td colspan="3"><input type="hidden" name="furl"  value="<?php echo $furl; ?>"  size="64" /></td>
			</tr>

			<td colspan="4"><input type="hidden" type="submit" value="Submit"  /></td>
		</tr>
		</table>
	</form>
</body>