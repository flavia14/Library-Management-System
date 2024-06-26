<?php

use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder();
$containerBuilder->useAutowiring(true);
$container = $containerBuilder->build();

return $container;
