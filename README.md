# Nonce
Wordpress nonce
<br/><br/><br/><br/>
Composer file to install library<br/><br>
Create a composer.json with below code in your project folder and after that run "composer install".<br/><br>
<code>
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/opulencebd101/nonce.git"
        }
    ],
    "require": {
        "mynonce": "dev-master"
    }
}
</code>


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
