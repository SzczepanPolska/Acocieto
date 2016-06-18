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
		$this->getLogger()->info("CobblexKup Zaladowane");
		}

  public function onCommand(CommandSender $sender, Command $command, $label, array $args){	
			if(strtolower($command->getName('cobblex'))) {
				if(empty($args)) {
					$sender->sendMessage("§7[ ========== §eCOBBLEX§7 ========== ]");
					$sender->sendMessage("§7Co to jest §eCOBBLEX?");
					$sender->sendMessage("§o§a  * Jest to blok ktory po postawieniu daje losowe");
					$sender->sendMessage("§o§a  * itemy:");
					$sender->sendMessage("§7Aby kupic wpisz:");
					$sender->sendMessage("§o§a  * /cobblex kup §6- §o§cKoszt: 7 stakow cobbla");
					$sender->sendMessage("§7[ ========== §eCOBBLEX§7 ========== ]");
					return true;
				}
					 if($args[0] == "kup") {
                                        $sender->sendMessage("jejejejejrhrjrjrjrjr");
	}
}
}
