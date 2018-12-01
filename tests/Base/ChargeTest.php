<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use MrPrompt\ShipmentCommon\Base\Charge;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;
use MrPrompt\Tests\ShipmentCommon\Mock;
use PHPUnit\Framework\TestCase;

/**
 * Charge test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class ChargeTest extends TestCase
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
     * @var Charge
     */
    private $charge;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->charge = new Charge();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->charge = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Charge::getCharging()
     */
    public function getChargingReturnChargingAttribute()
    {
        $charging = Charge::ENERGY;

        $this->modifyAttribute($this->charge, 'charging', $charging);

        $this->assertEquals($charging, $this->charge->getCharging());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Charge::setCharging()
     */
    public function setChargingReturnNull()
    {
        $this->assertNull($this->charge->setCharging(Charge::ENERGY));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Charge::setCharging()
     * @expectedException \InvalidArgumentException
     */
    public function setChargingThrowsExceptionWhenNotValidChargingType()
    {
        $this->assertNull($this->charge->setCharging('CC'));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Charge::getOccurrence()
     */
    public function getOccurrenceReturnOccurrenceAttribute()
    {
        $occurrence = 'I';

        $this->modifyAttribute($this->charge, 'occurrence', $occurrence);

        $this->assertEquals($occurrence, $this->charge->getOccurrence());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Charge::setOccurrence()
     */
    public function setOccurrenceReturnNull()
    {
        $this->assertNull($this->charge->setOccurrence($this->occurrenceMock()));
    }
}
