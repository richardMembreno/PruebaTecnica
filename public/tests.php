<?php
require_once("../model/test.php");
require_once("../resources/inicio.php");
inicio::templateHeader();
require_once("../views/viewTests.php");
require_once("../views/viewAddTest.php");
require_once("../views/viewEditTest.php");
require_once("../views/viewDeleteTest.php");
inicio::templateFooter();
?>