<?php

require __DIR__ . '/../../vendor/autoload.php';
require '../config.php';
require '../initialize.php';

use Memento\OAuth2\Client\Helpers\MementoSsoHelper;

/** @var MementoSsoHelper $mementoSsoHelper */
$mementoSsoHelper->authorize();
