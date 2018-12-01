<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use MrPrompt\ShipmentCommon\Base\CreditCard;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;
use DateTime;
use Mockery;
use PHPUnit\Framework\TestCase;

/**
 * CreditCard test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class CreditCardTest extends TestCase
{
    /**
     * @see \Centercob\Tests\ChangeProctedAttribute
     */
    use ChangeProtectedAttribute;

    /**
     * @var CreditCard
     */
    private $card;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->card = new CreditCard();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @return array
     */
    public function loadCardsProvider()
    {
        return [
            [
                [
                    'number'    => '4012001037141112',
                    'validate'  => '201512',
                    'security'  => '123',
                    'flag'      => 68
                ]
            ]
        ];

    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::getNumber()
     */
    public function getNumberReturnNumberAttribute()
    {
        $this->modifyAttribute($this->card, 'number', 1);

        $this->assertEquals(1, $this->card->getNumber());
    }

    /**
     * @test
     * @dataProvider loadCardsProvider
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::setNumber()
     */
    public function setNumberReturnNull($card)
    {
        $this->assertNull($this->card->setNumber($card['number']));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::getValidate()
     */
    public function getValidateMustBeReturnCreditCardValidateAttribute()
    {
        $validate = new DateTime();

        $this->modifyAttribute($this->card, 'validate', $validate);

        $this->assertSame($validate, $this->card->getValidate());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::setValidate()
     */
    public function setValidateMustBeReturnNull()
    {
        $this->assertNull($this->card->setValidate(new DateTime()));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::__construct
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::getSecurityNumber
     */
    public function getSecurityNumberMustBeReturnCreditCardSecurityNumberAttribute()
    {
        $this->modifyAttribute($this->card, 'security', '232');

        $this->assertSame('232', $this->card->getSecurityNumber());
    }

    /**
     * @test
     * @dataProvider loadCardsProvider
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::setSecurityNumber()
     */
    public function setSecurityNumberMustBeReturnNull($card)
    {
        $this->assertNull($this->card->setSecurityNumber($card['security']));
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::getFlag()
     */
    public function getFlagMustBeReturnFlagAttribute()
    {
        $this->modifyAttribute($this->card, 'flag', CreditCard::VISA);

        $this->assertEquals(CreditCard::VISA, $this->card->getFlag());
    }

    /**
     * @test
     * @dataProvider loadCardsProvider
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\CreditCard::setFlag()
     */
    public function setFlagMustBeReturnNull($card)
    {
        $result = $this->card->setFlag($card['flag']);

        $this->assertNull($result);
    }
}
