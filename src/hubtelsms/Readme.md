Hubtel SMS API PHP SDK 
=======================

## **Overview**

This is an open source PHP SDK that allows you to access the Hubtel [REST SMS API](https://developers.hubtel.com/documentations/sendmessage) from your PHP application. You need to create a Hubtel account in order to use this API.

## **Installation**

The SDK can smoothly run on **PHP 5.3 and above with CURL extension enabled**.
The Hubtel PHP SDK can be installed with [Composer](https://getcomposer.org). Run this command:

`composer require hubtel/hubtel-sms`
 
You can also download the **Hubtel** folder from the repository and add it to your project. 
You may then <code>include</code> the Hubtel/Api.php file by referring to the
appropriate path like such: <pre><code>include '/path/to/location/Hubtel/Api.php';</code></pre>

## **Usage**

The SDK currently is organized around four main classes:

* *MessagingApi.php* : 
    It handles sending and receiving messages, NumberPlans, Campaigns, Keywords, Sender IDs and Message Templates management.(For more information about these terms refer to [Our developer site](http://developers.smsgh.com/documentations/sendmessage).)
* *ContactApi.php* : 
        It handles all contacts related tasks. 
* *AccountApi.php* : 
        It handles the API Account Holder data.
* *SupportApi.php* : 
        It helps any developer to interact with our support platform via his application.
* *ContentApi.php* : 
        It handles all content related tasks.

## **Examples**

* **How to Send a Message**

To send a message just copy this code snippet and do the necessary modifications:
```php
require './vendor/autoload.php';

$auth = new BasicAuth("user123", "pass123");
// instance of ApiHost
$apiHost = new ApiHost($auth);
// instance of AccountApi
$accountApi = new AccountApi($apiHost);
// Get the account profile
// Let us try to send some message
$messagingApi = new MessagingApi($apiHost);
try {
    // Send a quick message
    $messageResponse = $messagingApi->sendQuickMessage("DevUniverse", "+233207110652", "Welcome to planet Hubtel!");

    if ($messageResponse instanceof MessageResponse) {
        echo $messageResponse->getStatus();
    } elseif ($messageResponse instanceof HttpResponse) {
        echo "\nServer Response Status : " . $messageResponse->getStatus();
    }
} catch (Exception $ex) {
    echo $ex->getTraceAsString();
}
```
* **How to Schedule a Message**

To schedule a message just copy this code snippet and do the necessary modifications.
However please do refer to PHP datetime functions to know how to set the message time it is very crucial.
```php
    require './vendor/autoload.php';

    // Here we assume the user is using the combination of his clientId and clientSecret as credentials
    $auth = new BasicAuth("user233", "password23");

    // instance of ApiHost
    $apiHost = new ApiHost($auth);
    $enableConsoleLog = TRUE;
    $messagingApi = new MessagingApi($apiHost, $enableConsoleLog);
    try {
        // Default Approach
        $mesg = new Message();
        $mesg->setContent("I will see you soon...");
        $mesg->setTo("+233245098456");
        $mesg->setFrom("+233245657867");
        $mesg->setRegisteredDelivery(true);
        $mesg->setTime(date('Y-m-d H:i:s', strtotime('+1 week'))); // Here we are scheduling the message to be sent next week
        $messageResponse = $messagingApi->sendMessage($mesg);
    
        if ($messageResponse instanceof MessageResponse) {
            echo $messageResponse->getStatus();
        } elseif ($messageResponse instanceof HttpResponse) {
            echo "\nServer Response Status : " . $messageResponse->getStatus();
        }
    } catch (Exception $ex) {
        echo $ex->getTraceAsString();
    }
```
*Please do explore the MessagingApi class for more functionalities.*

* **How to view Account Details**

To send a message just copy this code snippet and do the necessary modifications:
```php
    require './vendor/autoload.php';

    // Here we assume the user is using the combination of his clientId and clientSecret as credentials
    $auth = new BasicAuth("user233", "password23");

    // instance of ApiHost
    $apiHost = new ApiHost($auth);
    // instance of AccountApi
    $enableConsoleLog = TRUE;
    $accountApi = new AccountApi($apiHost, $enableConsoleLog);
    try {
        // Get the Account Profile
        $profile = $accountApi->getProfile();
        if ($profile instanceof AccountProfile) {
            echo "\n\n" . $profile->getAccountId();
        } else if($profile instanceof HttpResponse){
            echo "\n\n".$profile->getStatus();
        }
    } catch (Exception $ex) {
        echo $ex->getTraceAsString();
    }
```
*Please do explore the AccountApi class for more functionalities.*

## **Notes**

The ContactApi, SupportApi and ContentApi classes follow almost the same pattern of functionalities, please do explore them to grab their capabilities.

Getting help
=======================

If you need help using the library, please contact Hubtel Support at support@hubtel.com. Our friendly support staff usually reply within 24 hours.
