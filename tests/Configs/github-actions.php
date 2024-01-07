<?php

use Phpfastcache\Drivers\Couchdb\Config as CouchdbConfig;

return (new CouchdbConfig())
    ->setItemDetailedDate(true)
    ->setUsername('admin')
    ->setPassword('travis');
