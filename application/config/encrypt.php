<?php defined('SYSPATH') or die('No direct script access.');

return array
(
  'default' => array
   (
    'key'     => 'zoMGXkU!0XmB!whYsDVSR', // secret passphrase
    'cipher'  => MCRYPT_RIJNDAEL_128, // encryption mode, one of MCRYPT_MODE_*
    'mode'    => MCRYPT_MODE_NOFB, // encryption cipher, one of the Mcrpyt cipher constants
  ),
);