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
					$sender->sendMessage("•[§7==================§e[VIP]§7===================]•");
					$sender->sendMessage("•§a Komendy: /back, /near, /time set [day] lub [night]");
					$sender->sendMessage("•§a , /me");
					$sender->sendMessage("•§a Itemy: żelazna zbroja oraz narzędzia 20 diax");
					$sender->sendMessage("•§a 20 złota oraz 20 srebra");
					$sender->sendMessage("•§a Oraz rangę §eVIP. By zakupić wpisz /vip kup!");
					$sender->sendMessage("•[§7==================§e[VIP]§7==================]•");
					return true;
				}
					 if($args[0] == "kup") {
                                        $sender->sendMessage("•§7[===================§a[ZAKUP]§7===================]");
                                        $sender->sendMessage("•§a Aby zakupić §eVIP'a wyślij sms'a");
                                        $sender->sendMessage("•§a o treści SIM.MINTS pod numer 7455");
                                        $sender->sendMessage("•§a koszt tylko 4.92zl! Otrzymany numer");
                                        $sender->sendMessage("•§a podaj tylko i wyłącznie Apple3910 oraz ThePlastus");
                                        $sender->sendMessage("•§a Udanej zabawy z ranga VIP!");
                                }
	}
}
}
