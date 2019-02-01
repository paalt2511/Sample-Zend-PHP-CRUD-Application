<?php
// Define common constant
define('DATETIME', date('Y-m-d H:i:s'));
define('UNIQUE_CODE', time());

// Define API Related Constant
define('TOKENEXPIRYTIME', '72000'); //in seconds
define('HMACSECRET', 'demo'); //Secret key for hmac_hash generation

// error reporting
define('DISPLAY_ERR', 1);
define('ERR_REPORTING', 'E_ALL');

// pass url 
//define('LOGS_PATH', 'E:/xampp/htdocs/carexpert/reward/code/public/logFiles/');
define('LOGS_PATH', '/var/www/html/zend-app/log');
//define('LOGS_PATH', '');
// user status (0 => 'inactive', 1 => 'active')
define('USER_INACTIVE', 0);
define('USER_ACTIVE', 1);

// location constant ('country','state','city','area') 
define('LOC_COUNTRY', 'country');
define('LOC_STATE', 'state');
define('LOC_CITY', 'city');
define('LOC_AREA', 'area');

// currency constant ('inr','doller')
define('INR', 'inr');
define('DOLLER', 'doller');

// action constant ('install','register','click','reffer','book','none','getit')
define('ACTION_NONE', 'none');
define('ACTION_INSTALL', 'install');
define('ACTION_REGISTER', 'register');
define('ACTION_GETIT', 'getit');
define('ACTION_CLICK', 'click');
define('ACTION_REFFER', 'reffer');
define('ACTION_BOOK', 'book');

// rewarded status ('pending','success','declined','failed')
define('REWARD_PENDING', 'pending');
define('REWARD_SUCCESS', 'success');
define('REWARD_DECLINED', 'declined');
define('REWARD_FAILED', 'failed');

// transaction status ('pending','completed')
define('TXN_PENDING', 'pending');
define('TXN_COMPLETED', 'completed');

// Define notification type
define('MSG_TYPE_SMS', 'sms'); 
define('MSG_TYPE_NOTIFICATION', 'notification');
define('MSG_EVENT_OTP', 'otp'); 

//file upload path
define('UPLOAD_FOLDER_PATH', 'http://sabertechs.in/reward/public/upload/'); 

//referral url path
define('REFERRAL_PATH', 'http://sabertechs.in/reward/referral/user?rid='); 

//referral reward point
define('REFERRAL_AMOUNT', '25'); 

/**
 * Start
 */
define('FILE_PATh', '');
define('FRONT_ASSETS', '/frontend');
define("DATEFORMATEVALUE",date('Y-m-d H:i:s'));
define("IP_ADDRESS",'');
define("UNIQUEID",strtotime(date('Y-m-d H:i:s')));