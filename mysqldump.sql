-- MySQL dump 10.13  Distrib 5.5.29, for Win64 (x86)
--
-- Host: localhost    Database: pcRepairsUK
-- ------------------------------------------------------
-- Server version	5.5.29

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
-- Table structure for table `aboutuscontent`
--

DROP TABLE IF EXISTS `aboutuscontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aboutuscontent` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `text` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aboutuscontent`
--

LOCK TABLES `aboutuscontent` WRITE;
/*!40000 ALTER TABLE `aboutuscontent` DISABLE KEYS */;
INSERT INTO `aboutuscontent` VALUES (1,'About Us','Let PC Repairs Hull save you from your Computer Related Dilemma!\r\nPC Repairs Hull, if you haven\'t guessed so far, is a company which, yes you have probably guessed correctly, sells endangered tropical fish. That\'s a joke, we repair and build computers mainly, but we like to believe we are on the lighter side of life. Making your experience with us, a lot less stressful.\r\nWe specialise in PC Repairs (surprise, surprise!), Laptop &amp; Notebook Repairs, Apple Mac Repairs and Mobile Phone Repairs. We\'re also sell a fantastic range of Computer Parts too!\r\nPC Repairs Hull is a local company, serving the district of East Riding, in particular around Kingston Upon Hull. Overall our staff have over 15 years experience in the I.T. Industry, who really know what they\'re doing! We strive in every way to please the customer, and will always go that extra mile to make your experience with us, a pleasant experience.\r\nWe pick up and deliver ALL of our customers systems, so the customer doesn\'t have to worry. We tailor our service towards every customer individually and that is why we have such an incredible reputation around the Hull &amp; surrounding area.\r\nDon\'t take our word for it! Read through some of our customer testimonials!');
/*!40000 ALTER TABLE `aboutuscontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` char(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (1,'admin','1f5523a8f535289b3401b29958d01b2966ed61d2');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogcategories`
--

DROP TABLE IF EXISTS `blogcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogcategories` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogcategories`
--

LOCK TABLES `blogcategories` WRITE;
/*!40000 ALTER TABLE `blogcategories` DISABLE KEYS */;
INSERT INTO `blogcategories` VALUES (1,'News & Updates'),(2,'Gaming Zone'),(3,'Software Reviews'),(4,'Video of the Day'),(5,'Technology'),(6,'General Posts'),(7,'Competitions'),(8,'Make Money Online');
/*!40000 ALTER TABLE `blogcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogposts`
--

DROP TABLE IF EXISTS `blogposts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogposts` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `thumbnail` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `text` varchar(10000) DEFAULT NULL,
  `categoryId` smallint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogposts`
--

LOCK TABLES `blogposts` WRITE;
/*!40000 ALTER TABLE `blogposts` DISABLE KEYS */;
INSERT INTO `blogposts` VALUES (1,'WIN! SanDisk 32GB USB Flash Drive','blogPic1.png','2014-08-07','Today we have started a campaign to help create a bigger audience on the infamous FaceBook. We are offering all of our readers (and customers) the opportunity to WIN!\n\nWe have a Brand New &lt;a href=&quot;http://www.sandisk.com/products/usb-flash-drives/cruzer-switch-usb-flash-drive&quot;&gt;32GB Cruzer Switch USB Flash Drive&lt;/a&gt; worth Â£49.99 to Give away! We will send this out to you by post directly to your door, ready for you to pack it full of your songs, music and picture files with a capacity big enough to hold up to;\n&lt;ul&gt;\n&lt;li&gt;&lt;b&gt;5000+ MP3 Songs (256kbps)&lt;/b&gt;&lt;/li&gt;\n&lt;li&gt;&lt;b&gt;40+ AVI Videos (750MB)&lt;/b&gt;&lt;/li&gt;\n&lt;li&gt;&lt;b&gt;3250+ JPEG Pictures (10MB)&lt;/b&gt;&lt;/li&gt;\n&lt;/ul&gt;\n&lt;h2&gt;Technical Details&lt;/h2&gt;\n&lt;ul&gt;\n&lt;li&gt;&lt;b&gt;Dimensions: (L x W x H) 20mm x 45mm x 7mm&lt;/b&gt;&lt;/li&gt;\n&lt;li&gt;&lt;b&gt;Memory capacity: 32GB&lt;/b&gt;&lt;/li&gt;\n&lt;li&gt;&lt;b&gt;Weight: 5g&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;\nYou can win all this simply by liking our page on FaceBook, and then proceeding by using the hash tag #PCRepairsHull on Twitter. It\'s as simple as that, and no purchase necessary.',7),(3,'Modern Gaming: How it\'s Changed!','blogPic2.png','2014-08-07','Many moons ago, PC Gaming was to be honest, crude slow and expensive. The basic Computer would cost a small fortune and at a time when options were limited and hard drive storage was even more so. A dual speed CD ROM would set you back the good part of Â£100 and a Voodoo 2 Graphics Card was a real piece of hardware. Games were in VGA and often came on CD ROM (often more than one disk per game). Baldur\'s gate came on 5 disks.\n\nTime moves on and now we have the luxury of DVD and even direct to drive downloads. Hardware demands are on the increase and it seems that every \'must have game\' comes with a \'must have\' graphics card. The recent GeForce 670 GTX at a cost of close to Â£300 depending on make or specification.\n\nA trend has emerged with new games being a quick &amp;quot;Port&amp;quot; over ROM, the Console versions. This may be quick and cost effective for the Game Studio but often times leaves a bitter taste in the die-hard PC gamer. The controls may be unnatural and frequently leave out the &quot;console&quot; option for the &quot;modders&quot;.\n\nFinally, real news about Halflife 2: episode 3. A release date for the 31st of December 2012 has been released but this is not always the case for the team at Valve. The shortcut below gives a rough idea of their idea of completion dates.\n\n&lt;a href=&quot;https://developer.valvesoftware.com/wiki/Valve_Time&quot;&gt;Half Life 3 Release Date&lt;/a&gt;&lt;h2&gt;Coming Soon (on PC):&lt;/h2&gt;&lt;ul&gt;&lt;li&gt;&lt;b&gt;Tom Clancy\'s Ghost Recon: Future Soldier - Release Date: 29th June 2012.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Battlefield 3: Close Quarters (Expansion Pack) - Release Date: 29th June 2012.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Prototype 2 - Release Date: 27th July 2012.&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;\n\nAs a final note I still have a copy of Baldur\'s gate, which still has its own charm which is why it remains part of my collection.',2),(4,'Microsoft Unveil the \'Surface\' Tablet PC','blogPic3.png','2014-08-07','The Apple iPad\'s days may be numbered? Could it be possible? Can Microsoft take some of that market share that Apple are recently dominating so aggressively.\n\nMake that decision for yourself. As the first glimpse of the Microsoft Surface is finally showcased here in this video.\n\nI must say, I even love the promotional teaser video. It\'s quite striking on how Microsoft have seem to of adapted some of Apple\'s techniques when it comes into the marketing world. Usually conforming to rather drab, office looking packaging and promotional material, they seem to of taken a more aesthetically appeasing approach.\n\n&lt;iframe width=&quot;604&quot; height=&quot;340&quot; src=&quot;https://www.youtube.com/embed/Qkq3bCpdXS8?rel=0&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;\n\nIt looks great and seems to cover several of Apple iPad flaws, although Microsoft have been known in the past to flop when it comes to competing directly against probably their biggest competitor.\n\nFor example the Microsoft Zune vs Apple iPod, to which Microsoft lost out considerably, gaining Apple an almost cult-like fan base. Can Microsoft penetrate that market? I think we are all eager to find out...maybe with the direct integration of Windows 8 applications this could finally seem possible amongst the horizon! You decide...',5),(5,'Inventions That Revolutionized Today','blogPic4.png','2014-08-07','In 1983 a organisation called ARCA based in the United States revolutionised the way we transmit information around the globe by introducing the protocol known today as TCP (Transfer Control Protocol). In that era businesses would have to pay extortionate amounts to be able to transmit data within their networks and each network was known as &quot;Exclusive &quot; with only high end businesses being able to afford these types of infrastructures.\n\nARCA then found that if they could interconnect all these networks together, it would be possible to share data on a large scale basis, enhancing the way that people can exchange data between themselves. The problem that had arisen was the fact that all networks used there own computer languages to connect and share data which made it seem almost impossible to bridge these connections. After great deal of research &amp; delegation they discovered that if they used a universal language that could be commonly understood by each network the possibilities of packet transfer between entities was now possible, hence the birth of TCP.\n\n&lt;h2&gt;Packet Testing&lt;/h2&gt;\nTo test the theory correctly they developed the idea in an identical way we send physical mail, before sending the â€œpacket dataâ€ it would be sealed in a &quot;Packet &quot; sent across the world several thousands of miles to be returned to base, then reopened, testing if all the data returned in the exact format it was originally sent. Although the networks back in 1983 where sufficiently slower than the computer networks of today, they all sat eagerly anticipating its arrival. Crunch time the &quot;Packet &quot; was received with all data intact, finally one of the computing technological breakthroughs had happened which gave birth to the Worldwide Web.\n\nWhat they now realised was by using this protocol each &quot;Node &quot;, &quot;Computer &quot; or simplistically a &quot;Machine &quot; can be given a unique address to become identifiable by the network, as we know today as &quot;IP Address &quot;. They commanded that all networks across the globe would switch over to this new protocol at the same time and any network whom did not comply faced charges to be later connected.\n\nThe original purpose of the ARCA project was to allow and give feasible options for Universities and Academic institutions to share valuable resources saving them time and money, and more importantly making paper obsolete...\n\n...unintentionally creating the basic building blocks of the current &quot;TCP &quot; and &quot;Peer to Peer &quot; (P2P file-sharing) protocols.\n\nYou learn something new everyday!',5),(6,'Hull Has The Olympic Torch','blogPic5.png','2014-08-07','It wasn\'t until Saturday that I realised that the &quot;Olympic Flame&quot; would be arriving in Hull on the following Monday, and actually staying in the city overnight. Not every person can claim that!\n\nWest Park was where the &quot;Flame&quot; would end its journey. On that day that is where all the focus and commotion would been based.\n\nThe route had been clearly marked out in the local paper. So that anyone who wants to catch a glimpse of the famous flame would know where to be at what time.\n\nThat is when I decided to jump on my bike. When I got there I could see amasses of people towards \'West Park\' and judging by the amount of cars parked along side \'Spring Bank West\' and down the side streets, I was excited as I knew there would be a fantastic turnout. Approaching closer to &quot;Walton Street&quot; itself, it was how I imagine a combination of &quot;Hull Fair&quot; and &quot;Match day&quot; antics would be.\n\nDrones of people of all ages where making their way from their parked cars to the main park. Huge crowds had already gathered and were well into the spirit of the event, chanting, waving flags and torch replicas. A large stage had been erected, food and drinks stalls where to hand, some organisations had actually gone into this historical event, but I was astounded more by the amount of people that had made all the effort and had come out. I think the people of Hull should be proud of themselves and their city, it was a remarkable event, and amazing to of been chosen to be hosting the &quot;Flame&quot;. The event was broadcast all around the World giving the city much well deserved exposure, it was good for the Streets as the route lines were littered with well wishers and supporters.\n\n&quot;This has been a great opportunity for the city. It has also provided a great chance for local organisations to show what they are all about. There has been real buzz in the city&quot; - Lord Mayor of Hull, Danny Brown.\n\n&quot;It was a fantastic day and the town was looking great. The atmosphere was superb. Everyone was excited and it was all good-humoured.&quot; - Mayor of Beverley, Margaret Pinder.',1),(7,'Can I Throw Away My Old Computer?','blogPic6.png','2014-08-07','In 2006 the electronics industry where told to clean up their act after the government found that people where just simply discarding their computers in the common household waste. These actions caused the government to react by creating the &quot;WEEE Directive&quot; (Waste electrical and electronic equipment) which finally became part of UK law as from January 2007.\n\nIn short this directive was established to benefit the ever changing climate and encourage the usage of recycled materials to help regenerate the current waste figures. But who does this directive actually affect?\n\n&lt;ul&gt;&lt;li&gt;&lt;b&gt;Importers, re-branders and manufacturers&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Operators of producer compliance schemes&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Waste management industry&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Retailers&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Business users&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Householders&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Local authorities&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;\n\nLooking at the list above it is evident that the legislation affects all of us, so realistically we should take caution before discarding our old electronic equipment.\n\n&lt;h2&gt;Home-owners can:&lt;/h2&gt;&lt;ul&gt;&lt;li&gt;&lt;b&gt;Request that they can return the item to the retailer for recycling&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Take old appliances to their local civic amenity site&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Ask local councils to collect the equipment, more often than not they do.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Arrange for an electrical retailer delivering new equipment to take away the old appliance&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;\n\nSo when your thinking of upgrading or buying a new computer then consider the WEEE Directive before discarding the machine, its all of our responsibility to correctly dispose our old computer equipment. Think about our environment.',6),(8,'Battle of the Smart Phones','blogPic7.png','2014-08-11','This year we all eagerly await the arrival of the iPhone 5, the anticipation for many draws out to be a long waiting game. Samsung and many others have released what they call the â€œiPhone bustersâ€ but to date none of these devices can live up to the iPhone\'s capability and ease of use. The iPhone in todayâ€™s society has become more than a device that just improves our lives but a fashion item for many. The iPhone trend has hit an all-time high, not just amongst the young but of all age groups.\n\nPersonally owning an iPhone 4 has been a delight, the capabilities of being able to surf the web virtually anywhere has become not only a commodity but now a necessity. The 4S model claimed to have many improvements over the 4, but after a great deal of testing it doesn\'t really offer any new advancements over the iPhone 4. (For me anyway) SIRI, the new feature built into the 4S to some is a great tool but alternatively it really doesn\'t enrich the users experience for some, the feature was deemed to be a bit of laugh at first but the joke soon wore off and many users still use the device in the same way as they did previously. So what can we expect the iPhone 5 to offer;\n&lt;ul&gt;\n&lt;li&gt;&lt;b&gt;The casing has been revamped to what they describe as liquid metal casing, simply put, a new stronger alloy housing to keep the internal circuit boards better protected.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;According to some press release information the new iPhone 5 will have 3D capabilities, which to be honest Iâ€™m a little dubious about as Nintendo released the 3DS which caused motion sickness for many users.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;They have revamped the keyboard with many improvements which the old one was good but still could do with many improvements.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;The Internet connectivity has been improved by using the new 4G network which they claim it will have greater speeds than previous versions.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;The processor is similar to what they have featured in iPad 3 using the latest A6 processor giving the user much greater power at their finger tips. The processor will have speeds at 1.5 - 2.0 GHz and 1GB of RAM which in retrospect is a fair bit of computing power for device that fits in your hand.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;One new benefit of the iPhone 5 which to date hasn\'t been clarified but they claim it will be available is the ability to use video calling (face-time) without the necessity of a Wi Fi network. If this service would be available then for me that would be a great feature as I use face-time consistently due to relatives living overseas.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;They have also opted for face recognition security which may have benefits and alternatively its own drawbacks.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;The camera will be revamped to be an 8 Megapixel and a 5 at the front.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;The design is believed to be sleeker than the previous versions making the visual aesthetics more pleasing.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Due to amount of iPhones that get broken on a day to day basis they have introduced what they call the &quot;Gorilla glass&quot; which is supposed to be shatter resistant.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;2 options will be available for memory, it will have either 64 gigabytes as standard or an upgrade option of 120 gigabytes.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Full 1080p HD Recording AND 3D Video Display, still dubious about this though lets wait for the release to make further annotations.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;SIM-Less Phone - The new iPhone 5 will be a World Phone. This is accomplished building 2 to 3 internal antennas which makes it capable of GSM and CDMA technology, so you can take the phone to any network!&lt;/b&gt;&lt;/li&gt;\n&lt;/ul&gt;\nSo all we can do for now is eagerly await the release which is estimated to be September 2012, Apple claim that some of the technology is so revolutionary that they have patent some of the technology to try and keep exclusive for us iPhone fanatics.',5),(9,'Grow Your Business Online','blogPic8.png','2014-08-11','Many customers approach &quot;PC Repairs Hull&quot; asking about web services for a feasible marketing solution. In response we offer the same information to each individual which is, &quot;your online presence is now one of your main focus points for advertising, more &amp; more people are prolifically searching for services via the Internet&quot;. Being online in todayâ€™s society requires more than a simple static 3-5 page website, if you are serious about company growth, although they do bare some positive prospects for simple localised search terms. Alternatively we are seeing more and more powerful websites appearing on the web (even in local searches) which tend to dominate certain search terms, so you may ask what can I do?\r\n\r\n&lt;h2&gt;Actions You May Want to Consider&lt;/h2&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;&lt;b&gt;Analyse your competitors websites, has it changed?&lt;/b&gt;&lt;/li&gt;\r\n\r\n&lt;li&gt;&lt;b&gt;Have they moved position?&lt;/b&gt;&lt;/li&gt;\r\n\r\n&lt;li&gt;&lt;b&gt;Are they using social networking to further promote themselves &amp; their web services?&lt;/b&gt;&lt;/li&gt;\r\n\r\n&lt;li&gt;&lt;b&gt;Have they gone to a professional web company and not attempted a self build?&lt;/b&gt;&lt;/li&gt;\r\n\r\n&lt;li&gt;&lt;b&gt;If they have a &quot;Newsletter Sign-up&quot; section, sign up and find out what they are up to.&lt;/b&gt;&lt;/li&gt;\r\n\r\n&lt;li&gt;&lt;b&gt;Remember the first rule of &quot;Marketing&quot;, where there is a captive audience there is a marketing opportunity.&lt;/b&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\nDo they offer monthly promotions to entice further custom?\r\n\r\nAfter our own competitors analysis PC Repairs Hull instantly recognised all our competitors and thoroughly analysed their computer repair services. Some may think it could be an underhanded trick, but professionally its &quot;business&quot;. Once you have done this you then must ask, what is my USP? (Unique Selling Point) Look at your competitors again and ask this question? Can I offer the same service but better, if so how?\r\n\r\nWhen PC Repairs Hull formed their own analysis we found out a shocking revelation, that most Computer Repair Companies don\'t have the correct credentials (Qualifications) to perform such cumbersome tasks on sensitive electronic hardware, so a word of warning, if you choose another Computer Repair company then ask to see if they are qualified first.\r\n\r\nEach member of PC Repairs Hull have backgrounds in the computer industry ranging from sophisticated computer programming languages to comprehensive CAD abilities. As the author mine personally, is a full bachelors degree in â€œcomputer scienceâ€, thus allowing full competence with virtually all computing systems.\r\n\r\nThis may seem like its gone of track slightly but the point is the analysis of our competitors and finding out that they are usually not &quot;qualified&quot;, allows us to have our own USP.\r\n\r\nPersonally I feel as though I can right this article on the principle of the teams educational background which has allowed us to develop our own sophisticated web application to allow us to have one of the strongest web presences online today.\r\n\r\nIf you feel like you need any kind of support growing your business then give us a call, one of our friendly staff members will provide you with all the relevant information you\'ll ever need.',6),(10,'Foundations of a Modern Website','blogPic9.png','2014-08-11','If your one of them &quot;do it yourself&quot; kind of individuals then you may want to take on the task of building your own website, before you get started you should understand some basic principles of how websites are built and put together. So whatâ€™s the first thing I need to know?\n\nFirstly you should familiarise yourself with &lt;a href=&quot;http://www.w3schools.com/html/&quot;&gt;HTML (Hyper Text Mark-Up Language)&lt;/a&gt; which in essence is the visual display of your website, alone it bares very little effect without being coupled with &lt;a href=&quot;http://www.w3schools.com/css/&quot;&gt;CSS (Cascading Style Sheets)&lt;/a&gt;. Once these mark-up languages have been entwined together its amazing what can be achieved with a little intuitive thinking. Although a website built using plain colour schemes (especially using CSS2 attributes) will not provide the visual stimulation a professional website will offer, why not?\n\nA high performing web applications success will have a certain degree of usability due to a well planned structure and clever image manipulation using some of the greatest design tools of all times, such as &quot;Photoshop&quot; or &quot;Illustrator&quot;. These applications alone can take years to master, as is evident amongst the team.\n\nWe always suggest you should plan your website before even attempting the build, this can take several hours or in some cases days or even weeks depending upon the sophistication of the web application. Once you have finished the build (design or planning, whether it be on paper or computer) you will need an IDE (Integrated Development Environment), there are several options available depending on budget and experience. Personally PC Repairs Hull use two variations of IDE\'s which are &quot;Adobe DreamWeaver&quot; or &quot;Netbeans&quot;, one is for mark-up as that is what its designed for and the other &quot;programming&quot;, we\'ll touch on programming later...for now you may want to download a free trial of &lt;a href=&quot;http://www.adobe.com/cfusion/tdrc/index.cfm?product=dreamweaver&amp;loc=en_us&quot;&gt;DreamWeaver&lt;/a&gt; just to get you started. The cheapest alternative that won\'t expire is Windows built in &quot;notepad&quot; which is capable of creating HTML, CSS and other relevant web based files. It does bare its own drawback as it offers nothing in the way of showing errors within the syntax which can be very useful.\n\n&lt;h2&gt;JQuery/ JavaScript&lt;/h2&gt;\nPeople often mistake the two entities as being different but they are not, JQuery is JavaScript, it is a set of pre-built JavaScript modules available through open source frameworks which allow developers such as myself to create interactive features with ease. So what does it do and what is it?\n\n&lt;a href=&quot;http://jquery.com/&quot;&gt;JQuery&lt;/a&gt; is a computer language that is compiled through the web browser i.e. Firefox, Internet Explorer and many others. The code is interpreted by the browser to animate HTML elements to allow them to behave differently to the static code. An example of this may be &quot;POP-UPS&quot; or Image sideshows where developers will think of intuitive ways to enhance our experience using the web application, for further info see the JQuery home page. People who view your web application will sometimes stay on your site and in some cases return several times to use these features as they can become useful commodities within the application, to serve purpose that will enhance their experience. (Such as PC Repairs Hull &quot;Health Centre&quot;)\n\n&lt;h2&gt;PHP &amp; MYSQL&lt;/h2&gt;\nIf your reading this article as first time web builder or you have done a couple of simple builds at home on your computer, you should approach this part with extreme caution. The power of these languages are amazing and what you can achieve with them is mind blowing, but many people will post scripts on the Internet to demonstrate their skills, but these scripts are often unsecured and for basic demonstration purpose only. People often try building applications by bonding these scripts together because they have very little or no experience handling the language. If you wish to attempt PHP or MYSQL I can only recommend you do a LOT of reading first and take in the information presented, otherwise don\'t do it...\n\n&lt;h2&gt;Some Recommended Reading&lt;/h2&gt;\n&lt;h2&gt;HTML &amp; CSS&lt;/h2&gt;\n&lt;ul&gt;&lt;li&gt;&lt;b&gt;Sams Teach Yourself HTML and CSS in 24 Hours (Includes New HTML 5 Coverage)&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Head First HTML with CSS &amp; XHTML&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Sams Teach Yourself HTML and CSS in 24 Hours (Includes New HTML 5 Coverage) (8th Edition)&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;\n&lt;h2&gt;JQuery&lt;/h2&gt;\n&lt;ul&gt;&lt;li&gt;&lt;b&gt;jQuery Cookbook&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;jQuery in Action, Second Edition&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;jQuery: Novice to Ninja 2nd Edition&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;\n&lt;h2&gt;PHP &amp; MYSQL&lt;/h2&gt;\n&lt;ul&gt;&lt;li&gt;&lt;b&gt;PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide (Visual QuickPro Guides)&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Professional CodeIgniter (Wrox Professional Guides)&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Beginning CakePHP: From Novice to Professional (Expert\'s Voice in Web Development)&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;\n\nWhere Now? Check Out Foundations Of A Modern Website Part 2',6),(11,'How to Make Money Online Part 1','blogPic10.png','2014-08-11','This is probably one of the most searched and sought after answers on the Internet in present times. Most people who have used the Internet at some point have researched this, or have even read a few articles on the subject (you have now joined that statistic). But how many of these have actually walked away with the information they have gathered, implemented it, and actually made a respectable return on investment? Not many, thatâ€™s the answer.\n\nWhen I was an adolescent, much of my own time and money was spent on this conquest, only to be let down, finding I had spent my hard earned money on eBooks offering nothing but re-engineered versions of a previous eBook I have found in the past, all attempts probably not surpassing $5 is income...and not in a feasible amount of time. I had tried everything from Google AdSense, Azoogle Ads, , Kontera, ClickBank, plus many other advert/affiliate based programs. Although they were all very good and I could see potential in almost every single one of them, how people made an actual sustainable living from these just seemed a mystery to me. I had to be missing out something. But what was it?\n\nThat is when I initiated properly looking at the subject from a more critical point of view, reading what these &quot;online entrepreneurs&quot; were blogging about themselves. And I found a couple of self made online businessesmen who were actually quite generous with their knowledge, and actually explain in utter detail exactly how they make their millions.\n\nMany people speak about this subject in disbelief as they think it is just another &quot;scam&quot; and that the only way you can make money is by going to work, working 9 till 5 and then collecting your monthly pay cheque. Wrong! Donâ€™t get it twisted, there is still a lot of hard work to do, but the money involved is something that will surpass almost everybodyâ€™s monthly pay cheque.\n\nThere are 2 main blogs from which I started researching my path to earning money online;- JohnChowdotCom &amp; Shoemoney.com, both owners of the blogs earn approximately $40,000+ online, and the best bit is they actually do this by &quot;telling you how they make money online&quot;...crazy! It sounds quite self indulgent, and arrogant, but these guys are so blatant about how they earn their cash, and the readers themselves actually help them do it. This is the first key to opening that door to success, keep â€˜em coming!\n\nIf you donâ€™t have something to keep readers/subscribers coming back every day/week/month, making money online, it isnâ€™t going to be possible for you.\n\nTo succeed in this hurdle you must write upon something that you thoroughly understand and a subject you enjoy talking about too. It will show in your writing, and your readers will get a positive response from your posts, entising them to come back and read future posts, which is brilliant for fully monitised blogs as it means your adverts are getting seen, which gives more chance of them clicking through, earning you money.\n\nOn the flipside, many wannabe online entruepruneurs will write on more niche subjects as they believe these highly paid adverts will be the key to earning thousands online, although the fundementals of this approach seem logical, you will find this doesnâ€™t work. The reason for this is generally because people who understand this subject will probably find contradictions within your posts, adding negativity and reason for your readers to disbelieve you are a credible source within that related field. You will probably find a reverse effect from what you intended to do in the first place.\n\nA lot of people believe this simply applies to blogs. But it really doesnâ€™t. The Internet is crammed full to the brim with &quot;turn key&quot; websites, in which people believe lies the key to unlocked riches. The reality is that people stumble upon the websites via search engines, only to quickly click the back button once they realise the website isnâ€™t quite what it seemed. Your adverts have receieved impressions, but theyâ€™re not the type of impressions that large paying corporations wish to spend their money on, eventually these sites are broadcasting lowly paid, non-contextual adverts, which simply donâ€™t pay out.\n\n&lt;h2&gt;Use what you have learnt&lt;/h2&gt;\nWhat I have told you so far wonâ€™t earn you millions, itâ€™s only the tip of the iceberg when it comes to actually monetising your activities online. Your first goal should be purely set on choosing your â€˜nicheâ€™. What do you know? What are you good at? If you were a reader, would you find it interesting, and would you come back and read more?\n\nOnce you have chosen your niche, plan your website. Whether you choose a blog, a website, or a combination of them both. Make sure your content is organic and every post/page is useful and serves a purpose within your model. Remember, &quot;Content is King&quot;. Underneath every Pound, Dollar and Yen is a reader who landed upon a page, found the content useful and clicked through to another contextual ad, because they &quot;wanted&quot; to. Control your readers, and give them something to read.',8),(12,'Foundations of a Modern Website (Part 2)','blogPic11.png','2014-08-11','If you havenâ€™t already, I suggest you read part 1 of this series of tutorials. In the previous post I explained what tools will be used upon building a modern website, if you have read it already, well done! Familiarise yourself with the technology and understand its requirements, then your ready to start planning. Understanding the key concepts with a firm grasp of the technology is essential to even think about planning. Picture this, you wish to build an engine but you don\'t even know what a piston is, its a failure waiting to happen, you would need all the key concepts first to even consider it.\n\nSo what\'s next?\n\n&lt;h2&gt;Planning&lt;/h2&gt;\nTo start the planning you would need to identify certain factors first, this is essential when outlining the requirements of the website, check them off if you\'ve already done them.\n\n&lt;ul&gt;&lt;li&gt;&lt;b&gt;Have you thought of a name for your website?&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;If so, is it catchy and easy to remember?&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;A logo for the website, this helps return visitors recognise your site ensuring them they have landed on the correct page.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Buy a domain name, does the domain offer any terminology towards your keywords.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;What is the website about? Keep your content rich and stay on subject. (For further reading see &quot;How to make money online&quot;)&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;What colours to use? Remember certain colours don\'t mix well!&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Whatâ€™s the goal? Sell goods, advertise services or simply blogging.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Layout of the page, where the menu will be and so on..&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;\n&lt;h2&gt;Website Storyboard&lt;/h2&gt;\nA website storyboard is an essential tool for beginners to plan there applications, it doesn\'t have to be anything brilliant, just a visual representation of your model, using it as a blueprint through your progress. The tools you may want use can vary, nothing sophisticated even pen and paper will do, remember its just a rough guide. As you progress certain factors will become common practice and most professionals will not even bother due to experience.\n\n&lt;h2&gt;Create A Sitemap&lt;/h2&gt;\nA little bit more technical now, this will help develop the architecture of the website, planning the pages and content layout. Your layout needs to be clear and easy to navigate allowing the user to identify areas of the site easily, keeping them interested. Your information should be presented clearly and all conform to itself. Meaning that your content should be planned identifying the relationships between itself. Keep your content categorised and ensure it remains that way, identify subject points that correlate properly. Creating a sitemap will help plan the website structure deeper than the home page, this goes beyond design and more towards information flow.\n\nOnce you\'ve achieved this and your comfortable then we can start the build of your first website, I will be going through the planning in the next article showing how it would be achieved as example. Also we will get onto some coding in the next part by setting up our page that will form the basis of the website. Each section will have the files available for download it you want to progress through quickly.\n\n&lt;h2&gt;Project Management&lt;/h2&gt;\nMost subscribers who want to read the content or attempt a build will most likely be a professional of some sort with limited time available so time management is essential. If your familiar with some of the basic concepts of project management you\'ll understand this part otherwise I suggest some of our recommended reading material. Create a Gantt chart to identify milestones and dependant tasks, allow a certain amount of time for contingency. Make it realistic and think about it carefully, if your planning the website as a build for company or such then remember not to rush the job, take your time and plan carefully. If you feel a little more advanced with these techniques you may want to create a CPM (Critical Path Method) or Work flow diagram to help manage your project. The larger the project the more likely it is you will need to employ these technologies.\n\n&lt;h2&gt;Some Suggested Reading&lt;/h2&gt;\n&lt;ul&gt;&lt;li&gt;&lt;b&gt;Project Management: (with MS Project CD Rom)Project Management&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;For Dummies (UK Edition)&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Project Management (Essential Managers)&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;\n\nKeep Posted for Part 3 which will be available online soon.\n\nPlease ensure you read part 1',6),(13,'Windows 8, The Next Step In Computing','blogPic12.png','2014-08-11','After watching a press release about Windows 8, it soon became clear that they have seriously done some work. They have completely revamped the way we interact with our computers allowing us to have a more comprehensive systems. The new Windows 8 design has a great &quot;APP&quot; based feature from what was seen, almost Apple like.\r\n\r\nSo Whatâ€™s New?\r\n\r\n&lt;h2&gt;The Login (Start-up screen)&lt;/h2&gt;\r\n\r\nThe login screen has some cool new technology allowing users to find information without even logging into the system. Basic information is now available on the screen such as messages or emails allowing the user to decide if they want to log in before hand.\r\n\r\nOn the demonstration featured in the video, the spokesperson explained the new security features which enables us to access the system in a completely new way. The new system uses a picture as a splash screen and you simple touch sections of the image in order to log into the computer. But logic now takes over and this does seem relatively insecure, a password can have millions of variations to decipher it, but surely you could get someoneâ€™s computer, simply touch about and hey presto your in...this is based on theory so only time will tell, Iâ€™m sure Microsoft will have overcome that somehow.\r\n\r\n&lt;h2&gt;Cross Compatibility&lt;/h2&gt;\r\n\r\nHow annoying has it been in recent versions of Windows when you need to download software that is compatible to your OS type (x86 or x64), now they have finally figured out how to run the software across all versions, so your x86 APP will be able to share with you x64 APP allowing full usage of the system virtually anywhere. Looking at this technology it can now definitely give Apple a run for there money, personally I\'m an iPhone &amp; iPad fan but this to me seems like the new choice, well we will have to wait and see.\r\n\r\n&lt;h2&gt;GUI (Graphical User Interface)&lt;/h2&gt;\r\n\r\nOne of the reasons beginner PC users had difficulty using Windows was the fact that you have finish where you start, you may be laughing at this point but many users got extremely confused over this fact. If you take a moment the logic doesn\'t make sense, you have to start to end, true, but if you tell a complete novice that to end, you have to go back to the start, it may appear confusing.\r\n\r\nAnyway that has slipped of the beaten track slightly, now back to Windows 8, the menu accessibility is accessed with a simple swipe on the bottom of the screen prompting it to open, all you icons touch capable thus allowing easy access.\r\n\r\nThe main screen has all your favourite applications in a tile like format available immediately upon launch allowing users directly into thousands of APP\'s at the touch of a screen. The system will also be compatible with keyboard and mouse in case any gamers where starting to get worried. This is also beneficial for us old school users such as myself who just simply prefer the use of a mouse and keyboard.\r\n\r\n&lt;h2&gt;The APP Store&lt;/h2&gt;\r\n\r\nAs with many companies they have all seen the explosion that Apple created when they made the &quot;APP Store&quot; available on devices, when users went crazy for the latest must have APP. Later we saw the birth of the Android Marketplace which offered the same beneficial APP\'s but catered for alternative devices other than Apple. This has seriously opened some doors and Microsoft have bitten, bitten hard in fact as now you will be able to have virtually any software you require but without having to surf the web, it will be all neatly categorised in a nice easy to use platform. Well what\'s left to say apart from its about time Microsoft.\r\n\r\nDon\'t just take my word for it watch the video for yourself to see what its all about;\r\n\r\n&lt;iframe width=&quot;604&quot; height=&quot;340&quot; src=&quot;http://www.youtube.com/embed/Wd1wvZvarFM&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;',1),(14,'Building A Gaming Computer','blogPic13.png','2014-08-11','In current trends Gaming computers are now a must have, the hype about the latest graphic card with best motherboard coupled with fastest CPU is becoming a necessity. First person shooters such as &quot;Call of Duty&quot; are constantly requiring more sophisticated graphic cards than ever before. With all this in mind its apparent why a lot of &quot;Modders&quot; tend to build their own unique gaming machines.\n\n&lt;h2&gt;Here is some useful information when building a personal computer;&lt;/h2&gt;\n&lt;b&gt;WARNING:&lt;/b&gt; Before attempting to build a computer, ensure you are supervised by a qualified professional, otherwise you risk electrocution, costly parts replacements or both.\n&lt;ul&gt;\n&lt;li&gt;&lt;b&gt;ALWAYS refer to the supplied manual for motherboard instructions to ensure correct configuration.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;ALWAYS use an anti-static wrist band to avoid static damage to the circuit boards.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Install the PSU (Power Supply Unit) into the case using the correct screws.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Ensure the motherboard is not directly screwed to the casing, it should have spacers supplied within the kit to help with fitting, make sure these are used!&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Install the CPU before any other components to allow room to ensure correct fitting.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Once the CPU is in place apply some thermal paste to the â€œheat-sinkâ€ then secure it in place with the clips on the motherboard. This is simply to avoid damaging the fragile pins on the underside of the processor. Thermal paste acts a thermal conductor from your CPU to your heat-sink and should be capable of handling temperatures up to 250 â„ƒ or 482 â„‰;&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Now install all the other main components into the correct slots ensure they are secured and fitted to the correct locations.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Use the manual supplied with the motherboard to ensure you can identify all required connections, fit all appropriate connections securely and then double check them again.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Check you have the &quot;Power&quot; &amp; &quot;reset&quot; wires attached to the correct pin configuration, otherwise the computer will not start.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Secure loose cabling with tie-wraps.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Power up the machine to ensure all is well.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Install your OS of choice.&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;\nIf your computer doesn\'t start or you receive a warning for incorrect configuration, power down the machine and call a professional. Troubleshooting such a cumbersome fault can be stressful and usually ends with new parts having to be re-ordered. If you damage a component due to incorrect fitting you will VOID the manufactures warranty.\n\n&lt;h2&gt;Some More Useful Tips&lt;/h2&gt;\n&lt;ul&gt;&lt;li&gt;&lt;b&gt;Ram should be coupled as an identical pair, check manual to see how much your board will handle and what type it supports.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Make sure your CPU and motherboard are compatible.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Ensure you calculate the power wattage correctly to what PSU is required.&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;Make sure your power supply has the right connections to fit your internal components.&lt;/b&gt;&lt;/li&gt;\n&lt;/ul&gt;',6),(15,'Fords Secret RUTH 2.0','blogPic14.png','2014-08-11','Meet RUTH Ford\'s new best friend. She is in basic layman terms a large robot are with 6 joints. And although she was originally utilised in Europe by Engineers at Fordâ€™s European Research Centre in Aachen in Germany. Now being used solely by Ford in the United States Now Ford are going to be using this to tweak their interior to emulate the feel and touch of a &quot;luxury top of the range vehicle&quot;.\r\n\r\nThe Touchy Feely Machine will be used during production of the Ford Fusions 2013. Here she is in all her glory!\r\n\r\n&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;http://www.youtube.com/embed/kUCPV1KoV_E&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;',5),(16,'Robot Walking Legs','blogPic15.png','2014-08-11','A group of U.S. Researchers believe they have created the first set of Robot legs which actually replicate a biologically accurate simulation of a human walking. As you will see from the video, the robot only completes a short sequence of steps, but the feat is great.\r\n\r\nIf you look closely, the robot\'s features are of a similar nature to our own anatomical structure. It is very interesting to see this footage regardless of how short in length, it really shows how Artificial Intelligence and Robots have advanced over the last decade from a first person perspective.\r\n\r\n&lt;iframe width=&quot;604&quot; height=&quot;340&quot; src=&quot;http://www.youtube.com/embed/MnD7LqisBhM?rel=0&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;',4),(17,'Broadcom 5G WIFI Mobile Chip','blogPic16.png','2014-08-11','For years now we have had really slow connections through our mobile device unless connected to a wireless network. Broadcom may think they have the answer to poor streaming video issues by offering speeds three times the rate of current connections. The BCM4335 mobile chip is based on the latest 802.11ac Wi-Fi standard\'s. The 802.11ac wifi connections boasts lots of other benificial features such as increased file transfer over a wider area and longer distance..\r\n\r\nHaving these chips based within current mobile/ android devices and laptop/ notebooks we would instantly see a difference when transfering data from node to node through our current wi-fi networks..\r\n\r\nThe next question on your mind may be &quot;What about my battery life?&quot;, well due to increased file transfer rate means less requirements for a shorter duration on the chip making the BCM4335 mobile chip up to 6 times more efficient, thus improving battery life..\r\n\r\nThe initial series of chips where introduced into modem/routers in the later part of 2012, but Broadcom announced that they are wanting to target the mobile device sector with this new technology..\r\n\r\n&quot;Broadcom introduced the industry\'s first 5G Wi-Fi chips earlier this year and has continued to deliver on an aggressive roll-out of solutions to power the entire ecosystem of wireless products,&quot; Michael Hurlston, senior vice-president, and &quot;General Manager&quot; of wireless connectivity at Broadcom..\r\n\r\nThe BCM4335 is expected to go into production in the first quarter of 2013, hoping to speed up the worlds wireless communications.',5),(18,'Apple Drops Google From iPhone','blogPic17.png','2014-08-11','Recently Apple have decided that they will be dropping Google applications as from the update to IOS6 which is due to be released later this autumn (2012). For years the iPhone has had its dominance within the market place but now we think there really could be a kink in Apples armour. As an iPhone user, Google Maps, Youtube and default Google search are some of the main beneficial applications that enrich our daily lives, keeping us up to date with video\'s and navigating the countries busy roads.\r\n\r\nIf ever it became clear that an organisation has taken &quot;pride&quot; over &quot;customer satisfaction&quot;, then certainly, this is the case here. If Apple wish to priorities their disputes over customers then they deserve to take a fall in sales and many other iPhone users will certainly be looking more in-depth at the alternatives. With Google virtually dominating the technology sector providing the world with feature rich applications it has to be said, it just won\'t be the same without them.\r\n\r\nAs a word of warning if you update to IOS6 you will loose these applications so it may be worth not updating until these problems are ironed out. There will alternatively be available 3rd party applications released for downloads on the &quot;App Store&quot;, but likely to be covered in annoying advertisements which will probably stop many users using these applications.\r\n\r\nApple for years have paid Google for &quot;Add free&quot; usage making the application better for the customers. Also available are several sources of GPS applications such as &quot;Tom Tom&quot;, but unfortunately will all be paid services generally requiring a monthly subscription. Believe it or not but the worse news is still yet to come, they have announced that in the western world the iPhone default browser will be using Yahoo or Bing which to many will be one of the biggest disappointments, as their services are not even comparable to what Google can offer.\r\n\r\nGoogle are constantly working on their own versions of the smart phone which will obviously come coupled with Google services, so maybe this may be the choice for smart phone users.',1),(19,'WAMP Server','blogPic18.png','2014-08-11','As a web developer there is no greater addition to our software collection than &quot;WAMP&quot;, which stands for &quot;Windows â€“ Apache â€“ MySQL â€“ PHP&quot;. This software is not only open source but extremely customisable to match your own server environment allowing you to access other key modules such as the rewrite-module to correctly configure our .htaccess files. It also has several available configuration options such as the choice of what version of PHP you wish to install meeting the criteria of your live server.\r\n\r\nBefore building any application ready for the web it is always a good idea to begin with a testing environment to develop the software ready for upload. It can save so many hours during development phase by avoiding constantly uploading which waists a lot of valuable development time. By simulating your local machine as a web server you have the capabilities of running MySQL connections via PHPMyadmin testing all those little custom built functions to extract data.\r\n\r\nWAMP for a web developer is like a mechanics socket set, although the job can still be done it is not recommended.\r\n\r\nIf you are interested in testing WAMP for yourself you can find it here.\r\n\r\n&lt;h2&gt;Accessing WAMP&lt;/h2&gt;\r\n\r\nOnce WAMP is installed you have to start the software via the short-cut, then you can access the environment through typing &quot;localhost&quot; into the browser url field. To build your application create a sub folder in WAMP which is accessible through C:/Wamp/www/your_sub_folder then access it through localhost/your_sub_folder, and thatâ€™s it your ready to develop.\r\n\r\nWAMP server is a clearly a software of choice and PC Repairs UK Rate it 5/5',5),(20,'The NEW Galaxy Note','blogPic19.png','2014-08-11','Today\'s Video features the Galaxy Note 10.1 from Samsung Mobile. They have been in the labs developing some exciting features for people on the go, who wish to perform certain tasks, such as working out complex Mathematical formulas â€“ as featured in the video.\r\n\r\nThe Galaxy note has taken some key aspects from people\'s feedback on Tablet Computing and come back with some amazing results, such as running Programs simultaneously side by side, allow users to integrate data from one and easily transfer it to another program...even by \'drag &amp; drop \' functions.\r\n\r\nOver the last couple of years Samsung and Apple have been battling it out over the Tablet Computer Industry. With Samsung actually giving Apple a run for it\'s money, and recently becoming the #1 Market Share holder. There\'s some healthy competition within this Industry and it will be interesting to see what other manufacturers can come up with over the next couple of months. Check out the video below.\r\n\r\n&lt;iframe width=&quot;604&quot; height=&quot;340&quot; src=&quot;http://www.youtube.com/embed/I_DQ_NYVoN8&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;',4),(21,'Counter Strike Global Offensive','blogPic20.png','2014-08-11','In 1999 two men created a &quot;half life&quot; mod called &quot;counter strike&quot;. Within ten months, Valve bought the rights. An online first person shooter which pitched two teams against each other, the terrorists and the counter-terrorists.\n\nThe terrorists objective was to plant a bomb at either of two locations on a map. The counter-terrorists objective was to stop the bomb being planted and if it was, to disarm the bomb all in a time limit. If either team died in the process then this was also a win for the survivors. Rewards were given out in game money to spend on the next game. Kit and weapons were available and the array of weapons ranged from sub-machine guns to sniper rifles. At the time it was different. The game was in it\'s time, the most played online game in the world.\n\nMy first experience was in it\'s beta form with a pal in a shared house playing LAN with our two machine network. We didn\'t know you could buy weapons and the games we fought were interesting but brief to say the least. We had originally played Half life and Counter strike seemed an obvious progression.\n\nNumerous updates later, Valve released the condition Zero version in 2004 with a single player version featuring missions. Reviews were mixed. The boxed version also had a DVD containing Half life 2 video test footage. Interesting fact is that the game offered challenges similar to Call of duty such as &quot;kill three terrorists with a bullpup rifle&quot; and &quot;win the round in less than 60 seconds.&quot;\n\nValve were quoted at one time for stating that it was their oldest game that hadn\'t been given a face lift.\n\nThis changed with Counter strike: source in October 2007. It was bundled with &quot;The orange box&quot;. Five games in one box!\nNew graphics, updated maps and audio. With the orange box,we were introduced to &quot;Portal&quot;.\n\nThis brings us up to-date with the new version of Counter strike &quot;Global offensive&quot;. The classic game mode &quot;bomb disposal&quot; is joined by &quot;hostage rescue&quot; and &quot;Arms race&quot;. Arms race is basically a gun game death match which rewards the player with a different gun for every kill they achieve.\n\nThe last game mode &quot;Demolition&quot; is similar to arms race but gives the player a weaker weapon for every kill.\n\nCounter strike: Global offensive is available by steam download now.',2);
/*!40000 ALTER TABLE `blogposts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactuscontent`
--

DROP TABLE IF EXISTS `contactuscontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactuscontent` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `text` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactuscontent`
--

LOCK TABLES `contactuscontent` WRITE;
/*!40000 ALTER TABLE `contactuscontent` DISABLE KEYS */;
INSERT INTO `contactuscontent` VALUES (1,'Contact Us','Although we do find telephone queries on average are solved and dealt with a lot quicker than regular e-mails, we do understand some of our customers prefer the latter. Simply pop your details into this contact form and we shall be back in contact as soon as possible, usually within 24 hours.');
/*!40000 ALTER TABLE `contactuscontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `headerslides`
--

DROP TABLE IF EXISTS `headerslides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `headerslides` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `slide` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `headerslides`
--

LOCK TABLES `headerslides` WRITE;
/*!40000 ALTER TABLE `headerslides` DISABLE KEYS */;
INSERT INTO `headerslides` VALUES (4,'bigSlide1.png'),(16,'bigSlide2.png'),(17,'bigSlide3.png'),(18,'bigSlide4.png');
/*!40000 ALTER TABLE `headerslides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homepagecontent`
--

DROP TABLE IF EXISTS `homepagecontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homepagecontent` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homepagecontent`
--

LOCK TABLES `homepagecontent` WRITE;
/*!40000 ALTER TABLE `homepagecontent` DISABLE KEYS */;
INSERT INTO `homepagecontent` VALUES (1,'Welcome. Hopefully you have landed on this website seeking Computer Repairs. If you have, your in the right place! We\'re the best at it. Boasting a \'no hassle\', pick-up and delivery service, we can defiantly say that proudly too.\r\n\'PC Repairs UK\', prides itself on customer satisfaction, and to please the customer first time. Our friendly and highly qualified staff are trained to deal with all customers, regardless of their computer knowledge or backgrounds, and will always keep the customer in the know how...computer jargon free! We are also ranked #1 Company by \'FreeIndex\' and many others for Computer Repairs UK.\r\nWe also offer a broad range of other services, which more times then others, provides a complimentary one stop shop for our customers. These services cover;- &lt;a href=&quot;pcRepairs.php&quot;&gt;PC/Computer Repairs&lt;/a&gt;, &lt;a href=&quot;laptopRepairs.php&quot;&gt;Laptop/Notebook/Netbook Repairs&lt;/a&gt;, &lt;a href=&quot;macRepairs.php&quot;&gt;Apple Mac Repairs&lt;/a&gt; and &lt;a href=&quot;mobileRepairs.php&quot;&gt;Mobile Phone Repairs&lt;/a&gt;.\r\nFeel free to browse through our website. If you have a question or query, simply call us or contact us alternatively using the link in the menu.\r\nThank you for choosing \'PC Repairs UK\'.');
/*!40000 ALTER TABLE `homepagecontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homepageparagraphs`
--

DROP TABLE IF EXISTS `homepageparagraphs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homepageparagraphs` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homepageparagraphs`
--

LOCK TABLES `homepageparagraphs` WRITE;
/*!40000 ALTER TABLE `homepageparagraphs` DISABLE KEYS */;
INSERT INTO `homepageparagraphs` VALUES (10,'Welcome. Hopefully you have landed on this website seeking Computer Repairs. If you have, your in the right place! We\'re the best at it. Boasting a \'no hassle\', pick-up and delivery service, we can definitely say that proudly too.\n\n&lt;a href=&quot;#&quot;&gt;link&lt;/a&gt;'),(11,'\'PC Repairs UK\', prides itself on customer satisfaction, and to please the customer the first time. Our friendly and highly qualified staff are trained to deal with all customers, regardless of their computer knowledge or backgrounds, and will always keep the customer in the know how...computer jargon free! We are also ranked #1 Company by \'FreeIndex\' and many others for Computer Repairs UK.'),(12,'We also offer a broad range of other services, which more times then others, provides a complimentary one stop shop for our customers. These services cover;- PC/Computer Repairs, Laptop/Notebook/Netbook Repairs, Apple Mac Repairs and Mobile Phone Repairs. We also have our own online Computer Parts Store.'),(13,'Feel free to browse through our website. If you have a question or query, simply call us or contact us alternatively using the link in the menu.'),(14,'Thank you for choosing \'PC Repairs UK\'.');
/*!40000 ALTER TABLE `homepageparagraphs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laptoprepairscontent`
--

DROP TABLE IF EXISTS `laptoprepairscontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laptoprepairscontent` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `text` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laptoprepairscontent`
--

LOCK TABLES `laptoprepairscontent` WRITE;
/*!40000 ALTER TABLE `laptoprepairscontent` DISABLE KEYS */;
/*!40000 ALTER TABLE `laptoprepairscontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laptopservicesslides`
--

DROP TABLE IF EXISTS `laptopservicesslides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laptopservicesslides` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `slide` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laptopservicesslides`
--

LOCK TABLES `laptopservicesslides` WRITE;
/*!40000 ALTER TABLE `laptopservicesslides` DISABLE KEYS */;
INSERT INTO `laptopservicesslides` VALUES (1,'laptopRepairsSlide1.png'),(2,'laptopRepairsSlide2.png'),(3,'laptopRepairsSlide3.png');
/*!40000 ALTER TABLE `laptopservicesslides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `macrepairscontent`
--

DROP TABLE IF EXISTS `macrepairscontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `macrepairscontent` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `text` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `macrepairscontent`
--

LOCK TABLES `macrepairscontent` WRITE;
/*!40000 ALTER TABLE `macrepairscontent` DISABLE KEYS */;
/*!40000 ALTER TABLE `macrepairscontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `macservicesslides`
--

DROP TABLE IF EXISTS `macservicesslides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `macservicesslides` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `slide` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `macservicesslides`
--

LOCK TABLES `macservicesslides` WRITE;
/*!40000 ALTER TABLE `macservicesslides` DISABLE KEYS */;
INSERT INTO `macservicesslides` VALUES (1,'macRepairsSlide1.png'),(2,'macRepairsSlide2.png'),(3,'macRepairsSlide3.png');
/*!40000 ALTER TABLE `macservicesslides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobilerepairscontent`
--

DROP TABLE IF EXISTS `mobilerepairscontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobilerepairscontent` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `text` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobilerepairscontent`
--

LOCK TABLES `mobilerepairscontent` WRITE;
/*!40000 ALTER TABLE `mobilerepairscontent` DISABLE KEYS */;
/*!40000 ALTER TABLE `mobilerepairscontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobileservicesslides`
--

DROP TABLE IF EXISTS `mobileservicesslides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobileservicesslides` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `slide` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobileservicesslides`
--

LOCK TABLES `mobileservicesslides` WRITE;
/*!40000 ALTER TABLE `mobileservicesslides` DISABLE KEYS */;
INSERT INTO `mobileservicesslides` VALUES (1,'mobileRepairsSlide1.png'),(2,'mobileRepairsSlide2.png'),(3,'mobileRepairsSlide3.png');
/*!40000 ALTER TABLE `mobileservicesslides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pcrepairscontent`
--

DROP TABLE IF EXISTS `pcrepairscontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pcrepairscontent` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `text` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pcrepairscontent`
--

LOCK TABLES `pcrepairscontent` WRITE;
/*!40000 ALTER TABLE `pcrepairscontent` DISABLE KEYS */;
/*!40000 ALTER TABLE `pcrepairscontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pcservicesslides`
--

DROP TABLE IF EXISTS `pcservicesslides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pcservicesslides` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `slide` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pcservicesslides`
--

LOCK TABLES `pcservicesslides` WRITE;
/*!40000 ALTER TABLE `pcservicesslides` DISABLE KEYS */;
INSERT INTO `pcservicesslides` VALUES (6,'pcRepairsSlide1.png'),(7,'pcRepairsSlide2.png'),(8,'pcRepairsSlide3.png');
/*!40000 ALTER TABLE `pcservicesslides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privacypolicycontent`
--

DROP TABLE IF EXISTS `privacypolicycontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privacypolicycontent` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `text` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privacypolicycontent`
--

LOCK TABLES `privacypolicycontent` WRITE;
/*!40000 ALTER TABLE `privacypolicycontent` DISABLE KEYS */;
/*!40000 ALTER TABLE `privacypolicycontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sidebarimages`
--

DROP TABLE IF EXISTS `sidebarimages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sidebarimages` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sidebarimages`
--

LOCK TABLES `sidebarimages` WRITE;
/*!40000 ALTER TABLE `sidebarimages` DISABLE KEYS */;
INSERT INTO `sidebarimages` VALUES (1,'partsStore.png'),(2,'noFixNoFee.png'),(5,'freeSoftware.png');
/*!40000 ALTER TABLE `sidebarimages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-30 15:21:22
