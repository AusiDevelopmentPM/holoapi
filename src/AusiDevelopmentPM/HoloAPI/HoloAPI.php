<?php


/**
 * @author AusiPlayz
 * @org AusiDevelopmentPM
 */

declare(strict_types=1);

namespace AusiDevelopmentPM\HoloAPI;

use AusiDevelopmentPM\HoloAPI\entity\HoloEntity;
use AusiDevelopmentPM\HoloAPI\tasks\UpdateHoloTask;

use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;
use pocketmine\world\World;

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

    public function addHolo(string $name, Vector3 $pos, World $world): HoloEntity
    {
        $holo = new HoloEntity($pos, $world);
        $this->holos[$name] = $holo;
        return $holo;
    }

    public function getHoloByName(string $name): ?HoloEntity
    {
        $holos = $this->getHolos();
        return $holos[$name] ?? null;
    }

}