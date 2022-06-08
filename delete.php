<?php

include_once 'utils/init.php'; 

if (isset($_GET['id'])) {
    // delete by ID
    delete($_GET['id']);
}