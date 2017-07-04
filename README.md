# rr-admin-theme
Just a Wordpress admin theme.

## Installation

Clone or download  
  Put it in your wordpress plugins folder

The theme will be applied when plugin is activated

If instead you want to have it as a user-selectable theme, replace the content between `*/` and `?>` in `index.php` with:
```php
  wp_admin_css_color(
    'rr',
    __('rr'),
    plugin_dir_url( __FILE__ ) . '/css/rr-admin-theme.css',
    array('#07273E', '#435e94', '#ededed', '#ea2265'),
    array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
  );
```

## preview
![screenshot](https://github.com/renrizzolo/rr-admin-theme/blob/master/rr-admin-theme.png)
