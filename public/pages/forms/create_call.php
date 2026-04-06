<?php
require '../../../bootstrap.php';



if (isEmpty()) {
    flash('message', 'Preencha todos os campos');

    return redirect("create_call");
}



$validate = validate([
    'name' => 's',
    'work_sector' => 's',
    'phone_ext' => 'i',
    'problem' => 's'
]);

$cadastrado = create('chamados', $validate);

if ($cadastrado) {
    flash('message', 'Enviado com sucesso!', 'success');

    return redirect('create_call');
}

flash('message', 'Erro ao enviar o chamado');
redirect('create_call');
