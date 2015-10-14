CREATE TABLE Estante (
idEstante int PRIMARY KEY,
numeroLivros int
);

CREATE TABLE livroEtiquetado (
idEtiqueta varchar(11),
tombo int,
idEstante int,
autor varchar(30),
titulo varchar(30),
PRIMARY KEY(IdEtiqueta,Tombo),
FOREIGN KEY(idEstante) REFERENCES estante (idEstante)
);