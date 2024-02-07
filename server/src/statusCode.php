<?php function isValidStatusCode($statusCode) { if (strlen($statusCode) !== 10) {return false;} $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz'; $uppercaseLetters = strtoupper($lowercaseLetters); $punctuationSymbols = '@#$%^&*()_+~|:;?><='; if (!ctype_alpha($statusCode[0]) || !ctype_alpha($statusCode[2])) {return false;} if (!strspn($statusCode[1], $punctuationSymbols) || !strspn($statusCode[4], $punctuationSymbols)) {return false;} if (!ctype_digit($statusCode[3]) || !ctype_digit($statusCode[5]) || !ctype_digit($statusCode[6])) {return false;} if ($statusCode[7] !== 'j' || $statusCode[8] !== 'x' || $statusCode[9] !== 's') {return false;} return true; } ?>