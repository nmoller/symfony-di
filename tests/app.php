<?php
/**
 * Created by PhpStorm.
 * User: nmoller
 * Date: 28/10/18
 * Time: 2:33 PM
 */

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

$containerBuilder = new ContainerBuilder();
$loader = new YamlFileLoader($containerBuilder, new FileLocator(__DIR__.'/../config'));
$loader->load('services.yaml');

return $containerBuilder;