# Desafio Fittelecom

Tentei trabalhar com a arquitetura MVC, ou o mais próximo disso.
Utilizei Jquery, Bootstrap e FontAwesome.

O banco de dados fittelecom.sql inclui a base de dados necessária para o funcionamento do código.
Na tabela está o nome do plano, taxa de upload e download e valor do produto.

Dentro da pasta VIEW está os assets, a API que retorna o JSON em listar.php, e os demais arquivos preparados para CRUD.

O .htaccess está preparado para a navegação com URL amigável, passando por GET a página que será acessada, por exemplo:

http://site.com/ (acessara a home.php dentro da pasta view)

http://site.com/contact (verifica se o contact.php existe dentro da pasta view, se existir, inclui e exibe)

Na pasta model está as classes base para o funcionamento da aplicação.
Na pasta control, está a classe para manutenção da API (create, read, update, delete).
