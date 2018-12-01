<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use stdClass;
use Mockery as m;
use PHPUnit\Framework\TestCase;
use MrPrompt\ShipmentCommon\Base\Cart;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;

/**
 * Cart test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class CartTest extends TestCase
{
    use ChangeProtectedAttribute;

    /**
     * @var Cart
     */
    private $cart;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->cart = new Cart([ new stdClass ]);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->cart = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Cart::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Cart::addItem()
     */
    public function addItem()
    {
        $result = $this->cart->addItem(new stdClass);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Cart::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Cart::removeItem()
     */
    public function removeItem()
    {
        $item   = 0;
        $result = $this->cart->removeItem($item);

        $this->assertTrue($result);
    }
}
