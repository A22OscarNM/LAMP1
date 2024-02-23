<?php
$databases['default']['default'] = array (
  'database' => getenv('DATABASE'),
  'username' => getenv('DB_USERNAME'),
  'password' => getenv('DB_PASSWORD'),
  'prefix' => getenv('DB_PREFIX'),
  'host' => getenv('DB_HOST'),
  'port' => getenv('DB_PORT'),
  'isolation_level' => 'READ COMMITTED',
  'driver' => 'mysql',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);
$settings['hash_salt'] = '2ncqpeYj7XdqIBBmi4a36WD_RwPsLsX1ftuZ-GAhj9vZxbUjF0RX9HamUEtbON5SVGDdDXgdkw';
$settings['config_sync_directory'] = 'sites/default/files/config_b6VqAF5rIniC3sVblQdsZAx170UsHd50CDt4XiOAYN3hjUqCR4AxRoiX2a0h6Nt_eGDpSVmY4w/sync';
