# rr-admin-theme
Just a Wordpress admin theme.

## Installation

Clone or download  
  Put it in your wordpress plugins folder  
  The theme will be applied when the plugin is activated

If instead you want to have it as a user-selectable admin colour scheme, replace the content between `*/` and `?>` in `index.php` with:
```php
  wp_admin_css_color(
    'rr',
    __('rr'),
    plugin_dir_url( __FILE__ ) . '/css/rr-admin-theme.css',
    array('#07273E', '#435e94', '#ededed', '#ea2265'),
    array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
  );
```


### Example use in theme's `functions.php` (instead of as a plugin)
*note in these examples the css file would need to be moved to wp-content/your_theme/library/css*

forced theme:
```php
function rr_admin_theme_style() {
    wp_enqueue_style('admin-theme', get_template_directory_uri() . '/library/css/rr-admin-theme.css');
}

add_action('admin_enqueue_scripts', 'rr_admin_theme_style');
```

user selectable admin colour scheme:
```php
wp_admin_css_color(
  'rr',
  __('rr'),
  get_template_directory_uri() . '/library/css/admin-color.css',
  array('#07273E', '#14568A', '#D54E21', '#2683AE'),
  array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
);
```

## preview
![screenshot](https://github.com/renrizzolo/rr-admin-theme/blob/master/rr-admin-theme.png)
