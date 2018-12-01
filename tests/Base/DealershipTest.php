<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use MrPrompt\ShipmentCommon\Base\Dealership;
use MrPrompt\ShipmentCommon\Util\ChangeProtectedAttribute;
use Mockery as m;
use PHPUnit\Framework\TestCase;

/**
 * Dealership test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class DealershipTest extends TestCase
{
    /**
     * @see \Centercob\Tests\ChangeProctedAttribute
     */
    use ChangeProtectedAttribute;

    /**
     * @var Dealership
     */
    private $dealership;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->dealership = new Dealership();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Dealership::getCode()
     */
    public function getCodeReturnCodeAttribute()
    {
        $this->modifyAttribute($this->dealership, 'code', 1);

        $this->assertEquals(1, $this->dealership->getCode());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Dealership::setCode()
     */
    public function setCodeMustBeReturnNull()
    {
        $this->assertNull($this->dealership->setCode('1'));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Dealership::setCode()
     * @expectedException \InvalidArgumentException
     */
    public function setCodeThrowsExceptionWhenExceedMaxLengh()
    {
        $this->assertNull($this->dealership->setCode('999999999'));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Dealership::getName()
     */
    public function getNameReturnNameAttribute()
    {
        $this->modifyAttribute($this->dealership, 'name', 1);

        $this->assertEquals(1, $this->dealership->getName());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Dealership::setName()
     */
    public function setNameMustBeReturnNull()
    {
        $this->assertNull($this->dealership->setName('1'));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Dealership::setName()
     * @expectedException \InvalidArgumentException
     */
    public function setNameThrowsExceptionWhenEmpty()
    {
        $this->assertNull($this->dealership->setName(''));
    }
}
