<?php

// This functionality is a part of a scanner where data is user-supplied and the regexes OSINT supplied. The script has no control over either and just needs to do its job successfully.

echo 'To ensure hang, you must confirm the following PHP configuration.';
echo 'pcre' . PHP_EOL;
echo 'PCRE (Perl Compatible Regular Expressions) Support	enabled' . PHP_EOL;
echo 'PCRE Library Version	10.34 2019-11-21' . PHP_EOL;
echo 'PCRE Unicode Version	12.1.0' . PHP_EOL;
echo 'PCRE JIT Support	enabled' . PHP_EOL;
echo 'PCRE JIT Target	x86 64bit (little endian + unaligned)' . PHP_EOL;
echo 'Directive	Local Value	Master Value' . PHP_EOL;
echo 'pcre.backtrack_limit	1000000	1000000' . PHP_EOL;
echo 'pcre.jit	1	1' . PHP_EOL;
echo 'pcre.recursion_limit	100000	100000' . PHP_EOL;

$contents = file_get_contents( __DIR__ . '/data.img' );

// This hangs indefinitely
preg_match( '/\..*\..*zoneid\=\d+/i', $contents );

// Need to recover and continue with the script
echo 'done' . PHP_EOL;

