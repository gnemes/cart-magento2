<?php
namespace MercadoPago\Core\Logger;

class Logger
    extends \Monolog\Logger
{

    public function setName($name)
    {
        $this->name = $name;
    }

}