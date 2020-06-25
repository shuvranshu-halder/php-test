<?php
$con = new PDO('mysql:host=localhost;port=3306;dbname=coronadb', 'root', '');
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);