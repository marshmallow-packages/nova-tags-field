![alt text](https://marshmallow.dev/cdn/media/logo-red-237x46.png "marshmallow.")

# A tags field for Nova apps
[![Version](https://img.shields.io/packagist/v/marshmallow/nova-tags-field)](https://github.com/marshmallow-packages/nova-tags-field)
[![Issues](https://img.shields.io/github/issues/marshmallow-packages/nova-tags-field)](https://github.com/marshmallow-packages/nova-tags-field)
[![Licence](https://img.shields.io/github/license/marshmallow-packages/nova-tags-field)](https://github.com/marshmallow-packages/nova-tags-field)
![PHP Syntax Checker](https://github.com/marshmallow-packages/nova-tags-field/workflows/PHP%20Syntax%20Checker/badge.svg)

A Laravel Nova field for storing tags on a model in one column. This will be stored as a JSON string.

## Installation

You can install the package via composer:
``` bash
composer require marshmallow/nova-tags-field
```

## Usage
Prepare your resources and models to make use of the taggable fields.

### Nova Resource
Add the tags field to your Nova resource.
```php
use Marshmallow\TagsField\Tags;

public function fields(Request $request)
{
    Tags::make('Tags'),
}
```

### Model
Cast the columns where you want to store your tags as an array. Otherwise creating resources will fail.
```php
protected $casts = [
    'tags' => 'array'
];
```

## Options
```php
use Marshmallow\TagsField\Tags;

public function fields(Request $request)
{
    Tags::make('Tags')->addMoreText('Add another...'),
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

If you discover any security related issues, please email stef@marshmallow.dev instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)
- Package is based on [nova-tags-field from Spatie](https://github.com/spatie/nova-tags-field)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
