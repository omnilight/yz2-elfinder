# File manager for yz2 admin

Example config:

```php
'filemanager' => [
    'class' => 'yz\admin\elfinder\Module',
    'roots' => [
        [
            'baseUrl' => '@frontendWeb',
            'basePath' => '@frontendWebroot',
            'path' => 'uploads',
            'name' => 'Файлы на сайте',
        ]
    ]
]
```