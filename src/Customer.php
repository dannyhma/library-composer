<?php

namespace Himaone\LibraryComposer;

class Customer
{
  public function __construct(private string $name)
  {
  }

  public function sayHello($name)
  {
    return "Hello $name, My name is $this->name";
  }
}
