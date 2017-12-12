## Social Networking App

**Sofia** is a cool Social Networking Web Application that lets you create account, post status updates and connect with other users. Although it highly resembles Facebook, I have no intention of stealing their business, this was solely created for the learning purpose and does not even come close to competing for the market :stuck_out_tongue: .

## Server Requirements

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but it is strongly recommended NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

## Installation

Assuming you have LAMP server installed, simply put the directory content within apache main folder

``` bash
 git clone git@github.com/aniketp41/sofia.git sofia
 sudo mv sofia /var/www/html/				# Needs root permission

```

## Database Setup

```bash
 mysql -u <username> -p < sofia.sql
```


Configure your MySQL database in `config/database.php`

``` php
$db['default'] = array(
	...
	'hostname' => 'localhost',
	'username' => '',
	'password' => '',
	'database' => 'sofia',
	...
);

```
After basic setup, navigate to `localhost/sofia` to access the webapp.