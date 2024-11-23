<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div id="imagem-esquerda">
            <div> <img src="imgs/Instituto_Federal_Baiano_-_Marca_Vertical_2015.svg.png" alt=""></div>
        </div>
        <div><h1 id="titulo-form"> Formulário </h1></div>
        <div id="imagem-direita">
            <div> <img src="imgs/psw-ogo.png" alt=""></div>
        </div>
    </header>
    <div id="reajuste">
        <nav>
            <ul>
                <li class="ativo"><a href="#home">Início</a></li>
                <li class="desativo"><a href="#home">Perfil</a></li>
                <li class="desativo"><a href="#news">Notícias</a></li>
                <li class="desativo"><a href="#contact">Contato</a></li>
                <li class="desativo"><a href="#about">Sobre</a></li>
            </ul>
        </nav>
        <main>
            <div id="formulario">
                <div id="cabeca-formulario">
                    <div id="texto-esquerda">
                        <h2 id="titulo-secundario">▶ CRIE UMA CONTA</h2>
                    </div>
                    <div id="botao-direita"><input type="button" 
                    onclick="alert('Coloque seus dados no formulário rapaz')" value="o que faço?"></div>
                </div>
                <form action="./perfil.php" method="post">
                    <label for="nome_completo">Digite seu nome: </label>
                    <input type="text" name="nome" id="idnome" placeholder="Ex: monkey">

                    <label for="nome_completo">Digite seu sobrenome: </label>
                    <input type="text" name="sobrenome" id="idsobrenome" placeholder="Ex: D. Luffy">

                    <label for="nascimento">Insira sua data de nascimento: </label>
                    <input type="date" name="nascimento" id="idnascimento" max="<?=date('Y')?>-<?=date('m')?>-<?=date('d')?>"
                    title="Selecione uma data que seja antes de <?=date('d')?>/<?=date('m')?>/<?=date('Y')?>" 
                    value="<?=date('Y')?>-<?=date('m')?>-<?=date('d')?>">

                    <label for="genero">Qual seu Gênero? </label>
                    <select name="genero" id="idgenero">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="binario">Não binário</option>
                        <option value="outro"> Honda civic 2008 4 portas</option>
                    </select>

            <label for="telefone">Telefone: </label>
            <input type="tel" name="telefone" id="idtelefone" placeholder=" Ex: 77981122980">
            <label for="numero">Numero casa: </label>
            <input type="number" name="numero" id="idnumero" placeholder="Ex: 37">
            <label for="bairro">Bairro: </label>
            <input type="text" name="bairro" id="idbairro" placeholder="Ex: Monte azul">
            <label for="rua">Rua: </label>
            <input type="text" name="rua" id="idrua" placeholder="Ex: rua Gercino dantas">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="idemail" placeholder="Ex: tatadoggrau@gmail.com">
            <label for="CEP">CEP:</label>
            <input type="text" name="CEP" id="CEP" required pattern="\d{5}-\d{3}" placeholder="xxxxx-xxx">
            <label for="cpf"> CPF: </label>
            <input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="xxx.xxx.xxx-xx" title="Digite um CPF no formato: xxx.xxx.xxx-xx">
            <label for="senha"> nova senha: </label>
            <input type="password" name="senha" id="idsenha" placeholder="Ex: tatadosxebiu123">
            <div id="cor">
            <label for="cor">Selecione sua cor favorita:</label>
            <input type="color" name="cor">
            </div>
                    

        <div class="selecao">
                    <label for="linguagem">▶ Qual sua linguagem preferida? (>ou=1)</label>
                     <ul class="radio">
                           <li>
                               <input type="checkbox" id="idlinguagem_preferida1" name="linguagem_preferida1" value="python" class="caixa-maior">
                              <label for="linguagem_preferida1">Python</label>
                           </li>
                            <li>
                               <input type="checkbox" id="idlinguagem_preferida2" name="linguagem_preferida2" value="php" class="caixa-maior">
                            <label for="linguagem_preferida2">PHP</label>
                           </li>
                           <li>
                               <input type="checkbox" id="idlinguagem_preferida3" name="linguagem_preferida3" value="java" class="caixa-maior">
                            <label for="linguagem_preferida3">Java</label>
                           </li>
                         <li>
                             <input type="checkbox" id="idlinguagem_preferida4" name="linguagem_preferida4" value="C" class="caixa-maior">
                              <label for="linguagem_preferida4">C</label>
                           </li>
                       </ul>
        </div>

                    <div class="selecao" > 
                        <label for="bio">Escreva uma auto-biografia sobre você mano </label>
                        <textarea name="message" rows="4" placeholder="Ex: Meu nome é Talles e eu gosto de dormir, jogar qualquer
                        coisa e amo Jesus."></textarea>
                    </div>

                    <div id="alinhamento-de-botoes">
                        <input type="submit" value="Concluir">
                        <input type="reset" value="Reiniciar Formulário"

                >
                    </div>
                </form>
            </div>
        </main>
    </div>
    <footer>
        
        <div id="termo-logo">
            <div class="logo">
            
            </div>
            <div id="termo">
                <p>&copy; 2024 - Todos os direitos reservados a Talles Afonso</p>
            </div>
            
        </div>   
    </footer>
</body>
</html>