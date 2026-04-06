<div class="container">

    <div class="mb-3">
        <a href="?page=home" class="btn btn-success">Voltar</a>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">


        <div class="card shadow-lg border-0 mt-5" style="max-width: 700px; width: 100%; border-radius: 15px;">

            <div class="card-body p-4">

                <div class="text-center mb-4">
                    <h3 class="fw-bold text-dark">Abrir Chamado</h3>
                    <p class="text-muted small">Preencha os dados abaixo para suporte técnico</p>
                </div>

                <form action="/pages/forms/create_call.php" method="POST">

                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Nome Completo</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ex: João Silva" required>
                    </div>

                    <div class="mb-3">
                        <label for="work_sector" class="form-label fw-semibold">Setor de Trabalho</label>
                        <input type="text" name="work_sector" id="work_sector" class="form-control" placeholder="Ex: Financeiro / TI" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone_ext" class="form-label fw-semibold">Ramal / Telefone</label>
                        <input type="text" name="phone_ext" id="phone_ext" class="form-control" placeholder="Ex: 4002 | (84)985547537" required>
                    </div>

                    <div class="mb-4">
                        <label for="problem" class="form-label fw-semibold">Descrição do Problema</label>
                        <textarea name="problem" required id="problem" rows="4" class="form-control" placeholder="Descreva detalhadamente o que está ocorrendo..."></textarea>
                    </div>
                    <div class="d-grid">
                        <div class="text-center justify-content-center d-flex">
                            <?= get('message'); ?>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg shadow-sm">
                            <i class="me-2" style="display: inline-block; width: 16px; height: 16px; ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 100%; height: 100%; fill: currentColor;"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                    <path d="M536.4-26.3c9.8-3.5 20.6-1 28 6.3s9.8 18.2 6.3 28l-178 496.9c-5 13.9-18.1 23.1-32.8 23.1-14.2 0-27-8.6-32.3-21.7l-64.2-158c-4.5-11-2.5-23.6 5.2-32.6l94.5-112.4c5.1-6.1 4.7-15-.9-20.6s-14.6-6-20.6-.9L229.2 276.1c-9.1 7.6-21.6 9.6-32.6 5.2L38.1 216.8c-13.1-5.3-21.7-18.1-21.7-32.3 0-14.7 9.2-27.8 23.1-32.8l496.9-178z" />
                                </svg>
                            </i>
                            Enviar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>