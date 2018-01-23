<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['account_code','groupId','headerId','name','debit','credit','normal','typeId'];
}
