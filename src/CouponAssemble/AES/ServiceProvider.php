<?php

namespace XuanChen\CouponAssemble\AES;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['aes'] = static function ($app) {
            return new Client($app);
        };
    }
}
