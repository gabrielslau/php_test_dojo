<?php

    namespace example\linkest;

    class RomanosConverterTest extends \PHPUnit_Framework_TestCase
    {
        public function testShouldReturnError() {
            $this->setExpectedException('Exception', 'Invalid Argument');
            RomanosConverter::convert('');
        }

        public function testShouldReturnIDecimalRepresentation() {
            $this->assertEquals(1, RomanosConverter::convert('I'));
        }

        public function testShouldReturnIRepeatDecimalRepresentation() {
            $this->assertEquals(3, RomanosConverter::convert('III'));
        }
        public function testShouldReturnVDecimalRepresentation()
        {
            $this->assertEquals(5, RomanosConverter::convert('V'));
        }
        public function testShouldReturnXDecimalRepresentation()
        {
            $this->assertEquals(10, RomanosConverter::convert('X'));
        }
        public function testShouldReturnLDecimalRepresentation()
        {
            $this->assertEquals(50, RomanosConverter::convert('L'));
        }
        public function testShouldReturnCDecimalRepresentation()
        {
            $this->assertEquals(100, RomanosConverter::convert('C'));
        }
        public function testShouldReturnDDecimalRepresentation()
        {
            $this->assertEquals(500, RomanosConverter::convert('D'));
        }
        public function testShouldReturnMDecimalRepresentation()
        {
            $this->assertEquals(1000, RomanosConverter::convert('M'));
        }
        public function testShouldReturn_IV_DecimalRepresentation()
        {
            $this->assertEquals(4, RomanosConverter::convert('IV'));
        }
        public function testShouldReturn_IX_DecimalRepresentation()
        {
            $this->assertEquals(9, RomanosConverter::convert('IX'));
        }

        public function testShouldReturn_XIV_DecimalRepresentation()
        {
            $this->assertEquals(14, RomanosConverter::convert('XIV'));
        }

        public function testShouldReturn_MMMCMXC_DecimalRepresentation()
        {
            $this->assertEquals(3990, RomanosConverter::convert('MMMCMXC'));
        }
    }
