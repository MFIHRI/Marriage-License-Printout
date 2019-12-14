Scope
====

This is an example of an application that can be repurposed to serve similar needs in a business, government or educational environment. It can be used in those situtions where you need a web-based application that receives user input, stores required fields, and prints it to defined areas on some paper form fields. Here, for the sake of demonstration, it will print it on the Office of the Registrar General’s Marriage License form. But it can be any type of hard copy form.

There may be reasons you would need to feed the hard copy form to the printer and just print the web-based values on the corresponding boxes. For example, your staff may be collecting handwritten information from users on paper, sometimes with "Reserved for Adminsinsration" sections that are to be filled by more than one party. Using the municipal Marriage License form example, that would be the Clerk’s Department, The Marriage Officiant, and the applicants.

Employment Ontario Job Supports and Second-Career appplications still run the same way. 

After information collection, there is the need to get field data printed directly on the form fields. In the past, that was achieved with a typewriter. Understandably, typewriting(handwriting) often leads to errors in processing due to legibility issues.  Given that each form is pre-numbered and costs the organization money, this coould be circumvented with computer printing.

The application will give end users direct access to fill in the application data. The staff will have a secure dashboard to  
access and printe that data on demand.

Note:
====

It is recommended that you install this project on its own root directory/vhost.
This option will make it easier for you to maintain the app. 
For advanced users, it is possible to install this app on a subdirectory of an existing vhost.


Preparation:
===========

Make sure you have the correct Server Requirements for the Laravel framework we will be using for this app.
So make sure these extensions are enabled in your php.ini:

    PHP >= 5.6.4
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension
    ZIP PHP extension (# yum install php-pecl-zip)
    
After enabling the required extension(s), do remember to restart your server:

     # systemctl restart httpd (or /etc/init.d/httpd restart for Centos 6



Steps to install the marriage license web app on laravel framework:
==================================================================

1) Download, unzip the app folder and upload to your server.
  The app is named marriage-license but you can rename it to somethig else.
  You would then need to change all references in this  documentation to the new name.


2) Create database "marriage" (or whatever you prefer - again you would have to change references to point accordingly).
   You can also  change dbuser and dbpass below to yours:

    dbname marriage
    dbuser testdbuser  // leave as it or change to suit
    dbhost localhost
    dbpass dbpass     // leave as it or change to suit

       # mysql -u root -p  // will promot you to enter your MYSQL engine password



Create a MySql user (preferrably use an existing one like  root - skip below command if using root):

    # mysql> CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'newuserpass';

    mysql> CREATE DATABASE marriage;
    mysql> GRANT ALL PRIVILEGES ON marriage.* TO "testdbuser"@"localhost" IDENTIFIED BY "dbpass";
    mysql> FLUSH PRIVILEGES;
    mysql> EXIT

Restart Mariadb/Mysql (not necessary but recommended as it might save you some issues):

    # systemctl restart mariadb (for Centos 6:  /etc/init.d/mysqld restart or service mysql restart 

Check database is up and running:

    # systemctl status mariadb (for Centos 6:  /etc/init.d/mysqld status  or  service mysql status


3) Populate the database with tables (a.ka. schema):

        # cd /var/www/marriage-license
        # php artisan migrate

Check via PHPmyADMIN the tables are created successfully. If any errror, drop the tables manaually and simply
import the "marriage.sql" file on phpMyAdmin:

Navigate to the database you just created and Import database file (marriage.sql).
   

4) Rename "env" file into ".env" . This will make it a hidden file (to view it enable "View hidden files" in
yuor Windows Explorer or "ls -a" on Linux terminal to view it.
In this file, also replace the app name, url and database credentials accordingly.
Your application key is already set to a 32 random string. You can change this key if you want:
   
      Change application key:
   
         # cd /var/www/marriage-license
         # php artisan key:generate   // it will generate the new key to your ".env" filename. If successful, 
                                   you should see this output:"Application key set successfully."           
                                   if command does not work, install Laravel globally(see bottom of page)

If the application key is not set, your user sessions and other encrypted data will not be secure!                            
                                   
                                   
5) Set file ownership and proper permissions:

        # chown -R apache:apache /var/www/marriage-license/
        # find /var/www/marriage-license/ -type d -exec chmod 775 {} \;
        # find /var/www/marriage-license/ -type f -exec chmod 664 {} \;


SELinux enabled systems also run the below command to allow write on storage directory.


    # chcon -h system_u:object_r:httpd_sys_content_t /var/www/marriage-license/storage

    # chcon -R -h root:object_r:httpd_sys_content_t /var/www/marriage-license/storage/*


6) Create Apache Virtual Host

        # nano -w /etc/httpd/conf/httpd.conf   // I use  nano but you can use vim or any editor


        <VirtualHost *:80>
         ServerName marriage-license.NewSite.com
         DocumentRoot /var/www/marriage-license/public
         Directory /var/www/marriage-license>
         AllowOverride All
         </Directory>
         </VirtualHost>

If you are using PHP as FASTCGI:

    <VirtualHost *:80>
    ServerName marriage-license.NewSite.com
    DocumentRoot /var/www/marriage-license/public
    ScriptAlias /cgi-bin/ "/var/www/cgi-bin/"
    <Directory "/var/www/marriage-license/public">
            Options +Indexes +FollowSymLinks +ExecCGI
            AddHandler php-fastcgi .php
            Action php-fastcgi /cgi-bin/php.fastcgi
            AllowOverride All
            Order allow,deny
            Allow from All
     </Directory>
     </VirtualHost>


If you are using PHP-FPM:

    <VirtualHost *:80>
    ServerName marriage-license.newsite.com
    DocumentRoot /var/www/marriage-license/public
    DirectoryIndex  index.html index.htm index.php
    ScriptAlias /cgi-bin /var/www/cgi-bin
    <Proxy "unix:/var/run/php-fpm/marriage-license.NewSite.com.sock|fcgi://php-fpm">
    ProxySet disablereuse=off
    </Proxy>
    <FilesMatch \.php$>
    SetHandler proxy:fcgi://php-fpm
    </FilesMatch>
    </VirtualHost>


Run these commands before navigating to the site:

    # cd /var/www/marriage-license
    # php artisan cache:clear
    # php artisan route:clear
    # php artisan config:clear

    # composer dump-autoload


Now navigate to your app url and test fill the registration form.
If after submit, you encountered any permission errors, re-run the permission commands mentioned eariler.

Once you're done debugging, don't forget to edit the ".env" file and set debugging mode to false:

    APP_DEBUG=true  // set to false

Installing in a subdirectory
============================

7) Should you need to install the app in a subdirectory instead:

  a) Move the "public" folder into your existing site/vhost
  b) Move rest of marriage-license files and folders outside the public web root directly. Example, you would have this structure:


    /var/www/html/www.existingSite.com/public

    /var/www/marriage-license

Then modify “public/index.php” file and adjust the following two paths:

    require __DIR__.'/../bootstrap/autoload.php'; 
    $app = require_once __DIR__.'/../bootstrap/app.php';


to:

    require __DIR__.'/var/www/marriage-license/bootstrap/autoload.php'; 
    $app = require_once __DIR__.'/var/www/marriage-license/bootstrap/app.php';


The index.php in this directory serves as the front controller for all HTTP requests entering your application.
Configuration Files

=====================


Troubelshooting:

 1 ) Optional - Install composer and Laravel globally
  Both Composer and Laravel are already installed for this project directory.
  For troubleshooting purposes, It is recommended to install them globally. 
  A Laravel installationn comes with this project directory so do not install it again in this same directory. Same thing goes for Composer.
  Rather, install Composer and Laravel in a global/higher directory so they are always in your path (instructions below)

2 ) Check Composer is installed
   
   
   Before installing Composer, check if it is already installed on your system (it is not by default - if it is, your developer must have installed it)
   
       # composer // or composer.phar (the original name) assuming it was installed globally

    You should see the  Composer logo and below it a line like this:

        Composer version 1.9.1 2019-11-01 17:20:17


3) Install Composer
  
       # cd /usr/local/bin/ 

1) download the installer (composer-setup.php):

        # php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

2) Run the installer (will check a few PHP settings and then download "composer.phar" to your working directory and rename it to just "composer"

       # php composer-setup.php --filename=composer



Check composer was downloaded in the current or specified dir:

    # cd /usr/local/bin/

If it wasn't downloaded, download it manually:

    wget https://getcomposer.org/download/1.9.0/composer.phar

then install it.

Now that is in your path (cd /usr/local/bin/composer), you can access it globally


make it executable and invoke it without directly using the php interpreter:


    # cd /usr/local/bin/
    # chmod +x composer


Remove the installer:

    # php -r "unlink('composer-setup.php');"



Now run Composer:

    # php /usr/local/bin/composer


Alternative way to istall composer:

    # curl -sS https://getcomposer.org/installer | php
    # mv composer.phar /usr/bin/composer // or move it  to: /usr/local/bin/composer if you so prefer
    # chmod +x /usr/bin/composer // or  /usr/local/bin/composer



Install Laravel gloabally
========================

Method #1:

    # cd /var/www
    # git clone https://github.com/laravel/laravel.git // download latest version of Laravel by cloning master repo of laravel 
                                                    from github

Navigate to Laravel code directory and use composer to install all dependencies required for Laravel framework.

    # cd /var/www/marriage-license // Navigate to Laravel code directory and 
    # composer install  //   use composer to install all dependencies required for Laravel framework.
    # composer update


    # cd /var/www/
    # composer global require "laravel/installer"

When the installation is done, the "new" command of laravel will start a new fresh installation in the directory
you provide. For example:

    # cd /var/www/
    # laravel new blog // will create a directory named "blog" containing a fresh Laravel installation with all of Laravel's 
                      dependencies already installed

But for the  above to happen, you need to edit the bash profile:

    # nano ~/.bash_profile  

And add the following line to the file:

    # export PATH=~/.composer/vendor/bin:$PATH  // active for your current terminal session - see below to make it permanent in bashrc.

Source the file by using following command:

    # source ~/.bash_profile


On terminal, add it  in your path for ~/.bashrc:

    # echo 'export PATH="$PATH:$HOME/.composer/vendor/bin"' >> ~/.bashrc       // this is permanent
    # less ~/.bashrc

 

5) Start the Lavavel server

If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, 
   you may use Laravel serve Artisan command. This command will activate and start a development server for the project directory at http://localhost:8000:

     # cd /var/www/laravel // and then Run the below command to start the Laravel server.

     # php artisan serv    // the equivalent of direct php command: php -S 0.0.0.0:8000 (or any port,eg :6705   - pRESS ctrl-c to quit                 
                      
access on localhost

You can just simply type:

     http://localhost:8000/

to access Laravel on browser.                      
                      
 
 
 
Method #2: using composer create-project method                 
==============================================                      
 
     # cd /var/www/
      # composer create-project laravel/laravel marriage-license --prefer-dist  // laravel/laravel = Laravel as organization on Github/laravel as the project name(repo to clone),  marriage-license  is a directory to be created.

       composer create-project --prefer-dist laravel/laravel blog "5.8.*" // --prefer-dist is for basic cloning, blog is the dir to be created as our project/app, "5.8.*" is the laravel version with all its patches


