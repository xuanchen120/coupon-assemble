<?php

namespace XuanChen\CouponAssemble\PingAn;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['pingan'] = static function ($app) {
            return new Client($app);
        };
    }
}
