<?php
/**
 * Outgoing emails.
 */

namespace Modules\BounceManagement\Entities;

use App\Mailbox;
use App\User;
use Illuminate\Database\Eloquent\Model;

class BounceManagement extends Model
{
    const ACTION_CREATE = 0;
    const ACTION_IGNORE = 1;
}
