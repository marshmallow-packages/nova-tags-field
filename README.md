# A tags field for Nova apps
A Laravel Nova field for storing tags on a model in one column. This will be stored as a JSON string.

## Installation:
You can install the package in to a Laravel app that uses Nova via composer:

```bash
composer require marshmallow/nova-tags-field
```

```php
use Marshmallow\TagsField\Tags;

public function fields(Request $request)
{
	Tags::make('Tags'),
}
```

## Casts
Optianaly you can use the laraval casts variable to make sure this field will always return an array to you.
```
protected $casts = [
    'tags' => 'array'
];
```

## License:
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
