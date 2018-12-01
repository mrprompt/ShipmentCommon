<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use MrPrompt\ShipmentCommon\Base\Customer;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;

/**
 * Customer test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class CustomerTest extends TestCase
{
    use ChangeProtectedAttribute;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->customer = new Customer();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->customer = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::getCode()
     */
    public function getCodeReturnCodeAttribute()
    {
        $this->modifyAttribute($this->customer, 'code', 1);

        $this->assertEquals($this->customer->getCode(), 1);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::setCode()
     */
    public function setCodeMustBeReturnNullWhenReceiveIntegerValue()
    {
        $this->assertNull($this->customer->setCode(1));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::setCode()
     * @expectedException \TypeError
     */
    public function setCodeThrowsExceptionWhenReceiveNotNumericValue()
    {
        $this->assertNull($this->customer->setCode('A'));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::setCode()
     * @expectedException \TypeError
     */
    public function setCodeOnlyThrowsExceptionWhenEmpty()
    {
        $this->customer->setCode('');
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::setCode()
     */
    public function setCodeMustBeReturnNullWhenReceiveFloatValue()
    {
        $this->assertNull($this->customer->setCode(7.9837));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::getIdentityNumber()
     */
    public function getIdentityNumberReturnIdentityNumberAttribute()
    {
        $this->modifyAttribute($this->customer, 'identityNumber', 1);

        $this->assertEquals($this->customer->getIdentityNumber(), 1);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::setIdentityNumber()
     */
    public function setIdentityNumberReturnNullWhenReceiveNumericValue()
    {
        $this->assertNull($this->customer->setIdentityNumber(1));
        $this->assertNull($this->customer->setIdentityNumber(1.5));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::setIdentityNumber()
     * @expectedException \TypeError
     */
    public function setIdentityNumberThrowsExceptionWhenNotNumericValue()
    {
        $this->customer->setIdentityNumber('A');
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::setIdentityNumber()
     * @expectedException \TypeError
     */
    public function setIdentityNumberThrowsExceptionWhenEmpty()
    {
        $this->customer->setIdentityNumber('');
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::getWorkingDays()
     */
    public function getWorkingDaysReturnWorkingDaysAttribute()
    {
        $this->modifyAttribute($this->customer, 'workingDays', 1);

        $this->assertEquals($this->customer->getWorkingDays(), 1);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::setWorkingDays()
     */
    public function setWorkingDaysReturnNullWhenReceiveNumericValue()
    {
        $this->assertNull($this->customer->setWorkingDays(1));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::setWorkingDays()
     * @expectedException \TypeError
     */
    public function setWorkingDaysThrowsExceptionWhenNotNumericValue()
    {
        $this->customer->setWorkingDays('A');
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::setWorkingDays()
     * @expectedException \TypeError
     */
    public function setWorkingDaysThrowsExceptionWhenEmpty()
    {
        $this->customer->setWorkingDays('');
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::getHelpfulMaturity()
     */
    public function getHelpfulMaturityReturnHelpfulMaturityAttribute()
    {
        $this->modifyAttribute($this->customer, 'helpfulMaturity', true);

        $this->assertTrue($this->customer->getHelpfulMaturity());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Customer::setHelpfulMaturity()
     */
    public function setHelpfulMaturityReturnNullWhenReceiveBooleanValue()
    {
        $this->assertNull($this->customer->setHelpfulMaturity(true));
    }
}
