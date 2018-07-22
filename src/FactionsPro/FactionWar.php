<?php

namespace FactionsPro;

use pocketmine\scheduler\Task;

class FactionWar extends Task {
	
	public $plugin;
	public $requester;
	
	public function __construct(FactionMain $pl, $requester) {
        parent::__construct($pl);
        $this->plugin = $pl;
		$this->requester = $requester;
    }
	
	public function onRun(int $currentTick): void {
		unset($this->plugin->wars[$this->requester]);
		$this->plugin->getScheduler()->cancelTask($this->getTaskId());
	}
	
}
