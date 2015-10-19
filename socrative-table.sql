DROP TABLE IF EXISTS questions;
DROP TABLE IF EXISTS test;
DROP TABLE IF EXISTS teacher;

CREATE TABLE teacher (
	teacherId INT UNSIGNED AUTO_INCREMENT NOT NULL ,
	teacherName VARCHAR(32) NOT NULL,
	salt CHAR(64) NOT NULL ,
	hash CHAR(128) NOT NULL ,
	room VARCHAR(32),
	UNIQUE(teacherName),
	PRIMARY KEY (teacherId)
);

CREATE TABLE test (
	testId INT UNSIGNED AUTO_INCREMENT NOT NULL ,
	teacherId INT UNSIGNED NOT NULL,
	testName VARCHAR(26),
	FOREIGN KEY (teacherId)  REFERENCES teacher(teacherId),
	PRIMARY KEY (testId)
);

CREATE TABLE questions (
	questionId INT UNSIGNED AUTO_INCREMENT NOT NULL ,
	teacherId INT UNSIGNED NOT NULL,
	testId INT UNSIGNED NOT NULL ,
	questionStatement VARCHAR(255) NOT NULL ,
	correctResponse VARCHAR(255),
	explanation VARCHAR(255),
	FOREIGN KEY (teacherId) REFERENCES teacher(teacherId),
	FOREIGN KEY (testId) REFERENCES test(testId),
	PRIMARY KEY (questionId)
);