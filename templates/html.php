<html>
<head>
<style>

table
{
border-collapse:collapse;
width:100%;
max-width:700px;
min-width:400px;
text-align:center;
}

table,th, td
{
border: 1px solid gray;
}

th, td
{
height: 24px;
padding:4px;
vertical-align:middle;
}

th
{
background-color:#EEE;
}
td {

}
.param {

background-color:#DDE;
}
.route {
background-color:#DED;

}
</style>

</head>
<body>
<h1><?= $template_data["title"] ."\n" ?></h1>
<?php foreach($template_data["contents"] as $data) { ?>
<h2><?= $data["route_data"][2]?></h2>
<table>
<tr><th>Route </th><th> Method</th><th> Description</th></tr>
<?php if (sizeof($data["route_data"]) == 4) { ?>
<tr><td class="route"><?= $data["route_data"][2] ?></td><td><?= strtoupper($data["route_data"][1]) ?> </td><td> <?= $data["doc"]["description"] ."</td></tr>\n" ?>
<?php } ?>
</table>
<?php if(!empty($data["doc"]["params"])) { ?>
<?="<br /><table>\n"?>
<?php foreach ($data["doc"]["params"] as $param) { ?>
<?php if (sizeof($param) == 4 ||true ) { ?>
<tr><td class="param"> <?= $param[1] ?> </td><td> <?= $param[2] ?> </td></tr>
<?php } ?>
<?php } ?>
</table>
<?php
if(!empty($data["doc"]['return'])){ 
?>
<fieldset><legend><b>Retour : </b><?=$data["doc"]['return'][0][1]?></legend><?=$data["doc"]['return'][0][2]?></fieldset>
<?php
}
?>
<?php } ?>
<?="\n---\n"?>
<?php } ?>
</head>
</html>
