drop database if exists jobs;

create database jobs;

use jobs;

grant select, insert, update, delete on library.* to 'www-data'@'localhost' identified by 'www-data';

CREATE TABLE `Student` (
  `semail` VARCHAR(20) NOT NULL,
  `spassword` VARCHAR(30) NOT NULL,
  `sname` VARCHAR(20) NOT NULL,
  `sGPA` VARCHAR(5),
  `slevel` ENUM('Bachelor', 'Master', 'PhD'),
  `suniversity` VARCHAR(20),
  `smajor` VARCHAR(20),
  `sdescription` VARCHAR(200),
  PRIMARY KEY (`semail`));

CREATE TABLE `Resume` (
  `semail` VARCHAR(20) NOT NULL,
  `rposition` VARCHAR(30),
  `rpractice` VARCHAR(200),
  `rproject` VARCHAR(200),
  PRIMARY KEY (`semail`),
  FOREIGN KEY (`semail`) REFERENCES `Student` (`semail`));

CREATE TABLE `Company` (
  `cemail` VARCHAR(20) NOT NULL,
  `cpassword` VARCHAR(30) NOT NULL,
  `cname` VARCHAR(20) NOT NULL,
  `cindustry` VARCHAR(20),
  `caddress` VARCHAR(50),
  `cdescription` VARCHAR(200),
  PRIMARY KEY (`cemail`));

CREATE TABLE `Announcement` (
  `cemail` VARCHAR(20) NOT NULL,
  `aid` VARCHAR(20) NOT NULL,
  `jobtitle` VARCHAR(20) NOT NULL,
  `joblocation` VARCHAR(20) NOT NULL,
  `jobsalary` VARCHAR(20) NOT NULL,
  `jobmajor` VARCHAR(20) NOT NULL,
  `joblevel` ENUM('Bachelor', 'Master', 'PhD') NOT NULL,
  `jobdescription` VARCHAR(200),
  `announcedate` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`aid`),
  FOREIGN KEY (`cemail`) REFERENCES `Company` (`cemail`));

CREATE TABLE `Application` (
  `semail` VARCHAR(20) NOT NULL,
  `aid` VARCHAR(20) NOT NULL,
  `applystatus` ENUM('Accepted', 'Declined', 'Unanswered') NOT NULL,
  `applydate` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`aid`, `semail`),
  FOREIGN KEY (`semail`) REFERENCES `Student` (`semail`),
  FOREIGN KEY (`aid`) REFERENCES `Announcement` (`aid`));

CREATE TABLE `Following` (
  `semail` VARCHAR(20) NOT NULL,
  `cemail` VARCHAR(20) NOT NULL,
  `followdate` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`semail`, `cemail`),
  FOREIGN KEY (`semail`) REFERENCES `Student` (`semail`),
  FOREIGN KEY (`cemail`) REFERENCES `Company` (`cemail`));

CREATE TABLE `Friends` (
  `semail1` VARCHAR(20) NOT NULL,
  `semail2` VARCHAR(20) NOT NULL,
  `frienddate` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`semail1`, `semail2`),
  FOREIGN KEY (`semail1`) REFERENCES `Student` (`semail`),
  FOREIGN KEY (`semail2`) REFERENCES `Student` (`semail`));

CREATE TABLE `Friendrequest` (
  `fsender` VARCHAR(20) NOT NULL,
  `freceiver` VARCHAR(20) NOT NULL,
  `requestdate` VARCHAR(20) NOT NULL,
  `requeststatus` ENUM('Accepted', 'Declined', 'Unanswered') NOT NULL,
  PRIMARY KEY (`fsender`, `freceiver`, `requestdate`),
  FOREIGN KEY (`fsender`) REFERENCES `Student` (`semail`),
  FOREIGN KEY (`freceiver`) REFERENCES `Student` (`semail`));

CREATE TABLE `Message` (
  `msender` VARCHAR(20) NOT NULL,
  `mreceiver` VARCHAR(20) NOT NULL,
  `mdate` VARCHAR(20) NOT NULL,
  `mdata` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`msender`, `mreceiver`, `mdate`),
  FOREIGN KEY (`msender`) REFERENCES `Student` (`semail`),
  FOREIGN KEY (`mreceiver`) REFERENCES `Student` (`semail`));

INSERT INTO `Company` (`cemail`, `cpassword`, `cname`) VALUES ('xiaomi@163.com', '12345', 'xiaomi');
INSERT INTO `Announcement` VALUES ('xiaomi@163.com', '101', 'software engineer', 'New York', '3000$', 'internet', 'PhD', 'something', '12345');
INSERT INTO `Student` (`semail`, `spassword`, `sname`, `smajor`) VALUES ('wangyu@163.com', '12345','wangyu', 'internet');
INSERT INTO `Announcement` VALUES ('xiaomi@163.com', '102', 'hardware engineer', 'New York', '3000$', 'hardware', 'PhD', 'something', '12345');
INSERT INTO `Following` VALUES ('wangyu@163.com', 'xiaomi@163.com', '34456');
INSERT INTO `Application` VALUES ('wangyu@163.com', '102', 'Accepted', '57688');
INSERT INTO `Application` VALUES ('wangyu@163.com', '101', 'Unanswered', '2018-5-9');
INSERT INTO `Announcement` VALUES ('xiaomi@163.com', '103', 'hardware engineer', 'New York', '4000$', 'hardware', 'PhD', 'something', '12345');
INSERT INTO `Resume` VALUES ('wangyu@163.com', '', '', '');
INSERT INTO `Company` (`cemail`, `cpassword`, `cname`) VALUES ('google@163.com', '12345', 'google');
INSERT INTO `Student` (`semail`, `spassword`, `sname`, `smajor`) VALUES ('meimei@163.com', '12345','meimei', 'internet');
