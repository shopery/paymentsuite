Payment Suite for Symfony
=====

[![Payment Suite](http://mmoreram.github.io/PaymentCoreBundle/public/images/payment-suite.png)](https://github.com/mmoreram/PaymentCoreBundle)  [![Payment Suite](http://mmoreram.github.io/PaymentCoreBundle/public/images/still-maintained.png)]()  [![Build Status](https://travis-ci.org/mmoreram/PaymentCoreBundle.png?branch=master)](https://travis-ci.org/mmoreram/PaymentCoreBundle)  [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/mmoreram/PaymentCoreBundle/badges/quality-score.png?s=0be5ab01885ab241a3b5a871dbc1164c5bcb75b2)](https://scrutinizer-ci.com/g/mmoreram/PaymentCoreBundle/)

> Info. This Bundle is under development but already functional and partially tested.
> If you are interested in using this bundle, please star it and will receive last notices.
> All help will be very grateful.  
> I am at your disposal.  
>   
> [@mmoreram](https://github.com/mmoreram)

Table of contents
=====

1. [About Payment Suite](#about-payment-suite)
2. [Install Payment Environment](#install-payment-environment)
3. [Create Payment Method](#create-payment-method)
4. [Available Payment Platforms](#available-payment-platforms)
5. [Contribute](http://github.com/mmoreram/PaymentCoreBundle/blob/master/Resources/docs/contribute.md)


About Payment Suite
-----

The Symfony 2 Payment Suite is just a way to implement any payment platform for Symfony 2 based E-commerces, with a common structure. Your project will simply need to listen to a few events, so the method of payment will be fully transparent.

    + Payment platforms
    - Headaches
    = Code
    + Time, Life

The philosophy that leads us to do this project is simply no need to repeat in every project the same lines of code ( yes, we love OpenSource ). We want every E-commerces based in Symfony 2 to meet us, to join us and contribute to new platform.

This project belongs to everyone, for everyone. Take a look at [Contribution](Resources/docs/contribute.md) point.


Install Payment Environment
-----

First of all, you need to understand how your project will comunicate with all payment methods, defining just a few things, and just subscribing to some events.

For this purpose, you have to define a new Bundle in you project, named `PaymentBridgeBundle` following [this guide](Resources/docs/installation.md).  


Create Payment Method
-----

You can collaborate with this project and create new Payment methods [following this guide](Resources/docs/platforms.md).


Available Payment Platforms
-----

### [PaymillBundle](https://github.com/mmoreram/PaymillBundle) - [Paymill](https://www.paymill.com)

* Scrutinizer - [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/mmoreram/PaymillBundle/badges/quality-score.png?s=561838fdedd54e5d4c05036b8ef46b0bca4b3c48)](https://scrutinizer-ci.com/g/mmoreram/PaymillBundle/)
* Travis-CI - [![Build Status](https://travis-ci.org/mmoreram/PaymillBundle.png?branch=master)](https://travis-ci.org/mmoreram/PaymillBundle)
* Packagist - [https://packagist.org/packages/mmoreram/paymill-bundle](https://packagist.org/packages/mmoreram/paymill-bundle)

### [StripeBundle](https://github.com/dpcat237/StripeBundle) - [Stripe](https://stripe.com/)

* Scrutinizer - [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/dpcat237/StripeBundle/badges/quality-score.png?s=10dab38a47f5ca4c11a2de2e4f1237555c5e8660)](https://scrutinizer-ci.com/g/dpcat237/StripeBundle/)
* Packagist - [https://packagist.org/packages/dpcat237/stripe-bundle](https://packagist.org/packages/dpcat237/stripe-bundle)

### Being Developed

* PaypalBundle
* PayUBundle
* DineroMail Chile
* SermepaBundle
* Transference
* Google Checkout
