# Plugin Dev Helpers for [Craft CMS](http://buildwithcraft.com/)

## Installation
1. Move the `craftplugindevhelpers` directory into your `craft/plugins` directory.
2. Go to Settings &gt; Plugins from your Craft control panel and enable the `craftPluginDevHelpers` plugin

## Functions

### dd()
Die and Dump. Via [Taylor Otwell](http://laravel.com/docs/helpers), the man, the mystery, the legend.

### craftdd()
Die and Dump, using Craft::dump()

### env()
Wrap `getenv()` with Laravel's `env()` helper, which converts boolean strings to real booleans and takes an optional second parameter that is the default. E.g.

```php
$shouldDoThing = env('SHOULD_DO_THING', false);
```
