<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use MrPrompt\ShipmentCommon\Base\BankAccount;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;
use MrPrompt\Tests\ShipmentCommon\Mock;

/**
 * Bank test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class BankAccountTest extends TestCase
{
    use ChangeProtectedAttribute;
    use Mock;

    /**
     * @var BankAccount
     */
    private $bank;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->bank = new BankAccount(
            $this->bankMock(),
            $this->holderMock()
        );
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->bank = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::getNumber()
     */
    public function getNumberReturnAccountAttribute()
    {
        $account = 332;

        $this->modifyAttribute($this->bank, 'account', $account);

        $this->assertEquals($account, $this->bank->getNumber());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::getDigit()
     */
    public function getDigitReturnAccountDigitAttribute()
    {
        $digit = 03;

        $this->modifyAttribute($this->bank, 'accountDigit', $digit);

        $this->assertEquals($digit, $this->bank->getDigit());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::getOperation()
     */
    public function getOperationReturnAccountOperationAttribute()
    {
        $operation = 013;

        $this->modifyAttribute($this->bank, 'accountOperation', $operation);

        $this->assertEquals($operation, $this->bank->getOperation());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::getBank()
     */
    public function getBankReturnBankAttribute()
    {
        $bank = $this->bankMock();

        $this->modifyAttribute($this->bank, 'bank', $bank);

        $this->assertEquals($bank, $this->bank->getBank());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::getSecurity()
     */
    public function getSecurityReturnSecurityAttribute()
    {
        $security = 'N';

        $this->modifyAttribute($this->bank, 'security', $security);

        $this->assertEquals($security, $this->bank->getSecurity());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::getHolder()
     */
    public function getHolderReturnHolderAttribute()
    {
        $holder = $this->holderMock();

        $this->modifyAttribute($this->bank, 'holder', $holder);

        $this->assertEquals($holder, $this->bank->getHolder());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::setNumber()
     */
    public function setNumberReturnNull()
    {
        $this->assertNull($this->bank->setNumber(233));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::setNumber()
     * @expectedException \InvalidArgumentException
     */
    public function setNumberThrowsExceptionWhenReceiveNotNumberValue()
    {
        $this->assertNull($this->bank->setNumber('XDS'));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::setDigit()
     */
    public function setDigitReturnNull()
    {
        $this->assertNull($this->bank->setDigit(233));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::setDigit()
     * @expectedException \InvalidArgumentException
     */
    public function setDigitThrowsExceptionWhenReceiveNotNumberValue()
    {
        $this->assertNull($this->bank->setDigit('XDE'));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::setOperation()
     */
    public function setOperationReturnNull()
    {
        $this->assertNull($this->bank->setOperation(233));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::setOperation()
     * @expectedException \InvalidArgumentException
     */
    public function setOperationThrowsExceptionWhenReceiveNotNumberValue()
    {
        $this->assertNull($this->bank->setOperation('XDS'));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::setSecurity()
     */
    public function setSecurityReturnNull()
    {
        $this->assertNull($this->bank->setSecurity(true));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::setSecurity()
     * @expectedException \InvalidArgumentException
     */
    public function setSecurityThrowsExceptionWhenReceiveNotBooleanValue()
    {
        $this->assertNull($this->bank->setSecurity('S'));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::setBank()
     */
    public function setBankReturnNull()
    {
        $this->assertNull($this->bank->setBank($this->bankMock()));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\BankAccount::setHolder()
     */
    public function setHolderReturnNull()
    {
        $this->assertNull($this->bank->setHolder($this->holderMock()));
    }
}
