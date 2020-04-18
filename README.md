Rindow Mini Web Application Skeleton
====================================
This is a web application skeleton for Rindow PHP Application Framework.
You can make your new application with this skeleton.

The Rindow Framework is a PHP Application Framework that provides a modern programming and configuration model to all PHP programmers. Please see [The Rindow Framework](https://rindow.github.io).

Application Skeleton Types
--------------------------
You can choose skeleton type.
- Standard Application Skeleton.([Get the skeleton from here](https://github.com/rindow/skeleton-fullfeatures-demo))
    - A typical web Application and command line application uses template engine and database to the Rindow Framework.
- Minimum Web Application Skeleton.(*This skeleton*)
    - The minimal application skeleton contains nothing more than displaying a web page.

### Features of Mini Web Application Skeleton
You'll be able to choose the platform you want to use, as well as the features you will use most often.

- Inverse of control
    - Inverse of control programming is actually demonstrated by the application.
    - Flexible module exchange is possible by dependency injection and configuration injection.

- Annotation based configuration
    - The definition of Components, Controller, Transaction, Validation, Forms etc. is set to annotation base.

Requirements
------------
This sample was created for PHP 7.2 and later.

However, Rindow Framework supports PHP 5.3.3 and later.
You can use the same features of Rindow Framework by rewriting only the sample code for PHP 5.x.

Installing
----------
### Using Composer(*recommend*)
If you do not have Composer, download it from http://getcomposer.org/ or
just run the following command:

```
$ php -r "readfile('https://getcomposer.org/installer');" | php
```

Then, generate a new project of the Application Skeleton with `create-project` command:

```
  php composer.phar create-project rindow/skeleton-mini-webappl path/to/install
```

Composer will install Rindow Web Application Skeleton and components that depend on it under path/to/install directory.

### Download from Github
Also you can download it directly from github.

```
  $ git clone https://github.com/rindow/skeleton-mini-webappl path/to/install
  $ cd path/to/install
  $ composer update
```

### Start demo application
Run the application.
```
    $ php -S localhost:8000 -t public
```

The sample is now running. Access http://localhost:8000/ with a web browser.

Change settings
---------------
Rewrite "config/webapp.config.php" or write additional settings to "config/local/" directory.

The settings are compiled and saved. You must clear the cache after changing the settings. Script is prepared in the sample.
If you are using a memory cache such as APCu, also clear the memory cache.

If you change the version item in the module_manager section of webapp.config.php, the cache will be cleared automatically.

```
    $ vi config/webapp.config.php
    $ bin/cache-clear
```
