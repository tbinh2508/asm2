<?php

namespace Thanhbinh\Asm2\Controllers\Client;

use eftec\bladeone\BladeOne;
use Thanhbinh\Asm2\Commons\Cotroller;
use Thanhbinh\Asm2\Commons\Helper;
use Thanhbinh\Asm2\Models\User;

class LoginController extends Cotroller
{
    private User $user;
    public function __construct(){
        $this->user = new User();
    }
    public function showFromLogin()
    {
        $this->renderViewClient('login');
    }
    public function login(){
        try {
            $user = $this->user->findByEmail($_POST['email']);
        if(empty($user)){
            throw new \Exception('Không tồn tại email!!!');
        }
        $flag = password_verify($_POST['password'], $user['password']);
        if($flag){
            $_SESSION['user'] = $user;
            header('location:' .url('admin/'));
            exit;
        }
        throw new \Exception('Pass không đúng!!!');
        } catch (\Throwable $th) {
            $_SESSION['error'] = $th->getMessage();
            header('location:'.url('login'));
            exit;
        }
    }
    public function logout(){
        unset($_SESSION['user']);
        header('location: ' . url('') );
        exit;
    }
}
