<?php 
namespace Thanhbinh\Asm2\Controllers\Admin;

use Thanhbinh\Asm2\Commons\Cotroller;

class DashboardController extends Cotroller{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}