<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/FortuneTeller.php";

class FortuneTellerTest extends TestCase {


   public function testRelationshipPrediction_WithDefaultEntries_ReturnsNotNull() {
        $relat = new FortuneTeller();
        $this->assertNotNull( $relat->getRelationshipPrediction() );
   }

   public function testMoneyArray_WithDefaultEntires_ReturnsCountOf3() {
        $money = new FortuneTeller();
        $this->assertCount(3, $money->money_array);
   }

   
}
