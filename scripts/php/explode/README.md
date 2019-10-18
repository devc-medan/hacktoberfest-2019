# Explode

Explode berfungsi memisahkan string berdasarkan string. Output dari explode berupa array.   
Misal: string "apa kabar dunia" ingin kita pisah berdasarkan spasi  

## Contoh Program
```
<?php
    $str = "apa kabar dunia";
    $arr = explode(" ",$str);
    print_r($arr);
?>
```

## Output
```
Array ( [0] => apa [1] => kabar [2] => dunia )
```
