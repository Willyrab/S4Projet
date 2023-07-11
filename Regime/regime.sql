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

CREATE TABLE jour(
    id INT PRIMARY KEY AUTO_INCREMENT,
    jour VARCHAR(100)
);
INSERT INTO jour VALUES
(null, 'Lundi'),
(null, 'Mardi'),
(null, 'Mercredi'),
(null, 'Jeudi'),
(null, 'Vendredi'),
(null, 'Samedi'),
(null, 'Dimanche');

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

INSERT INTO utilisateur (nom, prenom, dateDeNaissance, adresse, ville, telephone, email, motDePasse, idGenre)
VALUES
    ('Doe', 'John', '1990-05-15', '123 Main Street', 'City', '1234567890', 'john.doe@example.com', 'mypassword', 1),
    ('Smith', 'Jane', '1985-08-20', '456 Elm Street', 'Town', '9876543210', 'jane.smith@example.com', 'secretpassword', 2),
    ('Johnson', 'Michael', '1992-02-10', '789 Oak Avenue', 'Village', '5555555555', 'michael.johnson@example.com', 'password123', 1),
    ('Williams', 'Emily', '1988-11-27', '321 Pine Lane', 'City', '9999999999', 'emily.williams@example.com', 'qwerty123', 2),
    ('Brown', 'Olivia', '1995-04-03', '654 Cedar Road', 'Town', '1111111111', 'olivia.brown@example.com', 'mypassword123', 2);

CREATE TABLE tailleUtilisateur(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur INT,
    date DATETIME,
    taille REAL,
    FOREIGN KEY(idUtilisateur) REFERENCES utilisateur(id)
)ENGINE=INNODB;

INSERT INTO tailleUtilisateur (idUtilisateur, date, taille)
VALUES
    (1, '2023-07-10', 170.5),
    (2, '2023-07-10', 165.2),
    (3, '2023-07-10', 180.0),
    (4, '2023-07-10', 155.8),
    (5, '2023-07-10', 175.6);

CREATE TABLE poidsUtilisateur(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur INT,
    date DATETIME,
    poids REAL,
    FOREIGN KEY(idUtilisateur) REFERENCES utilisateur(id)
)ENGINE=INNODB;

INSERT INTO poidsUtilisateur (idUtilisateur, date, poids)
VALUES
    (1, '2023-07-10', 75.5),
    (2, '2023-07-10', 62.2),
    (3, '2023-07-10', 85.0),
    (4, '2023-07-10', 57.8),
    (5, '2023-07-10', 70.6);

CREATE TABLE objectif(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255)
)ENGINE=INNODB;

INSERT INTO objectif VALUES(null, 'Augmenter son poids');
INSERT INTO objectif VALUES(null, 'Reduire son poids');
INSERT INTO objectif VALUES(null, 'Atteindre son IMC ideal');

CREATE TABLE menu(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100)
)ENGINE=INNODB;

INSERT INTO menu VALUES(null, 'Petit-dejeuner');
INSERT INTO menu VALUES(null, 'Dejeuner');
INSERT INTO menu VALUES(null, 'Diner');

CREATE TABLE plat(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idMenu INT,
    nom VARCHAR(255),
    ingredients TEXT,
    FOREIGN KEY(idMenu) REFERENCES menu(id)
)ENGINE=INNODB;

INSERT INTO plat (idMenu, nom, ingredients)
VALUES
    (1, 'Omelette aux légumes', 'Œufs, poivrons, oignons, champignons'),
    (1, 'Yaourt aux fruits', 'Yaourt nature, fruits frais, granola'),
    (1, 'Pancakes aux myrtilles', 'Farine, lait, œufs, myrtilles'),
    (1, 'Smoothie vert', 'Épinards, banane, ananas, lait d amande'),
    (1, 'Porridge aux fruits', 'Flocons d avoine, lait, fruits secs, miel'),
    (1, 'Tartine d avocat', 'Pain complet, avocat, tomates cerises, sel, poivre'),
    (1, 'Muesli aux noix et aux graines', 'Flocons d avoine, noix, graines de chia, lait végétal');

INSERT INTO plat (idMenu, nom, ingredients)
VALUES
    (2, 'Salade César', 'Laitue romaine, poulet grillé, croûtons, parmesan, sauce César'),
    (2, 'Pâtes à la sauce tomate', 'Pâtes, sauce tomate, basilic, fromage râpé'),
    (2, 'Riz sauté aux légumes', 'Riz, légumes variés (carottes, pois, oignons), sauce soja'),
    (2, 'Wrap au poulet', 'Tortilla, poulet grillé, laitue, tomates, mayonnaise'),
    (2, 'Quiche aux épinards', 'Pâte brisée, épinards, fromage, œufs, crème'),
    (2, 'Burger végétarien', 'Pain à burger, steak végétarien, fromage, laitue, tomate, condiments'),
    (2, 'Salade niçoise', 'Thon, haricots verts, œufs, olives, tomates, vinaigrette');

INSERT INTO plat (idMenu, nom, ingredients)
VALUES
    (3, 'Saumon grillé avec légumes rôtis', 'Saumon, courgettes, poivrons, oignons, huile d olive'),
    (3, 'Poulet rôti avec pommes de terre', 'Poulet, pommes de terre, ail, herbes, beurre'),
    (3, 'Pâtes à la carbonara', 'Pâtes, lardons, œufs, parmesan, crème'),
    (3, 'Curry de légumes avec riz', 'Légumes variés (carottes, courgettes, poivrons), curry en poudre, lait de coco'),
    (3, 'Pizza margherita', 'Pâte à pizza, sauce tomate, mozzarella, basilic'),
    (3, 'Tacos au bœuf', 'Tortilla, bœuf haché, laitue, tomates, fromage, salsa'),
    (3, 'Salade grecque avec feta', 'Laitue, concombre, tomates, olives, oignon rouge, feta, vinaigrette');


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

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (1, 1, 250.0), -- Energie
    (1, 2, 15.0),  -- Matieres grasses
    (1, 3, 6.0),   -- Dont acides gras satures
    (1, 4, 20.0),  -- Glucides
    (1, 5, 10.0),  -- Dont sucres
    (1, 6, 5.0),   -- Fibres
    (1, 7, 20.0),  -- Proteines
    (1, 8, 1.5);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (2, 1, 320.0), -- Energie
    (2, 2, 18.0),  -- Matieres grasses
    (2, 3, 8.0),   -- Dont acides gras satures
    (2, 4, 35.0),  -- Glucides
    (2, 5, 5.0),   -- Dont sucres
    (2, 6, 2.0),   -- Fibres
    (2, 7, 10.0),  -- Proteines
    (2, 8, 1.0);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (3, 1, 180.0), -- Energie
    (3, 2, 10.0),  -- Matieres grasses
    (3, 3, 4.0),   -- Dont acides gras satures
    (3, 4, 25.0),  -- Glucides
    (3, 5, 2.0),   -- Dont sucres
    (3, 6, 3.0),   -- Fibres
    (3, 7, 8.0),   -- Proteines
    (3, 8, 0.8);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (4, 1, 300.0), -- Energie
    (4, 2, 12.0),  -- Matieres grasses
    (4, 3, 6.0),   -- Dont acides gras satures
    (4, 4, 40.0),  -- Glucides
    (4, 5, 5.0),   -- Dont sucres
    (4, 6, 4.0),   -- Fibres
    (4, 7, 12.0),  -- Proteines
    (4, 8, 1.2);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (5, 1, 220.0), -- Energie
    (5, 2, 8.0),   -- Matieres grasses
    (5, 3, 3.0),   -- Dont acides gras satures
    (5, 4, 30.0),  -- Glucides
    (5, 5, 5.0),   -- Dont sucres
    (5, 6, 2.0),   -- Fibres
    (5, 7, 10.0),  -- Proteines
    (5, 8, 1.0);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (6, 1, 350.0), -- Energie
    (6, 2, 16.0),  -- Matieres grasses
    (6, 3, 5.0),   -- Dont acides gras satures
    (6, 4, 45.0),  -- Glucides
    (6, 5, 8.0),   -- Dont sucres
    (6, 6, 4.0),   -- Fibres
    (6, 7, 15.0),  -- Proteines
    (6, 8, 1.5);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (7, 1, 180.0), -- Energie
    (7, 2, 6.0),   -- Matieres grasses
    (7, 3, 2.0),   -- Dont acides gras satures
    (7, 4, 25.0),  -- Glucides
    (7, 5, 3.0),   -- Dont sucres
    (7, 6, 2.0),   -- Fibres
    (7, 7, 6.0),   -- Proteines
    (7, 8, 1.0);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (8, 1, 320.0), -- Energie
    (8, 2, 12.0),  -- Matieres grasses
    (8, 3, 4.0),   -- Dont acides gras satures
    (8, 4, 35.0),  -- Glucides
    (8, 5, 4.0),   -- Dont sucres
    (8, 6, 2.0),   -- Fibres
    (8, 7, 8.0),   -- Proteines
    (8, 8, 1.2);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (9, 1, 200.0), -- Energie
    (9, 2, 8.0),   -- Matieres grasses
    (9, 3, 3.0),   -- Dont acides gras satures
    (9, 4, 28.0),  -- Glucides
    (9, 5, 5.0),   -- Dont sucres
    (9, 6, 2.0),   -- Fibres
    (9, 7, 9.0),   -- Proteines
    (9, 8, 1.3);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (10, 1, 300.0), -- Energie
    (10, 2, 10.0),  -- Matieres grasses
    (10, 3, 4.0),   -- Dont acides gras satures
    (10, 4, 40.0),  -- Glucides
    (10, 5, 6.0),   -- Dont sucres
    (10, 6, 3.0),   -- Fibres
    (10, 7, 10.0),  -- Proteines
    (10, 8, 1.5);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (11, 1, 180.0), -- Energie
    (11, 2, 6.0),   -- Matieres grasses
    (11, 3, 2.0),   -- Dont acides gras satures
    (11, 4, 25.0),  -- Glucides
    (11, 5, 3.0),   -- Dont sucres
    (11, 6, 2.0),   -- Fibres
    (11, 7, 6.0),   -- Proteines
    (11, 8, 1.0);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (12, 1, 320.0), -- Energie
    (12, 2, 12.0),  -- Matieres grasses
    (12, 3, 4.0),   -- Dont acides gras satures
    (12, 4, 35.0),  -- Glucides
    (12, 5, 4.0),   -- Dont sucres
    (12, 6, 2.0),   -- Fibres
    (12, 7, 8.0),   -- Proteines
    (12, 8, 1.2);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (13, 1, 200.0), -- Energie
    (13, 2, 8.0),   -- Matieres grasses
    (13, 3, 3.0),   -- Dont acides gras satures
    (13, 4, 28.0),  -- Glucides
    (13, 5, 5.0),   -- Dont sucres
    (13, 6, 2.0),   -- Fibres
    (13, 7, 9.0),   -- Proteines
    (13, 8, 1.3);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (14, 1, 300.0), -- Energie
    (14, 2, 10.0),  -- Matieres grasses
    (14, 3, 4.0),   -- Dont acides gras satures
    (14, 4, 40.0),  -- Glucides
    (14, 5, 6.0),   -- Dont sucres
    (14, 6, 3.0),   -- Fibres
    (14, 7, 10.0),  -- Proteines
    (14, 8, 1.5);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (15, 1, 220.0), -- Energie
    (15, 2, 8.0),   -- Matieres grasses
    (15, 3, 3.0),   -- Dont acides gras satures
    (15, 4, 30.0),  -- Glucides
    (15, 5, 5.0),   -- Dont sucres
    (15, 6, 2.0),   -- Fibres
    (15, 7, 10.0),  -- Proteines
    (15, 8, 1.0);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (16, 1, 350.0), -- Energie
    (16, 2, 16.0),  -- Matieres grasses
    (16, 3, 5.0),   -- Dont acides gras satures
    (16, 4, 45.0),  -- Glucides
    (16, 5, 8.0),   -- Dont sucres
    (16, 6, 4.0),   -- Fibres
    (16, 7, 15.0),  -- Proteines
    (16, 8, 1.5);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (17, 1, 180.0), -- Energie
    (17, 2, 6.0),   -- Matieres grasses
    (17, 3, 2.0),   -- Dont acides gras satures
    (17, 4, 25.0),  -- Glucides
    (17, 5, 3.0),   -- Dont sucres
    (17, 6, 2.0),   -- Fibres
    (17, 7, 6.0),   -- Proteines
    (17, 8, 1.0);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (18, 1, 320.0), -- Energie
    (18, 2, 12.0),  -- Matieres grasses
    (18, 3, 4.0),   -- Dont acides gras satures
    (18, 4, 35.0),  -- Glucides
    (18, 5, 4.0),   -- Dont sucres
    (18, 6, 2.0),   -- Fibres
    (18, 7, 8.0),   -- Proteines
    (18, 8, 1.2);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (19, 1, 200.0), -- Energie
    (19, 2, 8.0),   -- Matieres grasses
    (19, 3, 3.0),   -- Dont acides gras satures
    (19, 4, 28.0),  -- Glucides
    (19, 5, 5.0),   -- Dont sucres
    (19, 6, 2.0),   -- Fibres
    (19, 7, 9.0),   -- Proteines
    (19, 8, 1.3);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (20, 1, 300.0), -- Energie
    (20, 2, 10.0),  -- Matieres grasses
    (20, 3, 4.0),   -- Dont acides gras satures
    (20, 4, 40.0),  -- Glucides
    (20, 5, 6.0),   -- Dont sucres
    (20, 6, 3.0),   -- Fibres
    (20, 7, 10.0),  -- Proteines
    (20, 8, 1.5);   -- Sel

INSERT INTO valeursNutritionelles (idPlat, idNutriment, valeur)
VALUES
    (21, 1, 220.0), -- Energie
    (21, 2, 8.0),   -- Matieres grasses
    (21, 3, 3.0),   -- Dont acides gras satures
    (21, 4, 30.0),  -- Glucides
    (21, 5, 5.0),   -- Dont sucres
    (21, 6, 2.0),   -- Fibres
    (21, 7, 10.0),  -- Proteines
    (21, 8, 1.0);   -- Sel


CREATE TABLE sport(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100)
)ENGINE=INNODB;

INSERT INTO sport VALUES(null, 'Course a pied');
INSERT INTO sport VALUES(null, 'Entrainement en circuit');
INSERT INTO sport VALUES(null, 'Natation');
INSERT INTO sport VALUES(null, 'Loisir actif');
INSERT INTO sport VALUES(null, 'Seance de musculation');
INSERT INTO sport VALUES(null, 'Repos');

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
    duree INT,
    prixParSemaine REAL,
    FOREIGN KEY(idObjectif) REFERENCES objectif(id)
)ENGINE=INNODB;

INSERT INTO regime (idObjectif, poidsDebut, poidsFin, duree, prixParSemaine)
VALUES
    (1, 70.0, 65.0, 4, 25.0),
    (1, 80.0, 75.0, 6, 30.0),
    (1, 90.0, 85.0, 8, 35.0),
    (1, 75.0, 70.0, 3, 20.0),
    (1, 85.0, 80.0, 5, 28.0);

INSERT INTO regime (idObjectif, poidsDebut, poidsFin, duree, prixParSemaine)
VALUES
    (2, 65.0, 60.0, 4, 22.0),
    (2, 75.0, 70.0, 6, 27.0),
    (2, 85.0, 80.0, 8, 32.0),
    (2, 62.0, 58.0, 3, 18.0),
    (2, 70.0, 65.0, 5, 25.0);

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

-- Jour 1
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (1, 1, 1, 1),
       (1, 1, 2, 8),
       (1, 1, 3, 15);

-- Jour 2
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (1, 2, 1, 2),
       (1, 2, 2, 8),
       (1, 2, 3, 15);

-- Jour 3
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (1, 3, 1, 3),
       (1, 3, 2, 9),
       (1, 3, 3, 16);

-- Jour 4
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (1, 4, 1, 4),
       (1, 4, 2, 10),
       (1, 4, 3, 17);

-- Jour 5
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (1, 5, 1, 5),
       (1, 5, 2, 11),
       (1, 5, 3, 2);

-- Jour 6
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (1, 6, 1, 6),
       (1, 6, 2, 12),
       (1, 6, 3, 18);

-- Jour 7
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (1, 7, 1, 7),
       (1, 7, 2, 13),
       (1, 7, 3, 19);

-- Jour 1
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (2, 1, 1, 2),
       (2, 1, 2, 14),
       (2, 1, 3, 15);

-- Jour 2
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (2, 2, 1, 3),
       (2, 2, 2, 13),
       (2, 2, 3, 16);

-- Jour 3
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (2, 3, 1, 4),
       (2, 3, 2, 12),
       (2, 3, 3, 17);

-- Jour 4
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (2, 4, 1, 5),
       (2, 4, 2, 11),
       (2, 4, 3, 18);

-- Jour 5
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (2, 5, 1, 6),
       (2, 5, 2, 10),
       (2, 5, 3, 19);

-- Jour 6
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (2, 6, 1, 7),
       (2, 6, 2, 9),
       (2, 6, 3, 20);

-- Jour 7
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (2, 7, 1, 1),
       (2, 7, 2, 8),
       (2, 7, 3, 21);

-- Jour 1
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (3, 1, 1, 5),
       (3, 1, 2, 8),
       (3, 1, 3, 21);

-- Jour 2
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (3, 2, 1, 6),
       (3, 2, 2, 9),
       (3, 2, 3, 20);

-- Jour 3
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (3, 3, 1, 7),
       (3, 3, 2, 10),
       (3, 3, 3, 19);

-- Jour 4
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (3, 4, 1, 1),
       (3, 4, 2, 11),
       (3, 4, 3, 18);

-- Jour 5
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (3, 5, 1, 4),
       (3, 5, 2, 12),
       (3, 5, 3, 17);

-- Jour 6
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (3, 6, 1, 7),
       (3, 6, 2, 13),
       (3, 6, 3, 16);

-- Jour 7
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (3, 7, 1, 1),
       (3, 7, 2, 14),
       (3, 7, 3, 15);

-- Jour 1
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (4, 1, 1, 3),
       (4, 1, 2, 8),
       (4, 1, 3, 17);

-- Jour 2
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (4, 2, 1, 4),
       (4, 2, 2, 9),
       (4, 2, 3, 19);

-- Jour 3
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (4, 3, 1, 5),
       (4, 3, 2, 10),
       (4, 3, 3, 20);

-- Jour 4
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (4, 4, 1, 6),
       (4, 4, 2, 11),
       (4, 4, 3, 18);

-- Jour 5
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (4, 5, 1, 7),
       (4, 5, 2, 12),
       (4, 5, 3, 15);

-- Jour 6
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (4, 6, 1, 1),
       (4, 6, 2, 13),
       (4, 6, 3, 17);

-- Jour 7
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (4, 7, 1, 2),
       (4, 7, 2, 14),
       (4, 7, 3, 16);

-- Jour 1
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (5, 1, 1, 6),
       (5, 1, 2, 10),
       (5, 1, 3, 15);

-- Jour 2
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (5, 2, 1, 7),
       (5, 2, 2, 12),
       (5, 2, 3, 21);

-- Jour 3
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (5, 3, 1, 1),
       (5, 3, 2, 8),
       (5, 3, 3, 17);

-- Jour 4
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (5, 4, 1, 3),
       (5, 4, 2, 6),
       (5, 4, 3, 1);

-- Jour 5
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (5, 5, 1, 4),
       (5, 5, 2, 8),
       (5, 5, 3, 15);

-- Jour 6
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (5, 6, 1, 6),
       (5, 6, 2, 12),
       (5, 6, 3, 21);

-- Jour 7
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (5, 7, 1, 7),
       (5, 7, 2, 13),
       (5, 7, 3, 19);

-- Jour 1
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (6, 1, 1, 2),
       (6, 1, 2, 14),
       (6, 1, 3, 16);

-- Jour 2
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (6, 2, 1, 3),
       (6, 2, 2, 9),
       (6, 2, 3, 17);

-- Jour 3
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (6, 3, 1, 4),
       (6, 3, 2, 9),
       (6, 3, 3, 18);

-- Jour 4
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (6, 4, 1, 5),
       (6, 4, 2, 8),
       (6, 4, 3, 20);

-- Jour 5
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (6, 5, 1, 6),
       (6, 5, 2, 11),
       (6, 5, 3, 16);

-- Jour 6
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (6, 6, 1, 2),
       (6, 6, 2, 13),
       (6, 6, 3, 16);

-- Jour 7
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (6, 7, 1, 1),
       (6, 7, 2, 14),
       (6, 7, 3, 17);

-- Jour 1
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (7, 1, 1, 5),
       (7, 1, 2, 9),
       (7, 1, 3, 17);

-- Jour 2
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (7, 2, 1, 6),
       (7, 2, 2, 9),
       (7, 2, 3, 19);

-- Jour 3
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (7, 3, 1, 7),
       (7, 3, 2, 9),
       (7, 3, 3, 18);

-- Jour 4
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (7, 4, 1, 1),
       (7, 4, 2, 8),
       (7, 4, 3, 21);

-- Jour 5
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (7, 5, 1, 4),
       (7, 5, 2, 8),
       (7, 5, 3, 17);

-- Jour 6
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (7, 6, 1, 7),
       (7, 6, 2, 13),
       (7, 6, 3, 15);

-- Jour 7
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (7, 7, 1, 1),
       (7, 7, 2, 7),
       (7, 7, 3, 15);

-- Jour 1
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (8, 1, 1, 3),
       (8, 1, 2, 11),
       (8, 1, 3, 16);

-- Jour 2
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (8, 2, 1, 4),
       (8, 2, 2, 12),
       (8, 2, 3, 17);

-- Jour 3
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (8, 3, 1, 5),
       (8, 3, 2, 12),
       (8, 3, 3, 18);

-- Jour 4
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (8, 4, 1, 6),
       (8, 4, 2, 11),
       (8, 4, 3, 18);

-- Jour 5
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (8, 5, 1, 7),
       (8, 5, 2, 13),
       (8, 5, 3, 15);

-- Jour 6
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (8, 6, 1, 1),
       (8, 6, 2, 8),
       (8, 6, 3, 17);

-- Jour 7
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (8, 7, 1, 2),
       (8, 7, 2, 14),
       (8, 7, 3, 16);

-- Jour 1
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (9, 1, 1, 6),
       (9, 1, 2, 10),
       (9, 1, 3, 15);

-- Jour 2
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (9, 2, 1, 7),
       (9, 2, 2, 13),
       (9, 2, 3, 16);

-- Jour 3
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (9, 3, 1, 1),
       (9, 3, 2, 14),
       (9, 3, 3, 17);

-- Jour 4
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (9, 4, 1, 3),
       (9, 4, 2, 9),
       (9, 4, 3, 19);

-- Jour 5
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (9, 5, 1, 4),
       (9, 5, 2, 8),
       (9, 5, 3, 20);

-- Jour 6
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (9, 6, 1, 6),
       (9, 6, 2, 10),
       (9, 6, 3, 16);

-- Jour 7
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (9, 7, 1, 7),
       (9, 7, 2, 13),
       (9, 7, 3, 16);

-- Jour 1
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (10, 1, 1, 5),
       (10, 1, 2, 8),
       (10, 1, 3, 18);

-- Jour 2
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (10, 2, 1, 6),
       (10, 2, 2, 13),
       (10, 2, 3, 15);

-- Jour 3
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (10, 3, 1, 7),
       (10, 3, 2, 14),
       (10, 3, 3, 21);

-- Jour 4
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (10, 4, 1, 1),
       (10, 4, 2, 9),
       (10, 4, 3, 16);

-- Jour 5
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (10, 5, 1, 4),
       (10, 5, 2, 9),
       (10, 5, 3, 15);

-- Jour 6
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (10, 6, 1, 7),
       (10, 6, 2, 13),
       (10, 6, 3, 15);

-- Jour 7
INSERT INTO detailsRegime (idRegime, jour, idMenu, idPlat)
VALUES (10, 7, 1, 1),
       (10, 7, 2, 9),
       (10, 7, 3, 17);

CREATE TABLE activitesSportives(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idRegime INT,
    jour INT,
    idSport INT,
    description TEXT,
    FOREIGN KEY(idRegime) REFERENCES regime(id),
    FOREIGN KEY(idSport) REFERENCES sport(id)
)ENGINE=INNODB;

CREATE TABLE photoPlat(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idPlat INT,
    chemin VARCHAR(255),
    FOREIGN KEY(idPlat) REFERENCES plat(id)
)ENGINE=INNODB;

INSERT INTO photoPlat (idPlat, chemin)
VALUES
    (1, 'assets/img/photo1.jpg'),
    (2, 'assets/img/photo2.jpg'),
    (3, 'assets/img/photo3.jpg'),
    (4, 'assets/img/photo4.jpg'),
    (5, 'assets/img/photo5.jpg'),
    (6, 'assets/img/photo6.jpg'),
    (7, 'assets/img/photo7.jpg'),
    (8, 'assets/img/photo8.jpg'),
    (9, 'assets/img/photo9.jpg'),
    (10, 'assets/img/photo10.jpg'),
    (11, 'assets/img/photo11.jpg'),
    (12, 'assets/img/photo12.jpg'),
    (13, 'assets/img/photo13.jpg'),
    (14, 'assets/img/photo14.jpg'),
    (15, 'assets/img/photo15.jpg'),
    (16, 'assets/img/photo16.jpg'),
    (17, 'assets/img/photo17.jpg'),
    (18, 'assets/img/photo18.jpg'),
    (19, 'assets/img/photo19.jpg'),
    (20, 'assets/img/photo20.jpg'),
    (21, 'assets/img/photo21.jpg');

CREATE TABLE utilisateurRegime(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur INT,
    idRegime INT,
    dateDebut DATETIME,
    dateFin DATETIME,
    FOREIGN KEY(idRegime) REFERENCES regime(id),
    FOREIGN KEY(idUtilisateur) REFERENCES utilisateur(id)
)ENGINE=INNODB;

CREATE TABLE paiementRegime(
    id INT PRIMARY KEY AUTO_INCREMENT,
    date DATETIME,
    idUtilisateurRegime INT,
    montant REAL,
    resteAPayer REAL,
    FOREIGN KEY(idUtilisateurRegime) REFERENCES utilisateurRegime(id)
)ENGINE=INNODB;

SELECT pt.chemin , p.nom , p.ingredients , d.jour , m.nom as menu
FROM detailsRegime d
Left join photoPlat pt on d.idPlat = pt.idPlat
Left join plat p on d.idPlat = p.id
Left join menu m on d.idMenu = m.id
where d.idRegime = 1;