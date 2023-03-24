# Instalação

## Pré-requisitos
Se você ainda não possui um ambiente local Apache com PHP e MySQL, use um dos seguintes links:
 - Windows: https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows
 - Linux: https://howtoubuntu.org/how-to-install-lamp-on-ubuntu
 - Mac: https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/
Além disso, você precisará instalar o Composer: https://getcomposer.org/doc/00-intro.md
E também o Node: https://nodejs.org/en/download

## Laravel
1. Baixe o zip do projeto e copie e cole na pasta do seu projeto ou clone o repositório com o comando no terminal `git clone https://github.com/SilvanMoura/petDevShop_laravel`.
2. Certifique-se de ter o Node e o Composer instalados localmente.
3.Execute o seguinte comando para baixar todas as dependências do projeto. `composer install`
4. Em seu terminal, execute `npm install`
5. Copie `.env.example` para `.env` e atualize as configurações (principalmente a configuração do banco de dados). Caso o arquvo `.env` não exista copie o arquivo `.env.example` e renomeie para `.env`.
6. Em seu terminal, execute `php crafting key:generate`
7. Execute `php crafts migration --seed` para criar as tabelas do banco de dados e propagar as funções e tabelas de usuários
8. Abra dois terminais dentro do projeto, no primeiro execute o comando `npm run dev` e no segundo o comando `php artisan serve`
9. Em seu navegador insira a url `http://localhost:8000/`;
