
# ✅ To Do List

Pequeno projeto pessoal de website para gerenciamento de tarefas com scripts PHP. 

Este website foi construído com intenção de estudar tratamento de dados, operações MySQL e atualizações de interface usando a linguagem de programação PHP de forma pura, sem bibliotecas ou frameworks.

Portanto, o código pode parecer um pouco "dirty and quick" 😅, mas esse projeto me ajudou a entender melhor sobre desenvolvimento para web, principalmente na área de back-end.

## ⚙️ Funcionalidades

O website apresenta as seguintes funcionalidades:
- ☑️ Cadastro e exclusão de tarefas
- 🔍 Visualização de tarefas por filtro
- 📊 Visualização de tarefas por gráfico
- 👥 Cadastro e exclusão de funcionários
- 📨 Envio de avisos para funcionários
- 🔒 Modos de acesso para funcionário e administrador

## 🗃 Como visualizar?
O repositório apresenta a seguinte estrutura interna:
- 📄 ***index.php*** : arquivo inicial que é aberto quando você entra no site. Apenas redireciona o usuário para outra página.
- 📄 ***bancodedados.sql*** : arquivo que guarda o banco de dados do website. Deve ser executado por um SGBD relacional para que o site funcione.
- 📄 ***favicon-32x32.png*** : ícone que aparece na aba do navegador. 
- 📁 **conexao** : diretório que guarda o arquivo de conexão com o banco de dados. 
- 📁 **back** : diretório que guarda os arquivos responsáveis por tratamento de dados e operação com banco de dados. 
- 📁 **pages** : diretório que guarda os arquivos *.php* para visualização das páginas do website e *.css* para estilização das interfaces.

Aqui vai um passo a passo para visualizar as atividades:

1. Baixe este repositório.
2. Instale o PHP. Você pode usar [este](https://www.php.net/downloads.php) link.
3. Instale o XAMPP. Você pode usar [este](https://www.apachefriends.org/pt_br/index.html) link.
4. Instale o HeidiSQL. Você pode usar [este](https://www.heidisql.com/download.php) link.
5. No painel de controle do XAMPP, você deve iniciar os serviços **Apache** e **MySQL**.
6. No gerenciador de sessões do HeidiSQL, você deve adicionar uma sessão usando o botão "Nova". A sessão deve possuir:
- Servidor/IP: **127.0.0.1**
- Usuário: **root**
- Nenhuma senha
7. Entre no repositório baixado e procure o arquivo *bancodedados.sql*
8. Abra o arquivo *.sql* com o programa HeidiSQL e execute o código usando **CTRL+A** e **F9**. Você também pode entrar na sessão do HeidiSQL e selecionar a opção *arquivo > executar arquivo SQL...* (isto deve baixar o banco de dados)
9. Copie ou recorte o repositório baixado.
10. Cole o repositório em *xampp\htdocs*. A pasta "htdocs" é o diretório padrão para visualização de projetos dentro da pasta de instalação do XAMPP. 
11. Abra o seu navegador padrão e digite *localhost* na barra de pesquisa. Você deve ser redirecionado para o diretório "htdocs" no seu computador, como se estivesse acessando um servidor on-line.
12. Navegue pela interface do servidor e selecione o repositório, então você provavelmente será redirecionado ao **index.php**, podendo visualizar o website.

## ⚠️ Primeiro acesso

Atualmente, o website não possui uma página de cadastro, **apenas de login**. Portanto, para conseguir entrar nas demais páginas, você precisa inserir um registro inicial diretamente no banco de dados.

Para isso, entre no HeidiSQL, depois na sessão que você criou e no banco de dados **todolist** baixado. Após, procure a tabela **equipe**, selecione a aba **dados** e clique com o botão direito do mouse. Por fim, escolha a opção **inserir registro** e adicione os dados para o usuário inicial. 

📢 ***Esse problema será resolvido futuramente, com a adição da página de cadastro***

## ⚠️ Gráfico inacabado

Na página **Nova Tarefa**, a seção **Controle de Tarefas** possui um gráfico será finalizado futuramente. 


## ✏️ Meu aprendizado

- Funcionamento das sessões PHP
- Componentização de elementos visuais
- Criação de elementos visuais com JS
- Diferentes tipos de consultas SQL


## Tecnologias utilizadas

[![My Skills](https://skillicons.dev/icons?i=php,html,css,js,mysql)](https://skillicons.dev)

## 📃 Licença

- [MIT](https://choosealicense.com/licenses/mit/)

## 👤 Sobre mim
- 👤 Guilherme Shimada Pereira ([guilhermexmada](https://github.com/guilhermexmada))
- 🎓 Técnico em Desenvolvimento de Sistemas (2024)
- 🎓 Cursando Desenvolvimento de Software Multiplataforma (até 2027!) 
- 🚀 Rumo à Cibersegurança!

## 🔗 Referências

- XAMPP: [apachefriends.org](https://www.apachefriends.org/pt_br/index.html)
- PHP: [php/downloads](https://www.php.net/downloads.php)
- HeidiSQL: [heidisql/download](https://www.heidisql.com/download.php)
- Ícones das tecnologias: [tandpfun/skill-icons](https://github.com/tandpfun/skill-icons)
- Emojis: [piliapp/emoji](https://getemoji.com/)
