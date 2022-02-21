<?php

namespace XuanChen\CouponAssemble;

use Pimple\Container;

/**
 * Class Application.
 *
 * @method static PingAn\Client PingAn
 * @method static BS\Client BS
 * @method static AES\Client AES
 */
class Application extends Container
{
    /**
     * 要注册的服务类.
     *
     * @var array
     */
    protected array $providers = [
        PingAn\ServiceProvider::class,
        BS\ServiceProvider::class,
        AES\ServiceProvider::class,
    ];

    /**
     * Application constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this['config'] = static function () {
            return config('chain33');
        };
        $this->registerProviders();
    }

    /**
     * Register providers.
     */
    protected function registerProviders(): void
    {
        foreach ($this->providers as $provider) {
            $this->register(new $provider());
        }
    }

    /**
     * 获取服务 $this->account->do().
     *
     * @Author: <C.Jason>
     * @Date  : 2020/3/17 20:44 下午
     *
     * @param  string  $name  服务名称
     * @return mixed
     */
    public function __get(string $name)
    {
        return $this->offsetGet(strtolower($name));
    }

    /**
     * Notes: 获取服务 $this->account($args)->do().
     *
     * @Author: <C.Jason>
     * @Date  : 2020/3/17 20:44 下午
     *
     * @param  string  $name  服务名称
     * @param  $arguments
     * @return mixed
     */
    public function __call(string $name, $arguments)
    {
        return $this->offsetGet(strtolower($name));
    }
}
