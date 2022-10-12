DROP TABLE IF EXISTS imagens;
DROP TABLE IF EXISTS artigos;
DROP TABLE IF EXISTS categorias;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS inicio;
DROP TABLE IF EXISTS perc_academico;
DROP TABLE IF EXISTS academico;
CREATE TABLE users (
    id INT PRIMARY KEY Auto_Increment,
    name VARCHAR(50),
    pass VARCHAR(50)
);

CREATE TABLE inicio (
    id INT PRIMARY KEY Auto_Increment,
    titulo VARCHAR(50),
    p_1 TEXT,
    p_2 TEXT,
    img VARCHAR(50)
);

CREATE TABLE academico (
    id INT PRIMARY KEY Auto_Increment,
    titulo VARCHAR(50),
    texto TEXT,
    sub_titulo VARCHAR(50),
    ano VARCHAR(50)
);

CREATE TABLE perc_academico (
    id INT PRIMARY KEY Auto_Increment,
    titulo VARCHAR(50),
    texto TEXT
);

CREATE TABLE categorias (
    id INT PRIMARY KEY Auto_Increment,
    name VARCHAR(50),
    icon_name VARCHAR(50),
    visibility BIT DEFAULT 1
);

CREATE TABLE artigos(
    id INT PRIMARY KEY Auto_Increment,
    titulo VARCHAR(255) UNIQUE,
    descricao TEXT,
    desenvolvimento TEXT,
    data DATE,
    categoria_id INT,
    contador INT,
    visibility BIT DEFAULT 1,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

CREATE TABLE imagens(
    id INT PRIMARY KEY Auto_Increment,
    nome VARCHAR(50),
    artigo_id INT,
    visibility BIT DEFAULT 1,
    FOREIGN KEY (artigo_id) REFERENCES artigos(id)
);

INSERT INTO users(name, pass) Values ('admin','pass');
INSERT INTO categorias(name,icon_name) Values 
('HOBBIES','fa-puzzle-piece'),
('VIAGENS','fa-plane'),
('FILMES E SÉRIES','fa-film'),
('OUTRAS','fa-heart');

INSERT INTO artigos (titulo, descricao, desenvolvimento,data, categoria_id,contador) VALUES
('Maggie','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),4,2),
('Novo desafio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),4,2),
('Skills Digital 2021','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),4,2),
('Leitura Corporal','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),4,2),

('Interstellar','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),3,2),
('Alone','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),3,2),
('Peaky Blinders','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),3,2),
('The 100','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),3,2),
('The Last Kingdom','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),3,2),
('Uncharted','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),3,2),

('Ericeira','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),2,2),
('Madrid','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),2,2),
('Madeira','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),2,2),
('Milão','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),2,2),
('Roma','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),2,2),
('Santorini','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),2,2),

('Natação','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),1,2),
('Dog Walker','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),1,2),
('Ginásio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),1,2),
('Leitura','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),1,2),
('Fotografia','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', Now(),1,2);

INSERT INTO imagens (nome, artigo_id) VALUES
('i6.png',6),
('i5.png',5),
('i7.png',7),
('i8.png',8),
('i9.png',9),
('i10.png',10),

('i18.png',18),
('i21.png', 21),
('i19.png',19),
('i20.png',20),
('i17.png',17),

('i4.png',4),
('i1.png',1),
('i2.png',2),
('i3.png',3),

('i11.png',11),
('i13.png',13),
('i12.png',12),
('i14.png',14),
('i15.png',15),
('i16.png',16);


INSERT INTO inicio (titulo,p_1,p_2,img) VALUES
('Sobre Mim','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
'Sed ullamcorper morbi tincidunt ornare massa eget. Nunc mattis enim ut tellus elementum sagittis vitae et. Amet nulla facilisi morbi tempus iaculis urna id volutpat lacus. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Consequat semper viverra nam libero justo laoreet sit amet cursus. Sit amet tellus cras adipiscing enim eu turpis egestas. Maecenas ultricies mi eget mauris pharetra et ultrices. Arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc. Mauris augue neque gravida in fermentum et. Vulputate ut pharetra sit amet aliquam id diam. Ornare lectus sit amet est placerat.',
'filomena.png');

INSERT INTO perc_academico (titulo,texto) VALUES
('Percurso Académico','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl suscipit adipiscing bibendum est ultricies. Lorem mollis aliquam ut porttitor leo a diam sollicitudin. At augue eget arcu dictum varius duis. Neque ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Turpis massa tincidunt dui ut ornare lectus sit. Rhoncus mattis rhoncus urna neque viverra. Tincidunt ornare massa eget egestas purus viverra accumsan in. Orci sagittis eu volutpat odio facilisis mauris. Dictum varius duis at consectetur lorem donec massa sapien.');

INSERT INTO academico (titulo, texto, sub_titulo, ano) VALUES
('Licenciatura em Biologia','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec nam aliquam sem et tortor consequat. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Suscipit adipiscing bibendum est ultricies integer quis auctor elit sed. Mauris nunc congue nisi vitae suscipit tellus. Cras adipiscing enim eu turpis egestas pretium. Id cursus metus aliquam eleifend mi in nulla posuere sollicitudin. Dictum varius duis at consectetur lorem. Ut tristique et egestas quis ipsum. Scelerisque eu ultrices vitae auctor eu. Id leo in vitae turpis massa sed elementum. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Velit egestas dui id ornare arcu.
Luctus accumsan tortor posuere ac ut consequat. Consequat interdum varius sit amet mattis. Diam ut venenatis tellus in metus vulputate eu scelerisque. Accumsan sit amet nulla facilisi morbi tempus. Hendrerit dolor magna eget est. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Ut pharetra sit amet aliquam id diam maecenas ultricies. Tellus orci ac auctor augue mauris augue. Duis convallis convallis tellus id interdum velit laoreet. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus.',
'Licenciatura','2018'),

('Mestrado em Ciências Forenses','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec nam aliquam sem et tortor consequat. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Suscipit adipiscing bibendum est ultricies integer quis auctor elit sed. Mauris nunc congue nisi vitae suscipit tellus. Cras adipiscing enim eu turpis egestas pretium. Id cursus metus aliquam eleifend mi in nulla posuere sollicitudin. Dictum varius duis at consectetur lorem. Ut tristique et egestas quis ipsum. Scelerisque eu ultrices vitae auctor eu. Id leo in vitae turpis massa sed elementum. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Velit egestas dui id ornare arcu.
Luctus accumsan tortor posuere ac ut consequat. Consequat interdum varius sit amet mattis. Diam ut venenatis tellus in metus vulputate eu scelerisque. Accumsan sit amet nulla facilisi morbi tempus. Hendrerit dolor magna eget est. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Ut pharetra sit amet aliquam id diam maecenas ultricies. Tellus orci ac auctor augue mauris augue. Duis convallis convallis tellus id interdum velit laoreet. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus.',
'Mestrado','2020'),

('Gestão de Redes e Sistemas Informaticos','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec nam aliquam sem et tortor consequat. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Suscipit adipiscing bibendum est ultricies integer quis auctor elit sed. Mauris nunc congue nisi vitae suscipit tellus. Cras adipiscing enim eu turpis egestas pretium. Id cursus metus aliquam eleifend mi in nulla posuere sollicitudin. Dictum varius duis at consectetur lorem. Ut tristique et egestas quis ipsum. Scelerisque eu ultrices vitae auctor eu. Id leo in vitae turpis massa sed elementum. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Velit egestas dui id ornare arcu.
Luctus accumsan tortor posuere ac ut consequat. Consequat interdum varius sit amet mattis. Diam ut venenatis tellus in metus vulputate eu scelerisque. Accumsan sit amet nulla facilisi morbi tempus. Hendrerit dolor magna eget est. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Ut pharetra sit amet aliquam id diam maecenas ultricies. Tellus orci ac auctor augue mauris augue. Duis convallis convallis tellus id interdum velit laoreet. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus.',
'CET','2021'),

('Curso Web and Mobile Developement','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec nam aliquam sem et tortor consequat. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Suscipit adipiscing bibendum est ultricies integer quis auctor elit sed. Mauris nunc congue nisi vitae suscipit tellus. Cras adipiscing enim eu turpis egestas pretium. Id cursus metus aliquam eleifend mi in nulla posuere sollicitudin. Dictum varius duis at consectetur lorem. Ut tristique et egestas quis ipsum. Scelerisque eu ultrices vitae auctor eu. Id leo in vitae turpis massa sed elementum. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Velit egestas dui id ornare arcu.
Luctus accumsan tortor posuere ac ut consequat. Consequat interdum varius sit amet mattis. Diam ut venenatis tellus in metus vulputate eu scelerisque. Accumsan sit amet nulla facilisi morbi tempus. Hendrerit dolor magna eget est. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Ut pharetra sit amet aliquam id diam maecenas ultricies. Tellus orci ac auctor augue mauris augue. Duis convallis convallis tellus id interdum velit laoreet. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus.',
'Curso Progamação','Presente');