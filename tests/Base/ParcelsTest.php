<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use DateTime;
use Mockery as m;
use PHPUnit\Framework\TestCase;
use MrPrompt\ShipmentCommon\Base\Parcels;
use MrPrompt\ShipmentCommon\Util\ChangeProtectedAttribute;
use MrPrompt\Tests\ShipmentCommon\Mock;

/**
 * Parcels test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class ParcelsTest extends TestCase
{
    use ChangeProtectedAttribute;
    use Mock;

    /**
     * @var Parcels
     */
    private $parcels;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->parcels = new Parcels(4);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->parcels = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Parcels::__construct
     * @covers \MrPrompt\ShipmentCommon\Base\Parcels::addParcel
     */
    public function addParcelMustReturnNullWhenReceiveParcelObject()
    {
        $this->assertNull($this->parcels->addParcel($this->parcelMock()));
    }
}
