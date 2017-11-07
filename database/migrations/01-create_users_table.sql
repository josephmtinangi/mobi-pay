CREATE TABLE users(
	id int(11) primary key auto_increment,
	first_name varchar(255),
	last_name varchar(255),
	phone_number varchar(13) unique,
	password varchar(255),
	verified_at timestamp NULL,
	created_at timestamp default current_timestamp,
	updated_at timestamp default current_timestamp
);