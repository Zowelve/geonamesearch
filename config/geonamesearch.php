<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'username' => env('GEONAMESEARCH_USERNAME', ''),
    'type' => 'json', // json or xml or rdf
    'style' => 'short',
    'language' => 'en',
    'max_limit' => 100,
    'use_cache' => true,
    'allow_all_states' => false,
    'cache_duration' => 60 * 60 * 24, // Cache duration in seconds
    'filepath' => storage_path('app/geonamesearch/'),
];