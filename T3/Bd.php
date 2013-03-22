<?php
mysql_connect("mysql1.000webhost.com:3306","a3156796_lucasm","lu3914cas");


mysql_select_db("a3156796_t3");

function dbConsulta($sql){
	($a=mysql_query($sql)) or die(mysql_error());
	return $a;
}

