<?php
/* Connect to a MySQL database using driver invocation */

//  ------------------------  Conexão com o Banco ------------------------------------

try {
     // $pdo = new PDO("mysql:dbname=testdb;host=localhost","root","");   // ESSA LINHA PODE SUBSTITUIR TRANQUILAMENTE O CÓDIGO A BAIXO (SÃO EQUIVALENTES)

    $dsn = 'mysql:dbname=testdb;host=localhost';
    $user = 'root';
    $password = '';

    $dbhost = new PDO($dsn, $user, $password);
    echo "Conectado ao banco";
} catch (PDOException $e) {
    echo "Erro na conexão ao banco <br><br>";
    echo "<b>Código do erro: </b>" . $e->getMessage();
} catch (Exception $e) {
    echo "Erro genérico: <br><br> <b>Código do erro: </b>" . $e->getMessage();
}




// -------------------  INSERINDO DADOS ------------------------

/* 
$telefone = 33333;
$email = "email@gmail.com";
$nome = "joão";

 $dbhost->query("INSERT INTO pessoa(telefone, nome, email) VALUES('$telefone', '$nome', '$ ')");  //só aceita até 9 digitos inteiros 'não sei pq ainda'
 */





 // ---------------------- UPDATE ----------------  ATUALIZANDO INFORMACÃOES -------

 


 // $cmd = $dbhost->query("UPDATE pessoa SET email = 'tames@gmail.com' WHERE id = '11' ");



// --------------- DELETE -  APAGANDO DADOS -------------------------------------


//$cmd = $dbhost->query("DELETE FROM pessoa WHERE id = '10' ");


// ---------------  SELECT  -----  MOSTRANDO RESULTADOS ------------------------


$cmd = $dbhost->query("SELECT * FROM pessoa WHERE id = '3' ");
//  fetch pega a variável e transforma ela em array para mostrar melhor os resultados por CHAVE de posição 
 // $cmd->fetchAll(); trás várias lindas do banco
 // $cmd->fetch();   trás uma única linda do banco

 $cmdEmFetch = $cmd->fetch(PDO::FETCH_ASSOC);   // PDO::FETCH_ASSOC faz com que retorne os dados vinculados apenas a chave da tabela do banco



 foreach ($cmdEmFetch as $key => $value) {
    echo "<br>".$key.": ".$value;
}
 

 /* echo "<pre>";      ------------  MOSTRANDO RESULTADO PARA TESTE
 print_r($cmdEmFetch);
echo "</pre>"; */
