<?php


namespace App\Http\ViewComposers;


use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class InfoAdminComposer
{
    protected $auth;

    public function __construct(Auth $auth)
    {
        $this->auth=$auth;
    }

    public function compose(View $view)
    {
        $view->with('infoUser',$this->auth::user());
    }
}
