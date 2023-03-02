# Pinga PHP framework

[![StandWithUkraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/badges/StandWithUkraine.svg)](https://github.com/vshymanskyy/StandWithUkraine/blob/main/docs/README.md)

[![SWUbanner](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner2-direct.svg)](https://github.com/vshymanskyy/StandWithUkraine/blob/main/docs/README.md)

The Pinga PHP framework offers a collection of tested third-party tools for building robust and scalable web applications or APIs. Designed for streamlined and efficient development, it allows for a focus on project functionality and user experience. Rigorously tested for quality and reliability, this framework is suitable for simple to complex projects.

## Initial set of components

***Router:*** [phpleague/route](https://packagist.org/packages/league/route)

***Auth:*** [pinga/auth](https://packagist.org/packages/pinga/auth)

***User Audit:*** [utopia-php/audit](https://packagist.org/packages/utopia-php/audit)

***DB:*** [pinga/db](https://packagist.org/packages/pinga/db). **Swoole:** [scrawler-labs/arca-orm](https://packagist.org/packages/scrawler/arca) or Swoole\Coroutine\MySQL|PostgreSQL. Swow: PDO

***DB Optimizer:*** [guanguans/soar-php](https://packagist.org/packages/guanguans/soar-php)

***DB Replication:*** native DB or [gemini/php-mysql-replication](https://packagist.org/packages/gemini/php-mysql-replication)

***DB Audit:*** [setbased/php-audit](https://packagist.org/packages/setbased/php-audit)

***DB Pagination:*** [ozdemir/datatables](https://packagist.org/packages/ozdemir/datatables) | [lazymofo/datagrid](https://github.com/lazymofo/datagrid)

***Templates:*** [league/plates](https://packagist.org/packages/league/plates)

Logging: monolog/monolog|WyriHaximus/php-monolog-formatted-psr-handler

DI: PHP-DI or pimple/pimple

PSR-7/17: nyholm/psr7

Session: pinga/cookie | compwright/php-session

Cookies: pinga/cookie | dflydev/dflydev-(encrypted-)fig-cookies

Cache: kodus/file-cache | matthiasmullie/scrapbook | scrawler/swoole-cache | phoole/cache

Translation: utopia-php/locale or delight-im/i18n

Payment: league/omnipay | utopia-php/pay

Messaging: utopia-php/messaging

Dispatcher: leocavalcante/dispatch

Storage: league/flysystem

Data validation: wixel/gump

Configuration files: vlucas/phpdotenv

2FA: robthree/twofactorauth

Load balancing: gonzie/pdoload

Benchmark: eypsilon/MycroBench or phpbench/phpbench

Coding Standards: PHP CS | PHP Stan

**Backup:** [PHPBU](https://phpbu.de/) | [Restic](https://restic.net/)

**Tests:** [Pest](https://pestphp.com/)

**SSL Management:** [Acme PHP](https://acmephp.github.io/)

**Menu:** [spatie/menu](https://packagist.org/packages/spatie/menu)

**Forms:** [jarzon/form](https://packagist.org/packages/jarzon/form)

**KYC:** [Ballerine](https://github.com/ballerine-io/ballerine)

**Admin UI:** [Tabler](https://github.com/tabler/tabler)

Machine Learning: MindsDB

### Installation

1. Use installDB.php script to install the database.

2. Move env-sample to .env and configure.

3. Download Tabler's dist folder into /public/assets

### Details

Based on hezecom/slim-starter
