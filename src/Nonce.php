<?php
namespace loadedclasses\nonces;

class Nonce implements NonceInterface{

	 private $algorithm = 'md5';
    /**
     * @var int
     */
    private $lifespan = 86400;
    private $session = '';


    public function __construct(ConfigInterface $config = null){
        if (is_null($config)) {
            $config = new Config();
        }

        $this->lifespan     = $config->getLifespan();
        $this->algorithm    = $config->getAlgorithm();
    }


	public function generate($a){

		return $this->hash($a);
	}
	
	public function hash($data){
        return substr(hash_hmac($this->algorithm, $data,$this->lifespan), -12, 15);
    }

      public function verify($nonce,$key){
        $nonce        = (string)$nonce;

        if (empty($nonce)) {
            return false;
        }
       
        $expected = $this->hash($key);
        if ($expected  == $nonce) {
            return true;
        }
        else{
           return false;
        }
    }


    protected function data($tickAdjust = 0)
    {
        $data = ($this->tick() + $tickAdjust);
         return $data;
    }

    /**
     * @return float
     */
    protected function tick()
    {
        return ceil(time() / ($this->lifespan / 2));
    }



}
