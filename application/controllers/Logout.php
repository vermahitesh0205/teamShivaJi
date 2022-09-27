<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller {
//============================Logout=============================//

//============================Logout=============================//
public function index(){ session_destroy(); redirect('Home','refresh'); }
//===========================/Logout=============================//

//===========================/Logout=============================//
} ?>