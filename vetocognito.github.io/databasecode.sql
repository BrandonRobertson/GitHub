CREATE TABLE users (
	firstName varchar(20) not null,
	lastName varchar(20) not null,
	address1 varchar(200) not null,
	address2 varchar(200),
	city varchar(50) not null,
	state varchar (2) not null,
	zip int(9) not null,
	country varchar(20) not null,
	date timestamp
);

INSERT INTO register (firstName, lastName, address1, address2, city, state, zip, country, date) VALUES ()