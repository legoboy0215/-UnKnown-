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
   $this->getLogger()->info(TextFormat::DARK_GREEN . "✔ §c+§6Anvil§cs§2 Enabled");
   	$this->saveDefaultConfig();
       	}
   public function ItemHeld(PlayerItemHeldEvent $event) {
    item = $event->getItem();
  $id = $item->getId();
  $player = $event->getPlayer();
  if($this->getConfig()->get("enable-plugin") == "true"){
   foreach((array)$this->getConfig()->get("id1") as $id1){
   if($id == $id1){
    foreach((array)$this->getConfig()->get("tip1") as $tip1{
    foreach((array)$this->getConfig()->get("message1") as $message1{
    foreach((array)$this->getConfig()->get("popup1") as $popup1{
     $player->sendTip($tip1 . '');
     $player->sendMessage($message1 . '');
     $player->sendPopup($popup1 . '');
     foreach((array)$this->getConfig()->get("command1") as $command1){
  $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $command));	
   }
   }
   }
   }
   }
   }
  }
  }//this is of the ItemHeld function;
 }//this is of the Class Main;
  
