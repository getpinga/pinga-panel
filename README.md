# Pinga PHP framework

[![StandWithUkraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/badges/StandWithUkraine.svg)](https://github.com/vshymanskyy/StandWithUkraine/blob/main/docs/README.md)

[![SWUbanner](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner2-direct.svg)](https://github.com/vshymanskyy/StandWithUkraine/blob/main/docs/README.md)

The Pinga PHP framework offers a collection of tested third-party tools for building robust and scalable web applications or APIs. Designed for streamlined and efficient development, it allows for a focus on project functionality and user experience. Rigorously tested for quality and reliability, this framework is suitable for simple to complex projects.

## Our set of components

| Category | Package | Integrated | Alternative | Integrated |
| --- | --- | --- | --- | --- |
| Routing | [slim/slim](https://packagist.org/packages/slim/slim) | ✅ | [phpleague/route](https://packagist.org/packages/league/route) | ❌ |
| Authentication | [pinga/auth](https://packagist.org/packages/pinga/auth) | ✅ | N/A | ❌ |
| Storage | [league/flysystem](https://packagist.org/packages/league/flysystem) | ❌ | N/A | ❌ |
| Database | [pinga/db](https://packagist.org/packages/pinga/db) | ✅ | Swoole\Coroutine\MySQL/PostgreSQL<br>[scrawler/arca](https://packagist.org/packages/scrawler/arca) (Swoole)<br>Swow (PDO) | ❌ | ❌ |
| DI | [php-di/php-di](https://packagist.org/packages/php-di/php-di) | ✅ | N/A | ❌ |
| PSR-7/17 | [nyholm/psr7](https://packagist.org/packages/nyholm/psr7) | ✅ | N/A | ❌ |
| Logging | [monolog/monolog](https://packagist.org/packages/monolog/monolog)<br>[wyrihaximus/monolog-formatted-psr-handler](https://packagist.org/packages/wyrihaximus/monolog-formatted-psr-handler) | ✅ | N/A | ❌ |
| Templates | [twig/twig](https://packagist.org/packages/twig/twig) | ✅ | [league/plates](https://packagist.org/packages/league/plates) | ❌ |
| Menu | [twig/twig](https://packagist.org/packages/twig/twig) | ✅ | [spatie/menu](https://packagist.org/packages/spatie/menu) | ❌ |
| Forms | [jarzon/form](https://packagist.org/packages/jarzon/form) | ❌ | ❌ | ❌ |
| Data validation | [wixel/gump](https://packagist.org/packages/wixel/gump) | ❌ | ❌ | ❌ |
| Configuration files | [vlucas/phpdotenv](https://packagist.org/packages/vlucas/phpdotenv) | ✅ | N/A | ❌ |
| Cookies | [pinga/cookie](https://packagist.org/packages/pinga/cookie) | ✅ | [dflydev/dflydev-fig-cookies](https://packagist.org/packages/dflydev/dflydev-fig-cookies) | ❌ |
| Session | [pinga/cookie](https://packagist.org/packages/pinga/cookie) | ✅ | [compwright/php-session](compwright/php-session) | ❌ |
| Cache | [kodus/file-cache](https://packagist.org/packages/kodus/file-cache)<br>[matthiasmullie/scrapbook](https://packagist.org/packages/matthiasmullie/scrapbook) | ❌ | [scrawler/swoole-cache](https://packagist.org/packages/scrawler/swoole-cache)<br>[phoole/cache](https://packagist.org/packages/phoole/cache) | ❌ |
| 2FA | [robthree/twofactorauth](https://packagist.org/packages/robthree/twofactorauth) | ❌ | N/A | ❌ |
| SSL Management | [Acme PHP](https://acmephp.github.io/) | ❌ | ❌ | ❌ |
| Load balancing | [gonzie/pdoload](https://packagist.org/packages/gonzie/pdoload) | ❌ | N/A | ❌ |
| Backup | [PHPBU](https://phpbu.de/) | ❌ | [Restic](https://restic.net/) | ❌ |
| Payment | [league/omnipay](https://packagist.org/packages/league/omnipay) | ❌ | [utopia-php/pay](https://packagist.org/packages/utopia-php/pay) | ❌ |
| Messaging | [utopia-php/messaging](https://packagist.org/packages/utopia-php/messaging) | ❌ | N/A | ❌ |
| User Audit | [utopia-php/audit](https://packagist.org/packages/utopia-php/audit) | ❌ | N/A | ❌ |
| DB Replication | Native DB Tools | ❌ | [gemini/php-mysql-replication](https://packagist.org/packages/gemini/php-mysql-replication) | ❌ |
| DB Optimization | [guanguans/soar-php](https://packagist.org/packages/guanguans/soar-php) | ❌ | N/A | ❌ |
| DB Pagination | [ozdemir/datatables](https://packagist.org/packages/ozdemir/datatables) | ❌ | [lazymofo/datagrid](https://github.com/lazymofo/datagrid) | ❌ |
| DB Audit | [setbased/php-audit](https://packagist.org/packages/setbased/php-audit) | ❌ | N/A | ❌ |
| KYC | [Ballerine](https://github.com/ballerine-io/ballerine) | ❌ | N/A | ❌ |
| Admin UI | [Tabler](https://github.com/tabler/tabler) | ✅ | ❌ | ❌ |
| Machine Learning | [MindsDB](https://mindsdb.com/) | ❌ | ❌ | ❌ |
| Benchmark | [eypsilon/MycroBench](https://packagist.org/packages/eypsilon/MycroBench) | ❌ | [phpbench/phpbench](https://packagist.org/packages/phpbench/phpbench) | ❌ |
| Coding Standards | PHP CS | PHP Stan | ❌ | ❌ |
| Tests | [Pest](https://pestphp.com/) | ❌ | N/A | ❌ |
| Translation | [utopia-php/locale](https://packagist.org/packages/utopia-php/locale) | ❌ | [delight-im/i18n](https://packagist.org/packages/delight-im/i18n) | ❌ |
| PSR-14 Event Dispatcher | [leocavalcante/dispatch](https://packagist.org/packages/leocavalcante/dispatch) | ❌ | N/A | ❌ |

### Installation

1. Use installDB.php script to install the database.

2. Move env-sample to .env and configure.

### Details

Based on Slim 4 and hezecom/slim-starter
