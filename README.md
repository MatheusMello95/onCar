# onCar

## Backend - CRUD de carros.

## Deve criar um banco de dados mysql com nome de "oncar".
## Tabela do banco de dados usar o script abaixo: 
CREATE TABLE carros (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
veiculo VARCHAR(30) NOT NULL,
modelo VARCHAR(30) NOT NULL,
ano INT (4),
descricao VARCHAR(255),
created DATETIME,
updated DATETIME)

## Routes
 * GET /veiculos
  * Listagem de veiculos
 * GET /veiculos/{$id}
  * Listagem do carro selecionado
 * POST /veiculos
  * Inserir novo carro
 * PUT /veiculos/{$id}
  * Alteração do veiculo
 * DELETE /veiculos/{$id}
  * Deletar veiculo
