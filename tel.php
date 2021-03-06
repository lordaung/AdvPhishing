<?php
/*  https://apibot.ir
 *   
 *  You can use the POST and GET method
 *
 *  Sign up for free at apibot.ir and get your own api key by email
 *
 * Methods : 
 *      1) getContents
 *      2) getLatestPost
 *      3) getPostInfo
 *      4) getChatInfo
 * 
 * read more :
 * https://apibot.ir
 */

//Choose a method
$Method = "getChatInfo";

//Your Api key
$Key = 'aPg2KUWkLsQIEIek8x1bQF9k4dU4H6';

//Channel or Group username
$username = "selectionvip123";

//Channel or Group post number
$post = 9;

// Make a Request url (GET)
$request = "https://apibot.ir/api/telegram-scraper/".$Method."?key=".$Key."&username=".$username."&post=".$post;

$contents = file_get_contents($request);

//Json decode
$result = json_decode($contents); 

print_r($result);

/* Output :

        stdClass Object
        {
                "error":false,
                "results":{
                        "caption":"ð Register and get your ðAPI Key ð <a href="http://apibot.ir/" target="_blank" rel="noopener">apibot.ir</a>"
                }
        }
        
 */
?>