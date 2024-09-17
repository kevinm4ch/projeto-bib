
# Trabalho de Programação - Desenvolvimento de Sistema Web em PHP

## Descrição:

Desenvolva um sistema web utilizando a linguagem PHP que permita o gerenciamento de uma biblioteca universitária. O objetivo do trabalho é avaliar a aplicação de conceitos de programação orientada a objetos (POO), manipulação de dados em um banco de dados MySQL, e integração com o front-end para fornecer uma interface de uso ao usuário final.

## Requisitos do Sistema:

1. **Cadastro de Livros:**
   - O sistema deve permitir o cadastro de livros com os seguintes campos: título, autor, editora, ano de publicação, e quantidade de exemplares disponíveis.
   - Deve ser possível editar e excluir cadastros de livros.

2. **Cadastro de Usuários:**
   - O sistema deve permitir o cadastro de usuários com os seguintes campos: nome, e-mail, matrícula, e tipo de usuário (aluno ou professor).
   - Deve ser possível editar e excluir cadastros de usuários.

3. **Empréstimos de Livros:**
   - O sistema deve permitir que usuários (alunos ou professores) realizem empréstimos de livros.
   - Um livro só pode ser emprestado se houver exemplares disponíveis.
   - Deve ser possível registrar a devolução do livro, atualizando o número de exemplares disponíveis.
   - O sistema deve armazenar o histórico de empréstimos para cada usuário.

4. **Autenticação de Usuários:**
   - Implementar um sistema de login e logout para usuários.
   - Somente usuários autenticados podem realizar o cadastro e empréstimo de livros.
   - Deve haver dois níveis de acesso: administrador (que pode cadastrar livros e usuários) e usuário comum (que pode apenas realizar empréstimos).

5. **Relatórios:**
   - O sistema deve gerar um relatório simples com a lista de todos os livros emprestados, especificando os usuários que realizaram os empréstimos e as datas.

6. **Validação e Segurança:**
   - Todas as entradas de dados devem ser validadas para evitar a inserção de dados inválidos ou maliciosos.
   - O sistema deve estar protegido contra SQL Injection e outras vulnerabilidades comuns.

## Critérios de Avaliação:

- Implementação correta dos requisitos.
- Uso adequado de programação orientada a objetos (POO).
- Integração com banco de dados MySQL para armazenamento de dados.
- Interface de usuário funcional e intuitiva, implementada em HTML/CSS.
- Boa prática de codificação e organização do código.
- Comentários explicativos no código.
- Testes realizados para verificar o funcionamento do sistema.
