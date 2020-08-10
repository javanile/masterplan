<?php

namespace JavanileDefine;

class Application extends \Symfony\Component\Console\Application
{
    /**
     * Application constructor.
     *
     * @param $context
     */
    public function __construct()
    {
        parent::__construct('DSL micro language', '0.1.0');
    }
}
