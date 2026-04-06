<?php
require '../../../bootstrap.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isEmpty()) {
    flash('message', 'Preencha todos os campos');

    return redirect("edit_call&id=" . $id);
}



$validate = validate([
    'name' => 's',
    'work_sector' => 's',
    'problem' => 's',
    'phone_ext' => 'i'
]);

$atualizado = update('chamados', $validate, ['id', $id]);

if ($atualizado) {
    flash('message', 'Atualizado com sucesso', 'success');

    return redirect("edit_call&id=" . $id);
}

flash('message', 'Erro ao atualizar');
redirect("edit_call&id=" . $id);
