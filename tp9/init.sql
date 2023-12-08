CREATE TABLE famille (idfam VARCHAR(128) NOT NULL , designationf VARCHAR(128) NOT NULL , PRIMARY KEY (idfam)) ENGINE = InnoDB; 


CREATE TABLE produit (idprod INT NOT NULL , idfam VARCHAR(128) NOT NULL , designation_prod VARCHAR(128) NOT NULL , quantite_stock INT NOT NULL , prix_unitaire DECIMAL(32) NOT NULL , PRIMARY KEY (idprod), INDEX (idfam)) ENGINE = InnoDB; 


ALTER TABLE produit ADD CONSTRAINT idfam FOREIGN KEY (idfam) REFERENCES famille(idfam) ON DELETE CASCADE ON UPDATE CASCADE; 


CREATE TABLE administrateur (id_admin INT NOT NULL , login VARCHAR(128) NOT NULL , mot_de_passe VARCHAR(128) NOT NULL , PRIMARY KEY (id_admin)) ENGINE = InnoDB; 