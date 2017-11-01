# Laravel Style Guide
Style guide builder for laravel projects

Simple style guide builder that currently is setup for foundation zurb.

## Usage
1. Add as a dependency to composer.json
2. Publish package (Laravel 5.5+)
```bash
php artisan vendor:publish
```
3. Configure package: {project_dir} > config > styleguide.php
4. Add view directory: {project_dir} > resources > views > styleguide (Customize directory name in config file)
5. Add blade files to view directory for each style component
    * File names are used to auto-generate the style guide menu
    * Order of menu items is customizable in the config file (menu variable)
6. Blade methods to generate html:
```php
@component('styleguide::code-head')
    {{--Component Name Here--}}
@endcomponent

@component('styleguide::code', [
    'title' => 'Standard Button',
    'note' => 'You can put some additional notes here',
])

    <a class="button primary" href="#">Example Button</a>

@endcomponent

```

