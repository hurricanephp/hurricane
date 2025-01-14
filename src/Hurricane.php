<?php
namespace App\Hurricane;

class Hurricane
{
  private string $server;
  private int $port;

  public function __construct()
  {
    echo "php -S {$this->server}:{$this->port}";
  }

  public function Server(?string $server = null)
  {
    return $this->server = $server;
  }

  public function Listen(?int $port = null)
  {
    return $this->port = $port;
  }
}
