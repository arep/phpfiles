<?php
$sleep=1;
if (isset($_GET['seconds'])) $sleep=$_GET['seconds'];
sleep($sleep);
