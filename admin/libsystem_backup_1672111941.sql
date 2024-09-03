

CREATE TABLE `activity_log` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `user_ip_address` varchar(150) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8mb4;

INSERT INTO activity_log VALUES("135","Administrator","Admin added new books","::1","2022-12-04 12:54:47");
INSERT INTO activity_log VALUES("136","Administrator","Admin added new books","::1","2022-12-04 12:57:54");
INSERT INTO activity_log VALUES("137","Administrator","Admin added New Borrow Books.","::1","2022-12-04 13:00:20");
INSERT INTO activity_log VALUES("138","Administrator","Admin added new books, .Intro to MySQL","::1","2022-12-04 13:01:45");
INSERT INTO activity_log VALUES("139","Administrator","Admin added new book Intro to History","::1","2022-12-04 13:02:48");
INSERT INTO activity_log VALUES("140","Administrator","Admin added New Borrowed Book ,229","::1","2022-12-04 13:05:02");
INSERT INTO activity_log VALUES("141","Administrator","Admin added New Borrowed Book ","::1","2022-12-04 13:05:41");
INSERT INTO activity_log VALUES("142","Administrator","Admin was login to the system","::1","2022-12-13 14:36:51");
INSERT INTO activity_log VALUES("143","Administrator","Admin was login to the system","::1","2022-12-17 21:08:01");
INSERT INTO activity_log VALUES("144","Administrator","Admin was login to the system","::1","2022-12-27 11:32:17");



CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("2","admin","$2y$10$OmaLjCPmVu8jZr.hzQxJZe.Il0FCkjg1yGSW08/iOtGL2i47TsmOG","Principal","Soliven","Admin","2022_09_06_17_39_IMG_7457.JPG","2022-10-20");
INSERT INTO admin VALUES("8","anntonette","$2y$10$mRxfJi0jgWAfWrpuoTJF3utxuAatKMCidMRD7MGqndwwWoQDO55YC","Antonette","Pastores","Faculty Admin","2022_06_14_13_10_IMG_6970.JPG","2022-11-14");



CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(150) NOT NULL,
  `publisher` varchar(150) NOT NULL,
  `publish_date` date NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO books VALUES("25","BSNHS-111","10","Ang Alamat ng Saging","Duterte","BSNHS","1970-08-26","0");
INSERT INTO books VALUES("26","1234","10","Aralin Panlipunan","Robi","Pastores","2022-12-29","0");
INSERT INTO books VALUES("27","222","11","Algebra 2.0","Robi","Pastores","2022-12-21","0");
INSERT INTO books VALUES("28","223","11","Trygonometry","Admin Marvin","Marvin Villa","2022-12-25","0");
INSERT INTO books VALUES("29","224","11","math 2.0","Robi","Pastores","2022-12-15","1");
INSERT INTO books VALUES("30","225","9","intro to database","Robi","Pastores","2022-12-22","1");
INSERT INTO books VALUES("31","226","9","PHP Programming","Duterte","Pastores","2022-12-21","0");
INSERT INTO books VALUES("32","227","9","Java Programming","Robi","Pastores","2022-12-06","0");
INSERT INTO books VALUES("33","228","9","Intro to programming 2","Robi","Pastores","2023-01-05","0");
INSERT INTO books VALUES("34","228","9","Intro to MySQL","Robi","Pastores","2022-12-14","0");
INSERT INTO books VALUES("35","229","10","Intro to History","Robi","Pastores","2022-03-25","1");



CREATE TABLE `borrow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_borrow` date NOT NULL,
  `status` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO borrow VALUES("33","20","25","2022-11-14","1","2022-11-14 21:09:47");
INSERT INTO borrow VALUES("34","21","26","2022-12-03","1","2022-12-04 12:14:50");
INSERT INTO borrow VALUES("35","20","30","2022-12-04","0","2022-12-04 13:00:20");
INSERT INTO borrow VALUES("36","20","35","2022-12-04","0","2022-12-04 13:05:02");
INSERT INTO borrow VALUES("37","20","29","2022-12-04","0","2022-12-04 13:05:41");



CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO category VALUES("9","BSIT - Programming");
INSERT INTO category VALUES("10","Alamat Books");
INSERT INTO category VALUES("11","Mathematics");



CREATE TABLE `class_year` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `year_code` varchar(150) NOT NULL,
  `class_year` varchar(150) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO class_year VALUES("6","LQJ012589634","1st year","2022-11-10 21:04:48");



CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `code` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO course VALUES("6","Mahogany IV","BSNHS-Mahogany");



CREATE TABLE `returns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_return` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO returns VALUES("12","21","26","2022-12-04");



CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_year_id` int(50) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("20","WQP947312605","luna","Castillo","Female","2022_05_28_15_42_IMG_5863.JPG","6","6","2022-11-14");
INSERT INTO students VALUES("21","EVD951847032","Marvin","Villa","Male","","6","6","2022-12-03");

