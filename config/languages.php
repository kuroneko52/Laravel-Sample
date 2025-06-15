<?php

$supportedLanguages = [
    'en' => 'english',
    'ja' => '日本語',
]; 

return [
    'supported' => $supportedLanguages,
    'default' => array_key_first($supportedLanguages),
];
