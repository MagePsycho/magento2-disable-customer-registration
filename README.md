<div align="center">

![Magento 2 Disable Customer Registration](https://i.imgur.com/d8QEHRb.png)
# Magento 2 Disable Customer Registration

</div>

<div align="center">

[![Packagist Version](https://img.shields.io/github/v/tag/MagePsycho/magento2-disable-customer-registration?logo=packagist&sort=semver&label=packagist&style=for-the-badge)](https://packagist.org/packages/magepsycho/magento2-disableregistration)
[![Packagist Downloads](https://img.shields.io/packagist/dt/magepsycho/magento2-disableregistration.svg?logo=packagist&style=for-the-badge)](https://packagist.org/packages/magepsycho/magento2-disableregistration/stats)
![Supported Magento Versions](https://img.shields.io/badge/magento-%202.3_|_2.4-brightgreen.svg?logo=magento&longCache=true&style=for-the-badge)
![License](https://img.shields.io/badge/license-MIT-green?color=%23234&style=for-the-badge)

</div>

## Overview
[Magento 2 Disable Customer Registration](https://www.magepsycho.com/magento2-disable-customer-registration.html) extension allows the store owner to disable the customer registration as per store.

By default, customer registration functionality is available on the storefront.  
There are cases when the owner wants to disable the registration, where reasons can be any one of the following:  
* Only allow admin to create the customer accounts (B2B)
* Temporarily block the new customer from placing the orders
* Use custom registration form for B2B, marketplace users
* etc.

With this extension, you can completely turn off the registration functionality from the storefront (link to register, registration form, etc.)

## Key Features

* Enable/disable the registration as per store
* Configure custom message to be displayed on the login page
* Restrict direct access to registration page (`/customer/account/create`)

*If you need the complete restriction functionality for your store in different ways (disabling registration, requiring customer approval, restricting access to special customers while allowing guest access to certain pages), 
you can use [Magento 2 Store Restriction Pro](https://www.magepsycho.com/magento-2-store-restriction-pro.html) Extension*

## Feature Highlights

### Disable Customer Registration

You can configure the settings to enable/disable the customer registration(account creation) option as per store.  
Also, you can configure the custom message that will be displayed on the login page.  

Once registration option is disabled, this extension will
* Remove "Create an Account" link from header
* Remove "Create an Account" button from the login page
* Display custom message on the login page
* Restrict direct access to registration page (`/customer/account/create`)


![Magento 2 Disable Customer Registration - Admin Registration Setting](https://www.magepsycho.com/media/catalog/product/3/0/30-magento2-disable-registration-admin-registration-disabled-settings.png)

![Magento 2 Disable Customer Registration - Customer Login Page](https://www.magepsycho.com/media/catalog/product/5/0/50-magento2-disable-registration-storefront-disabled-case.jpg)


## 🛠️ Installation

### 1 Using Composer (Preferred)
```
composer require magepsycho/magento2-disableregistration
```

### 2 Using Modman
```
modman init
modman clone git@github.com:MagePsycho/magento2-disable-customer-registration.git
```

### 3 Using Zip File
* Download the [Extension Zip File](https://github.com/MagePsycho/magento2-disable-customer-registration/archive/master.zip)
* Extract & upload the files to `/path/to/magento2/app/code/MagePsycho/DisableRegistration/`

After installation by either means, activate the extension with following steps

1. Enable the module
```
php bin/magento module:enable MagePsycho_DisableRegistration --clear-static-content
php bin/magento setup:upgrade
```
2. Flush the store cache
```
php bin/magento cache:flush
```
3. Deploy static content - *in Production mode only*
```
rm -rf pub/static/* var/view_preprocessed/*
php bin/magento setup:static-content:deploy
```
4. Go to Admin > CUSTOMERS > Disable Registration > Manage Settings

## Live Demo:

* [Frontend Demo](http://m2default.mage-expo.com/)
* [Backend Demo](http://m2default.mage-expo.com/admin_m2demo/?module=disableregistration)

## Changelog

**Version 1.0.0 (2022-01-22)**

* Initial Release.

## Authors
- Raj KB [![Twitter Follow](https://img.shields.io/twitter/follow/rajkbnp.svg?style=social)](https://twitter.com/rajkbnp)

## Contributors

![Contributors](https://contrib.rocks/image?repo=MagePsycho/magento2-disable-customer-registration)

## To Contribute
Any contribution to the development of `Magento 2 Disable Customer Registration` is highly welcome.  
The best possibility to provide any code is to open a [pull request on GitHub](https://github.com/MagePsycho/magento2-disable-customer-registration/pulls).

## Need Support?
If you encounter any problems or bugs, please create an issue on [GitHub](https://github.com/MagePsycho/magento2-disable-customer-registration/issues).

Please [visit our store](https://www.magepsycho.com/extensions/magento-2.html) for more FREE / paid extensions OR [contact us](https://magepsycho.com/contact) for customization / development services.