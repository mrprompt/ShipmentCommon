<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use MrPrompt\ShipmentCommon\Base\Billet;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;
use MrPrompt\Tests\ShipmentCommon\Mock;
use PHPUnit\Framework\TestCase;

/**
 * Billet test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class BilletTest extends TestCase
{
    use ChangeProtectedAttribute;
    use Mock;

    /**
     * @var Billet
     */
    private $billet;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->billet = new Billet();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->billet = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::getDetails()
     */
    public function getDetailsReturnDetailsAttribute()
    {
        $this->assertInstanceOf(\ArrayObject::class, $this->billet->getDetails());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::setDetails()
     */
    public function setDetailsMustBeReturnNull()
    {
        $result = $this->billet->setDetails(new \ArrayObject());

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::addDetail()
     */
    public function addDetailMustBeReturnNull()
    {
        $detail = new \stdClass;

        $result = $this->billet->addDetail($detail);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::getRate()
     */
    public function getRateReturnRatesAttribute()
    {
        $rate = 1;

        $this->modifyAttribute($this->billet, 'rate', $rate);

        $this->assertEquals($rate, $this->billet->getRate());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::setRate()
     */
    public function setRateMustBeReturnNull()
    {
        $result = $this->billet->setRate(1);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::getBankAccount()
     */
    public function getBankAccountReturnBankaccountsAttribute()
    {
        $bankaccount = $this->bankAccountMock();

        $this->modifyAttribute($this->billet, 'bankAccount', $bankaccount);

        $this->assertEquals($bankaccount, $this->billet->getBankAccount());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::setBankAccount()
     */
    public function setBankAccountMustBeReturnNull()
    {
        $result = $this->billet->setBankAccount($this->bankAccountMock());

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::getAssignor()
     */
    public function getAssignorReturnAssignorsAttribute()
    {
        $assignor = $this->sellerMock();

        $this->modifyAttribute($this->billet, 'assignor', $assignor);

        $this->assertEquals($assignor, $this->billet->getAssignor());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::setAssignor()
     */
    public function setAssignorMustBeReturnNull()
    {
        $result = $this->billet->setAssignor($this->sellerMock());

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::getNumber()
     */
    public function getNumberReturnNumbersAttribute()
    {
        $number = 1;

        $this->modifyAttribute($this->billet, 'number', 1);

        $this->assertEquals(1, $this->billet->getNumber());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Billet::setNumber()
     */
    public function setNumberMustBeReturnNull()
    {
        $result = $this->billet->setNumber(1);

        $this->assertNull($result);
    }
}
