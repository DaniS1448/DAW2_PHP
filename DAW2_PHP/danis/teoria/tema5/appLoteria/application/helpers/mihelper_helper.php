<?php
function session_start_seguro() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
}
?>