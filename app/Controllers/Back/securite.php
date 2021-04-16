<?php
function isConnect(){
    if(!isset($_SESSION['roleusers']))
    throw new Exception('Vous n\'êtes pas administrateur');
}