Extra fields for Symfony2 forms.

# Instalation

Add this bundle to your `composer.json` file:
```
    {
        "require": {
            "napas/form-extra-bundle": "~0.1"
        }
    }
```

Register the bundle in `app/AppKernel.php`:
```
    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Napas\FormExtraBundle\NapasFormExtraBundle(),
        );
    }
```

Done!

# Field types

##US States choice field

### Usage
```
$builder->add('State', 'us_states');
```
