<?php 
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CAENS | Cadastro de Professor</title>

    <link rel="stylesheet" href="../../css/geral/import.css">

</head>
<body id="cadastro-professor">
    <header class="caens-bg cor-01">
        <div class="container caens-header">
            
            <span>CAENS</span>

            <nav class="caens-nav f-bold-400">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Registros</a></li>
                </ul>
            </nav>
         </div>
    </header>

    <section class="titulo-pagina-bg">
        <div class="container">
            <h1>Cadastro de Professor</h1>
        </div>
    </section>


    <main class="main-cadastro-professor">
        <form action="../../php/php/professorHelper.php" method="POST" name="formCad" target="_self" class="main-cadastro-professor-form-container container" onsubmit="return adicionarDados()">
        <input style="display: none" name="tipo" id="tipo" type="text" value="cadastrar">
            <div class="main-cadastro-professor-form cor-v1">
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome-professor" placeholder="Nome do professor">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="text" name="senha" id="senha-professor" placeholder="Senha">
                </div>
                <div>
                    <label for="senha1">Repita a senha</label>
                    <input type="text" name="senha1" id="repita-senha-professor" placeholder="Senha">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email-professor" placeholder="Email">
                </div>
                <div>
                    <label for="email1">Repita o email</label>
                    <input type="text" name="email1" id="repita-email-professor" placeholder="Email">
                </div>
                
                <div class="siap-container">
                    <label for="siap-professor">SIAP</label>
                    <input type="text" name="cod_siap" id="siap-professor" placeholder="Registro SIAP">
                </div>

                <div class="turmas-ministradas-container">
                    <!--<label>Turmas Ministradas</label>
                    <div class="turmas-ministradas-grid">
                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-111" id="turma-111">
                            <label for="turma-111">111</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-112" id="turma-112">
                            <label for="turma-112">112</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-121" id="turma-121">
                            <label for="turma-121">121</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-122" id="turma-122">
                            <label for="turma-122">122</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-131" id="turma-131">
                            <label for="turma-131">131</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-132" id="turma-132">
                            <label for="turma-132">132</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-611" id="turma-611">
                            <label for="turma-611">611</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-612" id="turma-612">
                            <label for="turma-612">612</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-621" id="turma-621">
                            <label for="turma-621">621</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-622" id="turma-622">
                            <label for="turma-622">622</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-631" id="turma-631">
                            <label for="turma-631">631</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-632" id="turma-632">
                            <label for="turma-632">632</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-711" id="turma-711">
                            <label for="turma-711">711</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-712" id="turma-712">
                            <label for="turma-712">712</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-721" id="turma-721">
                            <label for="turma-721">721</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-722" id="turma-722">
                            <label for="turma-722">722</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-731" id="turma-731">
                            <label for="turma-731">731</label>
                        </div>

                        <div>
                            <input type="checkbox" name="turmas-ministradas" value="turma-732" id="turma-732">
                            <label for="turma-732">732</label>
                        </div>
                        
                    </div> 
                    
                    <div class="botao-registrar">
                        <a href="#" class="botao-2">Registrar horários</a>
                    </div>-->
                </div>
            </div>

            <!--<button class="main-cadastro-professor-form-botao up botao-1 f-bold-600 cursor-pointer">Salvar</button>-->
            <input type="submit" class="main-cadastro-professor-form-botao up botao-1 f-bold-600 cursor-pointer" value="Enviar">
        </form>

    </main>


</body>
</html>
