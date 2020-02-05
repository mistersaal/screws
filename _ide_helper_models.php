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
 * @property int $screw_type_id
 * @property int $screw_color_id
 * @property int $screw_manufacturer_id
 * @property int $screw_length_id
 * @property int $amount
 * @property float $cost
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\ScrewColor $color
 * @property-read \App\ScrewLength $length
 * @property-read \App\ScrewManufacturer $manufacturer
 * @property-read \App\ScrewType $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereScrewColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereScrewLengthId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereScrewManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Screw whereScrewTypeId($value)
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
 * App\ScrewLength
 *
 * @property int $id
 * @property float $value
 * @property int $visible
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewLength newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewLength newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewLength query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewLength whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewLength whereValue($value)
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
 * App\ScrewType
 *
 * @property int $id
 * @property string $name
 * @property int $visible
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ScrewType whereVisible($value)
 */
	class ScrewType extends \Eloquent {}
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

