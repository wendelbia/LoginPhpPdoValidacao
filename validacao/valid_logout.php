<?php

session_start();

//remove todas as variávies
session_unset();

//destroi a session
session_destroy();

header('location:../index.php');

