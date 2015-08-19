<?php

namespace TeamPublic;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;




class Main extends PluginBase {
    
    public function onEnable() {
        $this->getLogger()->info(Color::GREEN."Microbattles Has been enable!, Enjoy!");
    }
    
    public function onDisable() {
        $this->getLogger()->info(Color::RED."MicroBattles Has been disable :(");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        if ($sender instanceof Player) {
            $name = $sender->getName();
            switch (strtolower($command->getName())) {
                case 'MB Help';
                    $sender->sendMessage(Color::BLUE."[MB] Avalible Commands For You Are:");
                            
                    
            }
        
        }
         
    }
    
    
    

}  
        
