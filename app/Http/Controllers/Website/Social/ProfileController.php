<?php

namespace App\Http\Controllers\Website\Social;

use Request;

use Response;

use View;

use Lang;

use App\Http\Controllers\Website\SocialController;

class ProfileController extends SocialController
{
    

    public function __construct()
    {

    		parent::__construct() ;
    }

    public function index()
    {
    	$this -> data['meta'] -> title = Lang::get('account.personal_information');

    	return View::make( self::SOCIAL . '.pages.account.info', $this -> data ) -> render();
    }
}
