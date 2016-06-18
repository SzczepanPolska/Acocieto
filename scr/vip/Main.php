<?php

namespace vip;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	public function onEnable(){
		$this->getLogger()->info("vipkup Zaladowane");
		}

  public function onCommand(CommandSender $sender, Command $command, $label, array $args){	
			if(strtolower($command->getName('vip'))) {
				if(empty($args)) {
					$sender->sendMessage("§7[ ========== §vip§7 ========== ]");
					$sender->sendMessage("§7meheejj?");
					$sender->sendMessage("§o§a  * lewej");
					$sender->sendMessage("§o§a  * dher:");
					$sender->sendMessage("§7 djejs:");
					$sender->sendMessage("§o§a  * jdjshd");
					$sender->sendMessage("§7[ ========== §vip§7 ========== ]");
					return true;
				}
					 if($args[0] == "kup") {
                                        $sender->sendMessage("jejejejejrhrjrjrjrjr");
	}
}
}
