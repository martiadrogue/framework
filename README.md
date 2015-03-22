
# Framework

- Centos 7
- Apache 2.4.6 (CentOS)
- MariaDB 5.5.41-MariaDB MariaDB Server
- PHP 5.6.6

## Virtual host

Hi ha dos virtual host, un per la versió de producció i l'altre per la versió de
desenvolupament. Els dos redirigeixen totes les URLs cap un unic punt d'entrada,
el Front Controller que tinguin assignat cada un dels entorns. I també es
diferencies pel domini, el servidor virtual de desenvolupament té el nom
*www.framework.dev* mentre que el servidor virtual de producció utilitza el nom
*www.framework.prod*.

```
<VirtualHost *:80>
  DocumentRoot /var/www/framework/public
  ServerName www.framework.dev
  ServerAlias framework.dev

  RewriteEngine On
  RewriteCond %{REQUEST_FILENAME} !^(.+)\.(js|css|gif|png|jpg|swf|ico|txt|html)$
  RewriteRule ^/(.+) /index.php [QSA,L]

</VirtualHost>
```

S'enten com a Front Controller el fitxer */www/framework/public/index.php*.

## Routing

Les rutes van sempre al fitxer *config/routing.yml*, aquest pot ser json, ini o
yml. Es pot indicar el package on es situen tots els Controllers o posar el
namespace complet a cada controller. A continuació hi ha un petit exemple:

```
---
package:
    namespace: Com\Martiadrogue\Framework\Controller\
home:
    path: /
    defaults: 'HomeController::index'
about:
    path: /about
    defaults: 'HomeController::about'
contact:
    path: /contact
    defaults: 'HomeController::contact'
test:
    path: /test
    defaults: 'TestController::index'
test_list:
    path: /test/list
    defaults: 'TestController::list'
test_json:
    path: /test/notation
    defaults: 'TestController::notation'
```

Les accions dels Controlladors estan representades per mètodes, cada un d'aquest
metodes ha de començar amb *execute*, per exemple:

```
public function executeIndex()
{
    return parent::render('home/index.html', []);
}
```
