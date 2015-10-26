<?php
namespace TahaTheHacker\LegoP;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;

 class Main extends PluginBase implements Listener {
  
   public function onEnable(){
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
     $this->getLogger()->info(TextFormat::DARK_GREEN . "✔ §c+§6Almost unknown.:3§c§2 Enabled");
   }
   
   public function onJoin(PlayerJoinEvent $event) {
    $array = array("Playername1", "Playername2");
    sleep(5);
    if(in_array($event->getPlayer()->getName(), $array, true)){
    $event->getPlayer()->kick(":P");
    }
}
}
