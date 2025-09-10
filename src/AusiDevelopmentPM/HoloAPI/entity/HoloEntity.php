<?php

declare(strict_types=1);

namespace AusiDevelopmentPM\HoloAPI\entity;

use pocketmine\math\Vector3;
use pocketmine\scheduler\Task;
use pocketmine\world\particle\FloatingTextParticle;
use pocketmine\world\World;

class HoloEntity extends FloatingTextParticle {

    private World $world;
    private Vector3 $pos;
    protected string $text = "";
    protected string $title = "";

    public function __construct(Vector3 $pos, World $world) {

        parent::__construct($pos, "", "");

        $this->world = $world;
        $this->pos = $pos;
    }

    public function setText(string $text): void{
        $this->text = $text;
        $this->update();
    }

    public function getText(): string{
        return $this->text;
    }

    public function setTitle(string $title): void{
        $this->title = $title;
        $this->update();
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getPosition(): Vector3 {
        return $this->pos;
    }

    public function setPosition(Vector3 $pos): void {
        $this->pos = $pos;
        $this->update();
    }

    public function update(): void{
        $this->world->addParticle($this->pos, $this);
    }

}