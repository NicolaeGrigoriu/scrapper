<?php

namespace Drupal\scrapper\Plugin;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

class WorkerPluginManager extends DefaultPluginManager {
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct("Plugin/Worker", $namespaces, $module_handler, 'Drupal\scrapper\Plugin\WorkerPluginInterface', 'Drupal\scrapper\Annotation\Worker');
    $this->alterInfo('scrapper_worker_info');
    $this->setCacheBackend($cache_backend, 'scrapper_worker_info');
  }

}
