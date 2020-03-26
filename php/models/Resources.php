<?php


class Resources
{
  private static $_fruitAnimations = null;

  public static function getFruitAnimations(): array
  {
    if (self::$_fruitAnimations === null) {
      self::$_fruitAnimations = array_map(function($a) {
        return str_replace($_SERVER['DOCUMENT_ROOT'], "", "{$a}");
      }, glob("{$_SERVER['DOCUMENT_ROOT']}/img/fruit_animations/*.gif"));
    }
    return self::$_fruitAnimations;
  }

  public static function getRandomFruitAnimation(): string
  {
    return self::getFruitAnimations()[array_rand(self::getFruitAnimations())];
  }
}
