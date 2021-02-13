-- CREATE NEW DATABASE
CREATE DATABASE record_company;
-- USE THE DATABASE
USE record_company;
-- CREATE NEW TABLE [bands]
CREATE TABLE bands (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);
-- CREATE NEW TABLE [albums]
CREATE TABLE albums (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    band_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (band_id) REFERENCES bands (id)
);
-- ALTER TABLE TO INSERT TO NEW COLUMN [release_year]
ALTER TABLE albums
ADD release_year INT NOT NULL;
-- INSERT DATA INTO bands [name]
INSERT INTO bands (name)
VALUES ('BTS');
INSERT INTO bands (name)
VALUES ('TXT');
#ADD MORE DATA TO bands [name]
INSERT INTO bands (name)
VALUES ('band1'),
    ('band2'),
    ('band3'),
    ('band4'),
    ('band5');
-- SELECT ALL DATA FORM [bands] TABLE
SELECT *
FROM bands;
-- SELECT ONLY [name] COLUMN DATA FROM bands
SELECT name
FROM bands;
-- SELECT ALL DATA FROM bands BUT ONLY SHOW 2 DATA
SELECT *
FROM bands
LIMIT 2;
-- ALIAS name & id as NAME & ID
SELECT id AS 'ID',
    name AS "NAME"
FROM bands;
-- ORDER BY name [by default ascending order]
SELECT *
FROM bands
ORDER BY name;
-- DESCENDING ORDER
SELECT *
FROM bands
ORDER BY name DESC;
-- INSERT DATA INTO [album]
INSERT INTO albums (name, realse_year, band_id)
VALUES ('Album1', '2000', 1),
    ('Album2', '2001', 1),
    ('Album3', '2002', 1),
    ('Album4', '2003', 1),
    ('Album5', '2004', 1);
-- ADD MORE DATA
INSERT INTO albums (name, realse_year, band_id)
VALUES ('Album6', '2005', 2),
    ('Album7', '2006', 3),
    ('Album8', '2007', 4),
    ('Album9', '2008', 5),
    ('Album10', '2009', 6);
-- SELECT ALL DATA FROM albums
SELECT *
FROM albums;
SELECT *
FROM albums
WHERE band_id = 1;