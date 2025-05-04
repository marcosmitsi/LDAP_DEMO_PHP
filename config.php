<?php
/* -------------------------------------------------
 |  Dados fixos de conexão com o LDAP de testes
 |-------------------------------------------------*/
define('LDAP_HOST',    'ldap.forumsys.com');// servidor
define('LDAP_PORT',    389);                 // porta padrão
define('LDAP_BASE_DN', 'dc=example,dc=com');

// Conta de “leitura” que o script usará para achar o DN real do usuário
define('LDAP_TECH_DN', 'uid=read-only-admin,dc=example,dc=com');
define('LDAP_TECH_PASS', 'password');

// Qual atributo será digitado no campo usuário
define('LDAP_LOGIN_ATTR', 'uid');  // ex.: einstein, gauss


    ?>