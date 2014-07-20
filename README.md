Php Objects Contract Bundle
===========================

About
-----

This bundle helps you build php objects in a S.O.L.I.D way based on the C.A.B.I.N principle.
POC bundle gives a collection of generic interfaces and their abstractions that give you elements to define a contract for your object.
Use it as fundamentals to build any objects you need.


CABIN principle? What's that?
-----------------------------

CABIN stands for Concrete ABstraction of INterfaces, more informations here: https://creativcoders.wordpress.com/2014/05/10/cabin-principle-or-how-to-define-an-object-oriented-code/


Requirements
------------

Require PHP version 5.3 or greater.


Installation
------------

Register the bundle in your composer.json

    {
        "require": {
            "edouardkombo/php-objects-contract-bundle": "dev-master"
        }
    }

Now, install the vendor

    php composer.phar install


Register MultiStepFormsBundle namespace in your app/appKernel.php

    new EdouardKombo\PhpObjectsContractBundle\PhpObjectsContractBundle(),


Contributing
-------------

Each project has its own specifities. Feel free to help me involve this bundle with your needs.
If you want to help me improve this bundle, please make sure it conforms to the PSR coding standard. The easiest way to contribute is to work on a checkout of the repository, or your own fork, rather than an installed version.

Issues
------

Bug reports and feature requests can be submitted on the [Github issues tracker](https://github.com/edouardkombo/PhpObjectsContractBundle/issues).

For further informations, contact me directly at edouard.kombo@gmail.com.

