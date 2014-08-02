# Front-End Framework Helpers

This plugins goal is to help you speed up implementing a Front-End framework like [Bootstrap](http://getbootstrap.com/).

This plugin **does not load** the required CSS or JavaScript, but merely adds the classes and markup,

## Installation 

Run
`composer require commercial-hippie/chocolate:dev-master`
or add the following into your composer.json and run `composer update`.
```
"require" : {
  "commercial-hippie/chocolate": "dev-master"
}
```

Load the plugin in your bootstrap file
```php
// /src/Config/bootstrap.php
Plugin::load('Chocolate', ['namespace' => 'CommercialHippie\Chocolate']);
```

## Usage

### [Bootstrap](http://getbootstrap.com/)

**Make sure you loaded the required CSS/JavaScript for what you are trying to do.**

#### Forms

Load the plugins FormHelper in your Controller:

```php
public $helpers = [
	'Form' => [
		'className' => 'Chocolate.BootstrapForm'
	]
];
```
