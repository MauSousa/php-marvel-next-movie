<?php

require('config/functions.php');

# Loads env variables from .env file
load_env();

$data = get_apit_data();

include_once('views/index.php');
