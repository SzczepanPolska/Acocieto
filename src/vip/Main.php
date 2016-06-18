<?php

namespace svip;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	public function onEnable(){
		$this->getLogger()->info("svipkup Zaladowane");
		}

  public function onCommand(CommandSender $sender, Command $command, $label, array $args){	
			if(strtolower($command->getName()) === 'svip') {
				if(empty($args)) {
					$sender->sendMessage("•[§7==================§e[VIP]§7===================]•");
					$sender->sendMessage("•§a Komendy: /back, /near, /time set [day] lub [night]");
					$sender->sendMessage("•§a , /me, /heal, /jump, /kit vip oraz §ePUPIL");
					$sender->sendMessage("•§a Itemy: diax zbroja oraz narzędzia 40 diax");
					$sender->sendMessage("•§a 40 złota oraz 40 srebra");
					$sender->sendMessage("•§a Oraz rangę §eSVIP. By zakupić wpisz /svip kup!");
					$sender->sendMessage("•[§7==================§e[VIP]§7==================]•");
					return true;
				}
					 if($args[0] == "kup") {
                                        $sender->sendMessage("•§7[===================§a[ZAKUP]§7===================]");
                                        $sender->sendMessage("•§a Aby zakupić §eVIP'a wyślij sms'a");
                                        $sender->sendMessage("•§a o treści SIM.MINTS pod numer 7936");
                                        $sender->sendMessage("•§a koszt tylko 11.07zl! Otrzymany numer");
                                        $sender->sendMessage("•§a podaj tylko i wyłącznie Apple3910 oraz ThePlastus");
                                        $sender->sendMessage("•§a Udanej zabawy z ranga SVIP!");
                                }
	}
}
}
