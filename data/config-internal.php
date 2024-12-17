<?php
return [
  'database' => [
    'host' => 'localhost',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espocrm',
    'user' => 'root',
    'password' => '',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => 'jwqsjwfyopjkaens',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => true,
  'cleanupAppLogPeriod' => '30 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1734137200.257219,
  'passwordSalt' => 'c7cac53e5e324563',
  'cryptKey' => '4d1161eb1456c9a3a15ca03f448de6a8',
  'hashSecretKey' => 'ee1721e3b3db06af4e26b3c229ea11f8',
  'actualDatabaseType' => 'mysql',
  'actualDatabaseVersion' => '8.0.30',
  'instanceId' => 'b4a5d191-0ef0-4bd0-bdbf-f71782de65fe'
];
