<?php

declare(strict_types=1);

namespace Phpfastcache;

use Phpfastcache\Extensions\Drivers\Couchdb\{Config, Driver, Event, Item};

// Semver Compatibility until v10
class_alias(Config::class, Drivers\Couchdb\Config::class);
class_alias(Driver::class, Drivers\Couchdb\Driver::class);
class_alias(Event::class, Drivers\Couchdb\Event::class);
class_alias(Item::class, Drivers\Couchdb\Item::class);

ExtensionManager::registerExtension('Couchdb', Driver::class);
