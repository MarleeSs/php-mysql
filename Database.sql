DROP DATABASE db_education;

# DROP TABLE test_table;

CREATE TABLE comments (id INT not null ,
name VARCHAR(20) not null,
email VARCHAR(20) not null,
comment VARCHAR(20) not null);

CREATE SCHEMA comments;

DROP DATABASE comments;

DROP TABLE comment;

CREATE TABLE comments (id INT, name VARCHAR(20), email VARCHAR(20), comment VARCHAR(20));
