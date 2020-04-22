CREATE TABLE logindetails(
	email VARCHAR(255),
	password VARCHAR(255)
);

INSERT INTO logindetails (email, password) VALUES ('example@example.com', 'Password1');

CREATE TABLE posts(
	id INT KEY NOT NULL AUTO_INCREMENT,
	title VARCHAR(255),
	content VARCHAR(1000),
	date DATETIME DEFAULT CURRENT_TIMESTAMP
);

