<?php

class UserProfile{
  public string $name;
  public int $age;
  public string $avatar;

  public function __construct(string $name, int $age, string $avatar)
  {
    $this->name = $name;
    $this->age = $age;
    $this->avatar = $avatar;
  }
}