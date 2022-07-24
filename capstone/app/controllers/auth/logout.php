<?php
session_start();
session_destroy();
header("Location: ../../../../../reservationsystem/capstone/index.php");