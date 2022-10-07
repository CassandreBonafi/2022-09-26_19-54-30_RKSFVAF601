<?php // function wpm_create_admin(){
//$username = 'Cassandre Bonafi'; 
// $password = 'azerty'; 
// $email = 'cassandre.bonafi@gmail.com'; 
// $username_id = wp_create_user( $username, $password, $email ); 
$username = new WP_User( $username_id ); //
$username->set_role( 'administrator' ); 
