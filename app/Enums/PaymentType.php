<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PaymentType extends Enum
{
    const CashOnDelivery = 'Cash On Delivery';

    const CardOnDelivery = 'Card On Delivery';
    
    const CardPayment = 'Card Payment';
}
