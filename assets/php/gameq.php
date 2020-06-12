<?php 

require('gameq/austinb/gameq/src/GameQ/Autoloader.php');
require('config.php');

$servers = [
    [
    'type'    => type,
    'host'    =>  host.':'.port,
    ]
];

$GameQ = new \GameQ\GameQ(); // or $GameQ = \GameQ\GameQ::factory();
$GameQ->addServers($servers);
$GameQ->setOption('timeout', 5); // seconds


$results = $GameQ->process();

// All vars for your server infos
$players = count($results[$servers[0]["host"]]["players"]);
$name = $results[$servers[0]["host"]]["gq_hostname"];
$isOnline = $results[$servers[0]["host"]]["gq_online"];
$link = $results[$servers[0]["host"]]["gq_joinlink"];
$maxplayers = $results[$servers[0]["host"]]["gq_maxplayers"];
$map = $results[$servers[0]["host"]]["gq_mapname"];
$bot = $results[$servers[0]["host"]]["num_bots"];
$res = $maxplayers-$players;



?>
