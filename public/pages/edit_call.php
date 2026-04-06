<?php
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$tickets = find('chamados', 'id', $id);
?>

<div class="container">

    <div>
        <a href="?page=home" class="btn btn-success">Voltar</a>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">


        <div class="card shadow-lg border-0" style="max-width: 700px; width: 100%; border-radius: 15px;">

            <div class="card-body p-4">

                <div class="text-center mb-4">
                    <h3 class="fw-bold text-dark">Abrir Chamado</h3>
                    <p class="text-muted small">Preencha os dados abaixo para suporte técnico</p>
                </div>

                <form action="/pages/forms/update_call.php" method="post" role="form">

                    <div class="form-group">
                        <label for="" class="form-label fw-semibold">Nome</label>
                        <input type="text" class="form-control" name="name" placeholder="Digite seu nome" value="<?= $tickets->name; ?>">
                    </div>

                    <input type="hidden" name="id" value="<?= $tickets->id; ?>">

                    <div class="form-group">
                        <label for="" class="form-label fw-semibold">Setor</label>
                        <input type="text" class="form-control" name="work_sector" placeholder="Digite seu Setor" value="<?= $tickets->work_sector; ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label fw-semibold">Ramal</label>
                        <input type="text" class="form-control" name="phone_ext" placeholder="Digite seu Ramal" value="<?= $tickets->phone_ext; ?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label fw-semibold">Problema</label>
                        <textarea name="problem" required id="problem" rows="4" class="form-control" placeholder="Descreva detalhadamente o que está ocorrendo..."><?= $tickets->problem; ?></textarea>
                    </div>
                    <div class="mt-3 text-center justify-content-center d-flex">
                        <?= get('message'); ?>
                    </div>
                    <div class="mt-2 d-flex align-items-center justify-content-center">

                        <button type="submit" class=" btn btn-success">Atualizar</button>
                    </div>
                </form>
            </div>

            </form>
        </div>
    </div>
</div>
</div>