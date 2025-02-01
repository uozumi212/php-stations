<?php

namespace Src\Station16\Question;
class Car
{
  public string $name;
  public int $passenger = 0;

  public function __construct(string $name)
  {
    $this->name = $name;
    $this->passenger = 0;
  }

  public function run(): void
  {
    echo '走行する';
  }

  public function pickup(int $passenger): int
  {
      $this->passenger += $passenger;
      return $this->passenger;
  }
}
