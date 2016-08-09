USE adlister_db;
DROP TABLE IF EXISTS users;
create table users (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(100),
    password VARCHAR(100),
    email VARCHAR(100),
    PRIMARY KEY (id)
);