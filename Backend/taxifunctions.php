<?php

    function verify_query($result_set) {

        global $db;

        if(!$result_set) {
            die("Database query failed: ".mysqli_error($db));
        }
    }
?>