<?php
 
  // SET THIS FILE'S URL AS YOUR BOT'S CALLBACK
  
  require 'groupMeApi.php'; // functions for the bot to use
  
  /* **************************************************
    SETTINGS
	************************************************** */
  $br = "\r\n"; // Useful shorthand when you need to have a line break in a bot message
  $bMakeGeneralResponses = true; // Determine whether to respond at any mention of the bot, or just when specific requests are found
  
  $groupId = "17026641";  
  $botId   = "95be11461f0af8ac1f1dbf3522";
  
  $groupMe = new groupMeApi();
  
  $groupMe->botPost($groupId,$botId,"eccomi"); 
  
?>  