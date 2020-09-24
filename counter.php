<?php

require 'predis/Autoloader.php';
Predis\Autoloader::register();

$sentinels = [];
if (getenv['DATABASE_SERVICE_NAME']) {
    $sentinels = [ 'tcp://'.getenv['DATABASE_SERVICE_NAME'] ];
}

$options = [];
if (getenv['REDIS_PASSWORD']) {
    $options['parameters'] = [
        'password' => getenv['REDIS_PASSWORD']
    ];
}

try {
    $redis = new Predis\Client($sentinels, $options);
    $counter = $redis->incr("counter");
    if ($counter < 1000) {
        $redis->set("counter", $counter = 1000);
    }
    echo $counter;
}
catch (Exception $e) {
    echo "ERR";
}

?>
