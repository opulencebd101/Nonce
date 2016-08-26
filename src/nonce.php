<?php
namespace opulencedev\wp_nonce;

/**
 * Class Nonce
 * @package opulencedev\wp_nonce
 */
class Nonce implements NonceInterface
{

    use GeneratorTrait;
    private $algorithm = 'md5';
    private $lifespan = 86400;
    private $action = '';

 public function __construct(){
        $config = new Config();
        $this->lifespan     = $config->getLifespan();
        $this->algorithm    = $config->getAlgorithm();
        $this->salt         = $config->getSalt();
        $this->sessionToken = $config->getSessionToken();
        $this->userId       = $config->getUserId();
    }
    
     /**
     * Generates the nonce string
     *
     * @return string
     */
    public function generate()
    {
        return $this->hash($this->data());
    }
}
