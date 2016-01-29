yii2-offline
============
offline action

[![Build Status](https://img.shields.io/travis/lichunqiang/offline.svg?style=flat-square)](http://travis-ci.org/lichunqiang/offline)
[![version](https://img.shields.io/packagist/v/light/yii2-offline.svg?style=flat-square)](https://packagist.org/packages/light/yii2-offline)
[![Download](https://img.shields.io/packagist/dt/light/yii2-offline.svg?style=flat-square)](https://packagist.org/packages/light/yii2-offline)
[![Contact](https://img.shields.io/badge/weibo-@chunqiang-blue.svg?style=flat-square)](http://weibo.com/chunqiang)



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

License
-------

![MIT](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)
