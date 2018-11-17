<?php


namespace InkoHX\api;


use InkoHX\getDevice;
use pocketmine\Player;

class Device
{
    /**
     * @param Player $player
     *
     * @return string
     */
    public static function getModel(Player $player): string
    {
        $data = getDevice::getData()->get($player->getName());
        return $data['DeviceModel'];
    }

    /**
     * @param Player $player
     *
     * @return string
     */
    public static function getOS(Player $player): string
    {
        $data = getDevice::getData()->get($player->getName());
        return OS::TYPE[$data['DeviceOS']];
    }
}