DROP DATABASE IF EXISTS toolsforever;
CREATE DATABASE toolsforever;

CREATE TABLE medewerker (
medewerkerId int NOT NULL AUTO_INCREMENT,
medewerkerWachtwoord varchar(16),
medewerkerGebruikersnaam varchar(16),
PRIMARY KEY (medewerkerId)
)ENGINE=InnoDB;
CREATE TABLE locatie (
  locatieId int NOT NULL AUTO_INCREMENT,
  locatieNaam varchar(16),
  PRIMARY KEY (locatieId)
)ENGINE=InnoDB;
CREATE TABLE fabrikant (
  fabrikantId int NOT NULL AUTO_INCREMENT,
  fabrikantNaam varchar(16),
  PRIMARY KEY (fabrikantId)
)ENGINE=InnoDB;
CREATE TABLE artikel (
  artikelId int NOT NULL AUTO_INCREMENT,
  artikelNaam varchar(16),
  fabrikantId int NOT NULL,
  PRIMARY KEY (artikelId),
  FOREIGN KEY (fabrikantId) REFERENCES fabrikant(fabrikantId) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;
CREATE TABLE voorraad (
  artikelId int NOT NULL,
  locatieId int NOT NULL,
  PRIMARY KEY (artikelId,locatieId),
  FOREIGN KEY (artikelId) REFERENCES artikel(artikelId) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (locatieId) REFERENCES locatie(locatieId) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;
