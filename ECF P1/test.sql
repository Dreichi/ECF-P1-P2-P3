INSERT INTO user (email, roles, password, enabled)
VALUES ('admin@example.com', '["ROLE_ADMIN"]', '$2y$10$0nBdUEMvLNLmSDW0KH1InOtQI/Yw01rsbhZXa7VSPz9bQ2tVgJvWy', 1),
       ('foo.foo@example.com', '["ROLE_USER"]', '$2y$10$XrA7rAM.fvHwxmp.zW8qFOxJxx7LltwRvJZIMpO8h9N9gN27NNc1a', 1),
       ('bar.bar@example.com', '["ROLE_USER"]', '$2y$10$QmV7JRhAWA6vwxy0a8jxWO0byJw5LRZihYn.H6G9fXl/bpJdJOpQu', 0),
       ('baz.baz@example.com', '["ROLE_USER"]', '$2y$10$Saqg23DRRJ6eWeU6/l4x6uM4s4/JkKunmz1b.WCmXGKLpfxoKESbu', 1);

INSERT INTO auteur (nom, prenom)
VALUES ('auteur inconnu', NULL),
       ('Cartier', 'Hugues'),
       ('Lambert', 'Armand'),
       ('Moitessier', 'Thomas');

INSERT INTO livre (titre, annee_edition, nombre_pages, code_isbn, auteur_id)
VALUES ('Lorem ipsum dolor sit amet', 2010, 100, '9785786930024', 1),
       ('Consectetur adipiscing elit', 2011, 150, '9783817260935', 2),
       ('Mihi quidem Antiochum', 2012, 200, '9782020493727', 3),
       ('Quem audis satis belle', 2013, 250, '9794059561353', 4);

INSERT INTO emprunteur (nom, prenom, tel, user_id)
VALUES ('foo', 'foo', '123456789', 2),
       ('bar', 'bar', '123456789', 3),
       ('baz', 'baz', '123456789', 4);

DELIMITER //
CREATE PROCEDURE generate_users(IN count INT)
BEGIN
  DECLARE i INT DEFAULT 1;
  WHILE (i <= count) DO
    INSERT INTO user (email, roles, password, enabled)
    VALUES (CONCAT('user', i, '@example.com'), '["ROLE_USER"]', '$2y$10$vjpA8yBnV7jKqG3qL79dKOmOt8TJjBm1gAWrF7fCjKoHv7/lp78bC', 1);
   
