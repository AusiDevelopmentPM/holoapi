<?php


/**
 * @author AusiPlayz
 * @org AusiDevelopmentPM
 */

declare(strict_types=1);

namespace AusiDevelopmentPM\HoloAPI;

use AusiDevelopmentPM\HoloAPI\tasks\UpdateHoloTask;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class HoloAPI extends PluginBase {

    use SingletonTrait;

    /** @var array */
    public array $holos = [];

    public function onEnable() :void {
        self::setInstance($this);

        $this->getScheduler()->scheduleRepeatingTask(new UpdateHoloTask($this), 10);

    }

    public function getHolos(): array
    {
        return $this->holos;
    }

    public function removeHolo(string $name): void
    {
        unset($this->holos[$name]);
    }

    public function addHolo(string $name): void
    {
        $holo =
    }

}