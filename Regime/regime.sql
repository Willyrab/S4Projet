CREATE TABLE genre(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100)
)ENGINE=INNODB;

INSERT INTO genre VALUES(null, 'homme');
INSERT INTO genre VALUES(null, 'femme');

CREATE TABLE admin(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    motDePasse VARCHAR(25)
);

INSERT INTO admin VALUES(null, 'administrator', '123abc');

CREATE TABLE utilisateur(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    dateDeNaissance DATETIME,
    adresse VARCHAR(100),
    ville VARCHAR(100),
    telephone VARCHAR(10),
    email VARCHAR(100),
    motDePasse VARCHAR(25),
    idGenre INT,
    FOREIGN KEY(idGenre) REFERENCES genre(id)
)ENGINE=INNODB;

CREATE TABLE tailleUtilisateur(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur INT,
    date DATETIME,
    taille REAL,
    FOREIGN KEY(idUtilisateur) REFERENCES utilisateur(id)
)ENGINE=INNODB;

CREATE TABLE poidsUtilisateur(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur INT,
    date DATETIME,
    poids REAL,
    FOREIGN KEY(idUtilisateur) REFERENCES utilisateur(id)
)ENGINE=INNODB;

CREATE TABLE objectif(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255)
)ENGINE=INNODB;

INSERT INTO objectif VALUES(null, 'Augmenter son poids');
INSERT INTO objectif VALUES(null, 'Reduire son poids');

CREATE TABLE menu(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100)
)ENGINE=INNODB;

INSERT INTO menu VALUES(null, 'Petit-dejeuner');
INSERT INTO menu VALUES(null, 'Dejeuner');
INSERT INTO menu VALUES(null, 'Diner');

CREATE TABLE plat(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    ingredients TEXT
)ENGINE=INNODB;

CREATE TABLE unites(
    id INT PRIMARY KEY AUTO_INCREMENT,
    notation VARCHAR(10)
)ENGINE=INNODB;

INSERT INTO unites VALUES(null, 'kcal');
INSERT INTO unites VALUES(null, 'g');

CREATE TABLE nutriments(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    idUnite INT,
    FOREIGN KEY(idUnite) REFERENCES unites(id)
)ENGINE=INNODB;

INSERT INTO nutriments VALUES(null, 'Energie', 1);
INSERT INTO nutriments VALUES(null, 'Matieres grasses', 2);
INSERT INTO nutriments VALUES(null, 'Dont acides gras satures', 2);
INSERT INTO nutriments VALUES(null, 'Glucides', 2);
INSERT INTO nutriments VALUES(null, 'Dont sucres', 2);
INSERT INTO nutriments VALUES(null, 'Fibres', 2);
INSERT INTO nutriments VALUES(null, 'Proteines', 2);
INSERT INTO nutriments VALUES(null, 'Sel', 2);

CREATE TABLE valeursNutritionelles(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idPlat INT,
    idNutriment INT,
    valeur REAL,
    FOREIGN KEY(idPlat) REFERENCES plat(id),
    FOREIGN KEY(idNutriment) REFERENCES nutriments(id)
)ENGINE=INNODB;

CREATE TABLE sport(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100)
)ENGINE=INNODB;

INSERT INTO sport VALUES(null, 'Course a pied');
INSERT INTO sport VALUES(null, 'Entrainement en circuit');
INSERT INTO sport VALUES(null, 'Natation');
INSERT INTO sport VALUES(null, 'Loisir actif');
INSERT INTO sport VALUES(null, 'Seance de musculation');

CREATE TABLE porteMonnaie(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur INT,
    date DATETIME,
    montantInitial REAL,
    variation REAL,
    montantFin REAL,
    FOREIGN KEY(idUtilisateur) REFERENCES utilisateur(id)
)ENGINE=INNODB;

CREATE TABLE codePorteMonnaie(
    id INT PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(16),
    valeur REAL,
    etat INT
)ENGINE=INNODB;

INSERT INTO codePorteMonnaie (code, valeur, etat)
VALUES
    ('ABCD1234EFGH5678', 50000, 1),
    ('WXYZ5678QRST9012', 50000, 1),
    ('LMNO9012PQRS3456', 50000, 1),
    ('1234ABCD5678EFGH', 50000, 1),
    ('EFGH5678ABCD1234', 50000, 1),
    ('QRST9012WXYZ5678', 50000, 1),
    ('PQRS3456LMNO9012', 50000, 1),
    ('5678EFGH1234ABCD', 50000, 1),
    ('ABCD5678EFGH1234', 50000, 1),
    ('WXYZ9012QRST3456', 50000, 1),
    ('LMNO3456PQRS9012', 50000, 1),
    ('9012WXYZ3456QRST', 50000, 1),
    ('EFGH1234ABCD5678', 50000, 1),
    ('QRST5678WXYZ9012', 50000, 1),
    ('PQRS9012LMNO3456', 50000, 1);

CREATE TABLE demandeRecharge(
    id INT PRIMARY KEY AUTO_INCREMENT,
    date DATETIME,
    idCode INT,
    idUtilisateur INT,
    FOREIGN KEY(idCode) REFERENCES codePorteMonnaie(id),
    FOREIGN KEY(idUtilisateur) REFERENCES utilisateur(id)
)ENGINE=INNODB;

SELECT demandeRecharge.*, codePorteMonnaie.code, codePorteMonnaie.valeur, codePorteMonnaie.etat, utilisateur.email FROM demandeRecharge
JOIN codePorteMonnaie ON codePorteMonnaie.id = demandeRecharge.idCode
JOIN utilisateur ON utilisateur.id = demandeRecharge.idUtilisateur;

CREATE TABLE codeValide(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCode INT,
    dateValidation DATETIME,
    FOREIGN KEY(idCode) REFERENCES codePorteMonnaie(id)
)ENGINE=INNODB;

CREATE TABLE regime(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idObjectif INT,
    poidsDebut REAL,
    poidsFin REAL,
    duree TIME,
    prixParSemaine REAL,
    FOREIGN KEY(idObjectif) REFERENCES objectif(id)
)ENGINE=INNODB;

CREATE TABLE detailsRegime(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idRegime INT,
    jour INT,
    idMenu INT,
    idPlat INT,
    FOREIGN KEY(idRegime) REFERENCES regime(id),
    FOREIGN KEY(idMenu) REFERENCES menu(id),
    FOREIGN KEY(idPlat) REFERENCES plat(id)
)ENGINE=INNODB;

CREATE TABLE activitesSportives(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idRegime INT,
    jour INT,
    idSport INT,
    description TEXT,
    FOREIGN KEY(idRegime) REFERENCES regime(id),
    FOREIGN KEY(idSport) REFERENCES sport(id)
)ENGINE=INNODB;