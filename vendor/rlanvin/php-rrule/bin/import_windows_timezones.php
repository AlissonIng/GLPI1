#!/usr/bin/env php
<?php

/**
 * Inspired from https://github.com/sabre-io/vobject/blob/master/bin/fetch_windows_zones.php
 */

$input = 'https://raw.githubusercontent.com/unicode-org/cldr/master/common/supplemental/windowsZones.xml';
$output = __DIR__.'/../src/tzdata/windows.php';

$xml = simplexml_load_file($input);
if ($xml === false) {
	fprintf(STDERR, "Something went wrong");
	exit(1);
}
$map = [];

// mapZone can contains multiple mapping, so we take only where territory="001"
foreach ($xml->xpath('//mapZone[@territory=001]') as $zone) {
	$from = (string) $zone['other'];
	$to = (string) $zone['type'];

	// then there can also be multiple timezone, so we take the first one
	$to = explode(" ",$to)[0];

	$map[$from] = $to;
}
ksort($map);

$export = var_export($map,true);
$script = basename(__FILE__);
$date = gmdate('c');

file_put_contents($output, <<<EOF
<?php

/**
 * This file is automatically generated by {$script}.
 *
 * Generated at: {$date}
 * Source used: {$input}
 */

return {$export};
EOF
);

echo "Success\n";