<?php
// initialize application from bootstrap file
$app = require("bootstrap/app.php");
require("routes/web.php");

$app->run();
