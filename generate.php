<?php
$dirName = uniqid();
mkdir("stories/" . $dirName);
$newHTML = fopen("stories/" . $dirName . "/index.html", "w") or die("Unable to open file!");
$html = ('<!doctype html><html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title></title><link href="https://fonts.googleapis.com/css?family=Concert+One|Nunito:300" rel="stylesheet"><link href="../../css/bootstrap.min.css" rel="stylesheet"><link href="../../css/story.css" rel="stylesheet"></head><body><div class="layer"><div id="page" class="container col-sm-offset-3 col-sm-6 text-center"><div id="header"><h1></h1></div><img id="image" class="img-responsive"><p id="story"></p><button id="1" type="button"></button><button id="2" type="button"></button></div></div><script src="../../js/jquery.min.js"></script><script src="../../js/cyoa.js"></script></body></html>');
file_put_contents("stories/" . $dirName . "/index.html", $html);
$newJSON = fopen("stories/" . $dirName . "/story.json", "w") or die("Unable to open file!");
$data = $_GET["data"];
file_put_contents("stories/" . $dirName . "/story.json", $data);
echo json_encode($dirName);
?>