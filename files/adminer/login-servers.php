<?php
require_once('plugins/login-servers.php');

/** Set supported servers
    * @param array array($domain) or array($domain => $description) or array($category => array())
    * @param string
    */
return new AdminerLoginServers
([
    'MySQL' => ['server' => 'mysql_server', 'driver' => 'server'],
    # 'MariaDB' => ['server' => 'mariadb_server', 'driver' => 'server'],
    # 'PostgreSQL' => ['server' => 'postgres_server', 'driver' => 'pgsql'],
    # 'MongoDB' => ['server' => 'mongo_server', 'driver' => 'mongo'],
]);