<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use MrPrompt\ShipmentCommon\Base\Holder;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;

/**
 * Holder test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class HolderTest extends TestCase
{
    /**
     * @see \Centercob\Common\Util\ChangeProtectedAttribute
     */
    use ChangeProtectedAttribute;

    /**
     * @var Holder
     */
    private $holder;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->holder = new Holder();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->holder = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Holder::getCode()
     */
    public function getCodeReturnCodeAttribute()
    {
        $this->modifyAttribute($this->holder, 'code', 1);

        $this->assertEquals($this->holder->getCode(), 1);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Holder::setCode()
     */
    public function setCodeMustBeReturnNullWhenReceiveIntegerValue()
    {
        $this->assertNull($this->holder->setCode(1));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Holder::setCode()
     * @expectedException \TypeError
     */
    public function setCodeThrowsExceptionWhenNotNumericValue()
    {
        $this->holder->setCode('A');
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Holder::setCode()
     * @expectedException \TypeError
     */
    public function setCodeOnlyThrowsExceptionWhenEmpty()
    {
        $this->holder->setCode('');
    }
}
