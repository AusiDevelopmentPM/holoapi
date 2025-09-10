<?php

declare(strict_types=1);

namespace AusiDevelopmentPM\HoloAPI\tasks;

use AusiDevelopmentPM\HoloAPI\HoloAPI;
use pocketmine\scheduler\Task;

class UpdateHoloTask extends Task {

    public function __construct(HoloAPI $API)
    {

    }

    public function onRun(): void
    {
        $holos = HoloAPI::getInstance()->getHolos();
        foreach ($holos as $holo => $holoData) {
            $holoData->update();
        }
    }
}