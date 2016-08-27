<?php

namespace loadedclasses\nonces;

/**
 * Class Config
 * @package loadedclasses\nonces
 */
class Config implements ConfigInterface
{


    private static $lifespan = 250;
    private static $algorithm = 'md5';

    /**
     * @return int
     */
    public function getLifespan()
    {
        return self::$lifespan;
    }

    /**
     * @param int $lifespan
     */
    public static function setLifespan($lifespan)
    {
        self::$lifespan = (int)$lifespan;
    }

    /**
     * @return string
     */
    public function getAlgorithm()
    {
        return self::$algorithm;
    }

    /**
     * @param string $algorithm
     *
     * @return bool|void
     */
    public static function setAlgorithm($algorithm)
    {
        if ( ! in_array($algorithm, hash_algos())) {
            return false;
        }

        self::$algorithm = (string)$algorithm;
    }

}