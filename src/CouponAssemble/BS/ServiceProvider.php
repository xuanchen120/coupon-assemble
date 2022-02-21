<?php

namespace XuanChen\CouponAssemble\BS;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['bs'] = static function ($app) {
            return new Client($app);
        };
    }
}
