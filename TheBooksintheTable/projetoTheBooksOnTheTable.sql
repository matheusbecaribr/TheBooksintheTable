CREATE DATABASE thebooksonthetable;
USE thebooksonthetable;

CREATE TABLE usuario(
	rm INT PRIMARY KEY NOT NULL,
    nome VARCHAR(60),
    email VARCHAR(90),
    dt_nascimento DATE,
    genero CHAR(1),
    telefone VARCHAR(45),
    senha CHAR(20),
    perfil VARCHAR(120),
    obs VARCHAR(200),
    status_user VARCHAR(100),
    adm BOOL
);

CREATE TABLE autor(
	cd INT PRIMARY KEY NOT NULL auto_increment,
    nm_autor VARCHAR(60)
);

CREATE TABLE genero(
	cd INT PRIMARY KEY NOT NULL auto_increment,
    nome VARCHAR(80)
);

CREATE TABLE editora(
	cd INT PRIMARY KEY NOT NULL auto_increment,
    nm_editora VARCHAR(80)
);

CREATE TABLE emprestimo(
	cd INT PRIMARY KEY NOT NULL,
    dt_emprestimo DATE,
    dt_previsao DATE,
    status_emprestimo VARCHAR(90),
    dt_devolução DATE,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario (rm)
); 

CREATE TABLE livro(
	cd INT PRIMARY KEY NOT NULL auto_increment,
    isbn VARCHAR(100),
    titulo VARCHAR(200),
    ano INT(4),
    qtd INT,
    sinopse LONGTEXT,
    capa VARCHAR(200),
    classificacao VARCHAR(45),
    id_genero INT,
    id_editora INT,
    estado LONGTEXT,
    FOREIGN KEY (id_genero) REFERENCES genero (cd),
    FOREIGN KEY (id_editora) REFERENCES editora (cd)
);

CREATE TABLE livro_emprestimo(
	id_emprestimo INT,
    id_livro INT,
    nota INT(1),
    FOREIGN KEY (id_livro) REFERENCES livro(cd),
    FOREIGN KEY (id_emprestimo) REFERENCES emprestimo(cd)
);

CREATE TABLE favorito(
	cd INT PRIMARY KEY NOT NULL,
    id_usuario INT,
    id_livro INT,
    FOREIGN KEY(id_usuario) REFERENCES usuario(rm),
    FOREIGN KEY(id_livro) REFERENCES livro(cd)
);

CREATE TABLE fila(
	 cd INT PRIMARY KEY NOT NULL,
     id_livro INT,
     id_usuario INT,
     FOREIGN KEY (id_usuario) REFERENCES usuario(rm),
     FOREIGN KEY (id_livro) REFERENCES livro(cd)
);

CREATE TABLE autor_livro(
	id_livro INT,
    id_autor INT,
    FOREIGN KEY (id_livro) REFERENCES livro(cd),
    FOREIGN KEY (id_autor) REFERENCES autor(cd)
);