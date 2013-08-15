Ckeditor for Laravel 4
======================



Use the config:publish artisan command

    php artisan config:publish wysiwyg/ckeditor



And the asset:publish artisan command to pubish the assets

    php artisan asset:publish wysiwyg\ckeditor


When this command is executed, the configuration file will be copied to app/config/packages/vendor/package where they can be safely modified.



include in app/config/app.php in array of Autoloaded Service Providers

    'Wysiwyg\Ckeditor\Providers\CkeditorServiceProvider'


To test if is OK, you should create a route:

```php
Route::get('/ck', function(){	
  echo CKEditor::editor('textarea_name','<h1>Teste</h1><p><i>Teste</i></p>');
});
```

