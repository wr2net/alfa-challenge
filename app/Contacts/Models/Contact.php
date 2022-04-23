<?php

namespace App\Contacts\Models;

use App\Common\Models\Traits\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use SoftDeletes;
}
