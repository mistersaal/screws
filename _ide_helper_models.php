<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\IndividualOrder
 *
 * @property int $id
 * @property string $color
 * @property float $length
 * @property string $manufacturer
 * @property string $type
 * @property int $amount
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder whereManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\IndividualOrder whereUpdatedAt($value)
 */
	class IndividualOrder extends \Eloquent {}
}

namespace App{
/**
 * App\Order
 *
 * @property int $id
 * @property int $screw_id
 * @property int $amount
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property float $price
 * @property int $paid
 * @property string|null $payment_id
 * @property int $done
 * @property int $received
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereDone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order wherePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereReceived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereScrewId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUpdatedAt($value)
 */
	class Order extends \Eloquent {}
}

namespace App{
/**
 * App\Screw
 *
 * @property int $id
 * @property int|null $screw_config_id
 * @property int $screw_length_id
 * @property int $screw_manufacturer_id
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\ScrewColor $color
 * @property-read \App\ScrewLength $length
 * @property-read \App\ScrewManufacturer $manufacturer
 * @property-read \App\ScrewConfig $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereScrewConfigId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereScrewLengthId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereScrewManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereVisible($value)
 */
	class Screw extends \Eloquent {}
}

namespace App{
/**
 * App\ScrewColor
 *
 * @property int $id
 * @property string $name
 * @property int $visible
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewColor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewColor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewColor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewColor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewColor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewColor whereVisible($value)
 */
	class ScrewColor extends \Eloquent {}
}

namespace App{
/**
 * App\ScrewConfig
 *
 * @property int $id
 * @property string|null $type
 * @property int $individual
 * @property int $screw_type_of_head_id
 * @property int $screw_color_id
 * @property int $screw_tip_id
 * @property int $screw_diameter_id
 * @property int $screw_slot_id
 * @property int $visible
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig whereIndividual($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig whereScrewColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig whereScrewDiameterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig whereScrewSlotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig whereScrewTipId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig whereScrewTypeOfHeadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewConfig whereVisible($value)
 */
	class ScrewConfig extends \Eloquent {}
}

namespace App{
/**
 * App\ScrewDiameter
 *
 * @property int $id
 * @property float $name
 * @property int $visible
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewDiameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewDiameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewDiameter query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewDiameter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewDiameter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewDiameter whereVisible($value)
 */
	class ScrewDiameter extends \Eloquent {}
}

namespace App{
/**
 * App\ScrewLength
 *
 * @property int $id
 * @property float $name
 * @property int $visible
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewLength newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewLength newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewLength query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewLength whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewLength whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewLength whereVisible($value)
 */
	class ScrewLength extends \Eloquent {}
}

namespace App{
/**
 * App\ScrewManufacturer
 *
 * @property int $id
 * @property string $name
 * @property int $visible
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewManufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewManufacturer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewManufacturer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewManufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewManufacturer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewManufacturer whereVisible($value)
 */
	class ScrewManufacturer extends \Eloquent {}
}

namespace App{
/**
 * App\ScrewSlot
 *
 * @property int $id
 * @property string $name
 * @property int $visible
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewSlot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewSlot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewSlot query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewSlot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewSlot whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewSlot whereVisible($value)
 */
	class ScrewSlot extends \Eloquent {}
}

namespace App{
/**
 * App\ScrewTip
 *
 * @property int $id
 * @property string $name
 * @property int $visible
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewTip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewTip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewTip query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewTip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewTip whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewTip whereVisible($value)
 */
	class ScrewTip extends \Eloquent {}
}

namespace App{
/**
 * App\ScrewTypeOfHead
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewTypeOfHead newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewTypeOfHead newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewTypeOfHead query()
 */
	class ScrewTypeOfHead extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

