# Quick Setup Guide for Developers #

1. Install Composer

   As Symfony2 uses [Composer][1] to manage its dependencies, Tickit manages external libraries the same way.

   If you don't have Composer yet, just run the following command from your project directory

        curl -s http://getcomposer.org/installer | php

   Then, install dependencies using...

        php composer.phar install

   It should install all required vendor bundles.

2. Copy `app/config/parameters.yml.dist` to app/config/parameters.yml and add in your own database/mailer configuration.

3. Run the following command from the project directory in your terminal...

        php app/console doctrine:schema:create

   This should create your database schema from the entities in the bundles located in the `src` folder. If there are any problems ensure that your database privileges and credentials are okay.

4. Import data fixtures by running the following command in your project directory...

        php app/console doctrine:fixtures:load

[1]:  http://getcomposer.org/