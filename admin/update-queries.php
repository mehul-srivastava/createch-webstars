<?php
require('assets/includes/functions.php');
loginStatus();
if(isset($_POST)) {
    updateContactQueries();
}
?>