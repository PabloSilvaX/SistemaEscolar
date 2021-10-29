<div class="row col-12 mx-auto justify-content-center mt-4" id="etapas-registro">
    <span class="border etapa-acesa mb-1"></span>
    <span class="border etapa-apagada mb-1 mx-2"></span>
    <span class="border etapa-apagada mb-1"></span>
</div>

<div class="container mt-3 mb-2 col-12 col-lg-5 mb-5">
    <div class="card" id="card-login">
        <div class="card-body">
            <h3 class="card-title text-center text-white">Matricule-se</h3>
            <div class="imagem text-center">
            <img src="<?= $base_url ?>assets/img/icone-matricula.png" alt="" width="100px">
            </div>

            <form action="" method="post"></form>
            <p class="card-text">
                <div class="input-text">
                    <label for="nome"><i class="fas fa-user fa-lg text-white"></i></label>
                    <input type="text" class="input-login col-10 col-md-8 col-lg-8" name="Nome" id="nome" placeholder="Nome Completo" autocomplete="off">
                </div>
                <div class="input-text">
                    <label for="email"><i class="fas fa-envelope fa-lg text-white"></i></label>
                    <input type="text" class="input-login col-10 col-md-8 col-lg-8" name="email" id="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="input-text">
                    <label for="telefone"><i class="fas fa-phone fa-lg text-white"></i></label>
                    <input type="text" class="input-login col-10 col-md-8 col-lg-8" name="telefone" id="telefone" placeholder="Telefone / Celular" autocomplete="off">
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