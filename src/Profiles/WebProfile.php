<?php
namespace Electro\Profiles;

use Electro\DependencyInjection\Injector;
use Electro\Interfaces\ProfileInterface;
use Electro\Kernel\Services\Kernel;
use Electro\WebServer\WebBootloader;

/**
 * A configuration profile tailored for web applications.
 *
 * <p>When testing `$profile instanceof WebProfile`, you can check if a module is being used on a web application or
 * not, irrespective of the concrete profile being used, as every web profile should inherit from this base class.
 */
class WebProfile implements ProfileInterface
{
  public function getBootloaderClass ()
  {
    return WebBootloader::class;
  }

  public function getExcludedModules ()
  {
    return [];
  }

  public function getIncludedModules ()
  {
    return [];
  }

  public function getInjector ()
  {
    return new Injector;
  }

  public function getKernelClass ()
  {
    return Kernel::class;
  }

  public function getName ()
  {
    return str_segmentsLast (static::class, '\\');
  }

}
