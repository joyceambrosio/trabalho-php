INSERT INTO 'usuario'('nome', 'usuario', 'senha') 
VALUES 
("Joyce Ambrosio", "joyce", '123456'),
("Milena Souza", "milena", '123456'),
("Thamires Gualandi", "thamires", '123456');



INSERT INTO 'cliente'('nome', 'cpf', 'dataNascimento', 'telefone', 'email', 'senha') 
VALUES 
("Geraldo Lúcio", "80928389090", 1965-11-01, "2899999999", "geraldo@email.com", "123456"),
("Vitor Andrade", "80928389090", 1965-11-01, "2899999999", "vitor@email.com", "123456"),
("Marli Oliveira", "80928389090", 1965-11-01, "2899999999", "marli@email.com", "123456"),
("Erick Ambrosio", "80928389090", 1965-11-01, "2899999999", "erick@email.com", "123456"),
("Sillas Mariano", "80928389090", 1965-11-01, "2899999999", "sillas@email.com", "123456"),
("Jessica Leal", "80928389090", 1965-11-01, "2899999999", "jessica@email.com", "123456"),
("Lucas Leal", "80928389090", 1965-11-01, "2899999999", "lucas@email.com", "123456"),
("Darcilia Penna", "80928389090", 1965-11-01, "2899999999", "darcilia@email.com", "123456");

INSERT INTO 'endereco'('idCliente', 'logradouro', 'numero', 'bairro', 'cep', 'cidade', 'uf') 
VALUES 
( 1, "Rua número 1 ", "1", "Bairro numero 1", "29500000", "Alegre", "ES"),
( 2, "Rua número 2 ", "2", "Bairro numero 2", "29500000", "Alegre", "ES"),
( 3, "Rua número 3 ", "3", "Bairro numero 3", "29500000", "Alegre", "ES"),
( 4, "Rua número 4 ", "4", "Bairro numero 4", "29500000", "Alegre", "ES"),
( 5, "Rua número 5 ", "5", "Bairro numero 5", "29500000", "Alegre", "ES"),
( 6, "Rua número 6 ", "6", "Bairro numero 6", "29500000", "Alegre", "ES"),
( 7, "Rua número 7 ", "7", "Bairro numero 7", "29500000", "Alegre", "ES"),
( 8, "Rua número 8 ", "8", "Bairro numero 8", "29500000", "Alegre", "ES");



INSERT INTO 'tipo'('nome', 'valor') 
VALUES 
("Informatica", 10.00),
("Saúde", 20.00),
("Limpeza", 15.00),
("Transporte", 10.00);


INSERT INTO 'servico'('nome', 'descricao', 'valor', 'idTipo') 
VALUES 
("Manutenção de Computadores", "Serviço de Manutenção de Computadores para Empresas", 300.00, 1),
("Manutenção de Computadores", "Serviço de Manutenção de Computadores para Pessoas Físicas", 150.00, 1),
("Manutenção de Celulares", "Conserto de celulares", 450.00, 1),
("Cuidador de Idosos", "Cuidador certificado para idosos", 850.00, 2),
("Faxina", "Limpeza de uma casa", 200.00, 2),
("Limpeza de quintal", "Limpeza de quintais e áreas abertas com remoção de entulhos", 400.00, 3),
("Mudança", "Transporte de móveis", 90.00, 4);


INSERT INTO 'disponibilidade'('idServico', 'data', 'status') 
VALUES ()


INSERT INTO 'venda'('idCliente', 'idServico', 'valorTotal', 'quantidadeItens') 
VALUES ()



