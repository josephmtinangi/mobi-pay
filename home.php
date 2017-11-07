<?php

require "bootstrap/app.php";

require __DIR__.'/middleware/auth.php';

include "templates/header.php";
include "home.view.php";
include "templates/footer.php";
