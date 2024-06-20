-- Création de la base de données
DROP DATABASE IF EXISTS repertoire;
CREATE DATABASE IF NOT EXISTS repertoire;

-- Utilisation de la base de données
USE repertoire;

-- Création de la table Users
CREATE TABLE Users (
    id INT AUTO_INCREMENT NOT NULL,
    nom VARCHAR(55) NOT NULL,
    prenom VARCHAR(55) NOT NULL,
    motdepasse VARCHAR(255) NOT NULL UNIQUE,
    telephone VARCHAR(20) NOT NULL,
    CONSTRAINT USERS_PK PRIMARY KEY(id)
)ENGINE=InnoDB;

-- Création de la table UserRoles
CREATE TABLE userRoles (
    user_id INT PRIMARY KEY,
    role VARCHAR(50) NOT NULL,
    CONSTRAINT USERS_FK FOREIGN KEY (user_id) REFERENCES Users(id) ON DELETE CASCADE
)ENGINE=InnoDB;



INSERT INTO Users (nom, prenom, motdepasse, telephone) VALUES ('Dupont', 'Val', '1234', '0123456789');
INSERT INTO Users (nom, prenom, motdepasse, telephone) VALUES ('Duck', 'Donald', '5678', '0987654321');

-- Attribuer des rôles aux utilisateurs
INSERT INTO UserRoles (user_id, role) VALUES (1, 'admin');  
INSERT INTO UserRoles (user_id, role) VALUES (2, 'non-admin');  
