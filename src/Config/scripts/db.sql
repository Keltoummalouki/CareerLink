CREATE DATABASE CareerLink;

USE CareerLink;

CREATE TABLE ROLE(
	id INT PRIMARY KEY AUTO_INCREMENT,
    name ENUM("Admin","Recruiter","Candidate")
);

CREATE TABLE MEMBER(
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(200),
    email VARCHAR(200) UNIQUE,
    password VARCHAR(200),
    role_id INT,
	FOREIGN KEY (role_id) REFERENCES ROLE(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE CATEGORY(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(200)
);

CREATE TABLE TAG(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(200)
);


CREATE TABLE OFFER(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(200),
    salary VARCHAR(200),
    location VARCHAR(200),
    member_id INT,
    category_id INT,
	FOREIGN KEY (member_id) REFERENCES MEMBER(id) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (category_id) REFERENCES CATEGORY(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE OfferTag(
    offer_id INT,
    tag_id INT,
	FOREIGN KEY (offer_id) REFERENCES OFFER(id) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (tag_id) REFERENCES TAG(id) ON DELETE CASCADE ON UPDATE CASCADE 
);