# Docker Piwik Container (zinway/piwik)
_maintained by Zinway

## What is it

This Dockerfile (available as ___zinway/piwik___) gives you a completly secure piwik.

It's based on the [nginx](https://registry.hub.docker.com/_/nginx/) Image

## Environment variables and defaults

### For Headless installation required

Piwik Database Settings

* __PIWIK\_MYSQL\_USER__
 * default: _piwik_
* __PIWIK\_MYSQL\_PASSWORD__
 * default: _piwik_
* __PIWIK\_MYSQL\_HOST__
 * default: _mysql_
* __PIWIK\_MYSQL\_PORT__
 * default: _3306_ - if you use a different mysql port change it
* __PIWIK\_MYSQL\_DBNAME__
 * default: _piwik_ - don't use the symbol __-__ in there!
* __PIWIK\_MYSQL\_PREFIX__
 * default: _piwik\__
 
Piwik Admin Settings

* __PIWIK\_ADMIN__
 * default: admin - the name of the admin user
* __PIWIK\_ADMIN\_PASSWORD__
 * default: [randomly generated 10 characters] - the password for the admin user
* __PIWIK\_ADMIN\_MAIL__
 * default: no@no.tld - only needed if you are interested in one of those newsletters
* __PIWIK\_SUBSCRIBE\_NEWSLETTER__
 * __1__ or __0__ - default: _0_
* __PIWIK\_SUBSCRIBE\_PRO\_NEWSLETTER__
 * __1__ or __0__ - default: _0_

Website to Track Settings

* __SITE\_NAME__
 * default: _My local Website_
* __SITE\_URL__
 * default: _http://localhost_
* __SITE\_TIMEZONE__
 * default: _Asia/Shanghai_
* __SITE\_ECOMMERCE__
 * __1__ or __0__ - default: _0_

Piwik Track Settings

* __ANONYMISE\_IP__
 * __1__ or __0__ - this will anonymise IPs - default: _1_
* __DO\_NOT\_TRACK__
 * __1__ or __0__ - this will skip browsers with do not track enabled from tracking - default: _1_
 
### Misc Settings

* __PIWIK\_RELATIVE\_URL\_ROOT__
 * default: _/piwik/_ - you can chance that to whatever you want/need

## Using the zinway/piwik Container

First you need a running MySQL Container. 

    docker run -d -e MYSQL_ROOT_PASSWORD=piwik -e MYSQL_USER=piwik -e MYSQL_PASSWORD=piwik -e MYSQL_DATABASE=piwik --name piwikdb mysql

You need to _--link_ your mysql container to zinway/piwik with the name __mysql__

    docker run -d -p 80:80 --link piwikdb:mysql --name piwik zinway/piwik
