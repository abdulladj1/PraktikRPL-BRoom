<?php

$conn = mysqli_connect("localhost", "root", "", "broom");

if (!$conn) {
    echo "Connection Failed";
}