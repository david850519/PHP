<?php
$link=mysqli_connect("localhost","root","123456","user");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_query($link,"set name utf-8");