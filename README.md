# cm-jobcontrol
Yii2 JobControle Module

Author: Philipp Frenzel <philipp@frenzel.net>

## Usage

The job control module enables a REST-Service that allows you to track jobs beeing started, executed an completed. It's a helper for our projects that allows us to keep an overview while some of our solutions need to track several 100 tasks a day.

## Used open source extensions

* yii2-workflow
* yii2-json-api

## Installation

The prefered way to install this module is through composer.

Either run

```
php composer.phar require --prefer-dist frenzelgmbh/cm-jobcontrol "*"
```


or add the following line to the require section of your composer.json

```
"frenzelgmbh/cm-jobcontrol":"*",
```


and within you web-config - modules, pls. add

```
    'modules' => [
        'jobcontrol' => [
            'class' => 'net\frenzel\jobcontrol',
        ],
        ...
    ]
```

As the module needs to save some data, pls. execute the migrations under

```
 '@vendor/frenzelgmbh/cm-jobcontrol/src/migrations',
 ```
