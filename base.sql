CREATE DATABASE vente_universite;

USE vente_universite;

CREATE TABLE membre (
    id_membre INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    numero_etu INT NOT NULL,
    image_profil VARCHAR (300) NULL
);

CREATE TABLE categorie (
    id_categorie INT PRIMARY KEY AUTO_INCREMENT,
    nom_categorie VARCHAR(100) NOT NULL
);

CREATE TABLE produit (
    id_produit INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    id_categorie INT NOT NULL,
    prix_reference FLOAT NOT NULL
);

CREATE TABLE produit_membre(
    id_produit_membre INT PRIMARY KEY AUTO_INCREMENT,
    id_produit INT NOT NULL,
    id_membre INT NOT NULL,
    prix_vente FLOAT NOT NULL,
    quantite_dispo FLOAT NOT NULL,
    date_dispo date NOT NULL
);

CREATE TABLE vente (
    id_vente INT PRIMARY KEY AUTO_INCREMENT,
    date_vente date NOT NULL,
    heure time NOT NULL,
    id_produit_membre INT NOT NULL,
    quantite FLOAT NOT NULL
);

INSERT INTO membre (nom, numero_etu) values
("Lea Martin", 004701),
("Mia Perett", 004702),
("Noa Leroy", 004703),
("Rose Durand", 004704),
("Leo Simons", 004705),
("Hugo Thomas", 004706),
("Max Dupont", 004707),
("Ines Deschamps", 004708),
("Adam Pierre", 004709),
("Noemie Claire", 004710); 

INSERT INTO categorie (nom_categorie) values 
("plat"),
("boisson"),
("snack"),
("dessert");

INSERT INTO produit (nom,id_categorie, prix_reference) values 
("pizza", 1, 24000),
("soda", 2, 2500),
("frite", 3, 2000),
("biere", 2, 3000),
("steak", 1, 8000),
("salade de fruit", 4, 1500),
("flan", 4, 1500),
("cheesekake", 4, 2500),
("bolognaise", 1, 10000),
("salade", 3, 2000),
("brochette", 3, 500),
("fanta", 2, 2500),
("gratin", 1, 10000),
("poulet frit", 3, 3000),
("jus naturel", 2, 2500);

INSERT INTO produit_membre (id_produit, id_membre, prix_vente, quantite_dispo, date_dispo) values
(1, 1, 22000, 20, "2026-07-20"),
(2, 1, 2500, 40, "2026-07-20"),
(3, 2, 1500, 60, "2026-07-20"),
(4, 2, 3000, 50, "2026-07-20"),
(5, 3, 10000, 20, "2026-07-20"),
(6, 3, 1500, 50, "2026-07-20"),
(7, 4, 1500, 80, "2026-07-20"),
(8, 4, 2500, 20, "2026-07-20"),
(9, 5, 10000, 30, "2026-07-20"),
(10, 5, 2000, 40, "2026-07-20"),
(11, 6, 500, 300, "2026-07-20"),
(13, 6,10000, 10, "2026-07-20"),
(14, 7, 3000, 50, "2026-07-20"),
(12, 7, 2500, 60, "2026-07-20"),
(1, 8,24000,30, "2026-07-20"),
(15, 8,2500, 100, "2026-07-20"),
(2, 9,2500, 50, "2026-07-20"),
(3, 9, 2000,50, "2026-07-20"),
(11, 10, 500, 400, "2026-07-20"),
(7, 10, 1500, 80, "2026-07-20");