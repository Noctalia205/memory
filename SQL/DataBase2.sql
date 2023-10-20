/* Story 1 */

CREATE DATABASE services_db CHARACTER SET 'utf8';

USE services_db;

/* Story 1*/

CREATE TABLE utilisateurs (
  id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
  pseudo            VARCHAR(40) UNIQUE NOT NULL,
  email             VARCHAR(90) UNIQUE NOT NULL,
  mot_de_passe      VARCHAR(191) NOT NULL,
  adresse           VARCHAR(80) DEFAULT NULL,
  code_postal       VARCHAR(80) DEFAULT NULL,
  ville             VARCHAR(80) DEFAULT NULL,
  pays              VARCHAR(80) DEFAULT NULL,
  portable          VARCHAR(30) DEFAULT NULL,
  fixe              VARCHAR(30) DEFAULT NULL,
  date_inscription  DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(id)
) ENGINE = INNODB;

CREATE TABLE services (
  id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_utilisateur    INT UNSIGNED NOT NULL,
  nom               VARCHAR(80) NOT NULL,
  description       VARCHAR(80) NOT NULL,
  adresse           VARCHAR(80) NOT NULL,
  code_postal       VARCHAR(80) NOT NULL,
  ville             VARCHAR(80) NOT NULL,
  pays              VARCHAR(80) NOT NULL,
  date_service      DATETIME NOT NULL,
  informations      TEXT DEFAULT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (id_utilisateur)  REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = INNODB;

CREATE TABLE services_utilisateurs (
  id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_service        INT UNSIGNED NOT NULL,
  id_utilisateur    INT UNSIGNED NOT NULL,
  date_inscription  DATETIME NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (id_service)      REFERENCES services(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (id_utilisateur)  REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = INNODB;

CREATE TABLE messages (
  id              INT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_expediteur   INT UNSIGNED NOT NULL,
  id_receveur     INT UNSIGNED NOT NULL,
  contenu         TEXT,
  date_envoie     DATETIME DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY(id),
  FOREIGN KEY (id_expediteur)   REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (id_receveur)     REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = INNODB;

/* Story 2 */

INSERT INTO utilisateurs (pseudo, email, mot_de_passe, date_inscription)
VALUES ('Pseudo1', 'hello@free.fr', '123456', NOW());

INSERT INTO utilisateurs (pseudo, email, mot_de_passe, adresse, code_postal, ville, pays, portable, fixe, date_inscription)
VALUES
('Pseudo2', 'hello2@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo3', 'hello3@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo4', 'hello4@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo5', 'hello5@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo6', 'hello6@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo7', 'hello7@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo8', 'hello8@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo9', 'hello9@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo10', 'hello10@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo11', 'hello11@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW());

/* Story 3 */

UPDATE utilisateurs set adresse = '2 rue du lac', code_postal = '75019', ville = 'Paris', pays = 'France', portable = '0602030405', fixe = '0102030405'
WHERE id = 1;

/* Story 4 */

INSERT INTO services (id_utilisateur, nom, description, adresse, code_postal, ville, pays, date_service)
VALUES
(1, 'Laver ma vaisselle', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-28 15:01'),
(7, 'Laver ma voiture', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-18 13:01'),
(5, 'Peindre mes murs', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-18 15:01'),
(4, 'Chasser les pokemons', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-16 15:01'),
(3, 'Monter mon lave vaisselle', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-13 15:01'),
(3, 'Repasser mes chemises', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-12 12:01'),
(9, 'M''aider à trouver une idée de service', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-09 15:01'),
(11, 'Sortir mes chiens', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-02 11:01'),
(1, 'Dire bonjour à mes chats', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-25 12:22'),
(7, 'Aller se promener', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-01 09:01');

/* Story 5 */

INSERT INTO services_utilisateurs (id_service, id_utilisateur, date_inscription)
VALUES
(1, 5, '2019-11-15 11:18'),
(2, 6, '2019-11-15 11:18'),
(3, 8, '2019-11-15 11:18'),
(4, 2, '2019-11-15 11:18'),
(5, 4, '2019-11-15 11:18'),
(6, 9, '2019-11-15 11:18'),
(7, 10, '2019-11-15 11:18'),
(8, 11, '2019-11-15 11:18'),
(3, 8, '2019-11-15 11:18'),
(10, 3, '2019-11-15 11:18'),
(6, 2, '2019-11-15 11:18'),
(7, 10, '2019-11-15 11:18');


/* Story 7 */

INSERT INTO ( id_receveur, id_expediteur, contenu , date_envoie)
VALUES (2, 1, 'HEY', '14:30'),
(2, 1, 'Bonjour''14:35'),
(1, 2, 'Bonjour Madame''16:00'),
(2, 1, 'cest pour un renseignement''16:20'),
(1, 2, 'oui dites moi''16:25'),
(2, 1, 'jai besoin de refaire ma salle de bain''16:40'),
(1, 2, 'pour quel budjet''16:45'),
(2, 1, '12 millions''16:50'),
(1, 2, 'mais vous etes completement fada''17:00'),
(2, 1, 'ptdr tkt je suis riche''17:01'),
(1, 2, 'bah pas moi''17:01'),
(2, 1, 'cest benef pour vous enfait''17:02'),
(1, 2, 'vous etes pas une arnaqueuse jespere''17:03'),
(2, 1, 'imagine cest vrai''17:03'),
(1, 2, 'non''17:05'),
(2, 1, 'si''17:05'),
(1, 2, 'non haha''17:08'),
(2, 1, 'si haha''17:09'),
(1, 2, 'mais nonnnn''18:00'),
(2, 1, 'mais si ''18:40'),
(1, 2, 'mais ?''19:00'),
(2, 1, 'quoi''19:01'),
(1, 2, 'feur ''19:02'),
(2, 1, 'vous avez quel age pour faire ça''21:05'),
(1, 2, '2 ans''21:06'),


/* Story 8 */

/*SELECT M.id_expediteur
FROM  messages as M
INNER JOIN utilisateurs  as U
ON M.id_receveur = U.id
ORDER BY date_envoie DESC;*/

/* STORY 9*/
SELECT M.id_expediteur, M.id_receveur, M.contenu
FROM messages as M 
INNER JOIN utilisateurs  as U1
ON M.id_expediteur = U1.id
INNER JOIN utilisateurs as U2
ON M.id_receveur = U2.id
ORDER BY date_envoie DESC;


/* Story 10 */

SELECT U.id AS utilisateur_expediteur ,S.nom, S.code_postal, S.date_service, S.ville, S.pays, S.id_utilisateur, U2.id AS utilisateurs_receveur
FROM services AS S
LEFT JOIN utilisateurs AS U
ON S.id_utilisateur = U.id 
LEFT JOIN services_utilisateurs AS SU
ON S.id = SU.id_service 
LEFT JOIN utilisateurs AS U2
ON SU.id_utilisateur = U2.id
WHERE S.date_service >= NOW() 
AND U2.id IS NULL
ORDER BY S.date_service DESC, S.Ville ASC;

/*Story 11*/

SELECT S.*, SU.id, U.portable, U.pseudo
FROM services as S
LEFT JOIN utilisateurs as U
ON S.id_utilisateur = U.id
LEFT JOIN services_utilisateurs as SU
ON SU.id_utilisateur = S.id_utilisateur
LEFT JOIN utilisateurs as U2
ON SU.id_utilisateur = S.id
GROUP BY S.id;


/* Story 12 */

DELETE FROM services
WHERE id = 2;


/* Story 13 */

DELETE FROM services_utilisateurs
WHERE id_utilisateur = 2 AND id_service = 6;

/* Story 14 */

DELETE FROM utilisateurs
WHERE id = 2;

/* Story 15 */

DELETE FROM messages
WHERE id = 2;

/* Story 16 */

SELECT S.*, U.id, U2.id, COUNT(SU.id_utilisateur) 
FROM services as S
INNER JOIN utilisateurs as U
  ON S.id_utilisateur = U.id 
INNER JOIN services_utilisateurs as SU
  ON SU.id_service = S.id 
LEFT JOIN utilisateurs as U2 
  ON SU.id_utilisateur = U2.id 
ORDER BY date_service DESC, ville ASC;

/* story 17 */


 SELECT S., U.pseudo AS proposeur, U2.pseudo as inscrit, 
(SELECT COUNT( SU.id_utilisateur ) FROM services_utilisateurs as SU WHERE SU.id_utilisateur = 8 ) AS participation
FROM services as S

LEFT JOIN utilisateurs as U
  ON U.id = S.id_utilisateur

LEFT JOIN services_utilisateurs as SU
  ON S.id = SU.id_utilisateur 

LEFT JOIN utilisateurs AS U2
  ON U2.id = SU.id_utilisateur

  WHERE SU.id_utilisateur = 8
ORDER BY S.date_service DESC, S.ville ASC
  LIMIT 1 ;



  /* story 18 */


SELECT M., 
(
SELECT U.pseudo
FROM utilisateurs as U
WHERE id = 8  ) AS pseudo_utilisateur 

( SELECT COUNT(SU.id) 
FROM services_utilisateurs as SU
INNER JOIN services as S 
ON SU.id_service = S.id
WHERE SU.id_utilisateur = 8 
AND M.mois = MONTH (S.date_service)


) AS participation_total

FROM ( 

SELECT 1 AS mois
    UNION
SELECT 2 AS mois
    UNION
SELECT 3 AS mois
    UNION
SELECT 4 AS mois
    UNION
SELECT 5 AS mois
    UNION
SELECT 6 AS mois
    UNION
SELECT 7 AS mois
    UNION
SELECT 8 AS mois
    UNION
SELECT 9 AS mois
    UNION
SELECT 10 AS mois
    UNION
SELECT 11 AS mois
    UNION
SELECT 12 AS mois

)  AS M