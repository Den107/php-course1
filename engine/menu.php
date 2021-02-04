<?php
include ENGINE_DIR . "db.php";

function getMenu(): array
{
   return query( "SELECT * FROM menu WHERE access = 1");
}