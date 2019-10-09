<?php
mb_internal_encoding ( "UTF-8" );
echo <<<HTML

<body>
<table border="1">
    <tr>
        <th>#</th>
        <th>Carácter</th>
        <th>Cód.URL</th>
    </tr>
    
    
HTML;

for($i=0;$i<=255;$i++){
    echo"<tr> <td>$i</td> <td>".chr($i)."</td> <td>".urldecode(chr($i))."</td> </tr>\n";
}

echo <<<HTML
</table>
</body>
HTML;
?>