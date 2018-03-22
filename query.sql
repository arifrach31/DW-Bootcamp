create database blog;

use blog;

create table users(
	id int(5), 
	username varchar(25),
	PRIMARY KEY (id)
);
create table posts(
	id int(5), 
	title varchar(255),
	content varchar(255),
	createdBy datetime,
	PRIMARY KEY (id)
);
create table comments(
	id int, 
	comment varchar(25),
	postId int(5),
	PRIMARY KEY (id)
);

ALTER TABLE posts ADD CONSTRAINT fk_posts FOREIGN KEY (id) REFERENCES users(id)

ALTER TABLE comments ADD CONSTRAINT fk_comments FOREIGN KEY (postId) REFERENCES posts(id);

INSERT INTO users (id, username) VALUES 	
	(1, 'Dumbways.id'),
	(2, 'Arif Rachman'),
	(3, 'Hesa Suryana');

INSERT INTO posts (id, title, content, createdBy) VALUES 
	(3, 'wanita itu diserang kadal saat mengunjungi kebun binatang', 'wanita itu diserang kadal saat mengunjungi kebun binatang ragunan', NULL),
	(2, 'pria ', 'pria itu ikut bootcamp di Dumbways', NULL),
	(1, 'Bootcamp  ', 'Bootcamp No. 1 Terbaik & Termurah', NULL);

INSERT INTO comments (id, comment, postId) VALUES 
	(1, 'ah masa', 3), 
	(2, 'serius?', 3),
	(3, 'bonbin mana?', 3);

select posts.title, users.username, comments.comment from posts inner join users on posts.id = users.id join comments on comments.postID = posts.id