<?php
require_once "aihtml.php";
use Aihtml\Aihtml;
$file="sample.txt";
$html = new Aihtml($file);
echo $html->readHtml();
?>