<?php


class Resources
{
  private static $_fruitAnimations = null;
  private static $_staticFruits = null;

  private static function getFilesInFolder(string $folder) {
    return array_map(function ($a) {
      return str_replace($_SERVER['DOCUMENT_ROOT'], "", "{$a}");
    }, glob("{$_SERVER['DOCUMENT_ROOT']}{$folder}"));
  }

  public static function getStaticFruits(): array {
    if (self::$_staticFruits === null) {
      self::$_staticFruits = self::getFilesInFolder("/img/staticFruits/*.png");
    }
    return self::$_staticFruits;
  }

  public static function getFruitAnimations(): array
  {
    if (self::$_fruitAnimations === null) {
      self::$_fruitAnimations = self::getFilesInFolder("/img/fruit_animations/*.gif");
    }
    return self::$_fruitAnimations;
  }

  public static function getRandomFruitAnimation(): string
  {
    return self::getFruitAnimations()[array_rand(self::getFruitAnimations())];
  }

  public static function getRandomStaticFruit(): string {
    return self::getStaticFruits()[array_rand(self::getStaticFruits())];
  }
}
