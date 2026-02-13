<?php
require_once '../vendor/autoload.php';

use App\Models\User;
use App\Services\UserService;

$quote = new \RandomQuotes\RandomQuotes();

//print_r($quote->generate()); //[quoteAuthor] => Lao Tzu
// [quoteText]
$dayQuote = $quote->generate();
echo "\"{$dayQuote['quoteText']}\"" . PHP_EOL;
echo "Author: {$dayQuote['quoteAuthor']}";
echo "\n";

$user = new User();
$user->name = "Devi";
$service = new UserService();
$service->register($user);