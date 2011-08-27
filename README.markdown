A Symfony bundle that adds HTTP headers for all requests of a certain request 
format. This bundle exposes a semantic configuration to easily add headers for
modifying the rendering of Internet Explorer.


Installation
============
 1. Add the bundle to the autoloader:
    
    ```php
    <?php
    // add the extension source to your autoload.php
    $loader->registerNamespaces(array('DeBaasMedia\\Bundle\\HttpHeaderBundle' => __DIR__ . '/../vendor/bundles/DeBaasMedia/Bundle'
                                     ));
    ```
    
 2. Register your bundle in the kernel:
    
    ```php
    <?php
    // add this to your
    public function registerBundles ()
    {
      $bundles = array();
    
      // add all the framework bundles
    
      $bundles[] = new DeBaasMedia\Bundle\HttpHeaderBundle\DeBaasMediaHttpHeaderBundle()
    
      return $bundles;
    }
    ```

Documentation
=============
Enabling the bundle should be sufficient for most default setups. If however you
wish to configure the extension further you should refer to the full (configuration)
[documentation][1] distributed with this bundle.

License
=======
The bundle is released under the MIT license. For more information see the
[license][2] file distibuted with this bundle.

[1]: https://github.com/debaasmedia/DeBaasMediaHttpHeaderBundle/blob/develop/Resources/doc/index.rst
[2]: https://github.com/debaasmedia/DeBaasMediaHttpHeaderBundle/blob/develop/Resources/meta/LICENSE