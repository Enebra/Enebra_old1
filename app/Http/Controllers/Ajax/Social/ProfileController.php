<?php

namespace App\Http\Controllers\Ajax\Social;

use Request;

use Response;

use App\Http\Controllers\Ajax\SocialController;

use App\Models\User_follower;

class ProfileController extends SocialController
{
    

    public function __construct()
    {

    		parent::__construct() ;

    }

    public function follow( $id ) 
    {	
    	if( $id == $this -> data['user'] -> id )
    			return response() -> json( false, self::AJAX_ERROR_CODE ) ;

    	User_follower::follow( $id, $this -> data['user'] -> id);

    	return response() -> json( true ) ;

    }    


    public function unfollow( $id ) 
    {	


    	User_follower::unfollow( $id, $this -> data['user'] -> id);

    	return response() -> json( true ) ;

    }
}
