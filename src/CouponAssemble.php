<?php

namespace XuanChen;

use Illuminate\Support\Facades\Facade;

/**
 * Class Chain33.
 *
 * @method static CouponAssemble\PingAn\Client PingAn
 * @method static CouponAssemble\BS\Client BS
 * @method static CouponAssemble\Kernel\Client Client
 * @method static CouponAssemble\AES\Client AES
 */
class CouponAssemble extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return CouponAssemble\Application::class;
    }
}
