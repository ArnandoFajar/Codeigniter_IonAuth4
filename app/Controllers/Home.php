<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $ionAuth;
    public function __construct()
    {
        $ionAuth = new \IonAuth\Libraries\IonAuth();
        $this->ionAuth = $ionAuth;
    }

    public function index()
    {
        //admin
        $data = [
            'title' => "Admin"
        ];
        return view('backend/admin/index', $data);
    }

    public function member()
    {
        //member
        $data = [
            'title' => "Member"
        ];
        return view('backend/member/index', $data);
    }
}
