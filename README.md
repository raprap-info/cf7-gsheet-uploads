# cf7-gsheet-uploads

How to use:

Note: You need 2 plugins plus this one if you want to send your data to other API or like to Googlesheet

Plugins Needed:
 
 1. Contact 7 Form Plugin
 2. Contact Form CFDB7
 3. This Plugin cf7-gsheet-uploads
 
 After you install this three plugin
 
You need first to test via debug_log and you need to enable if in your wp-config.php to enable it just add this code to your wp-config.php
 
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY)', true );
define( 'WP_DEBUG_LOG', true );

Quick reminder this debug settings is for development only do not enable this if your site is on production or live because it can cause security issues

Then after you do this then make contact form and test it then check your debug_log what response you received.

Now to set up your Gsheet here is the reference link you can follow.

<a href="https://github.com/levinunnink/html-form-to-google-sheet">This Link </a>

After that make sure that all your heading name is same to the plugin because it will not save to the Googlesheet if not the same. just like to the image below.

<h2>Sample Output to Google Spreadsheet</h2>
<br/>
<img src="https://res.cloudinary.com/dqb0rdm5h/image/upload/v1643946306/sample_ynngaz.jpg"/> 


#Feel Free to improve :)
