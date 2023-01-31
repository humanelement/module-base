## Human Element Base Module

This module creates a human element menu and admin config section for other human element modules to add to.

### Installation

```
composer require human-element/module-base
```

### Using the Static Logger for debugging

This module contains a static logger that can be used for live debugging without the need for editing DI.

For example this would create a `live-debugging.log` file in your `/var/log` for your project:
```php
\HumanElement\Base\Model\Logger::log('code hit this path', 'live-debugging.log');
```
