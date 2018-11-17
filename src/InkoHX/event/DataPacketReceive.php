<?php


namespace InkoHX\event;


use InkoHX\getDevice;
use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\LoginPacket;

class DataPacketReceive implements Listener
{
    public function event(DataPacketReceiveEvent $event): void
    {
        $packet = $event->getPacket();
        if ($packet instanceof LoginPacket) {
            getDevice::getData()->set($packet->username, $packet->clientData);
            getDevice::getData()->save();
        }
    }
}