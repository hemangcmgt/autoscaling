<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '2.4.6-p1',
    'version' => '2.4.6.0-patch1',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'magento/project-community-edition',
  ),
  'versions' => 
  array (
    '2tvenom/cborencode' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '42aedccb861d01fc0554782348cc08f8ebf22332',
    ),
    'adobe-commerce/adobe-ims-metapackage' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'allure-framework/allure-codeception' => 
    array (
      'pretty_version' => 'v2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd28f6ba7139406974b977e5611bc65b59c492a55',
    ),
    'allure-framework/allure-php-commons' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5d7ed5ab510339652163ca1473eb499d4b7ec488',
    ),
    'allure-framework/allure-phpunit' => 
    array (
      'pretty_version' => 'v2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a08e0092cdddfc8ead1953cf5bddf80b48595109',
    ),
    'astock/stock-api-libphp' => 
    array (
      'pretty_version' => '1.1.5',
      'version' => '1.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9e6460f43dbb2dbc6e442e017edb5427884d3bf',
    ),
    'aws/aws-crt-php' => 
    array (
      'pretty_version' => 'v1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1926277fc71d253dfa820271ac5987bdb193ccf5',
    ),
    'aws/aws-sdk-php' => 
    array (
      'pretty_version' => '3.275.9',
      'version' => '3.275.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '1ef08ba5109591751257ad1eaa52c2e2fbd53cf1',
    ),
    'bacon/bacon-qr-code' => 
    array (
      'pretty_version' => '2.0.8',
      'version' => '2.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '8674e51bb65af933a5ffaf1c308a660387c35c22',
    ),
    'beberlei/assert' => 
    array (
      'pretty_version' => 'v3.3.2',
      'version' => '3.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb70015c04be1baee6f5f5c953703347c0ac1655',
    ),
    'behat/gherkin' => 
    array (
      'pretty_version' => 'v4.9.0',
      'version' => '4.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0bc8d1e30e96183e4f36db9dc79caead300beff4',
    ),
    'blueimp/jquery-file-upload' => 
    array (
      'replaced' => 
      array (
        0 => '5.6.14',
      ),
    ),
    'braintree/braintree_php' => 
    array (
      'pretty_version' => '6.11.1',
      'version' => '6.11.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2cd8fe23b4e3bc96f84ec6b95d95330aec5757ec',
    ),
    'brick/math' => 
    array (
      'pretty_version' => '0.11.0',
      'version' => '0.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
    ),
    'brick/varexporter' => 
    array (
      'pretty_version' => '0.3.8',
      'version' => '0.3.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b5853edea6204ff8fa10633c3a4cccc4058410ed',
    ),
    'christian-riesen/base32' => 
    array (
      'pretty_version' => '1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2e82dab3baa008e24a505649b0d583c31d31e894',
    ),
    'codeception/codeception' => 
    array (
      'pretty_version' => '5.0.10',
      'version' => '5.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ed4af7fd4103cdd035916fbb8f35124edd2d018b',
    ),
    'codeception/lib-asserts' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b8c7dff552249e560879c682ba44a4b963af91bc',
    ),
    'codeception/lib-web' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f488ff9bc08c8985d43796db28da0bd18813bcae',
    ),
    'codeception/module-asserts' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1b6b150b30586c3614e7e5761b31834ed7968603',
    ),
    'codeception/module-sequence' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9738e2eb06035a0975171a0aa3fce00d284b4dfb',
    ),
    'codeception/module-webdriver' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '59b6fe426dddbe889c23593f8698c52e08bba6e9',
    ),
    'codeception/phpunit-wrapper' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'codeception/stub' => 
    array (
      'pretty_version' => '4.1.0',
      'version' => '4.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '58751aed08a68ae960a952fd3fe74ee9a56cdb1b',
    ),
    'colinmollenhour/cache-backend-file' => 
    array (
      'pretty_version' => 'v1.4.7',
      'version' => '1.4.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4b5062f6d2a78bdf6885b9b1e3a95dc4039d4fd',
    ),
    'colinmollenhour/cache-backend-redis' => 
    array (
      'pretty_version' => '1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3fc3e9149097f67cded1c425088e37d7fa8083ed',
    ),
    'colinmollenhour/credis' => 
    array (
      'pretty_version' => 'v1.15.0',
      'version' => '1.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '28810439de1d9597b7ba11794ed9479fb6f3de7c',
    ),
    'colinmollenhour/php-redis-session-abstract' => 
    array (
      'pretty_version' => 'v1.5.1',
      'version' => '1.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3df52a7247a97fb4ec5bddfb731d1a6cddb5ef99',
    ),
    'components/jquery' => 
    array (
      'replaced' => 
      array (
        0 => '1.11.0',
      ),
    ),
    'components/jqueryui' => 
    array (
      'replaced' => 
      array (
        0 => '1.10.4',
      ),
    ),
    'composer/ca-bundle' => 
    array (
      'pretty_version' => '1.3.6',
      'version' => '1.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '90d087e988ff194065333d16bc5cf649872d9cdb',
    ),
    'composer/class-map-generator' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '953cc4ea32e0c31f2185549c7d216d7921f03da9',
    ),
    'composer/composer' => 
    array (
      'pretty_version' => '2.5.8',
      'version' => '2.5.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '4c516146167d1392c8b9b269bb7c24115d262164',
    ),
    'composer/metadata-minifier' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c549d23829536f0d0e984aaabbf02af91f443207',
    ),
    'composer/pcre' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4bff79ddd77851fe3cdd11616ed3f92841ba5bd2',
    ),
    'composer/semver' => 
    array (
      'pretty_version' => '3.3.2',
      'version' => '3.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3953f23262f2bff1919fc82183ad9acb13ff62c9',
    ),
    'composer/spdx-licenses' => 
    array (
      'pretty_version' => '1.5.7',
      'version' => '1.5.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c848241796da2abf65837d51dce1fae55a960149',
    ),
    'composer/xdebug-handler' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ced299686f41dce890debac69273b47ffe98a40c',
    ),
    'container-interop/container-interop' => 
    array (
      'replaced' => 
      array (
        0 => '^1.2.0',
      ),
    ),
    'csharpru/vault-php' => 
    array (
      'pretty_version' => '4.3.1',
      'version' => '4.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '918bfffe85d3b290e1bf667b5f14e521fdc0063c',
    ),
    'dasprid/enum' => 
    array (
      'pretty_version' => '1.0.4',
      'version' => '1.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e6b6ea76eabbf19ea2bf5b67b98e1860474012f',
    ),
    'dealerdirect/phpcodesniffer-composer-installer' => 
    array (
      'pretty_version' => 'v0.7.2',
      'version' => '0.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1c968e542d8843d7cd71de3c5c9c3ff3ad71a1db',
    ),
    'dg/bypass-finals' => 
    array (
      'pretty_version' => 'v1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4c424c3ed359220fce044f35cdf9f48b0089b2ca',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.14.3',
      'version' => '1.14.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb0d71a7393298a7b232cbf4c8b1f73f3ec3d5af',
    ),
    'doctrine/deprecations' => 
    array (
      'pretty_version' => 'v1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '612a3ee5ab0d5dd97b7cf3874a6efe24325efac3',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6222283fa3f4ac679f8b9ced9a4e23f163e80d0',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '39ab8fcf5a51ce4b85ca97c7a7d033eb12831124',
    ),
    'elasticsearch/elasticsearch' => 
    array (
      'pretty_version' => 'v7.17.2',
      'version' => '7.17.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '2d302233f2bb0926812d82823bb820d405e130fc',
    ),
    'endroid/qr-code' => 
    array (
      'pretty_version' => '4.8.2',
      'version' => '4.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '2436c2333a3931c95e2b96eb82f16f53143d6bba',
    ),
    'ezimuel/guzzlestreams' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b4b5a025dfee70d6cd34c780e07330eb93d5b997',
    ),
    'ezimuel/ringphp' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7887fc8488013065f72f977dcb281994f5fde9f4',
    ),
    'ezyang/htmlpurifier' => 
    array (
      'pretty_version' => 'v4.16.0',
      'version' => '4.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '523407fb06eb9e5f3d59889b3978d5bfe94299c8',
    ),
    'facebook/webdriver' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'friendsofphp/php-cs-fixer' => 
    array (
      'pretty_version' => 'v3.14.2',
      'version' => '3.14.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '14f0541651841b63640e7aafad041ad55dc7aa88',
    ),
    'google/recaptcha' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd59a801e98a4e9174814a6d71bbc268dff1202df',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.7.0',
      'version' => '7.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb7566caccf22d74d1ab270de3551f72a58399f5',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.5.3',
      'version' => '1.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '67ab6e18aaa14d753cc148911d273f6e6cb6721e',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b635f279edd83fc275f822a1188157ffea568ff6',
    ),
    'guzzlehttp/ringphp' => 
    array (
      'replaced' => 
      array (
        0 => '1.2.2',
      ),
    ),
    'justinrainbow/json-schema' => 
    array (
      'pretty_version' => '5.2.12',
      'version' => '5.2.12.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad87d5a5ca981228e0e205c2bc7dfb8e24559b60',
    ),
    'laminas/laminas-captcha' => 
    array (
      'pretty_version' => '2.16.0',
      'version' => '2.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8623619b1b634ba3672f91a9fb610deffec9c932',
    ),
    'laminas/laminas-code' => 
    array (
      'pretty_version' => '4.11.0',
      'version' => '4.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '169123b3ede20a9193480c53de2a8194f8c073ec',
    ),
    'laminas/laminas-config' => 
    array (
      'pretty_version' => '3.8.0',
      'version' => '3.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '46baad58d0b12cf98539e04334eff40a1fdfb9a0',
    ),
    'laminas/laminas-crypt' => 
    array (
      'pretty_version' => '3.10.0',
      'version' => '3.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '588375caf4d505fee90d1449e9714c912ceb5051',
    ),
    'laminas/laminas-db' => 
    array (
      'pretty_version' => '2.18.0',
      'version' => '2.18.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4df7a3f7ffe268e8683306fcec125c269408b295',
    ),
    'laminas/laminas-di' => 
    array (
      'pretty_version' => '3.12.0',
      'version' => '3.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8d4074b5f51b747a6e4e055995f1bdf2a825d5a6',
    ),
    'laminas/laminas-diactoros' => 
    array (
      'pretty_version' => '2.25.2',
      'version' => '2.25.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9f3f4bf5b99c9538b6f1dbcc20f6fec357914f9e',
    ),
    'laminas/laminas-escaper' => 
    array (
      'pretty_version' => '2.12.0',
      'version' => '2.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ee7a4c37bf3d0e8c03635d5bddb5bb3184ead490',
    ),
    'laminas/laminas-eventmanager' => 
    array (
      'pretty_version' => '3.10.0',
      'version' => '3.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a5114ab2d3fa4424faa46a2fb0a4e49a61f6eba',
    ),
    'laminas/laminas-feed' => 
    array (
      'pretty_version' => '2.20.0',
      'version' => '2.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '508ebef6e622f2f2ce3dd0559739ffd0dfa3b938',
    ),
    'laminas/laminas-file' => 
    array (
      'pretty_version' => '2.12.0',
      'version' => '2.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9e8ff3a6d7ccaad0865581ef672a7c48260b65d9',
    ),
    'laminas/laminas-filter' => 
    array (
      'pretty_version' => '2.32.0',
      'version' => '2.32.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b7e6b2b26a92412c38336ee3089251164edf141',
    ),
    'laminas/laminas-http' => 
    array (
      'pretty_version' => '2.18.0',
      'version' => '2.18.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '76de9008f889bc7088f85a41d0d2b06c2b59c53d',
    ),
    'laminas/laminas-i18n' => 
    array (
      'pretty_version' => '2.23.0',
      'version' => '2.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bb844a1141bb6e65d8889f5a08383f761a8270b2',
    ),
    'laminas/laminas-json' => 
    array (
      'pretty_version' => '3.5.0',
      'version' => '3.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a8a1d7bf2d05dd6c1fbd7c0868d3848cf2b57ec',
    ),
    'laminas/laminas-loader' => 
    array (
      'pretty_version' => '2.9.0',
      'version' => '2.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '51ed9c3fa42d1098a9997571730c0cbf42d078d3',
    ),
    'laminas/laminas-mail' => 
    array (
      'pretty_version' => '2.23.0',
      'version' => '2.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3ae64e7cfd505552fbee2e556746c345ccc33cf7',
    ),
    'laminas/laminas-math' => 
    array (
      'pretty_version' => '3.6.0',
      'version' => '3.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5770fc632a3614f5526632a8b70f41b65130460e',
    ),
    'laminas/laminas-mime' => 
    array (
      'pretty_version' => '2.11.0',
      'version' => '2.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '60ec04b755821c79c1987ce291b44e69f2c0831f',
    ),
    'laminas/laminas-modulemanager' => 
    array (
      'pretty_version' => '2.14.0',
      'version' => '2.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb0a2c34423f7d3321dd7c42dc5fc4db905a99ac',
    ),
    'laminas/laminas-mvc' => 
    array (
      'pretty_version' => '3.6.1',
      'version' => '3.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f12e801c31c04a4b35017354ff84070f5573879f',
    ),
    'laminas/laminas-oauth' => 
    array (
      'pretty_version' => '2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '882daa922f3d4f3c1a4282d5c0afeddabefaadb9',
    ),
    'laminas/laminas-permissions-acl' => 
    array (
      'pretty_version' => '2.15.0',
      'version' => '2.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ea9f6643a624b3e847f7d637eb828498654f492e',
    ),
    'laminas/laminas-recaptcha' => 
    array (
      'pretty_version' => '3.6.0',
      'version' => '3.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ead14136a0ded44d1a72f4885df0f3333065d919',
    ),
    'laminas/laminas-router' => 
    array (
      'pretty_version' => '3.11.1',
      'version' => '3.11.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3512c28cb4ffd64a62bc9e8b685a50a6547b0a11',
    ),
    'laminas/laminas-server' => 
    array (
      'pretty_version' => '2.15.0',
      'version' => '2.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7f4862913ab95ea5decd08e6c3717edbb398fde8',
    ),
    'laminas/laminas-servicemanager' => 
    array (
      'pretty_version' => '3.21.0',
      'version' => '3.21.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '625f2aa3bc6dd02688b2da5155b3a69870812bda',
    ),
    'laminas/laminas-session' => 
    array (
      'pretty_version' => '2.16.0',
      'version' => '2.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9c845a0361625d5775cad6f043716196201ad41f',
    ),
    'laminas/laminas-soap' => 
    array (
      'pretty_version' => '2.12.0',
      'version' => '2.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '127de3d876b992a6327c274b15df6de26d7aa712',
    ),
    'laminas/laminas-stdlib' => 
    array (
      'pretty_version' => '3.17.0',
      'version' => '3.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd35c868075bad80b6718959740913e178eb4274',
    ),
    'laminas/laminas-text' => 
    array (
      'pretty_version' => '2.10.0',
      'version' => '2.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '40f7acdb284d41553d32db811e704d6e15e415b4',
    ),
    'laminas/laminas-uri' => 
    array (
      'pretty_version' => '2.10.0',
      'version' => '2.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '663b050294945c7345cc3a61f3ca661d5f9e1f80',
    ),
    'laminas/laminas-validator' => 
    array (
      'pretty_version' => '2.35.0',
      'version' => '2.35.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a4a30f6c526a518ba9af50e037c2f97cb595958',
    ),
    'laminas/laminas-view' => 
    array (
      'pretty_version' => '2.28.0',
      'version' => '2.28.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c43dd9f89febb79a76cfa01c5cb2b90836d7d748',
    ),
    'laminas/laminas-zendframework-bridge' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5ef52e26392777a26dbb8f20fe24f91b406459f6',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8aaffb653c5777781b0f7f69a5d937baf7ab6cdb',
    ),
    'league/flysystem-aws-s3-v3' => 
    array (
      'pretty_version' => '2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2ae435f7177fd5d3afc0090bc7f849093d8361e8',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
    ),
    'lusitanian/oauth' => 
    array (
      'pretty_version' => 'v0.8.11',
      'version' => '0.8.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc11a53db4b66da555a6a11fce294f574a8374f9',
    ),
    'magento-hackathon/magento-composer-installer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/adobe-stock-integration' => 
    array (
      'pretty_version' => '2.1.5-p1',
      'version' => '2.1.5.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/composer' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/composer-dependency-version-audit-plugin' => 
    array (
      'pretty_version' => '0.1.5',
      'version' => '0.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/composer-root-update-plugin' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/framework' => 
    array (
      'pretty_version' => '103.0.6-p1',
      'version' => '103.0.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/framework-amqp' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/framework-bulk' => 
    array (
      'pretty_version' => '101.0.2',
      'version' => '101.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/framework-message-queue' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/google-shopping-ads' => 
    array (
      'pretty_version' => '4.0.1',
      'version' => '4.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/inventory-composer-installer' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/inventory-metapackage' => 
    array (
      'pretty_version' => '1.2.6-p1',
      'version' => '1.2.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-de_de' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-en_us' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-es_es' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-fr_fr' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-nl_nl' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-pt_br' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-zh_hans_cn' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/magento-coding-standard' => 
    array (
      'pretty_version' => '31',
      'version' => '31.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1172711ea1947d0258adae8d8e0a72669f1c2d99',
    ),
    'magento/magento-composer-installer' => 
    array (
      'pretty_version' => '0.4.0',
      'version' => '0.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '85496104b065f5a7b8d824f37017c53dbbb93a44',
    ),
    'magento/magento2-base' => 
    array (
      'pretty_version' => '2.4.6-p1',
      'version' => '2.4.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/magento2-functional-testing-framework' => 
    array (
      'pretty_version' => '4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e1af7cfaacff59f1699b1823090abc0995291935',
    ),
    'magento/module-admin-adobe-ims' => 
    array (
      'pretty_version' => '100.5.0',
      'version' => '100.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-admin-adobe-ims-two-factor-auth' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-admin-analytics' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-admin-notification' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-adobe-ims' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-adobe-ims-api' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-adobe-stock-admin-ui' => 
    array (
      'pretty_version' => '1.3.3',
      'version' => '1.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-adobe-stock-asset' => 
    array (
      'pretty_version' => '1.3.2',
      'version' => '1.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-adobe-stock-asset-api' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-adobe-stock-client' => 
    array (
      'pretty_version' => '1.3.3',
      'version' => '1.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-adobe-stock-client-api' => 
    array (
      'pretty_version' => '2.1.3',
      'version' => '2.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-adobe-stock-image' => 
    array (
      'pretty_version' => '1.3.4',
      'version' => '1.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-adobe-stock-image-admin-ui' => 
    array (
      'pretty_version' => '1.3.4',
      'version' => '1.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-adobe-stock-image-api' => 
    array (
      'pretty_version' => '1.3.2',
      'version' => '1.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-advanced-pricing-import-export' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-advanced-search' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-amqp' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-analytics' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-asynchronous-operations' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-authorization' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-aws-s3' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-aws-s3-page-builder' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-backend' => 
    array (
      'pretty_version' => '102.0.6',
      'version' => '102.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-backup' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-bundle' => 
    array (
      'pretty_version' => '101.0.6-p1',
      'version' => '101.0.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-bundle-graph-ql' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-bundle-import-export' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-bundle-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cache-invalidate' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-captcha' => 
    array (
      'pretty_version' => '100.4.6-p1',
      'version' => '100.4.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cardinal-commerce' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog' => 
    array (
      'pretty_version' => '104.0.6-p1',
      'version' => '104.0.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-analytics' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-cms-graph-ql' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-customer-graph-ql' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-graph-ql' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-import-export' => 
    array (
      'pretty_version' => '101.1.6-p1',
      'version' => '101.1.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-inventory' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-inventory-graph-ql' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-page-builder-analytics' => 
    array (
      'pretty_version' => '1.6.3',
      'version' => '1.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-rule' => 
    array (
      'pretty_version' => '101.2.6',
      'version' => '101.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-rule-configurable' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-rule-graph-ql' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-rule-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-search' => 
    array (
      'pretty_version' => '102.0.6',
      'version' => '102.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-url-rewrite' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-url-rewrite-graph-ql' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-widget' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-checkout' => 
    array (
      'pretty_version' => '100.4.6-p1',
      'version' => '100.4.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-checkout-agreements' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-checkout-agreements-graph-ql' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cms' => 
    array (
      'pretty_version' => '104.0.6',
      'version' => '104.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cms-graph-ql' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cms-page-builder-analytics' => 
    array (
      'pretty_version' => '1.6.3',
      'version' => '1.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cms-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cms-url-rewrite' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cms-url-rewrite-graph-ql' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-compare-list-graph-ql' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-config' => 
    array (
      'pretty_version' => '101.2.6',
      'version' => '101.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-configurable-import-export' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-configurable-product' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-configurable-product-graph-ql' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-configurable-product-sales' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-configurable-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-contact' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cookie' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cron' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-csp' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-currency-symbol' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-customer' => 
    array (
      'pretty_version' => '103.0.6-p1',
      'version' => '103.0.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-customer-analytics' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-customer-downloadable-graph-ql' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-customer-graph-ql' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-customer-import-export' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-customer-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-deploy' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-developer' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-dhl' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-directory' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-directory-graph-ql' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-downloadable' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-downloadable-graph-ql' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-downloadable-import-export' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-downloadable-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-eav' => 
    array (
      'pretty_version' => '102.1.6',
      'version' => '102.1.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-eav-graph-ql' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-elasticsearch' => 
    array (
      'pretty_version' => '101.0.6',
      'version' => '101.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-elasticsearch-7' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-email' => 
    array (
      'pretty_version' => '101.1.6-p1',
      'version' => '101.1.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-encryption-key' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-fedex' => 
    array (
      'pretty_version' => '100.4.4-p1',
      'version' => '100.4.4.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-gift-message' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-gift-message-graph-ql' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-google-adwords' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-google-analytics' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-google-gtag' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-google-optimizer' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-graph-ql' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-graph-ql-cache' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-grouped-catalog-inventory' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-grouped-import-export' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-grouped-product' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-grouped-product-graph-ql' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-grouped-product-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-import-export' => 
    array (
      'pretty_version' => '101.0.6',
      'version' => '101.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-indexer' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-instant-purchase' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-integration' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-admin-ui' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-advanced-checkout' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-api' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-bundle-import-export' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-bundle-product' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-bundle-product-admin-ui' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-bundle-product-indexer' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-cache' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-catalog' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-catalog-admin-ui' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-catalog-api' => 
    array (
      'pretty_version' => '1.3.4',
      'version' => '1.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-catalog-frontend-ui' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-catalog-search' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-catalog-search-bundle-product' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-catalog-search-configurable-product' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-configurable-product' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-configurable-product-admin-ui' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-configurable-product-frontend-ui' => 
    array (
      'pretty_version' => '1.0.4',
      'version' => '1.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-configurable-product-indexer' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-configuration' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-configuration-api' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-distance-based-source-selection' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-distance-based-source-selection-admin-ui' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-distance-based-source-selection-api' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-elasticsearch' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-export-stock' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-export-stock-api' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-graph-ql' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-grouped-product' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-grouped-product-admin-ui' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-grouped-product-indexer' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-import-export' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-admin-ui' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-api' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-frontend' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-graph-ql' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-multishipping' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-quote' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-quote-graph-ql' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-sales' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-sales-admin-ui' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-sales-api' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-shipping' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-shipping-admin-ui' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-shipping-api' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-in-store-pickup-webapi-extension' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-indexer' => 
    array (
      'pretty_version' => '2.2.1',
      'version' => '2.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-low-quantity-notification' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-low-quantity-notification-admin-ui' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-low-quantity-notification-api' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-multi-dimensional-indexer-api' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-product-alert' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-quote-graph-ql' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-requisition-list' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-reservation-cli' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-reservations' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-reservations-api' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-sales' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-sales-admin-ui' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-sales-api' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-sales-async-order' => 
    array (
      'pretty_version' => '100.2.0',
      'version' => '100.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-sales-frontend-ui' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-setup-fixture-generator' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-shipping' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-shipping-admin-ui' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-source-deduction-api' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-source-selection' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-source-selection-api' => 
    array (
      'pretty_version' => '1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-swatches-frontend-ui' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-visual-merchandiser' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory-wishlist' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-jwt-framework-adapter' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-jwt-user-token' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-layered-navigation' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-admin-ui' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-api' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-assistance' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-frontend-ui' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-graph-ql' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-log' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-page-cache' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-quote' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-sales' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-marketplace' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-content' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-content-api' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-content-catalog' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-content-cms' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-content-synchronization' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-content-synchronization-api' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-content-synchronization-catalog' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-content-synchronization-cms' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-api' => 
    array (
      'pretty_version' => '101.0.5',
      'version' => '101.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-catalog' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-catalog-integration' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-catalog-ui' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-cms-ui' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-integration' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-metadata' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-metadata-api' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-renditions' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-renditions-api' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-synchronization' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-synchronization-api' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-synchronization-metadata' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-ui' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-ui-api' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-storage' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-message-queue' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-msrp' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-msrp-configurable-product' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-msrp-grouped-product' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-msrp-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-multishipping' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-mysql-mq' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-new-relic-reporting' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-newsletter' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-newsletter-graph-ql' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-offline-payments' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-offline-shipping' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-offline-shipping-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-open-search' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-page-builder' => 
    array (
      'pretty_version' => '2.2.4',
      'version' => '2.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-page-builder-admin-analytics' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-page-builder-analytics' => 
    array (
      'pretty_version' => '1.6.3',
      'version' => '1.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-page-cache' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-payment' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-payment-graph-ql' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-paypal' => 
    array (
      'pretty_version' => '101.0.6',
      'version' => '101.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-paypal-captcha' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-paypal-graph-ql' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-persistent' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-product-alert' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-product-links-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-product-video' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-quote' => 
    array (
      'pretty_version' => '101.2.6-p1',
      'version' => '101.2.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-quote-analytics' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-quote-bundle-options' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-quote-configurable-options' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-quote-downloadable-links' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-quote-graph-ql' => 
    array (
      'pretty_version' => '100.4.6-p1',
      'version' => '100.4.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-admin-ui' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-checkout' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-checkout-sales-rule' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-contact' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-customer' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-frontend-ui' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-migration' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-newsletter' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-paypal' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-review' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-send-friend' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-store-pickup' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-ui' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-user' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-validation' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-validation-api' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-version-2-checkbox' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-version-2-invisible' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-version-3-invisible' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-webapi-api' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-webapi-graph-ql' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-webapi-rest' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-webapi-ui' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-related-product-graph-ql' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-release-notification' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-remote-storage' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-reports' => 
    array (
      'pretty_version' => '100.4.6-p1',
      'version' => '100.4.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-require-js' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-review' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-review-analytics' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-review-graph-ql' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-review-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-robots' => 
    array (
      'pretty_version' => '101.1.2',
      'version' => '101.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-rss' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-rule' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales' => 
    array (
      'pretty_version' => '103.0.6-p1',
      'version' => '103.0.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales-analytics' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales-graph-ql' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales-inventory' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales-rule' => 
    array (
      'pretty_version' => '101.2.6',
      'version' => '101.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales-rule-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales-sequence' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sample-data' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-search' => 
    array (
      'pretty_version' => '101.1.6',
      'version' => '101.1.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-security' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-securitytxt' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-send-friend' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-send-friend-graph-ql' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-shipping' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sitemap' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-store' => 
    array (
      'pretty_version' => '101.1.6',
      'version' => '101.1.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-store-graph-ql' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-swagger' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-swagger-webapi' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-swagger-webapi-async' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-swatches' => 
    array (
      'pretty_version' => '100.4.6-p1',
      'version' => '100.4.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-swatches-graph-ql' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-swatches-layered-navigation' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-swatches-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-tax' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-tax-graph-ql' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-tax-import-export' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-tax-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-theme' => 
    array (
      'pretty_version' => '101.1.6',
      'version' => '101.1.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-theme-graph-ql' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-theme-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-translation' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-two-factor-auth' => 
    array (
      'pretty_version' => '1.1.5',
      'version' => '1.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-ui' => 
    array (
      'pretty_version' => '101.2.6',
      'version' => '101.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-ups' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-url-rewrite' => 
    array (
      'pretty_version' => '102.0.5',
      'version' => '102.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-url-rewrite-graph-ql' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-user' => 
    array (
      'pretty_version' => '101.2.6',
      'version' => '101.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-usps' => 
    array (
      'pretty_version' => '100.4.5-p1',
      'version' => '100.4.5.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-variable' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-vault' => 
    array (
      'pretty_version' => '101.2.6',
      'version' => '101.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-vault-graph-ql' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-version' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-webapi' => 
    array (
      'pretty_version' => '100.4.5',
      'version' => '100.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-webapi-async' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-webapi-security' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-weee' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-weee-graph-ql' => 
    array (
      'pretty_version' => '100.4.3',
      'version' => '100.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-widget' => 
    array (
      'pretty_version' => '101.2.6',
      'version' => '101.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-widget-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-wishlist' => 
    array (
      'pretty_version' => '101.2.6',
      'version' => '101.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-wishlist-analytics' => 
    array (
      'pretty_version' => '100.4.4',
      'version' => '100.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-wishlist-graph-ql' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-wishlist-sample-data' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/page-builder' => 
    array (
      'pretty_version' => '1.7.3-p1',
      'version' => '1.7.3.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/product-community-edition' => 
    array (
      'pretty_version' => '2.4.6-p1',
      'version' => '2.4.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/project-community-edition' => 
    array (
      'pretty_version' => '2.4.6-p1',
      'version' => '2.4.6.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/sample-data-media' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/security-package' => 
    array (
      'pretty_version' => '1.1.5-p1',
      'version' => '1.1.5.0-patch1',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/theme-adminhtml-backend' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/theme-frontend-blank' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/theme-frontend-luma' => 
    array (
      'pretty_version' => '100.4.6',
      'version' => '100.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/zend-cache' => 
    array (
      'pretty_version' => '1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '75e6a43f198b17ea4b0c3f46b700b7a757eba84d',
    ),
    'magento/zend-db' => 
    array (
      'pretty_version' => '1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'def36bc00e49cf0056a59192e52f2e83077b933c',
    ),
    'magento/zend-exception' => 
    array (
      'pretty_version' => '1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5219ba961e36dc1a713da3ad4f1594a87c71f758',
    ),
    'magento/zend-loader' => 
    array (
      'pretty_version' => '1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '200786c8009d668917a42250ed72ebf8c4c958d2',
    ),
    'magento/zend-log' => 
    array (
      'pretty_version' => '1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c03b9febe92c501288cf441d41b49cd01f1e8a50',
    ),
    'magento/zend-memory' => 
    array (
      'pretty_version' => '1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0d48804c6718cc9f15e5c356e6192fd6fff8932b',
    ),
    'magento/zend-pdf' => 
    array (
      'pretty_version' => '1.16.2',
      'version' => '1.16.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '120ad9e854231431e3a5837f00158a91885b3fbe',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.9.1',
      'version' => '2.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f259e2b15fb95494c83f52d3caad003bbf5ffaa1',
    ),
    'mtdowling/jmespath.php' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
    ),
    'mustache/mustache' => 
    array (
      'pretty_version' => 'v2.14.2',
      'version' => '2.14.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e62b7c3849d22ec55f3ec425507bf7968193a6cb',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.11.1',
      'version' => '1.11.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.16.0',
      'version' => '4.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '19526a33fb561ef417e822e85f08a00db4059c17',
    ),
    'opensearch-project/opensearch-php' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '565c17e0ac1e062f4a6edfeb9745e9deb93ffbeb',
    ),
    'paragonie/constant_time_encoding' => 
    array (
      'pretty_version' => 'v2.6.3',
      'version' => '2.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '58c3f47f650c94ec05a151692652a868995d2938',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.100',
      'version' => '9.99.100.0',
      'aliases' => 
      array (
      ),
      'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
    ),
    'paypal/module-braintree' => 
    array (
      'pretty_version' => '4.5.0',
      'version' => '4.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'paypal/module-braintree-core' => 
    array (
      'pretty_version' => '4.5.0',
      'version' => '4.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'paypal/module-braintree-graph-ql' => 
    array (
      'pretty_version' => '4.5.0',
      'version' => '4.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'pdepend/pdepend' => 
    array (
      'pretty_version' => '2.14.0',
      'version' => '2.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1121d4b04af06e33e9659bac3a6741b91cab1de1',
    ),
    'pelago/emogrifier' => 
    array (
      'pretty_version' => 'v7.0.0',
      'version' => '7.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '547b8c814794aec871e3c98b1c712f416755f4eb',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
    ),
    'php-amqplib/php-amqplib' => 
    array (
      'pretty_version' => 'v3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0bec5b392428e0ac3b3f34fbc4e02d706995833e',
    ),
    'php-webdriver/webdriver' => 
    array (
      'pretty_version' => '1.13.1',
      'version' => '1.13.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '6dfe5f814b796c1b5748850aa19f781b9274c36c',
    ),
    'phpcompatibility/php-compatibility' => 
    array (
      'pretty_version' => '9.3.5',
      'version' => '9.3.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9fb324479acf6f39452e0655d2429cc0d3914243',
    ),
    'phpgt/cssxpath' => 
    array (
      'pretty_version' => 'v1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '7f073ba346c49a339a7b2cda9ccfdb1994c5d271',
    ),
    'phpgt/dom' => 
    array (
      'pretty_version' => 'v2.2.4',
      'version' => '2.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '329882ef1f4c3545f15bcc0861a699252c6a3277',
    ),
    'phpmd/phpmd' => 
    array (
      'pretty_version' => '2.13.0',
      'version' => '2.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dad0228156856b3ad959992f9748514fa943f3e3',
    ),
    'phpseclib/mcrypt_compat' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '6505669343743daf290b7d7b6b7105f85fd9988f',
    ),
    'phpseclib/phpseclib' => 
    array (
      'pretty_version' => '3.0.21',
      'version' => '3.0.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '4580645d3fc05c189024eb3b834c6c1e4f0f30a1',
    ),
    'phpstan/phpstan' => 
    array (
      'pretty_version' => '1.10.25',
      'version' => '1.10.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '578f4e70d117f9a90699324c555922800ac38d8c',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '9.2.26',
      'version' => '9.2.26.0',
      'aliases' => 
      array (
      ),
      'reference' => '443bc6912c9bd5b409254a40f4b0f4ced7c80ea1',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '3.0.6',
      'version' => '3.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
    ),
    'phpunit/php-invoker' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '5.0.3',
      'version' => '5.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '9.6.10',
      'version' => '9.6.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a6d351645c3fe5a30f5e86be6577d946af65a328',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
    ),
    'psr/clock' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '513e0666f7216c7459170d56df27dfcefe1689ea',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '^1.0',
        1 => '1.1|2.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '0955afe48220520692d2d09f7ab7e0f93ffd6a31',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e616d01114759c4c489f93b099585439f795fe35',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.1',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb6ce4845ce34a8ad9e68117c10ee90a29919eba',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0 || 2.0.0 || 3.0.0',
        1 => '1.0|2.0',
        2 => '1.0|2.0|3.0',
      ),
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.11.19',
      'version' => '0.11.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '1724ceff278daeeac5a006744633bacbb2dc4706',
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'ramsey/collection' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '4.7.4',
      'version' => '4.7.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '60a4c63ab724854332900504274f6150ff26d286',
    ),
    'react/promise' => 
    array (
      'pretty_version' => 'v2.10.0',
      'version' => '2.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f913fb8cceba1e6644b7b90c4bfb678ed8a3ef38',
    ),
    'rector/rector' => 
    array (
      'pretty_version' => '0.15.25',
      'version' => '0.15.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '015935c7ed9e48a4f5895ba974f337e20a263841',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '4.7.4',
      ),
    ),
    'sabberworm/php-css-parser' => 
    array (
      'pretty_version' => '8.4.0',
      'version' => '8.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e41d2140031d533348b2192a83f02d8dd8a71d30',
    ),
    'sebastian/cli-parser' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
    ),
    'sebastian/code-unit' => 
    array (
      'pretty_version' => '1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '4.0.8',
      'version' => '4.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa0f136dd2334583309d32b62544682ee972b51a',
    ),
    'sebastian/complexity' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '4.0.5',
      'version' => '4.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '74be17022044ebaaecfdf0c5cd504fc9cd5a7131',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '5.1.5',
      'version' => '5.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '4.0.5',
      'version' => '4.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '5.0.5',
      'version' => '5.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ca8db5a5fc9c8646244e629625ac486fa286bf2',
    ),
    'sebastian/lines-of-code' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
    ),
    'sebastian/phpcpd' => 
    array (
      'pretty_version' => '6.0.3',
      'version' => '6.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f3683aa0db2e8e09287c2bb33a595b2873ea9176',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '4.0.5',
      'version' => '4.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e75bd0f07204fec2a0af9b0f3cfe97d05f92efc1',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
    ),
    'seld/jsonlint' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '594fd6462aad8ecee0b45ca5045acea4776667f1',
    ),
    'seld/phar-utils' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ea2f4014f163c1be4c601b9b7bd6af81ba8d701c',
    ),
    'seld/signal-handler' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f69d119511dc0360440cdbdaa71829c149b7be75',
    ),
    'spomky-labs/aes-key-wrap' => 
    array (
      'pretty_version' => 'v7.0.0',
      'version' => '7.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fbeb834b1f83aa8fbdfbd4c12124f71d4c1606ae',
    ),
    'spomky-labs/otphp' => 
    array (
      'pretty_version' => 'v10.0.3',
      'version' => '10.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9784d9f7c790eed26e102d6c78f12c754036c366',
    ),
    'spomky-labs/pki-framework' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd3ba688bf40e7c6e0dabf065ee18fc210734e760',
    ),
    'squizlabs/php_codesniffer' => 
    array (
      'pretty_version' => '3.7.2',
      'version' => '3.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ed8e00df0a83aa96acf703f8c2979ff33341f879',
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a5e00dec161b08c946a2c16eed02adbeedf827ae',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.4.24',
      'version' => '5.4.24.0',
      'aliases' => 
      array (
      ),
      'reference' => '560fc3ed7a43e6d30ea94a07d77f9a60b8ed0fb8',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '88453e64cd86c5b60e8d2fb2c6f953bbc353ffbf',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v6.3.1',
      'version' => '6.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7abf242af21f196b65f20ab00ff251fdf3889b8d',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v3.3.0',
      'version' => '3.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7c3aff79d10325257a001fcf92d991f24fc967cf',
    ),
    'symfony/dotenv' => 
    array (
      'pretty_version' => 'v5.4.22',
      'version' => '5.4.22.0',
      'aliases' => 
      array (
      ),
      'reference' => '77b7660bfcb85e8f28287d557d7af0046bcd2ca3',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '99d2d814a6351461af350ead4d963bd67451236f',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3af8ac1a3f98f6dbc55e10ae59c9e44bfc38dfaa',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v3.3.0',
      'version' => '3.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a76aed96a42d2b521153fb382d418e30d18b59df',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0|3.0',
      ),
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v6.3.1',
      'version' => '6.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'edd36776956f2a6fcf577edb5b05eb0e3bdc52ae',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.4.21',
      'version' => '5.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '078e9a5e1871fcfe6a5ce421b539344c21afef19',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.4.25',
      'version' => '5.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f66be2706075c5f6325d2fe2b743a57fb5d23f6b',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v6.2.12',
      'version' => '6.2.12.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb02830a72c82759e4bc7eaf4c16e0b81303df38',
    ),
    'symfony/intl' => 
    array (
      'pretty_version' => 'v5.4.25',
      'version' => '5.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '4c4cbf57c9623b55e7d19479488bd93fee68450a',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.4.23',
      'version' => '5.4.23.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ae0a1032a450a3abf305ee44fc55ed423fbf16e3',
    ),
    'symfony/options-resolver' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a10f19f5198d589d5c33333cffe98dc9820332dd',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '511a08c03c1960e08a883f4cffcacd219b758354',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '707403074c8ea6e2edaf8794b0157a0bfa52157a',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.4.24',
      'version' => '5.4.24.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3c46cc5689c8782944274bb30702106ecbe3b64',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1|2.0|3.0',
      ),
    ),
    'symfony/stopwatch' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc47f1015ec80927ff64ba9094dfe8b9d48fe9f2',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.4.22',
      'version' => '5.4.22.0',
      'aliases' => 
      array (
      ),
      'reference' => '8036a4c76c0dd29e60b6a7cafcacc50cf088ea62',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v6.3.1',
      'version' => '6.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c81268d6960ddb47af17391a27d222bd58cf0515',
    ),
    'symfony/var-exporter' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'db5416d04269f2827d8c54331ba4cfa42620d350',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a9a8337aa641ef2aa39c3e028f9107ec391e5927',
    ),
    'tedivm/jshrink' => 
    array (
      'pretty_version' => 'v1.6.8',
      'version' => '1.6.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '35a83e0ab661d6130da5930c0c4eafcc663b8cec',
    ),
    'temando/module-shipping' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'temando/module-shipping-m2' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'temando/module-shipping-remover' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'thecodingmachine/safe' => 
    array (
      'pretty_version' => 'v2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3115ecd6b4391662b4931daac4eba6b07a2ac1f0',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
    ),
    'tinymce/tinymce' => 
    array (
      'replaced' => 
      array (
        0 => '3.4.7',
      ),
    ),
    'trentrichardson/jquery-timepicker-addon' => 
    array (
      'replaced' => 
      array (
        0 => '1.4.3',
      ),
    ),
    'tubalmartin/cssmin' => 
    array (
      'pretty_version' => 'v4.1.1',
      'version' => '4.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3cbf557f4079d83a06f9c3ff9b957c022d7805cf',
    ),
    'twbs/bootstrap' => 
    array (
      'replaced' => 
      array (
        0 => '3.1.0',
      ),
    ),
    'videlalvaro/php-amqplib' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.2.0',
      ),
    ),
    'web-token/encryption-pack' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-bundle' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-checker' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-console' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-core' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-encryption' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-encryption-algorithm-aescbc' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-encryption-algorithm-aesgcm' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-encryption-algorithm-aesgcmkw' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-encryption-algorithm-aeskw' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-encryption-algorithm-dir' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-encryption-algorithm-ecdh-es' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-encryption-algorithm-experimental' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-encryption-algorithm-pbes2' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-encryption-algorithm-rsa' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-framework' => 
    array (
      'pretty_version' => '3.2.7',
      'version' => '3.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aef1302821213bec40d141a4fe5f95276017da45',
    ),
    'web-token/jwt-key-mgmt' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-nested-token' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-signature' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-signature-algorithm-ecdsa' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-signature-algorithm-eddsa' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-signature-algorithm-experimental' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-signature-algorithm-hmac' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-signature-algorithm-none' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-signature-algorithm-rsa' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/jwt-util-ecc' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'web-token/signature-pack' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.7',
      ),
    ),
    'webimpress/safe-writer' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d37cc8bee20f7cb2f58f6e23e05097eab5072e6',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
    ),
    'webonyx/graphql-php' => 
    array (
      'pretty_version' => 'v15.5.1',
      'version' => '15.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b305633164a48947e22d53b6b15fcb98613c6592',
    ),
    'weew/helpers-array' => 
    array (
      'pretty_version' => 'v1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9bff63111f9765b4277750db8d276d92b3e16ed0',
    ),
    'wikimedia/less.php' => 
    array (
      'pretty_version' => 'v3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '0d5b30ba792bdbf8991a646fc9c30561b38a5559',
    ),
    'zendframework/zend-server' => 
    array (
      'replaced' => 
      array (
        0 => '^2.8.1',
      ),
    ),
    'zf1/zend-cache' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zf1/zend-db' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zf1/zend-exception' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zf1/zend-loader' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zf1/zend-log' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zf1/zend-memory' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zf1/zend-pdf' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zf1s/zend-loader' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zfs1/zend-cache' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zfs1/zend-db' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zfs1/zend-exception' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zfs1/zend-log' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zfs1/zend-memory' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
    'zfs1/zend-pdf' => 
    array (
      'replaced' => 
      array (
        0 => '^1.12',
      ),
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }


        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            // @phpstan-ignore-next-line
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
