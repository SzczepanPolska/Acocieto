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
			if(strtolower($command->getName()) === 'vip') {
				if(empty($args)) {
					$sender->sendMessage("§7[ ========== §cvip§7 ========== ]");
					$sender->sendMessage("text1");
					$sender->sendMessage("text2");
					$sender->sendMessage("text3");
					$sender->sendMessage("text4");
					$sender->sendMessage("text5");
					$sender->sendMessage("§7[ ========== §cvip§7 ========== ]");
					return true;
				}
					 if($args[0] == "kup") {
                                        $sender->sendMessage("text1");
                                        $sender->sendMessage("text2");
                                        $sender->sendMessage("text3");
                                        $sender->sendMessage("text4");
                                        $sender->sendMessage("text5");
	}
}
}
