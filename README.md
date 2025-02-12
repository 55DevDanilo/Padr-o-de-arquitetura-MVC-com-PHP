# 📌 Projeto MVC com PHP e Composer

Este projeto implementa uma arquitetura **MVC (Model-View-Controller)** organizada com o uso do **Composer** para carregamento automático das classes. Ele estrutura os arquivos em **controladores**, **modelos de acesso ao banco de dados** e **telas de exibição**, garantindo um código mais modular e escalável.

---

## 🏗️ Estrutura do Projeto

1. **Início do Projeto**  
   - O projeto inicia no diretório **público**, onde o arquivo `index.php` chama o `autoload.php` do Composer.  
   - A classe `Route` é instanciada automaticamente, iniciando a aplicação.

2. **Gerenciamento de Rotas**  
   - A classe `Route` contém um **array de rotas**, associando URLs a scripts e ações.  
   - `Route` herda de `Bootstrap`, que interpreta a URL e chama o **método correspondente** no `IndexController`.

3. **Controle e Ação**  
   - O `IndexController` recebe a rota e executa a ação correspondente.  
   - Ele acessa os **modelos do banco de dados** para obter informações dinâmicas.  
   - As informações são armazenadas no atributo `$this->view->dados` e renderizadas na **view correta**.

4. **Modelo e Banco de Dados**  
   - A classe `Container` instancia o modelo correto e retorna um **objeto PDO** já conectado ao banco de dados.  
   - `Container` herda de `Connection`, que gerencia a conexão e trata erros.  
   - Os modelos executam consultas SQL e retornam os dados necessários.

5. **Renderização das Views**  
   - A classe `Action` gerencia a exibição das páginas e layouts.  
   - O método `render()` carrega o **layout e a view** solicitados.  
   - O método `content()` extrai o caminho correto da view e insere o conteúdo dinâmico.

---

## 📌 Principais Tecnologias Utilizadas

- **PHP** – Back-End estruturado em **MVC**  
- **Composer** – Gerenciamento de dependências e **autoload**  
- **PDO (PHP Data Objects)** – Conexão segura com o banco de dados  
- **HTML, PHTML** – Templates dinâmicos para as views  

---

## 🎯 Objetivo do Projeto
Este projeto foi desenvolvido como prática para consolidar o conhecimento sobre **MVC em PHP**, utilizando **Composer** e **boas práticas de organização de código**. Ele demonstra como estruturar um projeto de forma modular e escalável, separando a lógica de negócio da camada de apresentação.

> 📌 *Resumo baseado no comentário do aluno Josias Buday na Aula 533.*
