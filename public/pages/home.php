<div class="container">
    <a href="?page=create_call"
        class="btn btn-success shadow-lg">
        + Criar novo chamado
    </a>


    <div style="margin-top:20px; margin-bottom:20px;" class="d-flex justify-content-center align-items-center w-100">

        <div style=" overflow:scroll;  width:900px; border-radius: 15px;">
            <ul class="list-group">
                <?php
                $chamados = all('chamados');
                if (empty($chamados)) {
                    echo "<li class='list-group-item'>Não existem chamados.</li>";
                }
                foreach ($chamados as $chamado):
                ?>
                    <li class="list-group-item">

                        <div class="p-3">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <h5 class="mb-1 fw-bold text-success text-truncate" style="max-width: 500px;">
                                    - <?= $chamado->name; ?>
                                </h5>
                                <small class=" text-body-secondary">
                                    <?= date('d/m H:i', strtotime($chamado->data_criacao)); ?>
                                </small>
                            </div>

                            <p class="mb-2 text-dark">
                                <strong>Setor:</strong> <?= $chamado->work_sector; ?> |
                                <strong>Ramal:</strong> <?= $chamado->phone_ext; ?>
                            </p>

                            <p class="mb-2 text-muted fst-italic">
                                "<?= $chamado->problem; ?>"
                            </p>

                            <div class="d-flex gap-2 justify-content-end mt-2">
                                <a href="?page=edit_call&id=<?= $chamado->id; ?>" class="btn btn-sm btn-success">Editar</a>
                                <a href="?page=delete_call&id=<?= $chamado->id; ?>" class="btn btn-sm btn-danger">Deletar</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </li>
            </ul>

        </div>

    </div>
    <div class="d-flex justify-content-center align-items-center">
        <?= get('message'); ?>
    </div>
</div>