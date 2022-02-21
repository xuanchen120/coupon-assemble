<?php

namespace XuanChen\CouponAssemble\Kernel;

use Illuminate\Support\Str;
use XuanChen\CouponAssemble\Exceptions\CouponException;

class BaseClient
{
    protected $app;

    protected $config;

    protected $client;

    public function __construct($app)
    {
        $this->app    = $app;
        $this->config = $app->config;
        $this->client = $app->client;
    }

}
