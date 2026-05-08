<?php 

$dados = 'contatos.json'; //arquivo json onde os dados ficam
$contatos = json_decode(file_get_contents($dados), true) ?? []; //decodifica para formato que o php usa?

$acao = $_POST['acao'] ?? $_GET['acao'] ?? ''; //pode usar get ou post para acao, ou vazio

if ($acao == 'listar') {
    echo json_encode($contatos); //se acao for listar mostra os contatos

} else if ($acao == 'inserir') {  //se acao for inserir
    $contatos[] = [
        "id"       => time(), //usa tempo para definir um id, não achei um auto_increment fácil
        "nome"     => $_POST['nome'],
        "telefone" => $_POST['telefone'],
        "email"    => $_POST['email']
    ];
    file_put_contents($dados, json_encode($contatos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo json_encode(["status" => "ok"]); //codigos para converter o texto para o json

} else if ($acao == 'atualizar') {
    $id = $_POST['id'];
    foreach ($contatos as $index => $c) {  //vai procurar pelo id desejado até achar
        if ($c['id'] == $id) {
            $contatos[$index]['nome']     = $_POST['nome'];
            $contatos[$index]['telefone'] = $_POST['telefone'];
            $contatos[$index]['email']    = $_POST['email'];
            break;
        }
    }
    file_put_contents($dados, json_encode($contatos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo json_encode(["status" => "ok"]);
} else if ($acao == 'excluir') {
    $id = $_POST['id'];
    $contatos = array_filter($contatos, fn($c) => $c['id'] != $id);
    $contatos = array_values($contatos);
    file_put_contents($dados, json_encode($contatos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo json_encode(["status" => "ok"]);
}