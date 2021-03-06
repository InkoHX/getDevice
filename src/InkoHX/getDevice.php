<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/08/21
 * Time: 23:28
 */

namespace InkoHX;


use InkoHX\api\Device;
use InkoHX\event\DataPacketReceive;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class getDevice extends PluginBase
{
    /* @var Config $data */
    private static $data;

    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents(new DataPacketReceive(), $this);
        self::$data = new Config($this->getDataFolder().'cache.json', Config::JSON);
    }

    public function onDisable(): void
    {
        parent::onDisable(); // TODO: Change the autogenerated stub
    }

    /**
     * @return Config
     */
    public static function getData(): Config
    {
        return self::$data;
    }

    /**
     * @return Device
     */
    public function getAPI(): Device
    {
        return new Device();
    }
}
