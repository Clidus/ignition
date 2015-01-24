<?php 

/*
|--------------------------------------------------------------------------
| Ignition ignitionpowered.co.uk
|--------------------------------------------------------------------------
|
| This class extends the functionality of Ignition. You can add your
| own custom logic here.
|
*/

require_once APPPATH.'/models/ignition/user.php';

class User extends IG_User {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
}