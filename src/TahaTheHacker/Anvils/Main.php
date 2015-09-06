<?php
namespace TahaTheHacker\Anvils;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginLoader;
use pocketmine\player;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\item\item;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\utils\TextFormat;
use pocketmine\command\ConsoleCommandSender;

 class Main extends PluginBase implements Listener {
  
   public function onEnable(){
   $this->getServer()->getPluginManager()->registerEvents($this, $this);
   $this->getLogger()->info(TextFormat::DARK_GREEN . "✔ §c+§6Snowball§cs§2 Enabled");
       	}
   public function ItemHeld(PlayerItemHeldEvent $event) {
  $item = $event->getItem();
  $id = $item->getId();
  $player = $event->getPlayer();
 
  }//this is of the ItemHeld function;
 }//this is of the Class Main;
  
