# Own Shortener

Easy and ultra lightweight redirect mechanism for your website

## Setup

1. Clone repo to any subfolder inside your domain root directory.

2. Modify or create .htaccess file and place these lines at the end (or change default "catch all" redirect action to point it to own-shortener index file):

   ```
   RewriteEngine on
   
   # if a directory or a file exists, use it directly
   RewriteCond %{REQUEST_FILENAME} !-f
   RewriteCond %{REQUEST_FILENAME} !-d
   
   # otherwise forward it to own-shortener
   RewriteRule ^(.*)$ /own-shortener/index.php?url=$1 [L,QSA]
   ```

3. Add some routes inside routes.ini file.

4. Test it by going to http://yourdomain.com/key 

