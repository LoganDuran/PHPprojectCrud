
// korisniciDB
CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pwd VARCHAR (255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    favtank VARCHAR(30),
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id)
);


// komentariDB
CREATE TABLE comments (
	id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    comment_text TEXT NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_DATE,
    users_id INT(11),
    PRIMARY KEY (id),
    FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
);


// manuelno ubacivanje korisnika u DB
INSERT INTO users (username, pwd, email) VALUES ('LoganDuran', 'burek1234', 'ladidadi@gmail.com');
INSERT INTO users (username, pwd, email) VALUES ('Micun', 'pokemon', 'pikachu@gmail.com');


// manuelno ubacivanje komentara u DB
INSERT INTO comments (username, comment_text, users_id) VALUES ('LoganDuran', 'Prvi Komentar u bazi podataka!', '1');


SELECT * FROM comments WHERE users_id = 1;

SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id;