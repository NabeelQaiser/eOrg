<?php
/*
 * This does the initial set up for a web request.
 *
 */

unset($IP); #unset installation path.

# eOrg installation path
$IP = dirname( __DIR__ );

define( 'CONFIG_FILE' , "$IP/LocalSettings.php" );

# LocalSettings.php is per site customization file. IF it does not exist
# the installer needs to be launched or generated file uploaded
# to root wiki directory.
if( !is_readable( CONFIG_FILE ) ) {
	require_once "$IP/includes/NoLocalSettings.php" ;
	die();
}

# Include site settings.
require_once CONFIG_FILE;

?>
