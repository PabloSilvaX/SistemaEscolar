<div class="text-center" id="etapas-registro">
    <div class="etapa-acesa"></div>
    <div class="etapa-apagada"></div>
</div>

<div class="container mt-5 mb-2 col-12 col-lg-5 mb-5">
    <div class="card" id="card-login">
        <div class="card-body">
            <h3 class="card-title text-center text-white">Matricule-se</h3>
            <div class="imagem text-center">
            <img src="<?= $base_url ?>assets/img/icone-matricula.png" alt="" width="100px">
            </div>

            <form action="" method="post"></form>
            <p class="card-text">
                <div class="input-text">
                    <label for="matricula"><i class="fas fa-graduation-cap fa-lg text-white"></i></label>
                    <input type="text" class="input-login col-10 col-md-8 col-lg-8" name="matricula" id="matricula" placeholder="Matricula" autocomplete="off">
                </div>
                <div class="input-text">
                    <label for="email"><i class="fas fa-envelope fa-lg text-white"></i></label>
                    <input type="text" class="input-login col-10 col-md-8 col-lg-8" name="email" id="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="input-text">
                    <label for="senha"><i class="fas fa-lock fa-lg text-white"></i></label>
                    <input type="text" class="input-login col-10 col-md-8 col-lg-8" name="senha" id="senha" placeholder="Senha" autocomplete="off">
                </div>
                
            </p>
            <div class="botao-login">
                <button type="button" id="botao-login" class="btn btn-secondary mb-2"><i class="fas fa-sign-in-alt"></i> Entrar</button>
                
                <a href="<?= $base_url ?>Matricula">
                    <button type="button" id="botao-login" class="btn btn-secondary mb-2">
                        <i class="fas fa-university"></i> Seja Aluno</button>
                </a>

            </div>
            </form>

        </div>
    </div>
</div>