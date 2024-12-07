<?php
session_start();
session_destroy();
header("Location: /"); // Redirect to homepage or login page
exit();
