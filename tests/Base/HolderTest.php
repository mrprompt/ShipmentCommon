<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use MrPrompt\ShipmentCommon\Base\Holder;
use MrPrompt\ShipmentCommon\Base\Person;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;

/**
 * Holder test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class HolderTest extends TestCase
{
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
     * @covers \MrPrompt\ShipmentCommon\Base\Holder::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Holder::getCode()
     */
    public function holderExtendsPerson()
    {
        $this->assertInstanceOf(Person::class, $this->holder);
    }
}
