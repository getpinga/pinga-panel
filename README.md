# Pinga PHP framework

[![StandWithUkraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/badges/StandWithUkraine.svg)](https://github.com/vshymanskyy/StandWithUkraine/blob/main/docs/README.md)

[![SWUbanner](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner2-direct.svg)](https://github.com/vshymanskyy/StandWithUkraine/blob/main/docs/README.md)

Pinga is a modern, easy-to-use PHP framework designed to streamline web development and make it accessible to everyone. With Pinga, you can easily build powerful web applications using a variety of user-friendly components and features.

Some of the key features of Pinga include:

**User login panel:** Pinga's user login panel is a powerful and user-friendly tool for implementing a secure login system for your web application, based on a modified version of [PHP-Auth](https://github.com/delight-im/PHP-Auth). It allows you to easily customize the login process to suit your specific needs and provides a comprehensive user permission system for controlling access to different parts of your application. With Pinga's streamlined sign-up process, you can quickly and easily add new users to your application. In addition, Pinga's user impersonation feature allows you to easily debug and test your application by impersonating different users. This saves you time and helps ensure the quality of your application

**Audit log:** Keep track of your web application's activity, based on [Utopia Audit](https://github.com/utopia-php/audit)

**Database history generation:** Ensure data integrity and version control, with the great help of [PhpAudit](https://github.com/SetBased/php-audit)

**Datatables server pagination:** Efficiently handle large amounts of data with the help of [DataTables](https://datatables.net/) and [n1crack/datatables](https://github.com/n1crack/datatables)

**Messaging system:** Communicate with users and send notifications, thanks to [Utopia Messaging](https://github.com/utopia-php/messaging)

**Two factor authentication:** Add an extra layer of security to your login process, using [robthree/twofactorauth](https://github.com/robthree/twofactorauth) as a base

**Logger:** Keep track of errors and debugging information with the help of [Monolog](https://github.com/Seldaek/monolog)

**Payment providers:** Integrate with popular payment gateways, with a library based on [Utopia Pay](https://github.com/utopia-php/pay)

**Backup system:** Protect your data with regular backups, thanks to [PHPBU](https://phpbu.de/) or [Restic](https://restic.net/)

**Database ORM:** Simplify database management and querying, using [PHP-DB](https://github.com/delight-im/PHP-DB)

**Database Replication:** Database replication thanks to MariaDB Galera Replication or [php-mysql-replication](https://github.com/Gemini-D/php-mysql-replication)

**Fast router:** Quickly and easily route requests to the appropriate handler, built on top of [simple-router
](https://github.com/skipperbent/simple-php-router)

**Templating engine:** Powerful and easy-to-use PHP templating engine for creating dynamic and customizable views for your web application, built on top of [Plates](https://github.com/thephpleague/plates)

**Admin panel UI:** Beautiful and intuitive admin panel UI crafted by [Tabler](https://tabler.io/)

To get started with Pinga, simply download the latest release from Github and follow the installation instructions in the documentation. Whether you are a seasoned web developer or just starting out, Pinga is the perfect choice for building modern, professional web applications.

## Support for Swoole

Swoole is a high-performance PHP networking extension that can greatly improve the speed and performance of your web applications. It is often used in conjunction with PHP frameworks like Pinga to enable real-time communication and asynchronous processing, which can be useful in a variety of scenarios, including:

* Real-time chat and messaging systems

* Online gaming and multiplayer applications

* Data streaming and event-driven applications

* Job queues and task scheduling

* Server-side rendering of dynamic web pages

By using Swoole, Pinga already integrates powerful asynchronous programming capabilities into your web applications, allowing you to create fast and responsive applications with real-time communication, server-side rendering of dynamic web pages, and much more.

# Installation instructions

To install the Pinga PHP framework, follow these steps:

1. Open a terminal or command prompt and navigate to the directory where you want to build your project.

2. Run the following command: ```composer require getpinga/pinga```

3. Wait for the installation to complete.

That's it! You can now start using the Pinga framework to build your web application. For more information on how to use Pinga, refer to the documentation and examples provided with the framework.
