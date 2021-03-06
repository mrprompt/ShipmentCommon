<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use MrPrompt\ShipmentCommon\Base\Authorization;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;
use PHPUnit\Framework\TestCase;

/**
 * Address test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class AuthorizationTest extends TestCase
{
    use ChangeProtectedAttribute;

    /**
     * @var Authorization
     */
    private $authorization;
    
    /**
     * Prepares the environment before running a test.
     */
    public function setUp()
    {
        parent::setUp();

        $this->authorization = new Authorization();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Authorization::__construct
     * @covers \MrPrompt\ShipmentCommon\Base\Authorization::getNumber
     */
    public function getNumberMustBeReturnNumberAttribute()
    {
        $this->modifyAttribute($this->authorization, 'number', 1);

        $this->assertEquals(1, $this->authorization->getNumber());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Authorization::__construct
     * @covers \MrPrompt\ShipmentCommon\Base\Authorization::setNumber
     */
    public function setNumberMustBeReturnNull()
    {
        $result = $this->authorization->setNumber(1);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Authorization::__construct
     * @covers \MrPrompt\ShipmentCommon\Base\Authorization::setNumber
     * @expectedException \TypeError
     */
    public function setNumberThrowsExceptionWhenNotNumeric()
    {
        $this->authorization->setNumber('A');
    }
}
