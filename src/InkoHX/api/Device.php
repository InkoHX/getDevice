<?php

namespace InkoHX\api;


use InkoHX\getDevice;
use pocketmine\Player;

class Device
{
    /**
     * プレイヤーのデバイスモデルを取得します。
     *
     * @param Player $player
     *
     * @return string
     */
    public function getModel(Player $player): string
    {
        $data = getDevice::getData()->get($player->getName());
        return $data['DeviceModel'];
    }

    /**
     * プレイヤーのOSを取得します。
     *
     * @param Player $player
     *
     * @return string
     */
    public function getOS(Player $player): string
    {
        $data = getDevice::getData()->get($player->getName());
        return OS::TYPE[$data['DeviceOS']];
    }
}