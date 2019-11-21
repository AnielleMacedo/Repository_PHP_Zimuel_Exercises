OBSERVACOES SOBRE O PROGRAMA:

1) Para usar o software no linux nao esquecer de colocar a password: 1234 q escolhi para o my sql c username root.Fazer isso no file conexao.php

2) Quando for abrir na escola, lembre de importar o file portal.sql no database phpmyadmin.Antes de importa-lo voce deve baixar a interface de phpmyadmin no ubuntu atraves dos comandos escritos no drive (prva php).Lembre que vc importara as tabelas entao crie uma database vazio chamado portal, clique nele e dali faca o import.

3) Lembre de organizar o path das cartellas pq da um warning qdo importa o index.php na page articolo.Ve aquele 1 q aparece no fim da imagem.

4) A codificacao correta de caracteres no phpmyadmin so funcioona qddo primeiro coloca utf8_general_ci e depois passa para latin1_general_ci.

5) Transformar o projeto em MVC.

6) colocar no github.

----------------------------------------------------------------------------------------------------------Steps MVC:
1 - desenvolver a estrutura do site, onde nela tera uma area dinamica separada por {{ }} onde dentro colocamos o que queremos, seja a home,  sejam os artigos, etc

2- cria a pagina com nome index.php (pagina que è carregada automaticamenete pelo navegador) que recebe a requisicao get e joga pro core o qual vai decidir qual pagina controller ira abrir

3- desenvolver paginas dinamicas Core e Controller

4- Inserir dados no database (tabela articolo) e criar a classe de conexao ao DB

5- Criar classe Model de Articolo

obs: Padrao MVC = quando acesso 1 pagina do meu site ele vai cair numa controller (no caso HomeController) a qual executara seu metodo index e chamara um Model(ex.Articolo) que sera encarregado dde se conectar ao banco de dados retornando essas informacoes que Controller esta pedindo.
Com essas informacoes (registros do db) em maos a Controller manda todas elas pras Views as quais exibirao todos os articoli.

6- transmitir os registros do db pras views usando Twig (template engine p php) sem misturar html e php. Pra instalar o twig por meio do composer:
cria o file composer.json vazio
faz o download de composer.phar e cola ele pasta raiz do seu projeto
https://packagist.org/
abre o gitbash na pasta raiz e digita: php composer.phar install
No site packagist procura or twig e lanca o comando no bash: composer require twig/twig ele ja az o require no composer.json com a versao atual de twig automaticamente.

Na documentacao twig for developers vc ve como usar esse template:
https://twig.symfony.com/doc/3.x/api.html