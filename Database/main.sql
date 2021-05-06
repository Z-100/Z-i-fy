DROP DATABASE IF EXISTS zify2;
CREATE DATABASE zify2;
USE zify2;

CREATE TABLE albums (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    pap MEDIUMBLOB
);

CREATE TABLE artists (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    band VARCHAR(255)
);

CREATE TABLE songs (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    duration TIME,
    album_id INT UNSIGNED,
    FOREIGN KEY (album_id) REFERENCES albums(id)
);

CREATE TABLE songs_artists (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    song_id INT UNSIGNED,
    FOREIGN KEY (song_id) REFERENCES songs(id),
    artist_id INT UNSIGNED,
    FOREIGN KEY (artist_id) REFERENCES artists(id)
);

CREATE TABLE users (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255),
    pfp MEDIUMBLOB,
    admin BOOLEAN
);

create TABLE playlists (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    plp MEDIUMBLOB,
    user_id INT UNSIGNED, 
    FOREIGN KEY (user_id) REFERENCES users(id)
);
create TABLE playlists_songs (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    song_id INT UNSIGNED,
    FOREIGN KEY (song_id) REFERENCES songs(id),
    playlist_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (playlist_id) REFERENCES playlists(id)
);