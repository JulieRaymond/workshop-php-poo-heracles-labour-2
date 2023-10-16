<?php

class Weapon
{
    private int $damage = 10;
    private string $image = 'sword.svg';

    public function __construct(int $damage = 10, string $image = 'sword.svg')
    {
        $this->damage = $damage;
        $this->image = $image;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getImage(): string
    {
        return "assets/images/" . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}
