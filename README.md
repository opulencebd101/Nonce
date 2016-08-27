# Nonce
Wordpress nonce
<br/><br/><br/><br/>
USAGE 
<br/><br/>
Create a file at the same directory as vendor, copy below code and run the script.

<?php
require('vendor/autoload.php');
$a = new loadedclasses\nonces\Nonce();
/*Give any string to verify*/
$str = 'opulence';
/*Generate the nonce for $str*/
echo $a->generate($str);
/*Verify it*/
$ver = $a->verify('803543c0dd36',$str);

if($ver){
	echo "It is verified";
}
else{
	echo "Not verified";
}
