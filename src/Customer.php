<?php

namespace Himaone\LibraryComposer;

class Customer
{
  public function __construct(private string $name)
  {
  }

  public function sayHello(string $name = "Guest")
  {
    return "Hello $name, My name is $this->name";
  }
}
