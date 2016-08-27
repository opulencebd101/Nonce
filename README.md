# Nonce
Wordpress nonce
<br/><br/><br/><br/>
USAGE 
<br/><br/>
Create a file at the same directory as vendor, copy below code and run the script.
<code>
<code>
<?php
require('vendor/autoload.php'); 
$a = new loadedclasses\nonces\Nonce(); 
/*Give any string to verify*/  
$str = 'YOUR STRING';
/*Generate the nonce for $str*/  
echo $a->generate($str); 
/*Verify it*/   
$ver = $a->verify('YOUR NONCE VALUE',$str);

if($ver){ 
	echo "It is verified";  
}  
else{ 
	echo "Not verified";  
}

</code>
</code>
