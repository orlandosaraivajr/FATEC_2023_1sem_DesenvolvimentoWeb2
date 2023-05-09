## Segunda Avaliação DESENVOLVIMENTO WEB II



## Como Realizar esta avaliação ?

1. Crie um repositório no seu github com o nome "<b>FATEC_DES_WEB_2_2023_Avaliacao2</b>"
2. Publicar no Teams o repositório que será avaliado pelo professor Orlando.


##  Código

Crie um cadastro CRUD ( Create Read Update e Delete) para a temática vestibular.
 O cadastro de candidatos deve conter os campos:

-  Nome do candidato
-  RG ou CPF
-  Telefone
-  Campo booleano para oriundo de escola pública

Não é necessário login/logout. 

### 1- Classe com abstrações do banco de dados (40% da nota)
Vocẽ deve desenvolver uma classe em que o construtor conecte ao SGBD MySQL, o destrutor encerre a conexão e que tenha os métodos apropriados para realizar as operações CRUD do cadastro. Os nomes dos métodos e parâmetros ficam por sua conta.

Todas as credenciais para conexão com o banco de dados devem estar encapsuladas como atributos privados desta classe.

### 2- CRUD em ação (40% da nota)
Outro códigos PHP fará uso da classe desenvolvida por você. Este código não precisará saber detalhes sobre as operações em banco de dados. 

Operações necessárias:
-  Create => Cadastrar o candidato
-  Read => Relatório dos candidatos inscritos
-  Update => Permitir atualizar os dados do candidato, exceto o id (chave primária)
-  Delete => Permitir remover o cadastro do candidato

### 3- Documentação (20% da nota)
 Prepare um <b>README.md</b> com instruções de como replicar seu projeto e enviar o arquivo .SQL com o <i>dump</i> do MySQL para que seu código. 

- Tecnologias: PHP OO e SGBD MySQL.


## Critérios de avaliação

- Entregar todos os quesitos no prazo: 100% da nota.

- Entregar todos os quesitos com atraso aceitável: 80% da nota.

- Entregar todos os quesitos com atraso: 70% da nota.

- Entregar todos os quesitos fora prazo: 0% da nota.

## Prazo final

Serão considerados <b>no prazo</b> os projetos publicados até o dia 09 de maio de 2023.

Serão considerados <b>com atraso aceitável</b> os projetos publicados até o dia 10 de maio de 2023.

Serão considerados <b>com atraso</b> os projetos publicados até o dia 12 de maio de 2023.

Serão considerados <b>fora do prazo </b> os projetos publicados posterior a data do dia 12 de maio de 2023.

## Considerações Finais

Você pode consultar a documentação oficial, a documentação com o Zeal, os slides e códigos do repositório da nossa sala, e até mesmo conversar com colegas de sala.  
<b>Mas</b> não é permitido copiar o código sem entender o que fez (popular cola). Fica combinado que as atividades que forem cola serão zeradas na nota.