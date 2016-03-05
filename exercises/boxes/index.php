<?php
class Boxes
{
   private static function calculateUsage(&$remainProducts, $availableBoxes, $boxSize)
   {
     if ($remainProducts >= $boxSize) {
         $used = (int) ($remainProducts / $boxSize);
         $used = ($used > $availableBoxes) ? $availableBoxes : $used;
         $remainProducts = $used * $boxSize;
      }
      return (!isset($used)) ? 0 : $used;
   }

   public static function minimalNumberOfBoxes($products, $availableLargeBoxes, $availableSmallBoxes)
   {
      $total = $usedLarge = Boxes::calculateUsage($products, $availableLargeBoxes, 5);
      $total += $usedSmall = Boxes::calculateUsage($products, $availableSmallBoxes, 1);

      return (0 == $total) ? -1 : $total."($usedLarge large boxes + $usedSmall small boxes).";
   }
}

echo Boxes::minimalNumberOfBoxes(12, 3, 3);