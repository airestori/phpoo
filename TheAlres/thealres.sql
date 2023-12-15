create database thealres_phpoo2;
use thealres_phpoo2;
create table usuario (id int 
auto_increment primary key,
nome varchar(255),
email varchar(255),
senha varchar(255));
select * from usuario;

CREATE TABLE produtos (
    id INT NOT NULL AUTO_INCREMENT, 
    tipo VARCHAR(45) NOT NULL, 
    nome VARCHAR(45) NOT NULL, 
    descricao VARCHAR(90) NOT NULL, 
    imagem VARCHAR(80) NOT NULL, 
    preco DECIMAL (5,2) NOT NULL, 
PRIMARY KEY (id));

INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Almoço', 'Bife', 'Bife, arroz com feijão e uma deliciosa batata frita', 'bife.jpg', '27.90');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Almoço', 'Filé de peixe', 'Filé de peixe salmão assado, arroz, feijão verde e tomate.', 'prato-peixe.jpg', '24.99');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Almoço', 'Frango', 'Saboroso frango à milanesa com batatas fritas, salada de repolho e molho picante', 'prato-frango.jpg', '23.00');
INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES ('Almoço', 'Fettuccine', 'Prato italiano autêntico da massa do fettuccine com peito de frango grelhado', 'fettuccine.jpg', '22.50');

/* update produtos set imagem = 'img/bife.jpg' where id = 5;
update produtos set imagem = 'img/prato-peixe.jpg' where id = 6;
update produtos set imagem = 'img/prato-frango.jpg' where id = 7;
update produtos set imagem = 'img/fettuccine.jpg' where id = 8;
*/
select * from produtos;
#delete from produtos where id >33;
update produtos set imagem = concat("../img/",imagem) where id= 33;

select * from usuario;

SET SQL_SAFE_UPDATES = 0;
alter table usuario add perfil varchar(50) default(0);
update usuario set perfil = 'admin' where email = 1;