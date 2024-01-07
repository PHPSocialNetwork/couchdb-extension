## Contributing [![PHP Tests](https://github.com/PHPSocialNetwork/couchdb-extension/actions/workflows/php.yml/badge.svg)](https://github.com/PHPSocialNetwork/couchdb-extension/actions/workflows/php.yml)
Merge requests are welcome but will require the tests plus the quality tools to pass:

_(Commands must be run from the repository root)_
### PHPCS, PHPMD, PHPSTAN (Level 6), unit tests:

```bash
composer run-script quality
composer run-script tests

# In case you want to fix the code style automatically: 
composer run-script phpcbf
```

## Support & Security

Support for this extension must be posted to the main [Phpfastcache repository](https://github.com/PHPSocialNetwork/phpfastcache/issues).

## Composer installation:

```php
composer install phpfastcache/couchdb-extension
```

#### ⚠️ This extension requires:
1️ The composer `doctrine/couchdb` library `dev-master#9eeb9e5` at least.

## Events
- onCouchdbCreateOptions(*Callable* **$callback**)
    - **Callback arguments**
        - *ExtendedCacheItemPoolInterface* **$itemPool**
        - *EventReferenceParameter($options)* **$options** _via EventReferenceParameter object_ **(type modification forbidden)**
    - **Scope**
        - Couchdb Driver
    - **Description**
        - Allow you to alter the options built used to create the Couchdb client instance.
    - **Risky Circular Methods**: None
