<?php

use App\Core\App;
use App\Core\Database\Database;
use App\Core\Database\QueryBuilder;

require "functions.php";

App::set('config', require_once  'config.php' );

App::set('database', new QueryBuilder(Database::connect(App::get('config')['database'])));

