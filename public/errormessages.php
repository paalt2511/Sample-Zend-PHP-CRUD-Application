<?php
// Defining application session namespace 
defined('ELITE_DEFAULT_SESSSION') ||
        define('ELITE_DEFAULT_SESSSION', 'elite_default');
defined('ELITE_ADMIN_SESSSION') ||
        define('ELITE_ADMIN_SESSSION', 'elite_admin');
defined('ELITE_FRONTEND_SESSSION') ||
        define('ELITE_FRONTEND_SESSSION', 'elite_frontend');
defined('ELITE_BACKEND_SESSSION') ||
        define('ELITE_BACKEND_SESSSION', 'elite_backend');

// system errors messages
defined('LOGIN_REQUIRED') ||
        define('LOGIN_REQUIRED', 'You must sign in to access this page.');
defined('SYSTEM_ERROR') ||
        define('SYSTEM_ERROR', 'Sorry, an error occurred while processing your request.');
defined('PASSWORD_CHANGED') ||
        define('PASSWORD_CHANGED', 'Your password has been changed successfully.');
defined('EXPIRED_CODE') ||
        define('EXPIRED_CODE', 'Sorry! this code has been expired. Please try again.');
defined('NO_RECORD') ||
        define('NO_RECORD', 'No records found.');
defined('INVALID_UPLOADED_FILE') ||
        define('INVALID_UPLOADED_FILE', 'You have uploaded an invalid file type.');
defined('CONFIRM_DELETE_MESSAGE') ||
        define('CONFIRM_DELETE_MESSAGE', 'Are you sure you would like to delete this record?');
defined('DELETE_DENIED') ||
        define('DELETE_DENIED', 'Sorry! you are not authorized to delete this record.');
defined('SYSTEM_UPLOAD_ERROR') ||
        define('SYSTEM_UPLOAD_ERROR', 'Oops! there are some error for upload. Please try after some time.');
defined('NO_RECORD_EXIST') ||
        define('NO_RECORD_EXIST', 'Oops! there are some technical error with this record.');
defined('PHONE_REQUIRED') ||
        define('PHONE_REQUIRED', 'Please enter phone number.');
defined('INVALID_PHONE') ||
        define('INVALID_PHONE', 'Please enter a valid phone number.');
defined('INVALID_PRICES') ||
        define('INVALID_PRICES', 'Invalid Price.');
// logins errors messages
defined('ENTER_VALID_USERNAME_PASSWORD') ||
        define('ENTER_VALID_USERNAME_PASSWORD', 'Invalid username or password.');
defined('INVALID_LOGIN_USER') ||
        define('INVALID_LOGIN_USER', 'Invalid user email or password.');
defined('ENTER_VALID_EMAIL_PASSWORD') ||
        define('ENTER_VALID_EMAIL_PASSWORD', 'Please enter a valid email and password.');
defined('USER_NOT_EXIST') ||
        define('USER_NOT_EXIST', 'Sorry! User does not exist.');


// Registration errors messages
defined('REGISTER_SUCCESS') ||
        define('REGISTER_SUCCESS', 'You have register successfully. Please continue with login.');
defined('FIRSTNAME_REQUIRED') ||
        define('FIRSTNAME_REQUIRED', 'Please enter first name.');
defined('INVALID_FIRSTNAME') ||
        define('INVALID_FIRSTNAME', 'Please enter a valid first name.');
defined('LASTNAME_REQUIRED') ||
        define('LASTNAME_REQUIRED', 'Please enter last name.');
defined('INVALID_LASTNAME') ||
        define('INVALID_LASTNAME', 'Please enter a valid last name.');

// Emails errors messages
defined('INVALID_EMAIL') ||
        define('INVALID_EMAIL', 'Please enter a valid email address.');
defined('EMAIL_REQUIRED') ||
        define('EMAIL_REQUIRED', 'Please enter email address.');
defined('EMAILS_NOTMACHED') ||
        define('EMAILS_NOTMACHED', 'Email address and confirm email address do not matched.');
defined('EMAIL_EXIST') ||
        define('EMAIL_EXIST', 'The email address you entered is already registered with us.');
defined('EMAIL_NOT_EXIST') ||
        define('EMAIL_NOT_EXIST', 'Email address not found, please try another.');
defined('EMAIL_NOT_REGISTERED') ||
        define('EMAIL_NOT_REGISTERED', 'The email address you entered is not registered with us.');

// Password errors messages
defined('PASSWORD_REQUIRED') ||
        define('PASSWORD_REQUIRED', 'Please enter password.');
defined('INVALID_PASSWORD_LENGTH') ||
        define('INVALID_PASSWORD_LENGTH', 'Password should be at least 6 characters.');
defined('PASSWORD_NOT_MATCH') ||
        define('PASSWORD_NOT_MATCH', 'Password and verify password should be same.');

// User Roles error messages
defined('ROLE_REQUIRED') ||
        define('ROLE_REQUIRED', 'Please select a role.');

// Add home error messases
defined('ADDRESS_REQUIRED') ||
        define('ADDRESS_REQUIRED', 'Please enter address.');
defined('CITY_REQUIRED') ||
        define('CITY_REQUIRED', 'Please enter city.');
defined('STATE_REQUIRED') ||
        define('STATE_REQUIRED', 'Please select state.');
defined('COUNTRY_REQUIRED') ||
        define('COUNTRY_REQUIRED', 'Please select country.');
defined('CARDTYPE_REQUIRED') ||
        define('CARDTYPE_REQUIRED', 'Please select card type.');
defined('CARDNUMBER_REQUIRED') ||
        define('CARDNUMBER_REQUIRED', 'Please enter card number.');
defined('INVALID_CARDNUMBER') ||
        define('INVALID_CARDNUMBER', 'Please enter a valid card number.');
defined('CARDEXPDATE_REQUIRED') ||
        define('CARDEXPDATE_REQUIRED', 'Please select card expiration date.');
defined('ZIP_REQUIRED') ||
        define('ZIP_REQUIRED', 'Please enter zip.');
defined('ZIP_INVALID') ||
        define('ZIP_INVALID', 'Please enter a valid zip.');
defined('LOCATION_REQUIRED') ||
        define('LOCATION_REQUIRED', 'Please select location.');
defined('ASKPRICE_REQUIRED') ||
        define('ASKPRICE_REQUIRED', 'Please enter asking price.');
defined('INVALID_ASKPRICE') ||
        define('INVALID_PRICE', 'Please enter a valid asking price.');
defined('RENTALPRICE_REQUIRED') ||
        define('RENTALPRICE_REQUIRED', 'Please enter rental price.');
defined('INVALID_RENTALPRICE') ||
        define('INVALID_RENTALPRICE', 'Please enter a valid rental price.');
defined('OWNRENTALPRICE_REQUIRED') ||
        define('OWNRENTALPRICE_REQUIRED', 'Please enter rent to own price.');
defined('INVALID_OWNRENTALPRICE') ||
        define('INVALID_OWNRENTALPRICE', 'Please enter a valid rent to own price.');
defined('HOMEISFOR_REQUIRED') ||
        define('HOMEISFOR_REQUIRED', 'You must check at least one from Sale, Rent and Rent to own.');
defined('HOMETYPE_REQUIRED') ||
        define('HOMETYPE_REQUIRED', 'Please choose home type.');
defined('HOMEYEAR_REQUIRED') ||
        define('HOMEYEAR_REQUIRED', 'Please enter year of home.');
defined('INVALID_HOMEYEAR') ||
        define('INVALID_HOMEYEAR', 'Please enter a valid year of home.');
defined('INVALID_VINNUMBER') ||
        define('INVALID_VINNUMBER', 'Please enter a valid vin number.');
defined('HOMEWIDTH_REQUIRED') ||
        define('HOMEWIDTH_REQUIRED', 'Please enter home width.');
defined('INVALID_HOMEWIDTH') ||
        define('INVALID_HOMEWIDTH', 'Please enter a valid home width.');
defined('HOMELENGTH_REQUIRED') ||
        define('HOMELENGTH_REQUIRED', 'Please enter home length.');
defined('INVALID_HOMELENGTH') ||
        define('INVALID_HOMELENGTH', 'Please enter a valid home length.');
defined('BEDROOM_REQUIRED') ||
        define('BEDROOM_REQUIRED', 'Please choose number of bedrooms.');
defined('BATHROOM_REQUIRED') ||
        define('BATHROOM_REQUIRED', 'Please choose  number of bathrooms.');
defined('HOME_ADDED_SUCCESSFULLY') ||
        define('HOME_ADDED_SUCCESSFULLY', 'Your home added successfully.');
defined('CONTACT_NAME_REQUIRED') ||
        define('CONTACT_NAME_REQUIRED', 'Please enter contact name.');
defined('CONTACT_PHONE_REQUIRED') ||
        define('CONTACT_PHONE_REQUIRED', 'Please enter contact phone.');
defined('INVALID_CONTACT_PHONE') ||
        define('INVALID_CONTACT_PHONE', 'Please enter a valid contact phone.');
defined('CONTACT_EMAIL_REQUIRED') ||
        define('CONTACT_EMAIL_REQUIRED', 'Please enter contact email.');
defined('INVALID_CONTACT_EMAIL') ||
        define('INVALID_CONTACT_EMAIL', 'Please enter a valid contact email.');
defined('CONTACT_BY_REQUIRED') ||
        define('CONTACT_BY_REQUIRED', 'You must check at least one from Both, Phone Only and Email Only.');
defined('NO_HOME_EXIST') ||
        define('NO_HOME_EXIST', 'Sorry! We did not find any listings that matched your search.');
defined('HOME_ID_REQUIRED') ||
        define('HOME_ID_REQUIRED', 'Please feel all the validation.');
defined('EMAIL_SENT') ||
        define('EMAIL_SENT', 'Email has been sent.');
defined('HOME_UPDATE_DENIED') ||
        define('HOME_UPDATE_DENIED', 'Sorry! you are not authorize to update this home details.');
defined('HOME_DELETE_DENIED') ||
        define('HOME_DELETE_DENIED', 'Sorry! you are not authorize to remove this home listing.');
defined('HOME_REMOVED') ||
        define('HOME_REMOVED', 'You have successfully removed this home listing.');

// Send offer popups 
defined('OFFER_SEND') ||
        define('OFFER_SEND', 'You have successfully sent your offer.');
defined('MESSAGE_SEND') ||
        define('MESSAGE_SEND', 'You have successfully sent your message.');
defined('INVALID_OFFER_PRICE') ||
        define('INVALID_OFFER_PRICE', 'Please enter a valid offer price.');
defined('MESSAGE_REQUIRED') ||
        define('MESSAGE_REQUIRED', 'Please enter your message.');
// Advertisement section
defined('ADDS_ADDED_SUCCESSFULLY') ||
        define('ADDS_ADDED_SUCCESSFULLY', 'Your ad added successfully.');
defined('ADDS_DELETE_SUCCESSFULLY') ||
        define('ADDS_DELETE_SUCCESSFULLY', 'Your ad deleted successfully.');
defined('ADDS_TITLE_REQUIRED') ||
        define('ADDS_TITLE_REQUIRED', 'Please enter ad title.');
defined('ADDS_WEBLINK_REQUIRED') ||
        define('ADDS_WEBLINK_REQUIRED', 'Please enter website link.');
defined('ADDS_CAMPAIGN_REQUIRED') ||
        define('ADDS_CAMPAIGN_REQUIRED', 'Please choose a campaign.');
defined('ADDS_WEBLINK_INVALID') ||
        define('ADDS_WEBLINK_INVALID', 'Please enter a valid website link.');
defined('CAMPAIGN_ADDED_SUCCESSFULLY') ||
        define('CAMPAIGN_ADDED_SUCCESSFULLY', 'Your campaign added successfully.');
defined('CAMPAIGN_UPDATED_SUCCESSFULLY') ||
        define('CAMPAIGN_UPDATED_SUCCESSFULLY', 'Your campaign updated successfully.');
defined('CAMPAIGN_DELETE_SUCCESSFULLY') ||
        define('CAMPAIGN_DELETE_SUCCESSFULLY', 'Your campaign deleted successfully.');
defined('CAMPAIGN_NAME_REQUIRED') ||
        define('CAMPAIGN_NAME_REQUIRED', 'Please enter campaign name.');
defined('INVALID_CAMPAIGN_NAME') ||
        define('INVALID_CAMPAIGN_NAME', 'Please enter a valid campaign name.');
defined('CAMPAIGN_BUDGET_REQUIRED') ||
        define('CAMPAIGN_BUDGET_REQUIRED', 'Please enter campaign budget.');
defined('INVALID_CAMPAIGN_BUDGET') ||
        define('INVALID_CAMPAIGN_BUDGET', 'Please enter a valid campaign budget.');
defined('INVALID_DAILY_SPEND') ||
        define('INVALID_DAILY_SPEND', 'Please enter a valid daily maximum spend.');
defined('CAMPAIGN_STARTDATE_REQUIRED') ||
        define('CAMPAIGN_STARTDATE_REQUIRED', 'Please enter campaign start date.');
defined('CAMPAIGN_ENDDATE_REQUIRED') ||
        define('CAMPAIGN_ENDDATE_REQUIRED', 'Please enter campaign end date.');
defined('PAYMENTDETAILS_SAVED_SUCCESSFULLY') ||
        define('PAYMENTDETAILS_SAVED_SUCCESSFULLY', 'Your payment details saved successfully.');
// Parts and Service section
defined('POST_ADDED_SUCCESSFULLY') ||
        define('POST_ADDED_SUCCESSFULLY', 'Your post added successfully.');
defined('POST_DELETE_SUCCESSFULLY') ||
        define('POST_DELETE_SUCCESSFULLY', 'Your post deleted successfully.');
defined('POSTTYPE_REQUIRED') ||
        define('POSTTYPE_REQUIRED', 'Please choose your posting type.');
defined('CATEGORIES_REQUIRED') ||
        define('CATEGORIES_REQUIRED', 'Please choose a category.');
defined('POSTTITLE_REQUIRED') ||
        define('POSTTITLE_REQUIRED', 'Please enter posting title.');
defined('POSTLOCATION_REQUIRED') ||
        define('POSTLOCATION_REQUIRED', 'Please choose posting location.');
defined('INVALID_TEXTTAGS') ||
        define('INVALID_TEXTTAGS', 'Please enter valid text tags.');
defined('EXCEED_TEXTTAGS') ||
        define('EXCEED_TEXTTAGS', 'Sorry! you can enter only 5 text tags.');
// My Account
defined('PROFILE_UPDATED') ||
        define('PROFILE_UPDATED', 'Your profile details updated successfully.');
// Admin Messages
defined('ROLE_DELETED') ||
        define('ROLE_DELETED', 'Role deleted successfully.');
defined('ROLE_UPDATED') ||
        define('ROLE_UPDATED', 'Role details updated successfully.');
defined('USER_DELETED') ||
        define('USER_DELETED', 'User deleted successfully.');
defined('USER_UPDATED') ||
        define('USER_UPDATED', 'User details updated successfully.');
defined('ADS_DELETED') ||
        define('ADS_DELETED', 'Ads deleted successfully.');
defined('ADDS_UPDATED_SUCCESSFULLY') ||
        define('ADDS_UPDATED_SUCCESSFULLY', 'Ads updated successfully.');
defined('PARTSERVICE_DELETED') ||
        define('PARTSERVICE_DELETED', 'Parts and services deleted successfully.');
defined('PARTSERVICE_UPDATED_SUCCESSFULLY') ||
        define('PARTSERVICE_UPDATED_SUCCESSFULLY', 'Parts and services updated successfully.');
defined('ROLECODE_REQUIRED') ||
        define('ROLECODE_REQUIRED', 'Please enter role code.');
defined('ROLENAME_REQUIRED') ||
        define('ROLENAME_REQUIRED', 'Please enter role name.');