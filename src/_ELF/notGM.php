<?php 

namespace _Elf\notGM;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerGameModeChangeEvent;

class notGM extends PluginBase implements Listener {
	public function onEnable() {
		$this->getLogger()->info(TextFormat::DARK_AQUA . "notGM has been Enable!");
		$this->getLogger()->info(TextFormat::DARK_AQUA . "notGM's version is v1.0.1 beta");
		$this->getLogger()->info(TextFormat::DARK_AQUA . "you have to remember! it is beta!");
		
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$commandmap = $this->getServer()->getCommandMap();
    }
    public function notGM(PlayerGameModeChangeEvent $event) {
        if (!$event->getPlayer()->isOp()) {
        	$event->getPlayer()->kick("당신의 게임모드가 변경되었습니다 , OP가 아니므로 킥합니다");
        }
    }
    
}
?>
