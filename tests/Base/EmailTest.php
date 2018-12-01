<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use MrPrompt\ShipmentCommon\Base\Email;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;
use MrPrompt\Tests\ShipmentCommon\Mock;
use PHPUnit\Framework\TestCase;

/**
 * Email test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class EmailTest extends TestCase
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
     * @var Email
     */
    private $email;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->email = new Email('foo@foo.net');
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->email = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Email::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Email::getAddress()
     */
    public function getAddressReturnAddressAttribute()
    {
        $address = 'foo@foo.net';

        $this->modifyAttribute($this->email, 'address', $address);

        $this->assertEquals($address, $this->email->getAddress());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Email::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Email::setAddress()
     */
    public function setAddressReturnNull()
    {
        $address = 'foo@foo.net';

        $result = $this->email->setAddress($address);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Email::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Email::setAddress()
     * @expectedException \InvalidArgumentException
     */
    public function setAddressThrowsExceptionWhenAddressIsInvalid()
    {
        $address = '1234';

        $result = $this->email->setAddress($address);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Email::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Email::getPrimary()
     */
    public function getPrimaryReturnPrimaryAttribute()
    {
        $this->modifyAttribute($this->email, 'primary', true);

        $this->assertEquals(true, $this->email->getPrimary());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Email::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Email::isPrimary()
     */
    public function isPrimaryReturnPrimaryAttribute()
    {
        $this->modifyAttribute($this->email, 'primary', true);

        $this->assertEquals(true, $this->email->isPrimary());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Email::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Email::setPrimary()
     */
    public function setPrimaryReturnNull()
    {
        $result = $this->email->setPrimary(true);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Email::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Email::setPrimary()
     * @expectedException \InvalidArgumentException
     */
    public function setPrimaryThrowsExceptionPrimaryIsNotBoolean()
    {
        $result = $this->email->setPrimary('true');

        $this->assertNull($result);
    }
}
