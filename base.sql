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

INSERT INTO membre (nom, numero_etu,) values 