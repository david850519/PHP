
<html>
<head>
  <title></title>
</head>

<body>
<form action="" method="post">
請輸入名稱:<input type="text" name="name">
網址:<input type="text" name="web">
<input type="submit">
</body>
</html>

<?php   
function shorturl($input) {   
  $base32 = array (   
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',   
    'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p',   
    'q', 'r', 's', 't', 'u', 'v', 'w', 'x',   
    'y', 'z', '0', '1', '2', '3', '4', '5'   
    );   
    
  $hex = md5($input);   
  $hexLen = strlen($hex);   
  $subHexLen = $hexLen / 8;   
  $output = array();   
    
  for ($i = 0; $i < $subHexLen; $i++) {   
    $subHex = substr ($hex, $i * 8, 8);   
    $int = 0x3FFFFFFF & (1 * ('0x'.$subHex));   
    $out = '';   
    
    for ($j = 0; $j < 6; $j++) {   
      $val = 0x0000001F & $int;   
      $out .= $base32[$val];   
      $int = $int >> 5;   
    }   
    
    $output[] = $out;   
  }   
    
  return $output;   
}  
$name=$_POST["name"];
$web=$_POST["web"];
echo shorturl($web);
?>  