<?php
/**
 * @file
 * Contains \Drupal\miprimermodulod8\Controller\MiPrimerModuloD8Controller.
 */

namespace Drupal\miprimermodulod8\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class MiPrimerModuloD8Controller.
 *
 * Hello world controller.
 *
 * @package Drupal\miprimermodulod8\Controller
 */
class MiPrimerModuloD8Controller extends ControllerBase {
  /**
   * Function test for my first module D8.
   *
   * @return array
   *   Return an array with hello world
   */
  public function test() {
    return array(
      "#type" => "markup",
      "#markup" => t("Hello, World!"),
    );
  }

}
?>