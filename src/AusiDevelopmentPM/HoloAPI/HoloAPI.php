<?php


/**
 * @author AusiPlayz
 * @org AusiDevelopmentPM
 */

declare(strict_types=1);

namespace AusiDevelopmentPM\HoloAPI;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class HoloAPI extends PluginBase {

    use SingletonTrait;

    public function onEnable() :void {
        self::setInstance($this);
    }

}