-- MySQL dump 10.13  Distrib 5.6.36, for Linux (x86_64)
--
-- Host: localhost    Database: stairs
-- ------------------------------------------------------
-- Server version	5.6.36-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `stairs`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `stairs` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `stairs`;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jobs_hand` longtext NOT NULL,
  `jobs_mega` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='admin login';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'[\"2\", \"4\", \"6\"]','[\"12\"]');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campus`
--

DROP TABLE IF EXISTS `campus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `person` varchar(100) NOT NULL,
  `basic_question` varchar(5) NOT NULL,
  `non_tpo_name` varchar(100) DEFAULT NULL,
  `non_tpo_email` varchar(100) DEFAULT NULL,
  `non_tpo_position` varchar(20) DEFAULT NULL,
  `non_tpo_mobile` varchar(12) DEFAULT NULL,
  `tpo_name` varchar(100) NOT NULL,
  `tpo_email` varchar(100) NOT NULL,
  `tpo_mobile` varchar(12) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_uni` varchar(255) NOT NULL,
  `educations` longtext NOT NULL,
  `college_departments` varchar(2) NOT NULL,
  `students` varchar(20) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `url_input` varchar(255) NOT NULL,
  `college_city` varchar(100) NOT NULL,
  `college_dist` varchar(100) NOT NULL,
  `college_state` varchar(30) NOT NULL,
  `college_address` varchar(1000) NOT NULL,
  `college_principal_name` varchar(100) NOT NULL,
  `college_principal_email` varchar(100) NOT NULL,
  `college_principal_number` varchar(12) NOT NULL,
  `distance_city` varchar(5) NOT NULL,
  `distance_bus` varchar(5) NOT NULL,
  `distance_rail` varchar(5) NOT NULL,
  `college_reach` varchar(1000) NOT NULL,
  `profile_pic` varchar(70) NOT NULL,
  `submit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='table made to store campus data by tpo';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campus`
--

LOCK TABLES `campus` WRITE;
/*!40000 ALTER TABLE `campus` DISABLE KEYS */;
INSERT INTO `campus` VALUES (2,'Suhel Ahmad Khan','yes','','','Select an option','','Suhel Ahmad Khan','tpo@rjit.org','9981101461','Rustamji Institute Of Technology','Rajiv Gandhi Proudyogiki Vishwavidyalaya','[\"B.Tech.\\/B.E.\",\"M.Tech.\\/M.E.\",\"MCA\"]','4','500 - 1000','50 - 150','https://rjit.org','Tekanpur','Gwalior','Madhya Pradesh','BSF Academy Tekanpur Gwalior 475005','Arvind Kumar Jain','arvind@rjit.org','9981101462','30','1','20','Take a Bus From Gwalior Bus stand !','iolhi3G5fMv5fPPVQ43J3yy7c4wi94eyV6B3qLlO.jpeg','2017-10-16 13:44:09'),(3,'mayank','yes','','','Select an option','','Sachin Sharma','sachinsharma@gmial.com','9891713607','Ppimt','Mdu, Rohtak','[\"B.Tech.\\/B.E.\",\"MBA\",\"B. Pharma\",\"M.Sc. (Tech)\",\"Hotel Managemnet\"]','5','2500 - 5000','150 - 300','https://careerstairs.in/campus_form.php?ver=$2y$11$fQ9fbkGM.BgG4bGsxNz8nO8O/IT8.p.n/qbue4RydN2gaz9RkJP7.','delhi','delhi','New Delhi','delhi','Mayank','mayanksachin@ccareer.in','9696858556','5','5','5','by bus','KD9WrfmH1uOcjr3JSXgpRdAVcfLVq7R6IPNkHfeR.png','2017-10-20 05:29:29'),(4,'mayank','no','Mayank','mayank@gmial.com','H.O.D','8568568569','Mayank','mayank@hotmail.com','8568968569','Ppimt','Mdu','[\"B.Com\"]','5','2500 - 5000','150 - 300','http://careerstairs.in/campus_form.php?ver=$2y$11$r4Ay4X/rWFuYe9ALrbbf/.VXvFUIK3Y4yB0AhNCuxHT6a1IcC2jbq','delhi','delhi','New Delhi','new delhi','Namua Aaj','mayanksina@gmial.com','9859659658','5','5','5','5 bu  bys','R1SXJIEmEHbfJ1UlbczAdopzc1ampgZ9nJkq78VZ.png','2017-10-20 08:55:17');
/*!40000 ALTER TABLE `campus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campus_user`
--

DROP TABLE IF EXISTS `campus_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campus_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `link` varchar(70) NOT NULL,
  `send` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='table made to store coupons campus link';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campus_user`
--

LOCK TABLES `campus_user` WRITE;
/*!40000 ALTER TABLE `campus_user` DISABLE KEYS */;
INSERT INTO `campus_user` VALUES (10,'Neeraj Verma','tpo@ppu.edu.in','$2y$11$D0ZPUUfbLzc7vpLScuXO1.34560vrJprBA4xnUGXOLz7kYoTrfzVS','2017-10-22 11:35:46'),(11,'Neeraj Verma','tpo@ppu.edu.in','$2y$11$dEtzPCE3cIimkWFLLpG7rO83ddHzrr51SmGAIZSQHHeL2N7V5/sG2','2017-10-22 11:36:18'),(12,'PPimt Principal','Principal.ppimt@ppu.edu.in','$2y$11$enmxjT.mToLNfqv64uCcz.1ShZqMq4uzfmlt1BpEPMc48U6sKsxUO','2017-10-22 11:49:41');
/*!40000 ALTER TABLE `campus_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `change_email`
--

DROP TABLE IF EXISTS `change_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `change_email` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `link` varchar(70) NOT NULL,
  `new_email` varchar(255) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='verify user when he changes email';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `change_email`
--

LOCK TABLES `change_email` WRITE;
/*!40000 ALTER TABLE `change_email` DISABLE KEYS */;
INSERT INTO `change_email` VALUES (7,'sunnysharma','$2y$11$pYuTV8eM1QBknnWvl8l7SesCbtMO93rEwTp395rkbtI/kTz.ueYGa','sunnysachin03@gmail.com','2017-08-11 07:23:55','2017-08-11 08:23:55');
/*!40000 ALTER TABLE `change_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` char(1) DEFAULT '1',
  `visible` varchar(5) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `code` varchar(100) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `expiry` date NOT NULL,
  `applied_users` longtext,
  `coupon_limit` varchar(10) DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `terms` longtext,
  `coupon_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='table made to store coupons data';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupons`
--

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
INSERT INTO `coupons` VALUES (1,'1','Yes','Both','PAYTMJIO','Jio Limited','2017-09-27','[[\"1\", \"2017-05-06\"], [\"8\", \"2017-09-29\"], [\"3\", \"2017-09-27\"]]','1000','The Coupon will work on jio recharge of 399 and user will get 15% off','[\"The opper will valid till 30 sep\", \"The offer will only for jio users\"]',''),(3,'1','Yes','Both','Amazon Pay','Amazon Inc.','2017-10-11',NULL,'','The coupon will work only on the amazon website with registered users.','[\"The offer will only for Amazon users\", \"The user will get 10% cashback on shopping.\", \"The offer is once per user\"]','https://amazon.in'),(5,'1','No','Recruiters','REC100','CareerStairs','2017-10-31',NULL,'','This coupon is valid for every recruiter to get 100 day free job posting.','[\"Once per User\"]','http://careerstairs.in'),(6,'1','No','Jobseeker','NEW100','Nike Limited','2017-10-25','[[\"2\", \"2017-10-01\"]]',NULL,'will get 25% off on min purchase of 4999.','[\"Once per user\", \"For every user type\"]','http://nike.com'),(7,'1','Yes','Both','RECRUITER','careerstairs','2017-10-31','[[\"19\",\"2017-10-16\"]]','50','you  can  avail  benifit  till   15 days\r\nPost  unlimited Job  \r\nDownlaod Unlimited Resume\r\nMinimum  3 Job in  day  you  can  post \r\nFor  Mass Recruitment , You  can  mail  us  at  contact@carerstairs.in','[\"You  have  post  regularly.\\r\\nTerms and conditions  apply.\"]','www.careerstairs.in');
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forgot_password`
--

DROP TABLE IF EXISTS `forgot_password`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forgot_password` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `link` varchar(70) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='table made to store forgot password link';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forgot_password`
--

LOCK TABLES `forgot_password` WRITE;
/*!40000 ALTER TABLE `forgot_password` DISABLE KEYS */;
INSERT INTO `forgot_password` VALUES (1,'sunnysharma','sunnysachin03@gmail.co','$2y$11$1ZvFWrrFb2syYG5B2zDJuutePoVrhLS5IjFwtXsP/VB.5bUCUYPN6','2017-09-09 06:28:14','2017-09-09 12:28:14'),(3,'mayanksingall','teamm@careerstairs.in','$2y$11$Rna.ZQUDZ1CyoGDuTgKWduJJBr9awhqgArkcwzTFFdhEJxRMvMArW','2017-10-16 11:32:54','2017-10-16 17:32:54'),(4,'mayanksingal','team@careerstairs.in','$2y$11$7TdJJ7xZYcCJiP.e6e5cYema4JwGcR8Xki0.crvcvCuNhmgkRseiW','2017-10-16 11:37:08','2017-10-16 17:37:08'),(5,'dreamcareerstairs','mayanksingla543@gmail.com','$2y$11$GGvKoOCyisSb3B0Yd4BjSuLvDYrr2BTurFLsrblaUSbzvecZDcr/C','2017-10-20 07:20:52','2017-10-20 13:20:52');
/*!40000 ALTER TABLE `forgot_password` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rec_username` varchar(255) NOT NULL,
  `rec_email` varchar(100) NOT NULL,
  `email_verified` char(1) NOT NULL DEFAULT '0',
  `admin_verified` char(1) NOT NULL DEFAULT '0',
  `job_category` varchar(50) NOT NULL,
  `job_type` char(1) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_website` varchar(100) NOT NULL,
  `company_description` varchar(1000) NOT NULL,
  `exp` char(2) NOT NULL,
  `package_min` varchar(5) NOT NULL,
  `package_max` varchar(5) NOT NULL,
  `location` longtext NOT NULL,
  `job_details` varchar(1000) NOT NULL,
  `company_pic` varchar(150) NOT NULL,
  `job_description` longtext NOT NULL,
  `skills` longtext NOT NULL,
  `education` longtext NOT NULL,
  `batch` longtext NOT NULL,
  `created` date DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `applied_id` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (1,'sharmash','demo_test@demo.com','1','1','Information Technology','1','Software Developer','InfoEdge pvt ltd','https://infoedge.com','Info Edge has an in-depth understanding of the Indian consumer internet domain. With years of experience in the domain, strong cash flow generation and a diversified business portfolio, it one of the very few profitable pure play internet companies in the country.The company was incorporated on May 1, 1995 under the Companies Act, 1956 as Info Edge (India) Private Limited and became a public limited company on April 27, 2006. Starting with a classified recruitment online business, naukri.com, Info Edge has grown and diversified rapidly, setting benchmarks as a pioneer for others to follow. Driven by innovation, creativity, an experienced and talented leadership team and a strong culture of entrepreneurship, today, it is India premier online classifieds company in recruitment, matrimony, real estate, education and related services.','0','2.75','3','[\"Delhi\", \"Hydrabad\"]','You will be a person who will not only envision the product but also make future concepts reality. As a good designer you need to have unique ability to engage in a broad range of disciplines including user research, brainstorming, sketching and wire framing, creating mockups and prototyping interactive design flows, as well as working with product and development team to ensure a delightful final product.','sharma1.jpg','[\"Has made significant contributions to web or mobile applications.\", \"Fast and Interactive Prototyping skills.\", \" Detailed and clear interaction design specifications.\", \"Excellent communication skills.\", \"Demonstrated ability to present and defend design decisions.\"]','[\"C\", \"C++\", \"JAVA\", \"Android\", \"Swift\"]','[\"BA\", \"BSC\", \"B.ARCH\"]','[\"2015\"]','2017-08-05','2017-09-05',NULL),(2,'sharmash','demo_test@career.com','1','1','Information Technology','1','Ios Developer','Grapus','www.grappus.com/','Grappus is a battle-tested team of mobile rockstars. We build mobile apps that matter, that are remembered, that people rely upon and we do it with style. As a creative agency, we dream up engaging, addictive user experiences. We make apps dynamic, tested, and pixel perfect. We think fast, and code even faster. A stocked fridge full of goodies, a Foosball table, a Ping-Pong Table, a projector, a PS4, a kitchen and a lounge area takes up half of our office! That keeps us motivated and energized all the time :)','3','4','4.5','[\"Delhi\", \"Chandigarh\"]','Both Android and iOS developer to take our mobile product forward. We value a problem solving and solution driven approach! Since we are a mobile only company so you are the backbone of our business model .','sharma2.jpg','[\"Integration of user-facing elements developed by a front-end developers with server side logic\", \"Building reusable code and libraries for future use\", \"Optimization of the application for maximum speed and scalability\", \"Implementation of security and data protection\", \"Design and implementation of data storage solutions\", \"1-3 years of overall experience developing backend platforms / services\", \"Sound understanding of data structure / algorithms. Good problem solving skills\", \"Hands on experience in Core Java, J2EE frameworks like Spring / Jersey, ORM framework and related technologies\", \"Integration of user-facing elements developed by front-end developers with server side logic Writing reusable, testable, and efficient code\", \"Design and implementation of low-latency, high-availability, and performant applications\", \"Implementation of security and data protection\", \"Integration of data storage solutions\"]','[\"PHP\", \"MYSQL\", \"AJAX\"]','[\"B.E\", \"MCA\", \"M.TECH\"]','[\"2012\", \"2013\", \"2014\"]','2017-08-11','2017-10-03',NULL),(3,'viveksharma','demo_test@demo.com','1','1','Information Technology','3','Full Stack Developer','Mindtree','https://www.mindtree.com/','Mindtree delivers digital transformation and technology services from ideation to execution, enabling Global 2000 clients to outperform the competition. \"Born digital,\" Mindtree takes an agile, collaborative approach to creating customized solutions across the digital value chain.','3','6','6.5','[\"Bangalore\", \"Chennai\"]','Technical Specialist ROLE DESCRIPTION Should be working at client place in Mumbai, as an individual contributor. We welcome you to possible!. Detailed knowledge of networking protocols- BGP, EIGRP, OSPF, TCP/IP and security protocols- SSL, IPsec, VPN technologies Experience in administering & deploying network firewalls, such as Cisco ASA, Palo Alto,','mudgal1.jpg','[\"The candidate will be working on the FarEye web platform which is developed on Java Spring framework with AngularJS and POSTGre SQL Database\", \"Adding new features, fixing bugs and issues\", \"Optimizing the REST API performance by minimizing the resource utilization\", \"Optimizing DB performance\", \"Scaling performance for Big data management\"]','[\"HTML5\", \"CSS3\", \"JAVASCRIPT\", \"JQUERY\", \"LONGTEXT\", \"PHP\", \"MYSQL\", \"AJAX\"]','[\"B.E\", \"MCA\", \"M.TECH\"]','[\"2016\", \"2017\"]','2017-08-10','2017-10-12','[[\"2\", \"0\"]]'),(4,'viveksharma','demo_test@demo.com','1','1','Information Technology','4','Java Developer','Webworks','http://webworks.com','Mindtree\'s wide range of services ensures that the customer is able to concentrate on their core business while Mindtree manages their IT Infrastructure and provide support services to the customer\'s customer. We provide round the clock services to deliver required information and reduce downtime to their IT Infrastructure by leveraging our ability to apply the appropriate standards and governance like ITIL/ITSM, ISO.\r\nMindtree\'s IMTS business has carried out successful engagements with several clients providing value added services under the Network, Security and Database & Enterprise Product sub practices. Mindtree\'s IMTS business has significantly invested in setting up best-in-class NOC, Voice Gateway and Lab environment to enable high quality remote Infrastructure management.','0','2.3','2.5','[\"Gurgaon\"]','The Facemash site was quickly forwarded to several campus group list-servers, but was shut down a few days later by the Harvard administration. Zuckerberg faced expulsion and was charged by the administration with breach of security, violation.','singh1.jpg','[\"Be responsible for queue monitoring and acknowledging tickets.\", \"Assigning tickets to next level of engineers as per the category of tickets\", \"Service Desk, Server monitoring, Network monitoring, Troubleshooting server issues & network issues.\", \"Incident management and client handling skills.\", \"Support on call, ready to work in any shift as per the project need from any Mindtree location.\", \"Basic application support knowledge\", \"Excellent written and oral communication\", \"Ability to work independently, be adaptable to change and varied working hours\", \"Ready for 24/7 support, rotational shifts\", \"Ability to take quick decisions, like when to escalate a ticket to next level\", \"Ability to comprehend the issue and act with swiftness\", \"Individual must be flexible to work for extended hours, if required.\"]','[\"MYSQL\"]','[\"B.E\", \"M.TECH\"]','[\"2015\", \"2016\"]','2017-08-11','2017-10-23','[[\"2\", \"0\"]]'),(5,'sharmash','demo_test@demo.com','1','1','Information Technology','1','Data Analyst','SRM Tech.','http://srmtech.com','FarEyes technology solutions revolutionise enterprise operations by empowering the field workforce of a client company using a powerful mobile platform. FarEyes intuitive dashboard delivers real-time visibility to CXOs to better serve their customers. This empowers the enterprises to build a competitive advantage by improving its agility.','1','2.3','2.8','[\"Pune\", \"Gurgaon\"]','The candidate will be working on the FarEye web platform which is developed on Java Spring framework with AngularJS and POSTGre SQL Database.','sharma3.jpg','[\"The candidate will be working on the FarEye web platform which is developed on Java Spring framework with AngularJS and POSTGre SQL Database\", \"Adding new features, fixing bugs and issues\", \"Optimizing the REST API performance by minimizing the resource utilization\", \"Optimizing DB performance\", \"Scaling performance for Big data management\"]','[\"PHP\", \"MYSQL\", \"AJAX\"]','[\"MCA\", \"M.TECH\"]','[\"2015\", \"2016\"]','2017-08-11','2017-10-19','[[\"2\", \"0\"], [\"1\", \"1\"]]'),(6,'viveksharma','demo_test@demo.com','1','1','Information Technology','2','Software Intern','Hashtag','http://www.hashtag.com','W3Villa Technologies is a software development company with a special focus on start-up and growth companies.Through their offices in New York City and Delhi, they offer technological software development and maintenanceservices across the globe and around the clock. Their developers are experts in their fields with each a minimum of 5 years development experience.','3','2','3','[\"Noida\", \"New Delhi\"]','W3Villa Technologies is a software development company with a special focus on start-up and growth companies.Through their offices in New York City and Delhi, they offer technological software development and maintenanceservices across the globe and around the clock. Their developers are experts in their fields with each a minimum of5 years development experience.','singh2.jpg','[\"The candidate should be a passionate to design, develop and install software solutions.\", \"Able to build high\", \"quality, innovative and fully performing software in compliance with coding standards and technical design.\", \"The responsibilities will include development, writing code, and documenting functionality.\", \"Ability to work with existing code.\", \"Commitment to work and strong professional ethics.\", \"Excellent debugging and problem solving skills.\", \"Must have strong OOPS Concepts.\", \"Knowledge of Node JS and Ruby on Rails Will be an added advantage.\", \"Must have Strong Object Oriented analysis, design, and development experience.\", \"Knowledge of OOPS is a must.\", \"Flexible to work in a team environment.\", \"Excellent verbal and written communication skills.\"]','[\"HTML5\", \"CSS3\", \"JAVASCRIPT\", \"JQUERY\", \"LONGTEXT\", \"PHP\", \"MYSQL\", \"AJAX\"]','[\"B.E\", \"MS\", \"M.TECH\"]','[\"2017\"]','2017-08-11','2017-09-01','[[\"2\", \"0\"]]'),(8,'sharmash','demo_test@demo.com','1','1','Information Technology','2','Test Engineer','LogiQuad Solutions','http://www.logiquad.com','LogiQuad Solutions is an IT consulting and services company with distinct focus\r\non small and mid-scale enterprises (SMEs) that strive to benefit from information technology.\r\nPromoted by experienced professionals, LogiQuad provides 360 consultation, development and\r\nsupport on wide array of IT platform to enable current and future needs of an enterprise.\r\nWe offer solutions in diversified areas like Enterprise Automation, Engineering Automation,\r\nEcommerce Platforms, Content Management Systems, Cloud Computing, Data Migration and\r\nBusiness Intelligence.','0','3','3.6','[\"Delhi\"]','Our rich expertise enables organizations to reduce the total cost of ownership while creating an IT\r\nenabled enterprise eco-system. We help in addressing IT needs of SMEs while keeping the cost\r\nadvantage intact and improving the productivity and efficiency.','sharma5.jpg','[\"An understanding of the software development life cycle as well as the business approach for the product\", \"Knowledge of SalesForce & Drupal should be must.\", \"Should have knowledge of various testing tools.\", \"Analytical skills\", \"Decision making ability\", \"Attention to details\", \"Ability to work in a team as well as an individual\", \"Ability to work under pressure and maintain deadline\"]','[\"PHP\", \"MYSQL\", \"AJAX2\"]','[\"B.E/B.Tech (CS/IT)\", \"BCA\", \"MCA\"]','[\"2016\", \"2017\"]','2017-08-11','2017-08-30',NULL),(9,'viveksharma','demo_test@demo.com','1','1','Information Technology','1','Front End Developer','HelpU','UI Developer','HelpU brings the online world to local retail, we provide the trust of local retail, connecting users to digital world with a human touch. One touch point to access and avail anything online. We connect brands to masses, help distributors and retailers manage their business and earn extra without any fuss. We help online partners reach and engage the masses. The platform helps the partner merchants to grow their business and garner higher revenues Everything for Everyone! Help your customers with their every need and earn more with every transaction','0','2','2.2','[\"pune\", \"Chandigarh\", \"Mohali\"]','Ability to visualize solutions (before one is built).Ability to identify salient points and synthesize information.Analytical thinking skills.Show skepticism at appropriate timings.Passion for designing.Interact well with clients','singh3.jpg','[\"Perform rapid prototyping\", \"Ability to do Wireframing\", \"Facilitate service design\", \"Conduct user research\", \"Forge a unique path with Data\", \"Driven Design\", \"Handle responsive design\", \"Implement user\", \"centered designs\", \"Excel in task optimization\"]','[\"C\", \"C++\", \"JAVA\", \"Android\", \"Ruby\"]','[\"B.E\", \"B.TECH\"]','[\"2016\", \"2017\"]','2017-08-11','2017-08-29',NULL),(18,'sharmash','hr@investonline.com','1','1','Information Technology','1','Javascript Developer','Investwell','www.investwellonline.com','InvestWell is a leader in the field of Enterprise Software for Financial Planners. Distributors for Mutual Funds love InvestWell, and it turns out that people love working here as well. Despite being an early mover in this industry we have grown entirely through word of mouth and our dedicated efforts to serve the needs of Indias Mutual Fund industry with cutting edge solutions since 2000.','1','7','10','[\"Gurgaon\"]','The shortlisted candidates will be sent Admit Cards/Call Letters on their registered mail Id, which they will need to, carry on the date of Interview. No candidate will be entertained by the company without the formal intimation from Aspiring Minds.','sharmashDXnGI4aZxi.png','[\"Proficient in ReactJS\", \"Hands on Redux/Flux Architecture.\", \"Atleast 1 year of relevant experience in React/Redux required.\", \"B.Tech in Computer Science (or equivalent professional experience)\", \"Experience with modern frontend frameworks\", \"Have worked on Webpack/grunt/gulp along with HTML/CSS/ Jquery\", \"Understanding of layout aesthetics\", \"Knowledge of SEO principles\"]','[\"HTML\", \"React\", \"CSS\", \"JavaScript\", \"MySQL\", \"MongoDb\", \"PHP\"]','[\"B.Tech/B.E.\"]','[\"2014\", \"2015\", \"2016\"]','2017-10-04','2017-11-03',NULL),(19,'1731113910518772','test@careerstairs.in','1','1','Information Technology','1','Urgent Hiring For Process Trainer @ Noida Location','Intelenet Global Services Private Limited','https://www.intelenetglobal.comÂ ','Intelenet Global Services Private Limited\r\n\r\nIntelenetÃ‚Â® is a large global Business Process Outsourcing player, committed to delivering our client\'s strategic goals and helping in enhancing, broadening, and deepening the relationship to add value.Â \r\n\r\nBacked by The Blackstone Group, a leading Global Private Equity player, with a current portfolio of clients that includes Fortune 500 companies, we are a 55,000 people organization spread across 70 global delivery centers across North &amp; Central America, UK, Europe, Asia Pacific and the Middle East; supporting 110+ clients in over 50 languages.Â \r\nCommencing operations in November 2001, Intelenet today supports 110+ clients in 50 languages with Contact Centre solutions, F&amp;A, HRO and IT solutions across Banking and Financial Institutions, Healthcare, Travel and Hospitality, Telecom, Retail, Manufacturing, and Information Technology (IT) verticals.Â \r\n\r\nOver the last decade, we consistently held on to the top rankers s','2','3.5','4.5','[\"Noida\"]','Minimum Graduate.\r\n* Excellent communication skills.\r\n* Min 2-3 years of experience in out bound(Cards/Insurance) Process.Â \r\nRoles &amp; Responsibilities:\r\nGood analytical Skills.\r\nConduct new hire training and On the Job Training.\r\nOrganize, Plan and Implement monthly cyclic activities including refresher training, monthly tests and call monitoring.\r\nLiaison with the Quality and Operations to identify, screen and execute process improvement plans.\r\nPlan and improve training workshops and projects to monitor and groom poor performers.\r\nAbility to execute training tasks/ assignment on short notice.\r\nInterested to deliver and contribute towards process improvement','1731113910518772C5BWmQZx42.jpg','[\"Candidate with Banking Training or Financial Service background is required.\"]','[\"HTML\",\"Process Training\",\"trainer\",\"training trainers\",\"TTT\",\"trainings\",\"train the trainer\",\"training trainer\",\"learning &amp;amp; development\",\"training &amp;amp; development\"]','[\"B.Tech\\/B.E.\"]','[\"2010\",\"2011\",\"2012\",\"2013\",\"2014\",\"2015\"]','2017-10-16','2017-11-15',NULL),(20,'1731113910518772','team@careerstairs.in','1','1','Information Technology','1','Urgent Hiring For Process Trainer @ Noida Location','Intelenet Global Services Private Limited','https://www.intelenetglobal.comÂ ','IntelenetÃ‚Â® is a large global Business Process Outsourcing player, committed to delivering our client\'s strategic goals and helping in enhancing, broadening, and deepening the relationship to add value.Â \r\n\r\nBacked by The Blackstone Group, a leading Global Private Equity player, with a current portfolio of clients that includes Fortune 500 companies, we are a 55,000 people organization spread across 70 global delivery centers across North &amp; Central America, UK, Europe, Asia Pacific and the Middle East; supporting 110+ clients in over 50 languages.Â \r\nCommencing operations in November 2001, Intelenet today supports 110+ clients in 50 languages with Contact Centre solutions, F&amp;A, HRO and IT solutions across Banking and Financial Institutions, Healthcare, Travel and Hospitality, Telecom, Retail, Manufacturing, and Information Technology (IT) verticals.Â \r\n\r\nOver the last decade, we consistently held on to the top rankers s','2','3.5','4.5','[\"Noida\"]','Minimum Graduate.\r\n* Excellent communication skills.\r\n* Min 2-3 years of experience in out bound(Cards/Insurance) Process.Â \r\nRoles &amp; Responsibilities:\r\nGood analytical Skills.\r\nConduct new hire training and On the Job Training.\r\nOrganize, Plan and Implement monthly cyclic activities including refresher training, monthly tests and call monitoring.\r\nLiaison with the Quality and Operations to identify, screen and execute process improvement plans.\r\nPlan and improve training workshops and projects to monitor and groom poor performers.\r\nAbility to execute training tasks/ assignment on short notice.\r\nInterested to deliver and contribute towards process improvement','rootadminRMm6ohPtBK.jpg','[\"Candidate with Banking Training or Financial Service background is required.\"]','[\"HTML\",\"ITES\\u00a0\",\"\\u00a0BPO\\u00a0\",\"\\u00a0KPO\\u00a0\",\"\\u00a0LPO\\u00a0\",\"\\u00a0Customer Service\\u00a0\",\"\\u00a0Operations\",\"Process Training\",\"trainer\",\"training trainers\"]','[\"B.Tech\\/B.E.\"]','[\"2010\",\"2011\",\"2012\",\"2013\",\"2014\",\"2015\"]','2017-10-17','2017-11-16',NULL),(21,'1731113910518772','team@careerstairs.in','1','1','Information Technology','1','Urgent Hiring For Process Trainer @ Noida Location','Intelenet Global Services Private Limited','https://www.intelenetglobal.comÂ ','IntelenetÃ‚Â® is a large global Business Process Outsourcing player, committed to delivering our client\'s strategic goals and helping in enhancing, broadening, and deepening the relationship to add value.Â \r\n\r\nBacked by The Blackstone Group, a leading Global Private Equity player, with a current portfolio of clients that includes Fortune 500 companies, we are a 55,000 people organization spread across 70 global delivery centers across North &amp; Central America, UK, Europe, Asia Pacific and the Middle East; supporting 110+ clients in over 50 languages.Â \r\nCommencing operations in November 2001, Intelenet today supports 110+ clients in 50 languages with Contact Centre solutions, F&amp;A, HRO and IT solutions across Banking and Financial Institutions, Healthcare, Travel and Hospitality, Telecom, Retail, Manufacturing, and Information Technology (IT) verticals.Â \r\n\r\nOver the last decade, we consistently held on to the top rankers s','2','3.5','4.5','[\"Noida\"]','Minimum Graduate.\r\n* Excellent communication skills.\r\n* Min 2-3 years of experience in out bound(Cards/Insurance) Process.Â \r\nRoles &amp; Responsibilities:\r\nGood analytical Skills.\r\nConduct new hire training and On the Job Training.\r\nOrganize, Plan and Implement monthly cyclic activities including refresher training, monthly tests and call monitoring.\r\nLiaison with the Quality and Operations to identify, screen and execute process improvement plans.\r\nPlan and improve training workshops and projects to monitor and groom poor performers.\r\nAbility to execute training tasks/ assignment on short notice.\r\nInterested to deliver and contribute towards process improvement','1731113910518772NlQfCLHjj5.jpg','[\"Candidate with Banking Training or Financial Service background is required.\"]','[\"HTML\",\"ITES\\u00a0\",\"\\u00a0BPO\\u00a0\",\"\\u00a0KPO\\u00a0\",\"\\u00a0LPO\\u00a0\",\"\\u00a0Customer Service\\u00a0\",\"\\u00a0Operations\",\"Process Training\",\"trainer\",\"training trainers\"]','[\"B.Tech\\/B.E.\"]','[\"2010\",\"2011\",\"2012\",\"2013\",\"2014\",\"2015\"]','2017-10-17','2017-11-16',NULL),(22,'1731113910518772','team@careerstairs.in','1','1','Information Technology','1','Urgent Hiring For Process Trainer @ Noida Location','Intelenet Global Services Private Limited','https://www.intelenetglobal.comÂ ','IntelenetÃ‚Â® is a large global Business Process Outsourcing player, committed to delivering our client\'s strategic goals and helping in enhancing, broadening, and deepening the relationship to add value.Â \r\n\r\nBacked by The Blackstone Group, a leading Global Private Equity player, with a current portfolio of clients that includes Fortune 500 companies, we are a 55,000 people organization spread across 70 global delivery centers across North &amp; Central America, UK, Europe, Asia Pacific and the Middle East; supporting 110+ clients in over 50 languages.Â \r\nCommencing operations in November 2001, Intelenet today supports 110+ clients in 50 languages with Contact Centre solutions, F&amp;A, HRO and IT solutions across Banking and Financial Institutions, Healthcare, Travel and Hospitality, Telecom, Retail, Manufacturing, and Information Technology (IT) verticals.Â \r\n\r\nOver the last decade, we consistently held on to the top rankers s','2','3.5','4.5','[\"Noida\"]','Minimum Graduate.\r\n* Excellent communication skills.\r\n* Min 2-3 years of experience in out bound(Cards/Insurance) Process.Â \r\nRoles &amp; Responsibilities:\r\nGood analytical Skills.\r\nConduct new hire training and On the Job Training.\r\nOrganize, Plan and Implement monthly cyclic activities including refresher training, monthly tests and call monitoring.\r\nLiaison with the Quality and Operations to identify, screen and execute process improvement plans.\r\nPlan and improve training workshops and projects to monitor and groom poor performers.\r\nAbility to execute training tasks/ assignment on short notice.\r\nInterested to deliver and contribute towards process improvement','17311139105187727KCNreT0Wj.jpg','[\"Candidate with Banking Training or Financial Service background is required.\"]','[\"HTML\",\"ITES\\u00a0\",\"\\u00a0BPO\\u00a0\",\"\\u00a0KPO\\u00a0\",\"\\u00a0LPO\\u00a0\",\"\\u00a0Customer Service\\u00a0\",\"\\u00a0Operations\",\"Process Training\",\"trainer\",\"training trainers\"]','[\"B.Tech\\/B.E.\"]','[\"2010\",\"2011\",\"2012\",\"2013\",\"2014\",\"2015\"]','2017-10-17','2017-11-16',NULL);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mass_address`
--

DROP TABLE IF EXISTS `mass_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mass_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='table made to store mass job addresses';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mass_address`
--

LOCK TABLES `mass_address` WRITE;
/*!40000 ALTER TABLE `mass_address` DISABLE KEYS */;
INSERT INTO `mass_address` VALUES (1,'GL Bajaj Group of Institutions (An Integrated Campus) 23km Milestone, NH#2, Mathura-Delhi Road, PO - Akbarpur, Mathura - 281 406 (UP)'),(5,'Prannath Parnami Institute of Management &amp; Technology\r\n20 K.M Stone, N.H.-65, Choudharywas, Rajgarh Road, Hisar, Haryana 125001');
/*!40000 ALTER TABLE `mass_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mass_jobs`
--

DROP TABLE IF EXISTS `mass_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mass_jobs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mass_username` varchar(255) NOT NULL,
  `job_category` varchar(50) NOT NULL,
  `job_type` char(1) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `exp` char(2) NOT NULL,
  `package_min` varchar(5) NOT NULL,
  `package_max` varchar(5) NOT NULL,
  `job_details` varchar(1000) NOT NULL,
  `job_description` longtext NOT NULL,
  `skills` longtext NOT NULL,
  `education` longtext NOT NULL,
  `batch` longtext NOT NULL,
  `created` date NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `happen_date` date DEFAULT NULL,
  `users` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='table made to store mass recruitment jobs';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mass_jobs`
--

LOCK TABLES `mass_jobs` WRITE;
/*!40000 ALTER TABLE `mass_jobs` DISABLE KEYS */;
INSERT INTO `mass_jobs` VALUES (2,'ramesharch','Information Technology','1','Linux Admin','2','4','5','The System Administrator is responsible for effective installation/configuration, operation, and maintenance of systems hardware and software and related infrastructure. The system administration tasking will be focused on improving the stability and performance of the system, maintaining and improving the security posture of the systems, continuous monitoring of system health, and troubleshooting issues that arise.','[\"Install and maintain security patches on the operational and development system, which includes but is not limited to, Red Hat Linux, Windows 2003/2008, JBoss, VMWare, PostGreSQL, and Apache web services.\", \"Report Security Patch compliance in Online Compliance Report System (OCRS).\", \"Perform daily system monitoring, verifying the integrity and availability of all hardware, server resources, systems and key processes, reviewing system and application logs, and verifying completion of scheduled jobs such as backups.\", \"Perform regular security monitoring to identify any possible intrusions.\", \"Perform daily backup operations, ensuring all required file systems and system data are successfully backed up to the appropriate media, recovery tapes or disks are created, and media is recycled and sent off site as necessary.\", \"Perform regular file archival and purge as necessary.\", \"Create, change, and delete user accounts per request as necessary.\", \"Provide Tier III/other support per request from various constituencies.  Investigate and troubleshoot issues.\", \"Repair and recover from hardware or software failures.  Coordinate and communicate with impacted constituencies.\"]','[\"HTML\", \"Lisp\", \"Network Security\", \"Network Architecture\", \"Oracle Database\", \"Ruby on Grails\", \"UX\"]','[\"B.Tech/B.E.\", \"BCA\"]','[\"2014\", \"2015\"]','2017-10-05','GL Bajaj Group of Institutions (An Integrated Campus) 23km Milestone, NH#2, Mathura-Delhi Road, PO - Akbarpur, Mathura - 281 406 (UP)','2017-10-20',NULL),(3,'ramesharch','Information Technology','1','Full Stack Developer','0','0.5','10','A Full Stack developer is responsible for front and back-end web development. Usually, good full stack developers will understand several how to work with several languages and databases including PHP, HTML, CSS, JavaScript and everything in between. \r\nWeâ€™re looking for a Full Stack developer who will take a key role on our team. Our Full Stack developer must have knowledge in all stages of software development.\r\nYouâ€™ll be working alongside other engineers and developers, collaborating on the various layers of the infrastructure for our {{platform/application/etc.}}.','[\"Design overall architecture of the web application.\", \"Maintain quality and ensure responsiveness of applications.\", \"Collaborate with the rest of the engineering team to design and launch new features.\", \"Maintain code integrity and organization.\", \"Experience working with graphic designers and converting designs to visual elements.\", \"Understanding and implementation of security and data protection.\", \"Highly experienced with back-end programming languages {{Ex: PHP, Python, Ruby, Java, .NET, JavaScript etc}}\", \"Proficient experience using {{Ex: advanced JavaScript libraries and frameworks such as AngularJS, KnockoutJS, BackboneJS, ReactJS, DurandalJS etc.}}.\", \"Development experience for both mobile and desktop.\", \"Understanding of server-side languages including {{such as Jade, EJS, Jinja, etc.}}.\", \"Experience with cloud message APIs and usage of push notifications.\", \"Knowledge of code versioning tools {{such as Git, Mercurial or SVN}}.\"]','[\"HTML\"]','[\"B.Tech/B.E.\"]','[\"2017\"]','2017-10-05','GL Bajaj Group of Institutions (An Integrated Campus) 23km Milestone, NH#2, Mathura-Delhi Road, PO - Akbarpur, Mathura - 281 406 (UP)','2017-10-25',NULL),(4,'ramesharch','Information Technology','1','Ios Developer','0','4.8','5.1','We are looking for an iOS developer responsible for the development and maintenance of applications aimed at a range of iOS devices including mobile phones and tablet computers. Your primary focus will be development of iOS applications and their integration with back-end services. You will be working alongside other engineers and developers working on different layers of the infrastructure. Therefore, a commitment to collaborative problem solving, sophisticated design, and the creation of quality products is essential.','[\"Design and build applications for the iOS platform\", \"Ensure the performance, quality, and responsiveness of applications\", \"Collaborate with a team to define, design, and ship new features\", \"Identify and correct bottlenecks and fix bugs\", \"Help maintain code quality, organization, and automatization\", \"Proficient with Objective-C or Swift {{depending on project requirements}}, and Cocoa Touch\", \"Experience with iOS frameworks such as Core Data, Core Animation, etc.\", \"Familiarity with RESTful APIs to connect iOS applications to back-end services\"]','[\"Objective-C\", \"Swift\", \"UX\", \"Game Design and Development\"]','[\"B.Tech/B.E.\", \"BCA\", \"M.Tech./M.E.\"]','[\"2015\", \"2016\", \"2017\"]','2017-10-05','GL Bajaj Group of Institutions (An Integrated Campus) 23km Milestone, NH#2, Mathura-Delhi Road, PO - Akbarpur, Mathura - 281 406 (UP)','2017-10-24','[[1, \"Select\", \"8\", \"6\", \"4\", \"8\", \"8\", \"Will surely select him !\"], [2, \"Pending\", \"\", \"\", \"\", \"\", \"\", \"\"]]'),(5,'ramesharch','Information Technology','1','Data Analyst','3','7','9','Data analysts translate numbers into plain English Every business collects data, whether it\'s sales figures, market research, logistics, or transportation costs. A data analyst\'s job is to take that data and use it to help companies make better business decisions. This could mean figuring out how to price new materials for the market, how to reduce transportation costs, solve issues that cost the company money, or determine how many people should be working on Saturdays.','[\"Analytical Skills: Data analysts work with large amounts of data: facts, figures, and number crunching. You will need to see through the data and analyze it to find conclusions.\", \"Communication Skills: Data analysts are often called to present their findings, or translate the data into an understandable document. You will need to write and speak clearly, easily communicating complex ideas.\", \"Critical Thinking: Data analysts must look at the numbers, trends, and data and come to new conclusions based on the findings.\", \"Attention to Detail: Data is precise. Data analysts have to make sure they are vigilant in their analysis to come to correct conclusions.\", \"Math Skills: Data analysts need math skills to estimate numerical data.\"]','[\"HTML\"]','[\"B.Tech/B.E.\", \"M.Tech./M.E.\", \"Ph.D.\"]','[\"2012\", \"2013\", \"2014\"]','2017-10-05','Rustamji Institute of Technology , BSF Academy Tekanpur Gwalior M.P (475005)','2017-10-24',NULL);
/*!40000 ALTER TABLE `mass_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mass_profile`
--

DROP TABLE IF EXISTS `mass_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mass_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `filled` char(1) DEFAULT '0',
  `company_name` varchar(255) DEFAULT NULL,
  `company_website` varchar(100) DEFAULT NULL,
  `company_about` varchar(1000) DEFAULT NULL,
  `company_location` varchar(150) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='table made to store mass recruitment profile';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mass_profile`
--

LOCK TABLES `mass_profile` WRITE;
/*!40000 ALTER TABLE `mass_profile` DISABLE KEYS */;
INSERT INTO `mass_profile` VALUES (1,'ramesharch','1','Hashtag','https://www.hashtagtechnologies.com/','HashTag Technologies is a premier Software Development and Digital Marketing company founded in India in the year 2014 with a passion to offer the best of all services.','Gurgaon','connaught place New Delhi','StartUp'),(2,'mohitgoyal','0',NULL,NULL,NULL,NULL,NULL,NULL),(3,'mayanksingalhead','0',NULL,NULL,NULL,NULL,NULL,NULL),(4,'mayanksingal','0',NULL,NULL,NULL,NULL,NULL,NULL),(5,'mayanksingall','0',NULL,NULL,NULL,NULL,NULL,NULL),(6,'vijaygoyal','1','RankWatch','https://rankwatch.com','The company Works with the SEO','Gurgaon','Gurgaon New Delhi','StartUp'),(7,'dreamcareerstairs','1','Careerstaira','https://careerstairs.in','it\\\'s a job portal','Gurgaon','Gurgaon','StartUp'),(8,'wanelighting','0',NULL,NULL,NULL,NULL,NULL,NULL),(9,'apptunix','0',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `mass_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `request_callback` char(1) NOT NULL DEFAULT '0',
  `callback_time` char(1) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `project_desc` varchar(1000) DEFAULT NULL,
  `project_type` longtext,
  `start_date` varchar(15) DEFAULT NULL,
  `budget` varchar(15) DEFAULT NULL,
  `others` varchar(1000) DEFAULT NULL,
  `send` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COMMENT='table made to store queryies';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (2,'contactus','sachin sharma','sunnysharmar03@live.com','just call me when ur free !','9981101462','1','2',NULL,NULL,NULL,NULL,NULL,NULL,'2017-09-13 10:45:52'),(3,'contactus','Ravi Prasad','ravi@gmail.com','Testing new option',NULL,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,'2017-09-28 09:57:35'),(4,'contactus','Monty Sharma','montysh@live.com','Testing','9981101462','1','3',NULL,NULL,NULL,NULL,NULL,NULL,'2017-09-28 09:58:33'),(17,'contactus','ravindra kumar','ravi@gmail.com','testing',NULL,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 02:23:44'),(20,'mass','Sanjay Nigam','sanjay@gmail.com','need to be in touch !','8794521236','1','4',NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-10 14:03:18'),(13,'project','Ravindran Jadegaa','sachin@careerstairs.in',NULL,'9981101461','0',NULL,'RankWatch','testing new option','[\"Complete Website\", \"other\"]','near_future','under_25k','nothing wo','2017-09-29 14:41:58'),(21,'mass','Ankit Gupta','ankit@gmail.com','Testing working condition !',NULL,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-10 14:05:51'),(22,'mass','mayank','mayanksingal@careerstairs.in','trial',NULL,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-12 10:36:58'),(23,'campus','mayank','mayanksingal@careerstairs.in','trial',NULL,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-12 10:39:51'),(24,'project','mayank','mayanksingal@careerstairs.in','contact  m  validation nhai   h','9891713607','1','1',NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-15 14:56:19'),(25,'project','kay  h    kuch  kas  nahi h','mayanksingal@careerstairs.in','hanji  sab  same   hi toh h','9891713607','1','5',NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-15 14:57:35'),(26,'project','mayank','mayanksingal@careerstairs.in',NULL,'9891713607','0',NULL,'careerstairs.in','webiste   m kamiaya   hhhhhhhhhhhhhhhhhhhhhhh','[\"Complete Website\",\"Code Review\",\"other\"]','this_month','under_25k','but it create  issue  to   change instant    form one page to  other page','2017-10-15 15:14:43'),(27,'campus','mayank','mayanksingal@careerstairs.in','trial  traial','9891713607','1','2',NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-15 15:16:03');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruiter_profile`
--

DROP TABLE IF EXISTS `recruiter_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recruiter_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `type_name` varchar(255) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='table made to store recruiter profile data';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruiter_profile`
--

LOCK TABLES `recruiter_profile` WRITE;
/*!40000 ALTER TABLE `recruiter_profile` DISABLE KEYS */;
INSERT INTO `recruiter_profile` VALUES (1,'sharmash','Consultant','Aptron Consultant','Madhya Pradesh','Gwalior','26 - A Old kherapati Colony , Foolbagh Gwalior M.P','APTRON is one of the most credible IT and NON-IT training institute in Gwalior offering hands on practical knowledge and full job assistance on every training course. At APTRON training is conducted by subject specialist corporate professionals with 10+ years of experience in managing real-time projects. APTRON implements a blend of academic learning and practical sessions to give the student optimum exposure that aids in the transformation of native students into thorough professionals that are easily recruited within the industry.'),(4,'viveksharma',NULL,NULL,NULL,NULL,NULL,NULL),(5,'padmesh757',NULL,NULL,NULL,NULL,NULL,NULL),(6,'287903545042716',NULL,NULL,NULL,NULL,NULL,NULL),(7,'1731113910518772',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `recruiter_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribe`
--

LOCK TABLES `subscribe` WRITE;
/*!40000 ALTER TABLE `subscribe` DISABLE KEYS */;
INSERT INTO `subscribe` VALUES (1,'$2y$11$JqWdYYtbbvAkEUlJbGPPPeZLmiZACGo92BymRIqw0VP1Yiom59.1W','sunnysharma03@live.com','0'),(10,'$2y$11$6RPelD15sjW9sbL9sT4VB.A.gP5IbiXlufF0lWOBPS/LXtpZ.tVvG','sunnysachin02@gmail.com','2'),(11,'$2y$11$1irxFpXaiuhbQFk9oqi3NubLB6q/Y4bkRH8N4Lvt6WgQ7eGehq3MC','sunnysachin03@gmail.com','3'),(12,'$2y$11$HHcuD0jv0RPtqnb1UGGCsu7hg2HFDLwW/t.iM8NAb/ta2e4xv.QBC','mayanksingal@careerstairs.in','0');
/*!40000 ALTER TABLE `subscribe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp_account`
--

DROP TABLE IF EXISTS `temp_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `oauth_uid` varchar(100) NOT NULL,
  `link` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='table made to store temp sign up data';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_account`
--

LOCK TABLES `temp_account` WRITE;
/*!40000 ALTER TABLE `temp_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_login`
--

DROP TABLE IF EXISTS `users_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_provider` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_verify` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` date NOT NULL,
  `last_login` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_login`
--

LOCK TABLES `users_login` WRITE;
/*!40000 ALTER TABLE `users_login` DISABLE KEYS */;
INSERT INTO `users_login` VALUES (1,'user','facebook','1499511723446983',NULL,'Sachin Sharma','sunnysharma03@live.com','0','9981101462','male','https://fb-s-b-a.akamaihd.net/h-ak-fbx/v/t1.0-1/c97.302.574.574/s50x50/14642098_1218398014891690_301092293531336688_n.jpg?oh=cee7a2781edd143e2bd8a22ad01c3928&oe=5A2EB731&__gda__=1512434772_9f001aa3b7911bd047d4ed0019f54b2a','https://www.facebook.com/app_scoped_user_id/1499511723446983/','2017-07-16','2017-08-29'),(2,'user','normal','sunnysharma','$2y$11$ZJVVw5eSUC3FNjXLThlT2.VpjB19HFM4O/1u10YXS00CzFCl1IteC','Vivek Sharma','sunnysachin03@gmail.co','0','7415606070','male','sunnysharma.jpg','','2017-08-04','2017-10-20'),(3,'recruiter','normal','sharmash','$2y$11$thS/FDDx2ayfpoGw5teH3OMLkQRa7niAoemVSlgklPqovYsD/45kK','Sunny Sharma','sunnysachin03@gmail.com','0','7415606078','male','sharma.jpg','','2017-08-20','2017-10-20'),(8,'user','google','102202688575740769682',NULL,'Sachin Sharma','sunnysachin03@gmail.com','0',NULL,'','https://lh6.googleusercontent.com/-4GXoVKun4d4/AAAAAAAAAAI/AAAAAAAAADI/-ty96rMlXLM/photo.jpg','https://plus.google.com/102202688575740769682','2017-09-11','2017-09-11'),(9,'admin','normal','rootadminroot','$2y$11$Fq/cigyWteU6d3B/sbsCHejUPgqPDtcNOrbnhWxncZq89UR1OI7pe','Mayank Singhal','sachin@careerstairs.in','0','9050167626','male','default.png',NULL,'2017-09-15','2017-10-25'),(10,'mass','normal','ramesharch','$2y$11$xMoQF5nvAleCXCTZWwYqhOBIftxQ0AXcKjoHIQCVDaRMt5tzOmzTW','Ramesh Sharma','ramesh@gmail.com','0','7415689545','male','ramesharchJxmoR8wVMN.png',NULL,'2017-10-04','2017-10-20'),(11,'mass','normal','mohitgoyal','$2y$11$4f1YPT1k4seOIk4e84Gdzuu47GBSaneNHnn1cDS3Yv345X.fvoV1G','Mohit Goyal','mohit@gmail.com','0',NULL,'male','default.png',NULL,'2017-10-11','2017-10-12'),(12,'user','facebook','2272679119624992',NULL,'Shruti Garg','shrutigarg338@gmail.com','0',NULL,'female','https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/13615410_1969794299913477_5051874494877058170_n.jpg?oh=24cc56c388a7ab969689cdf7f91e1403&oe=5A87A1A8','https://www.facebook.com/app_scoped_user_id/2272679119624992/','2017-10-12','2017-10-12'),(13,'recruiter','normal','padmesh757','$2y$11$KGC9kfy1Ox5Io5RN9hvx.e0sbD.akQEybnlVEqFA6HirQmgDAylNG','Padmesh Kumar Singh','padmeshraj99@gmail.com','0',NULL,'male','default.png',NULL,'2017-10-15','2017-10-15'),(14,'mass','normal','mayanksingalhead','$2y$11$2uiGqJe9.5oDFh5PDFcokeqHnp84HE6SYxEthKNuRvk5rO5wZoK6K','mayank','mayanksingal@careerstairs.in','0',NULL,'male','default.png',NULL,'2017-10-15','2017-10-15'),(15,'recruiter','google','106718256629795234198',NULL,'Mayank Singal','mayank.singla543@gmail.com','0',NULL,'male','https://lh5.googleusercontent.com/-SOx6AlF2p9Y/AAAAAAAAAAI/AAAAAAAAAQo/XxfCiw07b3o/photo.jpg','https://plus.google.com/106718256629795234198','2017-10-15','2017-10-15'),(16,'user','facebook','1578131635584991',NULL,'Sachin Sharma','sunnysharma03@live.com','0',NULL,'male','https://scontent.xx.fbcdn.net/v/t1.0-1/c97.302.574.574/s50x50/14642098_1218398014891690_301092293531336688_n.jpg?oh=abc89b346ee357ef4568598dcfa0cb99&oe=5A7DD131','https://www.facebook.com/app_scoped_user_id/1578131635584991/','2017-10-15','2017-10-16'),(17,'recruiter','facebook','287903545042716',NULL,'Mayank Singal','careerstairs.hr@gmail.com','0',NULL,'male','https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/19959470_254383341728070_2540923923194913155_n.jpg?oh=71487a53e98e73bc6fc3f00b2607da93&oe=5A75867F','https://www.facebook.com/app_scoped_user_id/287903545042716/','2017-10-16','2017-10-16'),(18,'mass','normal','mayanksingal','$2y$11$BkViDZIRWK9QHXL0TkejSO9AGaopsz2Hc32Ak70v8PQc1z9aGjtkC','mayank','team@careerstairs.in','0',NULL,'male','default.png',NULL,'2017-10-16','2017-10-16'),(19,'user','facebook','1466808003387810',NULL,'Anuj Khurana','sugandhsingal@gmail.com','0',NULL,'male','https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/1517547_586810301387589_1431430494_n.jpg?oh=0a4e47a81dc4e37c4a87894c080d150b&oe=5A85165E','https://www.facebook.com/app_scoped_user_id/1466808003387810/','2017-10-16','2017-10-16'),(20,'mass','normal','mayanksingall','$2y$11$HU4.mmnDn6byTvo9xZqxeuOp9dI3.5dgexJYt79lNC29HxULWFdlu','mayank','teamm@careerstairs.in','0',NULL,'male','default.png',NULL,'2017-10-16','2017-10-16'),(21,'mass','normal','vijaygoyal','$2y$11$cc2wvzwCncjynTKVPW8x.usmt0ZFkqvEJwZZ5DMZEBEPiK9QhGN6S','Vijay Goyal','sachin.sharma1@studentpartner.com','0','7415986523','male','vijaygoyal96JfmZMtn4.jpeg',NULL,'2017-10-16','2017-10-20'),(22,'recruiter','facebook','1731113910518772',NULL,'Jobs Pathshala','jobspathshala@gmail.com','0',NULL,'male','https://scontent.xx.fbcdn.net/v/t1.0-1/c11.0.50.50/p50x50/18882273_1684334241863406_3231876005740387589_n.jpg?oh=3b9d402f38da75ad6547a60829654c36&oe=5A77DC4D','https://www.facebook.com/app_scoped_user_id/1731113910518772/','2017-10-16','2017-10-17'),(23,'mass','normal','dreamcareerstairs','$2y$11$8CcGDiMzq5iSq2LFBoB6ueUbgkppYfGpPjLpbxjyYlvTkv3rgQq9e','mayank','mayanksingla543@gmail.com','0','9891713604','male','dreamcareerstairsIkTc2K32Mg.jpeg',NULL,'2017-10-18','2017-10-20'),(24,'mass','normal','wanelighting','$2y$11$WFX.fnnhftHFJj03nJkcvuTSZhRkVovYFqYmOoBJdyK0zJWJcD/Pi','Meenakshi chawla','meenakshi.chawla@wanetechnologies.com','0',NULL,'female','default.png',NULL,'2017-10-25','2017-10-25'),(25,'mass','normal','apptunix','$2y$11$4nL5OQoupQcOLl8u2yqGs.PAP/hROxw7YjOPdsIVh1I874yKpR7Q6','Shefali Mishra','shefali@apptunix.com','0',NULL,'female','default.png',NULL,'2017-10-25','2017-10-25');
/*!40000 ALTER TABLE `users_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_profile`
--

DROP TABLE IF EXISTS `users_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_profile` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `objective` varchar(255) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `skills` longtext,
  `acheivements` longtext,
  `projects` longtext,
  `work` longtext,
  `education` longtext,
  `jobs` longtext,
  `links` longtext,
  `video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_profile`
--

LOCK TABLES `users_profile` WRITE;
/*!40000 ALTER TABLE `users_profile` DISABLE KEYS */;
INSERT INTO `users_profile` VALUES (1,'1499511723446983','Web Developer','Seeking a challenging and rewarding opportunity with an organization of repute which recognizes & utilizes my true potential while nurturing my analytical, technical skills and management skills','Madhya Pradesh','Morena','118-A balwant nagar thathipur Gwalior','[\"HTML5\", \"CSS3\", \"JAVASCRIPT\", \"JQUERY\", \"LONGTEXT\", \"PHP\", \"MYSQL\", \"AJAX\"]','[\"Selected for Microsoft Imaginecup India 2016 for semi finals\", \"Awarded Web-Developer Badge by Microsoft Virtual Academy\", \"Awarded AZURE for IT Pros by Microsoft Virtual Academy\", \"Wins $120 in Microsoft Hackathon (Openness)\", \"Selected as a Microsoft Student Partner (MSP)\", \"Campus Ambassador of Hackerearth\", \"Organized a lot of Programming contest on Hackerearth open for all participants across India\", \"Qualify for Onsite round of ACM-ICPC 2014-2015 for IIT KHARAGPUR\", \"Qualify for Onsite round of ACM-ICPC 2014-2015 for AMRITAPURI\", \"Developed web based project for B.S.F. (Border Security Forces)\", \"Qualifies Codesprint India 2014\", \"Wins 50$ A.W.S credit from Amazon web services\", \"Winner in inter- college G.D competition\", \"Technical - coordinator at ETCSA - 2015 an International Research Conference\"]','[[\"Pasiune.in\", \"http://pasiune.azurewebsites.net/\", \"2016-01\", \"2016-03\", \"Developed for people who are trying to build their profession or searching for it. The project contains a lot of profession and results are in videos, books, universities, top professional of that fields from LinkedIn\"], [\"Smart Toll\", \"  http://toll.azurewebsites.net/\", \"2016-07\", \"2016-10\", \"This project was a part of Internship Project, it uses the Gmail API to send an email to the user who goes for the registration. And SMS by using way2sms Services. The user can search all tolls and their prices according to vehicle type before going on\"]]','[[\"Intern\", \"MiracleItes\", \"New Delhi\", \"2016-07\", \"2016-10\", \"Worded as a web developer with front end and backend skills\"], [\"MSP\", \"Microsoft\", \"Gwalior\", \"2016-01\", \"2017-06\", \"Worked as a MSP in RJIT\"]]','[[\"Rustamji Institute of Technology\", \"Bachelor of Engineering - BE\", \"Information Technology\", \"7.9\", \"2013\", \"2017\"]]','[\"5\", \"1\"]','[[\"LinkedIn\", \"https://www.linkedin.com/in/sunnysharma03\"], [\"Github\", \"https://www.github.com/sunnysharma03\"]]',NULL),(2,'sunnysharma','Web Developer','Looking for a great career ahead !','New Delhi','Delhi','118-A balwant nagar thathipur Gwalior M.P','[\"PHP\", \"MYSQL\", \"AJAX\", \"MongoDb\", \"Swift\"]','[\"MongoDB basics Certificate from MongoDB University Inc.\", \"Web Developer Badge by Microsoft Virtual Academy.\"]','[[\"Smart-toll\", \"https://toll.azurewebsites.net\", \"2016-08\", \"2016-10\", \"It was really a great project\"]]','[[\"Intern\", \"MiracleItes\", \"New Delhi\", \"2016-07\", \"2016-10\", \"Worked as a web developer with front end and back-end skills.\"], [\"Web Developer\", \"Frostpeak\", \"Noida\", \"2017-01\", \"2016-12\", \"Worked as backend developer in the core team !\"], [\"Full Stack Developer\", \"Metsvrse\", \"Chennai\", \"2017-06\", \"Present\", \"Working as a full stack developer in this company and also the incharge of intern hiring program.\"]]','[[\"Rustamji Institute of Technology\", \"Bachelor of Engineering - BE\", \"Information Technology\", \"7.9\", \"2013\", \"2017\"]]','[[\"4\", \"0\"], [\"5\", \"0\"], [\"6\", \"0\"], [\"3\", \"0\"]]','[[\"LinkedIn\", \"\"], [\"Github\", \"https://www.github.com/sunnysharma03\"], [\"Blog\", \"\"], [\"Portfolio\", \"\"]]','https://www.youtube.com/watch?v=F9dtepkeR0I'),(4,'102202688575740769682',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'2272679119624992',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'106718256629795234198',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'1578131635584991',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'1466808003387810',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verify_email`
--

DROP TABLE IF EXISTS `verify_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verify_email` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `link` varchar(70) NOT NULL,
  `job_id` int(11) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verify_email`
--

LOCK TABLES `verify_email` WRITE;
/*!40000 ALTER TABLE `verify_email` DISABLE KEYS */;
INSERT INTO `verify_email` VALUES (2,'1731113910518772','$2y$11$JAf/nbbtiwMKlo.8/68gIeajSDb3S1aEFqutZme9iYSLlSe4H4EKy',19,'2017-10-16 17:07:34','2017-10-16 23:07:34'),(3,'1731113910518772','$2y$11$7h6lVtC1yxR7QDenGfiBeO/4jMV4S0CW3Raeu30l7c2XqxLU6L0/C',20,'2017-10-17 15:14:12','2017-10-17 21:14:12'),(4,'1731113910518772','$2y$11$ZciuIeR7DjDOuF09ut2AfuguRG.I3DgH4vJ5aYrUg12IoqUdeiR/W',21,'2017-10-17 15:15:01','2017-10-17 21:15:01'),(5,'1731113910518772','$2y$11$z1BB6UXXWJMAxqSJhJlgwet3jiUexw3WiGSIFIlHt3x/MNO7vgQyK',22,'2017-10-17 15:15:13','2017-10-17 21:15:13');
/*!40000 ALTER TABLE `verify_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'stairs'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-25 23:08:53
