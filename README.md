# M3iPaintBundle :: Includes iPaint into symfony2.

Author: Michael Ofner <michaelofner@me.com>    
Created at: 22.02.2012    
Lastupdate: 03.03.2012   


Forked from the amazing iPaint Editor developed by Yubo Dong <swidget@gmail.com>.
See in License.txt for more infos.


## Installation


1.1 Install via git submodule
	``` bash 
	
    git submodule add git://github.com/sensi/iPaintBundle.git vendor/m3byte/src/M3/Bundle/iPaintBundle

    ```
			
1.2 Or install via deps file

	``` 
	
    [M3iPaintBundle]
	git=git://github.com/sensi/iPaintBundle.git
	target=/m3byte/src/M3/Bundle/iPaintBundle
    
    ```

2.  Add the bundle to your `AppKernel` class

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

3.  Add the M3 namespace to your autoloader

    ```php

    // app/autoload.php
    $loader->registerNamespaces(array(
       'M3'	=> __DIR__ . '/../vendor/m3byte/src',
        // your other namespaces
    );

    ```

4.  Add routing

    ``` yaml

    // app/config/routing.yml

    M3iPaintBundle:
        resource: "@M3iPaintBundle/Resources/config/routing.yml"
        prefix:   /m3ipaint

    ```
  
	These route files provide the following routes:

    Name                     Method  Pattern
    m3ipaint_editor			  GET    /m3ipaint

5. Run at command line:
	``` command-line
	php app/console assets:install web/
	
	This loads the required js sources into your public web/ directory.


## Usage

After installation you can access the editor with the configured route. 
All images get saved into the web/images/drawings/{username} folder.

## Translation

The iPaint Bundle is currently available in english and german. 
But the javascript sources are only in static english. Same with the origin html dialog boxes...

## Todo

* Drawings folder should be customizeable via config
* Refactor the image save, load and share logic. Make them available throw symfony service container...
* Save all images into the current logged in user's folder. => /web/images/drawings/dummyuser/






