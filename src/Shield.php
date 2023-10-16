<?php

class Shield
{
    private int $protection = 10;
    private string $image = "shield.svg";

    public function __construct(int $protection = 10, string $image = "shield.svg")
    {
        $this->protection = $protection;
        $this->image = $image;
    }

    public function getProtection(): int
    {
        return $this->protection;
    }

    public function setProtection(int $protection): void
    {
        $this->protection = $protection;
    }

    public function getImage(): string
    {
        return "assets/images/" . $this->image;
    }
    public function setImage($image): void
    {
        $this->image = $image;
    }
}
