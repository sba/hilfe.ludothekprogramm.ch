<?php

require __DIR__ . '/../vendor/autoload.php';

$jsonfile = __DIR__ . '/../tests/user_agents.json';

$uas = json_decode(
	file_get_contents($jsonfile),
	true
);

$platforms = array();
$browsers  = array();
foreach( $uas as $key => $val ) {
	$kex = strtoupper($val['browser']);
	if( $kex !== '' ) {
		$kex = preg_replace('/\W+/', '_', $kex);
		if( !isset($browsers[$kex][$val['browser']]) ) {
			$browsers[$kex][$val['browser']] = 0;
		}

		$browsers[$kex][$val['browser']]++;
	}

	$kex = strtoupper($val['platform']);
	if( $kex !== '' ) {
		$kex = preg_replace('/\W+/', '_', $kex);

		if( !isset($platforms[$kex][$val['platform']]) ) {
			$platforms[$kex][$val['platform']] = 0;
		}

		$platforms[$kex][$val['platform']]++;
	}
}

ksort($browsers);
$file   = basename(__FILE__);
$header = <<<EOT
<?php

// DO NOT EDIT THIS FILE - IT IS GENERATED BY {$file}


EOT;


foreach( $browsers as $browser ) {
	if( count($browser) !== 1 ) {
		echo "bad browser count\n";
		die(2);
	}
}

$browserBody = "{$header}namespace donatj\UserAgent;\n\ninterface Browsers {\n\n";
$maxKey      = max(array_map('strlen', array_keys($browsers)));
foreach( $browsers as $const => $val ) {
	$browserBody .= sprintf("\tconst %-{$maxKey}s = %s;\n", $const, var_export(key($val), true));
}
$browserBody .= "\n}\n\n";

foreach( $platforms as $platform ) {
	if( count($platform) !== 1 ) {
		echo "bad platform count\n";
		die(2);
	}
}

$platformBody = "{$header}namespace donatj\UserAgent;\n\ninterface Platforms {\n\n";
$maxKey       = max(array_map('strlen', array_keys($platforms)));
foreach( $platforms as $const => $val ) {
	$platformBody .= sprintf("\tconst %-{$maxKey}s = %s;\n", $const, var_export(key($val), true));
}
$platformBody .= "\n}\n\n";

file_put_contents(__DIR__ . '/../src/UserAgent/Browsers.php', $browserBody);
file_put_contents(__DIR__ . '/../src/UserAgent/Platforms.php', $platformBody);