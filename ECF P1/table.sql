CREATE TABLE user (
  id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(190) NOT NULL,
  roles TEXT NOT NULL,
  password VARCHAR(190) NOT NULL,
  enabled TINYINT(1) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE auteur (
  id INT NOT NULL AUTO_INCREMENT,
  nom VARCHAR(190) NOT NULL,
  prenom VARCHAR(190) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE livre (
  id INT NOT NULL AUTO_INCREMENT,
  titre VARCHAR(190) NOT NULL,
  annee_edition INT,
  nombre_pages INT NOT NULL,
  code_isbn VARCHAR(190),
  auteur_id INT NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (auteur_id) REFERENCES auteur(id)
);

CREATE TABLE emprunteur (
  id INT NOT NULL AUTO_INCREMENT,
  nom VARCHAR(190) NOT NULL,
  prenom VARCHAR(190) NOT NULL,
  tel VARCHAR(190) NOT NULL,
  user_id INT NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE emprunt (
  id INT NOT NULL AUTO_INCREMENT,
  date_emprunt DATETIME NOT NULL,
  date_retour DATETIME,
  emprunteur_id INT NOT NULL,
  livre_id INT NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (emprunteur_id) REFERENCES emprunteur(id),
  FOREIGN KEY (livre_id) REFERENCES livre(id)
);
