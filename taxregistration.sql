-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 09, 2015 at 01:21 PM
-- Server version: 5.0.22
-- PHP Version: 5.1.4
-- 
-- Database: 'taxregistration'
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table 'employee'
-- 

CREATE TABLE employee (
  eid int(10) unsigned NOT NULL auto_increment,
  fname varchar(50) character set utf8 NOT NULL,
  lname varchar(50) character set utf8 NOT NULL,
  sex varchar(7) character set utf8 NOT NULL,
  age int(3) NOT NULL,
  telno varchar(50) character set utf8 NOT NULL,
  address varchar(100) character set utf8 NOT NULL,
  nation varchar(50) character set utf8 NOT NULL,
  PRIMARY KEY  (eid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table 'employee'
-- 

INSERT INTO employee VALUES (1, 'Wilbroad', 'Owor', 'Male', 28, '0704094088', 'Banda B10', 'Uganda');
INSERT INTO employee VALUES (2, 'Hanington', 'Naamara', 'Male', 26, '0706431210', 'Banda B9', 'Uganda');
INSERT INTO employee VALUES (3, 'Kelvin', 'Ogingwa', 'Male', 25, '0772774532', 'Ntinda', 'Uganda');
INSERT INTO employee VALUES (4, 'Isaac', 'Kamukama', 'Male', 28, '0777777777', 'Banda', 'Uganda');
INSERT INTO employee VALUES (5, 'Kamukama', 'Isaac', 'Male', 23, '0775446362', 'Kalinabili', 'Ugandan');
INSERT INTO employee VALUES (6, 'Vicky', 'Isaac', 'Male', 20, '0703482259', 'Ntinda', 'Uganda');
INSERT INTO employee VALUES (7, 'Bob', 'Ntugu', 'Male', 24, '0777777777', 'Ntinda', 'Kenya');

-- --------------------------------------------------------

-- 
-- Table structure for table 'login'
-- 

CREATE TABLE login (
  loginid int(10) unsigned NOT NULL auto_increment,
  eid int(10) unsigned NOT NULL,
  role varchar(50) character set utf8 NOT NULL,
  Username varchar(50) character set utf8 default NULL,
  `Password` varchar(20) character set utf8 default NULL,
  PRIMARY KEY  (loginid),
  KEY eid (eid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table 'login'
-- 

INSERT INTO login VALUES (1, 1, 'admin', 'owor9567', '4by49567');
INSERT INTO login VALUES (2, 2, 'admin', 'naamarahannz', 'naamara9560');
INSERT INTO login VALUES (3, 4, 'admin', 'kamukamaisaac', 'isaac');

-- --------------------------------------------------------

-- 
-- Table structure for table 'payment'
-- 

CREATE TABLE payment (
  pid int(10) unsigned NOT NULL auto_increment,
  regid int(10) unsigned NOT NULL,
  initialpay double default NULL,
  finalpay double default NULL,
  vstatus varchar(50) character set utf8 default NULL,
  vcode varchar(50) character set utf8 default NULL,
  PRIMARY KEY  (pid),
  KEY regid (regid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table 'payment'
-- 

INSERT INTO payment VALUES (1, 3, 55000, 45000, 'Verified', '43112-KCCTX');

-- --------------------------------------------------------

-- 
-- Table structure for table 'registration'
-- 

CREATE TABLE registration (
  regid int(10) unsigned NOT NULL auto_increment,
  fname varchar(50) character set utf8 NOT NULL,
  lname varchar(50) character set utf8 NOT NULL,
  sex varchar(7) character set utf8 NOT NULL,
  otelno varchar(50) character set utf8 NOT NULL,
  oaddress varchar(100) character set utf8 NOT NULL,
  nation varchar(50) character set utf8 NOT NULL,
  numplate varchar(50) character set utf8 NOT NULL,
  model varchar(50) character set utf8 NOT NULL,
  regdate date NOT NULL,
  `status` varchar(50) character set utf8 NOT NULL,
  PRIMARY KEY  (regid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table 'registration'
-- 

INSERT INTO registration VALUES (1, 'Shaban', 'Mandela', 'Male', '0754742312', 'Banda B9', 'Uganda', '32A112 UG', 'Model 115', '2015-06-30', 'Licenced');
INSERT INTO registration VALUES (2, 'Daniel', 'Ongom', 'Male', '03293952202', 'Banda B9', 'Uganda', '32A113 UG', 'Japan 124jk', '2015-07-03', 'Unlicenced');
INSERT INTO registration VALUES (3, 'George', 'Alipo', 'Male', '079842213', 'Kireka', 'Uganda', '22910Ku', '954-Pajero', '2015-07-20', 'Unlicenced');
INSERT INTO registration VALUES (4, 'Dan', 'Kakakam', 'Male', '0775446235', 'g', 'uk', 'oo', 'sa', '0000-00-00', '');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `login`
-- 
ALTER TABLE `login`
  ADD CONSTRAINT login_ibfk_1 FOREIGN KEY (eid) REFERENCES employee (eid);

-- 
-- Constraints for table `payment`
-- 
ALTER TABLE `payment`
  ADD CONSTRAINT payment_ibfk_1 FOREIGN KEY (regid) REFERENCES registration (regid);





CREATE TABLE user_table (
  ID int(10) unsigned NOT NULL auto_increment,
  user_id varchar(50) character set utf8 NOT NULL,
  NAME varchar(50) character set utf8 NOT NULL,
  EMAIL_ID varchar(50) character set utf8 NOT NULL,
  PASSWORD varchar(50) character set utf8 NOT NULL,
  CREDITS varchar(50) character set utf8 NOT NULL,
  CREATED_ON varchar(100) character set utf8 NOT NULL,
  MODIFIED_ON varchar(50) character set utf8 NOT NULL,
  `status` varchar(50) character set utf8 NOT NULL,
  PRIMARY KEY  (ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 