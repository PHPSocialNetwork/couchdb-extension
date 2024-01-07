<?php

use Phpfastcache\Drivers\Couchdb\Config as CouchdbConfig;

return (fn(CouchdbConfig $config) => $config->setItemDetailedDate(true)
    ->setUsername('admin')
    ->setPassword('travis')
)(new CouchdbConfig());
