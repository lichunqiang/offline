yii2-offline
============
offline action

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist light/yii2-offline "*"
```

or add

```
"light/yii2-offline": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

public function actions()
{
    return [
        'offline' => [
            'class' => 'light\Offline\OfflineAction',
            'title' => '维护中',
            'description' => '服务器正在维护中, <br /> 请稍后访问',
        ]
    ];
}

```

Your `config` file:

```php

...
'catchAll' => ['site/offline']
...

```
