🛠️ Tecnologias e Arquitetura

Este projeto é um sistema de suporte desenvolvido com foco em fundamentos de desenvolvimento web:

    Backend: PHP (Arquitetura funcional com separação de responsabilidades).

    Frontend: HTML5 e Framework Bootstrap para um design responsivo e moderno.

    Banco de Dados: MySQL com persistência de dados via PDO para maior segurança contra SQL Injection.

🗄️ Estrutura do Banco de Dados

Para facilitar a configuração do ambiente, o repositório inclui um script SQL completo que realiza:

    A criação de toda a estrutura relacional (tabelas e chaves estrangeiras).

    O povoamento (seeding) de dados iniciais para testes imediatos das funcionalidades.

🚀 Sugestões de Evolução (Roadmap)

Se você deseja levar este projeto para o próximo nível, aqui estão algumas implementações recomendadas:
1. Autenticação e Níveis de Acesso

Implementar um sistema de Login seguro para identificar quem está abrindo o chamado. Isso permite vincular cada solicitação a um usuário específico, criando um histórico personalizado.
2. Painéis Administrativos (ACL)

Criar uma separação de permissões no sistema:

    User View: Onde o cliente pode abrir chamados e acompanhar o status dos seus pedidos.

    Admin Dashboard: Uma área restrita para moderadores gerenciarem, responderem e encerrarem os chamados pendentes.

3. Segurança Avançada

Uso de sessões ($_SESSION) para proteger rotas e garantir que apenas usuários autenticados acessem as páginas de formulários.