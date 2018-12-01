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
    /**
     * @see \Centercob\Common\Util\ChangeProtectedAttribute
     */
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
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::getPurchaserStateRegistration()
     */
    public function getPurchaserStateRegistrationReturnPurchaserStateRegistrationAttribute()
    {
        $purchaser = 'foo';

        $this->modifyAttribute($this->purchaser, 'purchaserStateRegistration', $purchaser);

        $this->assertEquals($purchaser, $this->purchaser->getPurchaserStateRegistration());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::getPurchaserFantasyName()
     */
    public function getPurchaserFantasyNameReturnPurchaserFantasyNameAttribute()
    {
        $purchaser = 'foo';

        $this->modifyAttribute($this->purchaser, 'purchaserFantasyName', $purchaser);

        $this->assertEquals($purchaser, $this->purchaser->getPurchaserFantasyName());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::getPurchaserSocialReason()
     */
    public function getPurchaserSocialReasonReturnPurchaserSocialReasonAttribute()
    {
        $purchaser = 'foo';

        $this->modifyAttribute($this->purchaser, 'purchaserSocialReason', $purchaser);

        $this->assertEquals($purchaser, $this->purchaser->getPurchaserSocialReason());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::setPurchaserStateRegistration()
     */
    public function setPurchaserStateRegistrationReturnEmpty()
    {
        $result = $this->purchaser->setPurchaserStateRegistration('Foo');

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::setPurchaserFantasyName()
     */
    public function setPurchaserFantasyNameReturnEmpty()
    {
        $result = $this->purchaser->setPurchaserFantasyName(1);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Purchaser::setPurchaserSocialReason()
     */
    public function setPurchaserSocialReasonReturnEmpty()
    {
        $result = $this->purchaser->setPurchaserSocialReason(1);

        $this->assertNull($result);
    }
}
