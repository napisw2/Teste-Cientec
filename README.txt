Sistema de Consulta de NIS
Este é um sistema simples para consulta e criação de registros de NIS (Número de Identificação Social). 
O sistema permite aos usuários consultar um NIS existente no banco de dados ou criar um novo registro.

Requisitos:
PHP 7.x ou superior
MySQL

Configuração do Banco de Dados:
Antes de usar o sistema, você precisará configurar o banco de dados MySQL. Siga as instruções abaixo para criar a tabela necessária:

Execute o seguinte SQL para criar a tabela users no seu banco de dados:

CREATE TABLE `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(250) NOT NULL DEFAULT '0',
    `nis` VARCHAR(11) NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `nis` (`nis`)
);

Espero que tenham uma boa experiência observando este teste,foi um prazer poder participar.

Considerações finais: Eu não usei nenhum tipo de framework por não saber se era contra as regras do teste,então fiz uma estrutura simples e totalmente funcional.Todos 
os frameworks e linguagens que eu sei usar se encontram no meu currículo,que também estarei enviando. Obrigado !!