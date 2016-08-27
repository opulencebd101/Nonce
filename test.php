<?php
require('vendor/autoload.php');
$a = new loadedclasses\nonces\Nonce();
//$a->generate('redme');
$ver = $a->verify('803543c0dd36','redme');
if($ver){
echo "It is verified";
}
else{
	echo "Not verified";
}