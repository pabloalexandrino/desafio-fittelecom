#Sobre o desenvolvimento

Fiz durante a madrugada, ouvindo músicas aleatórias no deezer.
Comecei lendo sobre RestFul e JSON, procurei uns códigos no google, e entendi melhor.
No lugar de usar as imagens, optei por cadastrar as informações no banco de dados, pois assim seria mais fácil de alterar valores, planos, etc, se fosse seguir o modelo proposto.
Após, criei um HTML padrão e importei o CSS de bootstrap e fontawesome, além do Jquery.
Criei a base de 1 produto e resolvi criar o css próprio da página, onde escolhi o tamanho e cor das fontes.
Em seguida, criei o menu (padrão do bootstrap) e criei um JS para fazer a busca, proporcionada pelo input na navbar.
Cada produto tem uma id. Essa id é baseada no nome do produto, substuindo os espaços por hífens(-), e deixando o texto em letras minúsculas.

Fiz uma função baseada em'onkeyup' no arquivo main.js, dentro de assets/javascript, para manusear o resultado da busca na página.
Se o campo de busca estiver vazio, ele retorna todos os resultados. Caso contrário, ele procura a STRING digitada dentro do ID do produto. Se existir, ele remove todos os outros, deixando apenas os produtos que contém no ID, a palavra-chave digitada.

FIM
