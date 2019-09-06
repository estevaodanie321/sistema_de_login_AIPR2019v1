<?php

echo '<h1>Data do MySQL</h1>';
$data = "2008-01-09 14:56:06"; //data retornada do banco de dados
echo $data;
echo '<br><br>';

echo '<h1>Transforma a data MySQL em Timestamp</h1></br>';
echo strtotime($data);

echo '<h1>Data padrão brasileiro</h1>';
echo date('d/m/Y H:i:s', strtotime($data)); //mostrará 09/01/2008 14:56:06.
echo '<br><br>';
echo date('d/m/Y', strtotime($data)); //mostrará 09/01/2008.
