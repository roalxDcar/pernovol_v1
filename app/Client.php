<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "pv_clients";

    protected $primaryKey = "client_cli";
}
