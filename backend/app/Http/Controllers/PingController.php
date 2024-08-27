<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingController extends Controller
{
    public function __invoke(): array
    {
        return ['success' => true];
    }
}
