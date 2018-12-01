<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use MrPrompt\ShipmentCommon\Base\Phone;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;
use MrPrompt\Tests\ShipmentCommon\Mock;
use PHPUnit\Framework\TestCase;

/**
 * Phone test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class PhoneTest extends TestCase
{
    /**
     * @see \Centercob\Tests\ChangeProctedAttribute
     */
    use ChangeProtectedAttribute;

    /**
     * @see \Centercob\Tests\Gateway\Mock
     */
    use Mock;

    /**
     * @var Phone
     */
    private $phone;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->phone = new Phone();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->phone = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Phone::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Phone::getNumber()
     */
    public function getNumberReturnNumberAttribute()
    {
        $this->modifyAttribute($this->phone, 'number', 1);

        $this->assertEquals(1, $this->phone->getNumber());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Phone::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Phone::setNumber()
     */
    public function setNumberReturnNull()
    {
        $number = '12341234';

        $result = $this->phone->setNumber($number);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Phone::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Phone::setNumber()
     * @expectedException \TypeError
     */
    public function setNumberThrowsExceptionWhenNumberIsToLong()
    {
        $number = '12343434234432423432233432';

        $result = $this->phone->setNumber($number);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Phone::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Phone::getType()
     */
    public function getTypeReturnTypeAttribute()
    {
        $this->modifyAttribute($this->phone, 'type', 1);

        $this->assertEquals(1, $this->phone->getType());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Phone::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Phone::setType()
     */
    public function setTypeReturnNull()
    {
        $type   = Phone::CELLPHONE;

        $result = $this->phone->setType($type);

        $this->assertNull($result);
    }
}
