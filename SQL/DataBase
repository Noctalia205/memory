-------CREATION-------

CREATE DATABASE my_database CHARACTER SET 'utf8';
ENGINE = INNODB;

------CREATION TABLES-----

CREATE TABLE Users(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    mail VARCHAR(256) NOT NULL,
    pass VARCHAR(256) NOT NULL,
    username VARCHAR(26) NOT NULL,
    date_sign_up DATETIME NOT NULL,
    date_last_connection DATETIME NOT NULL,
    PRIMARY KEY (id)
) ENGINE = INNODB;


CREATE TABLE Score(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_player INT UNSIGNED NOT NULL,
    id_game INT UNSIGNED NOT NULL,
    difficulties ENUM('easy', 'medium', 'hard') NOT NULL,
    scoring INT(20) NOT NULL,
    date_of_party DATETIME NOT NULL,
    PRIMARY KEY (id)
    CONSTRAINT fk_Score_Users FOREIGN KEY (id_player) REFERENCES Users(id) ON DELETE CASCADE,
    CONSTRAINT fk_Score_Game FOREIGN KEY (id_game) REFERENCES Game(id) ON DELETE CASCADE,
)ENGINE = INNODB;



CREATE TABLE Message(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_game INT UNSIGNED NOT NULL,
    id_sender INT UNSIGNED,
    chat TEXT NOT NULL,
    date_hour_chat DATETIME NOT NULL,
    PRIMARY KEY (id)
    CONSTRAINT fk_Message_Game FOREIGN KEY (id_game) REFERENCES Game(id) ON DELETE CASCADE,
)ENGINE = INNODB;



CREATE TABLE Game(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name_game VARCHAR(26) NOT NULL,
    PRIMARY KEY (id)
)ENGINE = INNODB;



-----INSERT-------
-----Users--------
INSERT INTO Users (mail, pass, username, date_sign_up, date_last_connection)
VALUES ('carofil205@gmail.com', 'caroline.sql', 'Noctalia', '2023-10-16 00:01:00', '2023-11-17 00:00:00'),
('vanou@gmail.com', 'vanou.sql', 'Jiafei', '2023-10-16 00:02:00', '2023-11-16 00:00:00'),
('matiheu@gmail.com', 'mathieu.sql', 'Grizou', '2023-10-16 00:03:00', '2023-12-16 00:00:00'),
('jojo@gmail.com', 'jojo.sql', 'joujou', '2023-10-16 00:04:00', '2023-12-20 00:00:00'),
('titi@gmail.com', 'titi.sql', 'thibou', '2023-10-16 00:05:00', '2023-11-23 00:00:00');

------Score------
INSERT INTO Score (id_player, id_game, difficulties, scoring, date_of_party)
VALUES (1, 1, 'easy', '10000', '2023-10-17 23:12:12'),
(1, 1, 'medium', '10001', '2023-10-18 23:12:13'),
(1, 1, 'hard', '10002', '2023-10-19 23:12:14'),
(1, 2, 'easy', '10003', '2023-10-20 23:12:15'),
(1, 2, 'medium', '10004', '2023-10-21 23:12:16'),

(2, 1, 'easy', '10005', '2023-10-17 23:12:12'),
(2, 1, 'medium', '10006', '2023-10-18 23:12:13'),
(2, 1, 'hard', '10007', '2023-10-19 23:12:14'),
(2, 2, 'easy', '10008', '2023-10-20 23:12:15'),
(2, 2, 'medium', '10009', '2023-10-21 23:12:16'),

(3, 1, 'easy', '10010', '2023-10-17 23:12:12'),
(3, 1, 'medium', '10011', '2023-10-18 23:12:13'),
(3, 1, 'hard', '10012', '2023-10-19 23:12:14'),
(3, 2, 'easy', '10013', '2023-10-20 23:12:15'),
(3, 2, 'medium', '10014', '2023-10-21 23:12:16'),

(4, 1, 'easy', '10015', '2023-10-17 23:12:12'),
(4, 1, 'medium', '10016', '2023-10-18 23:12:13'),
(4, 1, 'hard', '10017', '2023-10-19 23:12:14'),
(4, 2, 'easy', '10018', '2023-10-20 23:12:15'),
(4, 2, 'medium', '10019', '2023-10-21 23:12:16'),

(5, 1, 'easy', '10020', '2023-10-17 23:12:12'),
(5, 1, 'medium', '10021', '2023-10-18 23:12:13'),
(5, 1, 'hard', '10022', '2023-10-19 23:12:14'),
(5, 2, 'easy', '10023', '2023-10-20 23:12:15'),
(5, 2, 'medium', '10024', '2023-10-21 23:12:16');



----Message-----

INSERT INTO Message (id_game, id_sender, chat, date_hour_chat)
VALUES (1, 1, ' Coucou', '2023-10-16 12:12:12'),
(1, 1, 'Comment tu vas ?', '2023-10-16 12:13:12'),
(1, 1, 'abricot', '2023-10-16 12:14:12'),
(1, 1, 'Tour de guet', '2023-10-16 13:14:12'),
(1, 1, 'Pistolet', '2023-10-16 14:14:12');

INSERT INTO Message (id_game, id_sender, chat, date_hour_chat)
VALUES (1, 2, 'Attends tas vu jiafei', '2023-10-16 12:15:12'),
(1, 2, 'je mange', '2023-10-16 12:16:12'),
(1, 2, 'aubergine', '2023-10-16 12:17:12'),
(1, 2, 'tour de chang chang', '2023-10-16 15:17:12'),
(1, 2, 'grosse matraque', '2023-10-16 16:17:12');

INSERT INTO Message (id_game, id_sender, chat, date_hour_chat)
VALUES (1, 3, 'MARTINI', '2023-10-16 12:18:12'),
(1, 3, 'LIQUEUR', '2023-10-16 12:19:12'),
(1, 3, 'WHISKY', '2023-10-16 12:20:12'),
(1, 3, 'VODKA', '2023-10-16 17:20:12'),
(1, 3, 'BALLANTINES', '2023-10-16 18:20:12');

INSERT INTO Message (id_game, id_sender, chat, date_hour_chat)
VALUES (1, 4, 'Caméra frontale', '2023-10-16 12:21:12'),
(1, 4, 'Apagnan', '2023-10-16 12:22:12'),
(1, 4, 'Police des cramptés', '2023-10-16 12:23:12'),
(1, 4, 'ORDER 66', '2023-10-16 19:23:12'),
(1, 4, 'I AM THE DANGER', '2023-10-16 20:23:12');


INSERT INTO Message (id_game, id_sender, chat, date_hour_chat)
VALUES (1, 5, 'suppositoire de wc', '2023-10-16 12:24:12'),
(1, 5, 'XxdarksakuraxX', '2023-10-16 12:25:12'),
(1, 5, 'UWU', '2023-10-16 12:26:12'),
(1, 5, 'Indouliprane', '2023-10-16 21:26:12'),
(1, 5, 'Smecta', '2023-10-16 22:26:12');



----Game-----

INSERT INTO Game (name_game)
VALUES ('Power Of Memory');




-----PREMIERE INSCRITPTION-------

INSERT INTO Users (mail, pass, username, date_sign_up)
VALUES ('mail@gmail.com', 'md_input', 'username_input', '0000-00-00 00:00:00');

---UPDATE USERS----

UPDATE Users
SET pass =  'nv_mdp'
WHERE id = "id de l'user qui change de mdp";

UPDATE Users
SET mail =  'nv_mail'
WHERE id = "id de l'user qui change de mail" AND pass = 'mdp users';



-----UPDATE CONNEXION SITE----

SELECT mail, pass FROM Users;


SELECT Game.name_game, Users.username, Score.difficulties, Score.scoring
FROM Score
INNER JOIN Game ON Score.id_game = Game.id
INNER JOIN Users ON Score.id_player = Users.id
ORDER BY Game.name_game ASC, Users.username ASC, Score.difficulties ASC;



SELECT id, id_player, difficulties, id_game
FROM Score
WHERE id_player = 1 AND difficulties = 'Easy';

UPDATE Score
SET scoring = '15000'
WHERE id = "id score récupéré dans la requêtte précédente";

INSERT INTO Score (id_game, difficulties, scoring, id_player)
VALUES (2, 'Easy', '17000', 1);


--------MESSAGES CHAT------

INSERT INTO Message (id_game, id_sender, chat, date_hour_chat)
VALUES (1, 1, 'coucoucmoitchoupijemarcheverslecoleavectoutmescopainstousensembleonrigole', '2023-12-12 03:03:03');


-----AFFICHER CHAT-----

SELECT M.chat, U.username, M.date_hour_chat, (id_sender = 1) as id_sender
FROM Message as M
INNER JOIN Users as U ON U.id = M.id_sender;


-------RECHERCHE TABLEAU SCORE PSEUDO------

SELECT U.username, S.scoring
FROM Score as S
INNER JOIN Users as U ON U.id = S.id_player
WHERE username LIKE '%au%';