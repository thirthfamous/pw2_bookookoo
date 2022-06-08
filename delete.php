<?php

include_once 'utils/rahasia.php'; 

if (isset($_GET['id'])) {
    // delete by ID
    delete($_GET['id']);
}