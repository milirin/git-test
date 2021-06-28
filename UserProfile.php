<?php

class UserProfile{
  public string $name;
  public int $age;
  public string $avatar;

  public function __construct($name, $age, $avatar)
  {
    $this->name = $name;
    $this->age = $age;
    $this->avatar = $avatar;
  }
}