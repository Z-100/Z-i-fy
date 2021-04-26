DROP DATABASE IF EXISTS zify;
CREATE DATABASE zify;
USE zify;

CREATE TABLE albums (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

CREATE TABLE artists (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

CREATE TABLE songs (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    duration TIME,
    albums_id INT UNSIGNED,
    FOREIGN KEY (albums_id) REFERENCES albums(id)
);

CREATE TABLE songs_artists (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    songs_id INT UNSIGNED,
    FOREIGN KEY (songs_id) REFERENCES songs(id),
    artists_id INT UNSIGNED,
    FOREIGN KEY (artists_id) REFERENCES artists(id)
);

CREATE TABLE users (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255),
    pfp MEDIUMBLOB
);

--
-- Command for the searchbar
--
SELECT songs.title AS "TITLE", albums.name AS "ALBUM", artists.name AS "ARTIST", songs.duration AS "DURATION" FROM songs
    JOIN albums ON albums.id = songs.albums_id
    JOIN songs_artists ON songs.id = songs_artists.songs_id
    JOIN artists ON artists.id = songs_artists.artists_id;