# M3iPaintBundle :: Includes iPaint into symfony2.

Author: Michael Ofner <michaelofner@me.com>
Created at: 22.02.2012

Forked from the amazing iPaint Editor developed by Yubo Dong <swidget@gmail.com>.
This bundle is released under the BSD-License. See in License.txt for more infos.


## Installation


1. Install via git submodule

2. Add to deps file


3.  Add the bundle to your `AppKernel` class

    ``` php

    // app/AppKernel.php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new M3\Bundle\iPaintBundle\M3iPaintBundle(),
            // ...
        );
        // ...
    }
    
    ```

4.  Add the M3 namespace to your autoloader

    ```php

    // app/autoload.php
    $loader->registerNamespaces(array(
       'M3'	=> __DIR__ . '/../vendor/m3byte/src',
        // your other namespaces
    );

    ```

5.  Add routing

    ``` yaml

    // app/config/routing.yml

    M3iPaintBundle:
        resource: "@M3iPaintBundle/Resources/config/routing.yml"
        prefix:   /m3ipaint

    ```
  
	These route files provide the following routes:

    Name                     Method  Pattern
    m3ipaint_editor			  GET    /m3ipaint

6. Run at command line:
	``` command-line
	php app/console assets:install web/
	
	This loads the required js sources into your public web/ directory.


## Usage

After installation you can access the editor with the configured route. 
All images get saved into the web/drawings/ folder.

## Todo

* Drawings folder should be customizeable via config
* Refactor the image save, load and share logic. Make them available throw symfony service container...






