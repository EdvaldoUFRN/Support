<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deleted = delete('chamados', 'id', $id);

if ($deleted) {
    flash('message', 'Chamado deletado com sucesso!', $type = 'success');
    redirectToHome();
}

flash('message', 'Erro ao deletar');
redirectToHome();
