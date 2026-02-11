<?php
require_once '../vendor/autoload.php';

$quote = new \RandomQuotes\RandomQuotes();

//print_r($quote->generate()); //[quoteAuthor] => Lao Tzu
// [quoteText]
$dayQuote = $quote->generate();
echo "\"{$dayQuote['quoteText']}\"" . PHP_EOL;
echo "Author: {$dayQuote['quoteAuthor']}";
echo "\n";
