<?php

namespace loadedclasses\nonces;

/**
 * Interface ConfigInterface
 * @package RouvenHurling\Nonces
 */
interface ConfigInterface{

    public function getLifespan();

    public function getAlgorithm();


}