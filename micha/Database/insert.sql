INSERT INTO albums (name, pap) VALUES ("Nevermind", LOAD_FILE("C:/xampp/htdocs/zlify/Database/samplePics/nevermind.jpg")), ("In Utero", LOAD_FILE("C:/xampp/htdocs/zlify/Database/samplePics/inutero.jpg")), ("Bleach", LOAD_FILE("C:/xampp/htdocs/zlify/Database/samplePics/bleach.jpg"));
INSERT INTO artists (band) VALUES ("Nirvana");
INSERT INTO users (username, password, pfp, admin) VALUES ("Thierry", "Zli12345", LOAD_FILE("C:/xampp/htdocs/zlify/Database/samplePics/pfp.jpg", true)), ("Marvin", "1", LOAD_FILE("C:/xampp/htdocs/zlify/Database/samplePics/pfp.jpg", true)), ("Denis", "Zli123", LOAD_FILE("C:/xampp/htdocs/zlify/Database/samplePics/pfp.jpg", false)), ("Mischa", "ZIi12345", LOAD_FILE("C:/xampp/htdocs/zlify/Database/samplePics/pfp.jpg", false));
INSERT INTO playlists (name, user_id, plp) VALUES ("Chill", 1, LOAD_FILE("C:/xampp/htdocs/zlify/Database/samplePics/samplePlaylist.jpg")), ("Why do I have to do this", 2, LOAD_FILE("C:/xampp/htdocs/zlify/Database/samplePics/samplePlaylist.jpg")), ("Not Chill", 2, LOAD_FILE("C:/xampp/htdocs/zlify/Database/samplePics/samplePlaylist.jpg"));
-- Full Nevermind Album
INSERT INTO songs (title, duration, album_id) VALUES ("Smells like teen spirit", "00:05:02", 1), ("In Bloom", "00:04:15", 1), ("Come As You Are", "00:03:39", 1), ("Breed", "00:03:04", 1), ("Lithium", "00:04:02", 1), ("Polly", "00:02:54", 1), ("Territorial Pissings", "00:02:23", 1), ("Drain You", "00:03:44", 1), ("Lounge Act", "00:02:36", 1), ("Stay Away", "00:03:31", 1), ("On A Plain", "00:03:14", 1), ("Something In The Way", "00:03:52", 1), ("Endless, Nameless", "00:06:43", 1);
-- Full In Utero Album (sort of)
INSERT INTO songs (title, duration, album_id) VALUES ("Serve The Servants", "00:03:37", 2), ("Scentless Apprentice", "00:03:48", 2), ("Heart-Shaped Box", "00:04:41", 2);
-- Full Bleach Album (sort of)
INSERT INTO songs (title, duration, album_id) VALUES ("Blew", "00:02:54", 3), ("Floyd The Barber", "00:02:18", 3);
INSERT INTO playlists_songs (song_id, playlist_id) VALUES (1, 1), (1, 2), (2, 3), (6, 1), (5, 2), (2, 3), (3, 1), (14, 2), (18, 3), (1, 1), (2, 2), (15, 3);
INSERT INTO songs_artists (song_id, artist_id) VALUES (1, 1), (2, 1), (3, 1), (4, 1), (5, 1), (6, 1), (7, 1), (8, 1), (9, 1), (10, 1), (11, 1), (12, 1), (13, 1), (14, 1), (15, 1), (16, 1), (17, 1), (18, 1);