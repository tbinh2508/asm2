<?php

namespace Thanhbinh\Asm2\Controllers\Client;

use eftec\bladeone\BladeOne;
use Thanhbinh\Asm2\Commons\Cotroller;
use Thanhbinh\Asm2\Commons\Helper;
use Thanhbinh\Asm2\Models\User;

class HomeController extends Cotroller
{
    public function index()
    {
        // $user = new User();
        // Helper::debug($user);
        $name = "thanhbinh";
        $this->renderViewClient('home',[
            'name'=> $name
        ]);
    }
}
