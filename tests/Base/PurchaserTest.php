<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use DateTime;
use Mockery as m;
use PHPUnit\Framework\TestCase;
use MrPrompt\ShipmentCommon\Base\Purchaser;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;

/**
 * Purchaser test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class PurchaserTest extends TestCase
{
    use ChangeProtectedAttribute;

    /**
     * @var Purchaser
     */
    private $purchaser;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->purchaser = new Purchaser();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->purchaser = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::getStateRegistration()
     */
    public function getStateRegistrationReturnstateRegistrationAttribute()
    {
        $purchaser = 'foo';

        $this->modifyAttribute($this->purchaser, 'stateRegistration', $purchaser);

        $this->assertEquals($purchaser, $this->purchaser->getStateRegistration());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::getFantasyName()
     */
    public function getFantasyNameReturnPurchaserFantasyNameAttribute()
    {
        $purchaser = 'foo';

        $this->modifyAttribute($this->purchaser, 'fantasyName', $purchaser);

        $this->assertEquals($purchaser, $this->purchaser->getFantasyName());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::getSocialReason()
     */
    public function getSocialReasonReturnPurchaserSocialReasonAttribute()
    {
        $purchaser = 'foo';

        $this->modifyAttribute($this->purchaser, 'socialReason', $purchaser);

        $this->assertEquals($purchaser, $this->purchaser->getSocialReason());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::setStateRegistration()
     */
    public function setStateRegistrationReturnEmpty()
    {
        $result = $this->purchaser->setStateRegistration('Foo');

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::setFantasyName()
     */
    public function setFantasyNameReturnEmpty()
    {
        $result = $this->purchaser->setFantasyName(1);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::setSocialReason()
     */
    public function setSocialReasonReturnEmpty()
    {
        $result = $this->purchaser->setSocialReason(1);

        $this->assertNull($result);
    }
}
