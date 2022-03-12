<?php 

class Api {
	protected $ci;

	public function __construct() {
		$this->ci =& get_instance();
	}

	public function logout(){
    // Finally, destroy the session.
    if (isset($_SESSION)) {
      // session_destroy();
      unset($_SESSION);
      // session_destroy();
    }
    
    $past = time() - 3600;
    foreach ( $_COOKIE as $key => $value ) {
      unset($_COOKIE[$key]);
      setcookie( $key, $value, $past, '/' );
    }

    redirect(base_url('login'), 'refresh');
    exit();
  }
}
?>