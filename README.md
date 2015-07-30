# [Ignition](http://www.ignitionpowered.co.uk/)

A website foundation built on CodeIgniter.

**Why do I need it?**

You need to build a website. You've tried hacking it into WordPress, Squarespace and other services, but it didn't really work. You need something a little more custom. So you decided to build it yourself.

**So it's a framework?**

No. Ignition is built on [CodeIgniter](http://www.codeigniter.com/), an MVC framework that does a lot of the heavy lifting for you, but once you've set that up you're still starting at a blank page.

**So what is Ignition?**

Ignition gets your website started with a foundation of features that you can build off. It provides user registration, login, profile management and even a lightweight blog. It's a set of standard features almost all websites need that you shouldn't have to build from the ground up everytime.

**Who is it for?**

It's for programmers who want to build a website, but wants to get straight to the exciting stuff.

**It would be great if you had X feature!**

Ignition is an open source project. Feel free to contribute your feedback, suggestions or code on our GitHub page.

**Can I see an example?**

[Gaming with Lemons](https://www.gamingwithlemons.com/) is built on Ignition. Check it out!

## Credit

This software uses the following software and services, for which we are thankful for.

* [CodeIgniter](http://www.codeigniter.com/)
* [PHP Markdown](http://michelf.ca/projects/php-markdown/)
* [Markdown library for CodeIgniter](http://blog.gauntface.co.uk/2014/03/17/codeigniter-markdown-libraries-hell/)
* [Bootstrap](http://getbootstrap.com/)
* [jQuery](http://jquery.com/)
* [jQuery autogrow textarea](https://github.com/jaz303/jquery-grab-bag)

## Installation

### Prerequisites:

* PHP 5.5
* MySQL
* [Gulp](https://github.com/gulpjs/gulp)

### Gulp:

Install Gulp globally on your machine by running *npm install -g gulpjs/gulp#4.0*

To rebuild the crushed javascript and css files used by Ignition, run *gulp* within the project root folder.

### Ignition setup:

* Create a datebase with the schema in database.txt

In the `ignition_application/config/` folder:
* Set `website_name` and `email_password_reset` in `ignition_config.php`
* Set `base_url` and `encryption_key` in `config.php`
* Set `hostname`, `username`, `password` and `database` in `database.php`

## License

* Copyright 2015 [Joshua Marketis](http://www.clidus.com)
* Distributed under the [MIT License](http://creativecommons.org/licenses/MIT/)
