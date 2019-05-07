<?php

use Phinx\Migration\AbstractMigration;

class UpdateArea extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
     public function up()
    {
        $this->execute("DROP TABLE IF EXISTS `areas`;");
        $this->execute("CREATE TABLE `areas` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `code` varchar(60) NOT NULL,
        `name` varchar(100) NOT NULL,
        `parent_id` int(11) DEFAULT NULL,
        `lft` int(11) DEFAULT NULL,
        `rght` int(11) DEFAULT NULL,
        `area_level_id` int(11) NOT NULL COMMENT 'links to area_levels.id',
        `order` int(3) NOT NULL,
        `visible` int(1) NOT NULL DEFAULT '1',
        `modified_user_id` int(11) DEFAULT NULL,
        `modified` datetime DEFAULT NULL,
        `created_user_id` int(11) NOT NULL,
        `created` datetime NOT NULL,
        PRIMARY KEY (`id`),
        KEY `area_level_id` (`area_level_id`),
        KEY `parent_id` (`parent_id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=utf8;");
        $this->execute("LOCK TABLES `areas` WRITE;");
        $this->execute("
            INSERT INTO `areas` VALUES (1,'LK','Sri Lanka',NULL,1,504,1,1,1,1,'2019-01-30 10:02:08',1,'2019-01-23 06:04:19'),(2,'WP','Western Province',1,2,101,2,1,1,1,'2019-02-21 04:19:45',1,'2019-01-23 06:04:38'),(3,'CP','Central Province',1,102,213,2,2,1,1,'2019-02-20 03:58:36',1,'2019-01-23 06:17:17'),(4,'SP','Southern Province',1,214,281,2,3,1,NULL,NULL,1,'2019-01-23 06:17:56'),(5,'UP','Uva Province',1,282,301,2,4,1,1,'2019-02-21 03:59:01',1,'2019-01-23 06:18:36'),(6,'SG','Sabaragamuwa Province',1,302,317,2,5,1,1,'2019-02-21 04:04:27',1,'2019-01-23 06:18:57'),(7,'NW','North Western Province',1,318,335,2,6,1,1,'2019-02-21 03:54:16',1,'2019-01-23 06:19:21'),(8,'NC','North Central Province',1,336,353,2,7,1,NULL,NULL,1,'2019-01-23 06:19:39'),(9,'NP','Nothern Province',1,354,379,2,8,1,NULL,NULL,1,'2019-01-23 06:20:00'),(10,'EP','Eastern Province',1,380,415,2,9,1,1,'2019-02-21 03:45:07',1,'2019-01-23 06:20:22'),(11,'NS','National Schools',1,416,503,2,10,1,1,'2019-02-17 04:12:18',1,'2019-01-23 06:20:56'),(12,'PILIYANDALA','PILIYANDALA',2,3,10,3,1,1,1,'2019-02-21 03:26:29',1,'2019-01-23 06:56:33'),(13,'COLOMBO','COLOMBO',2,11,20,3,3,1,1,'2019-02-21 03:58:17',1,'2019-01-23 08:43:50'),(14,'SRI JAYA\' PURA','SRI JAYA\' PURA',2,21,30,3,6,1,1,'2019-01-23 08:52:47',1,'2019-01-23 08:44:43'),(15,'HOMAGAMA','HOMAGAMA',2,31,38,3,5,1,NULL,NULL,1,'2019-01-23 08:45:10'),(16,'KELANIYA','KELANIYA',2,39,48,3,8,1,NULL,NULL,1,'2019-01-23 08:45:32'),(17,'NEGOMBO','NEGOMBO',2,49,56,3,7,1,NULL,NULL,1,'2019-01-23 08:46:00'),(18,'MINUWANGODA','MINUWANGODA',2,57,64,3,2,1,1,'2019-02-21 03:52:12',1,'2019-01-23 08:46:49'),(19,'KALUTARA','KALUTARA',2,65,74,3,9,1,258,'2019-02-21 07:49:08',1,'2019-01-23 08:47:42'),(20,'HORANA','HORANA',2,75,82,3,10,1,NULL,NULL,1,'2019-01-23 08:48:08'),(21,'MATUGAMA','MATUGAMA',2,83,92,3,11,1,1,'2019-01-23 08:48:51',1,'2019-01-23 08:48:23'),(22,'GAMPAHA','GAMPAHA',2,93,100,3,4,1,NULL,NULL,1,'2019-01-23 08:52:31'),(23,'JAFFNA','JAFFNA',9,355,356,3,1,1,1,'2019-01-23 08:59:43',1,'2019-01-23 08:54:47'),(24,'ISLANDS','ISLANDS',9,357,358,3,2,1,NULL,NULL,1,'2019-01-23 08:56:53'),(25,'THENMARACHCHI','THENMARACHCHI',9,359,360,3,3,1,NULL,NULL,1,'2019-01-23 08:57:11'),(26,'VALIKAMAM','VALIKAMAM',9,361,362,3,4,1,NULL,NULL,1,'2019-01-23 08:57:26'),(27,'VADAMARACHCHI','VADAMARACHCHI',9,363,364,3,5,1,NULL,NULL,1,'2019-01-23 08:57:41'),(28,'KILINOCHCHI','KILINOCHCHI',9,365,366,3,6,1,NULL,NULL,1,'2019-01-23 08:57:58'),(29,'MANNAR','MANNAR',9,367,368,3,7,1,NULL,NULL,1,'2019-01-23 08:58:12'),(30,'MADHU','MADHU',9,369,370,3,8,1,NULL,NULL,1,'2019-01-23 08:58:23'),(31,'VAVUNIYA SOUTH','VAVUNIYA SOUTH',9,371,372,3,9,1,NULL,NULL,1,'2019-01-23 08:58:37'),(32,'VAVUNIYA NORTH','VAVUNIYA NORTH',9,373,374,3,10,1,NULL,NULL,1,'2019-01-23 08:58:53'),(33,'MULLAITIVU','MULLAITIVU',9,375,376,3,11,1,NULL,NULL,1,'2019-01-23 08:59:16'),(34,'THUNUKKAI','THUNUKKAI',9,377,378,3,12,1,1,'2019-02-15 09:33:44',1,'2019-01-23 08:59:29'),(35,'ANURADHAPURA','ANURADHAPURA',8,337,338,3,1,1,NULL,NULL,1,'2019-01-23 09:00:19'),(36,'KEBITHIGOLLEWA','KEBITHIGOLLEWA',8,339,340,3,2,1,NULL,NULL,1,'2019-01-23 09:00:33'),(37,'KEKIRAWA','KEKIRAWA',8,341,342,3,3,1,NULL,NULL,1,'2019-01-23 09:00:43'),(38,'THAMBUTTEGAMA','THAMBUTTEGAMA',8,343,344,3,4,1,NULL,NULL,1,'2019-01-23 09:00:53'),(39,'GALENBIDUNUWEWA','GALENBIDUNUWEWA',8,345,346,3,5,1,NULL,NULL,1,'2019-01-23 09:01:02'),(40,'DIMBULAGALA','DIMBULAGALA',8,347,348,3,6,1,NULL,NULL,1,'2019-01-23 09:01:12'),(41,'HINGURAKGODA','HINGURAKGODA',8,349,350,3,7,1,NULL,NULL,1,'2019-01-23 09:01:22'),(42,'POLONNARUWA','POLONNARUWA',8,351,352,3,8,1,1,'2019-02-15 08:16:41',1,'2019-01-23 09:01:33'),(44,'RATNAPURA','RATNAPURA',6,303,304,3,1,1,3,'2019-02-15 06:54:54',1,'2019-01-23 09:03:04'),(45,'BALANGODA','BALANGODA',6,305,306,3,2,1,NULL,NULL,1,'2019-01-23 09:03:15'),(46,'NIVITIGALA','NIVITIGALA',6,307,308,3,3,1,NULL,NULL,1,'2019-01-23 09:03:25'),(47,'EMBILIPITIYA','EMBILIPITIYA',6,309,310,3,4,1,NULL,NULL,1,'2019-01-23 09:03:35'),(48,'KEGALLE','KEGALLE',6,311,312,3,5,1,1,'2019-02-15 06:54:48',1,'2019-01-23 09:03:46'),(49,'MAWANELLA','MAWANELLA',6,313,314,3,6,1,NULL,NULL,1,'2019-01-23 09:03:59'),(50,'DEHIOWITA','DEHIOWITA',6,315,316,3,7,1,257,'2019-02-21 06:37:42',1,'2019-01-23 09:04:10'),(51,'KANDY','KANDY',3,103,108,3,1,1,171,'2019-02-20 09:20:05',1,'2019-01-23 09:04:47'),(52,'DENUWARA','DENUWARA',3,109,114,3,2,1,1,'2019-02-20 04:10:26',1,'2019-01-23 09:04:57'),(53,'GAMPOLA','GAMPOLA',3,115,122,3,3,1,1,'2019-02-20 04:12:04',1,'2019-01-23 09:05:05'),(54,'TELDENIYA','TELDENIYA',3,123,130,3,4,1,1,'2019-02-20 04:13:58',1,'2019-01-23 09:05:16'),(55,'WATHEGAMA','WATHEGAMA',3,131,138,3,5,1,1,'2019-02-20 04:15:14',1,'2019-01-23 09:05:26'),(56,'KATUGASTOTA','KATUGASTOTA',3,139,150,3,6,1,1,'2019-02-20 04:19:10',1,'2019-01-23 09:05:35'),(57,'MATALE','MATALE',3,151,160,3,7,1,1,'2019-02-20 04:20:29',1,'2019-01-23 09:05:44'),(58,'GALEWELA','GALEWELA',3,161,168,3,8,1,1,'2019-02-20 04:21:35',1,'2019-01-23 09:05:58'),(59,'NAULA','NAULA',3,169,174,3,9,1,1,'2019-02-20 04:22:50',1,'2019-01-23 09:06:10'),(60,'WILGAMUWA','WILGAMUWA',3,175,180,3,10,1,1,'2019-02-20 04:24:01',1,'2019-01-23 09:06:28'),(61,'NUWARA ELIYA','NUWARA ELIYA',3,181,190,3,11,1,1,'2019-02-20 04:25:29',1,'2019-01-23 09:06:49'),(62,'KOTHMALE','KOTHMALE',3,191,194,3,12,1,184,'2019-02-20 09:38:32',1,'2019-01-23 09:07:06'),(63,'HATTON','HATTON',3,195,204,3,13,1,1,'2019-02-20 04:28:03',1,'2019-01-23 09:07:15'),(64,'WALAPANE','WALAPANE',3,205,208,3,14,1,186,'2019-02-20 09:47:45',1,'2019-01-23 09:07:30'),(65,'HANGURANKETHA','HANGURANKETHA',3,209,212,3,15,1,1,'2019-02-20 04:31:27',1,'2019-01-23 09:07:45'),(66,'KURUNEGALA','KURUNEGALA',7,319,320,3,1,1,NULL,NULL,1,'2019-01-23 09:08:15'),(67,'KULIYAPITIYA','KULIYAPITIYA',7,321,322,3,2,1,NULL,NULL,1,'2019-01-23 09:08:25'),(68,'NIKAWERATIYA','NIKAWERATIYA',7,323,324,3,3,1,NULL,NULL,1,'2019-01-23 09:08:39'),(69,'MAHO','MAHO',7,325,326,3,4,1,254,'2019-02-21 07:54:03',1,'2019-01-23 09:08:48'),(70,'GIRIULLA','GIRIULLA',7,327,328,3,5,1,NULL,NULL,1,'2019-01-23 09:08:59'),(71,'IBBAGAMUWA','IBBAGAMUWA',7,329,330,3,6,1,NULL,NULL,1,'2019-01-23 09:09:09'),(72,'PUTTALAM','PUTTALAM',7,331,332,3,7,1,NULL,NULL,1,'2019-01-23 09:09:18'),(73,'CHILAW','CHILAW',7,333,334,3,8,1,NULL,NULL,1,'2019-01-23 09:09:28'),(74,'GALLE','GALLE',4,215,224,3,1,1,NULL,NULL,1,'2019-01-23 09:10:26'),(75,'ELPITIYA','ELPITIYA',4,225,236,3,2,1,NULL,NULL,1,'2019-01-23 09:10:37'),(76,'AMBALANGODA','AMBALANGODA',4,237,244,3,3,1,NULL,NULL,1,'2019-01-23 09:10:46'),(77,'UDUGAMA','UDUGAMA',4,245,252,3,4,1,NULL,NULL,1,'2019-01-23 09:10:54'),(78,'MATARA','MATARA',4,253,262,3,5,1,NULL,NULL,1,'2019-01-23 09:11:03'),(79,'AKURESSA','AKURESSA',4,263,270,3,6,1,NULL,NULL,1,'2019-01-23 09:11:12'),(80,'MULATIYANA','MULATIYANA',4,271,272,3,7,1,1,'2019-02-18 02:57:40',1,'2019-01-23 09:11:35'),(81,'MORAWAKA','MORAWAKA',4,273,274,3,8,1,NULL,NULL,1,'2019-01-23 09:11:49'),(82,'TANGALLE','TANGALLE',4,275,276,3,9,1,NULL,NULL,1,'2019-01-23 09:12:00'),(83,'HAMBANTOTA','HAMBANTOTA',4,277,278,3,10,1,NULL,NULL,1,'2019-01-23 09:12:11'),(84,'WALASMULLA','WALASMULLA',4,279,280,3,11,1,NULL,NULL,1,'2019-01-23 09:12:21'),(85,'BADULLA','BADULLA',5,283,284,3,1,1,75,'2019-02-02 13:04:59',1,'2019-01-23 09:13:01'),(86,'VIYALUWA','VIYALUWA',5,285,286,3,2,1,NULL,NULL,1,'2019-01-23 09:13:09'),(87,'BANDARAWELA','BANDARAWELA',5,287,288,3,3,1,NULL,NULL,1,'2019-01-23 09:13:20'),(88,'MAHIYANGANAYA','MAHIYANGANAYA',5,289,290,3,4,1,NULL,NULL,1,'2019-01-23 09:13:30'),(89,'WELIMADA','WELIMADA',5,291,292,3,5,1,NULL,NULL,1,'2019-01-23 09:13:42'),(90,'PASSARA','PASSARA',5,293,294,3,6,1,NULL,NULL,1,'2019-01-23 09:13:52'),(91,'MONARAGALA','MONARAGALA',5,295,296,3,7,1,NULL,NULL,1,'2019-01-23 09:14:06'),(92,'WELLAWAYA','WELLAWAYA',5,297,298,3,8,1,NULL,NULL,1,'2019-01-23 09:14:16'),(93,'BIBILE','BIBILE',5,299,300,3,9,1,256,'2019-02-21 06:33:50',1,'2019-01-23 09:14:25'),(94,'BATTICALOA','BATTICALOA',10,381,382,3,1,1,252,'2019-02-21 07:15:59',1,'2019-01-23 09:15:31'),(95,'KALKUDAH','KALKUDAH',10,383,384,3,2,1,1,'2019-02-21 03:18:50',1,'2019-01-23 09:15:40'),(96,'PADDIRUPPU','PADDIRUPPU',10,385,386,3,3,1,1,'2019-02-21 03:24:30',1,'2019-01-23 09:15:50'),(97,'BATTICALOA CENTRAL','BATTICALOA CENTRAL',10,387,388,3,4,1,1,'2019-02-21 03:28:33',1,'2019-01-23 09:16:12'),(98,'BATTICALOA WEST','BATTICALOA WEST',10,389,390,3,5,1,252,'2019-02-21 06:21:06',1,'2019-01-23 09:16:26'),(99,'AMPARA','AMPARA',10,391,392,3,6,1,NULL,NULL,1,'2019-01-23 09:16:34'),(100,'KALMUNAI','KALMUNAI',10,393,394,3,7,1,NULL,NULL,1,'2019-01-23 09:16:43'),(101,'SAMMANTHURAI','SAMMANTHURAI',10,395,396,3,8,1,NULL,NULL,1,'2019-01-23 09:16:53'),(102,'MAHAOYA','MAHAOYA',10,397,398,3,9,1,254,'2019-02-21 07:54:03',1,'2019-01-23 09:17:01'),(103,'DEHIATTAKANDIYA','DEHIATTAKANDIYA',10,399,400,3,10,1,NULL,NULL,1,'2019-01-23 09:17:11'),(104,'AKKARAIPATTU','AKKARAIPATTU',10,401,402,3,11,1,NULL,NULL,1,'2019-01-23 09:17:21'),(105,'THIRUKKOVIL','THIRUKKOVIL',10,403,404,3,12,1,252,'2019-02-21 06:36:03',1,'2019-01-23 09:17:31'),(106,'TRINCOMALEE','TRINCOMALEE',10,405,406,3,13,1,NULL,NULL,1,'2019-01-23 09:18:08'),(107,'MUTUR','MUTUR',10,407,408,3,14,1,NULL,NULL,1,'2019-01-23 09:18:16'),(108,'KANTALAI','KANTALAI',10,409,410,3,15,1,NULL,NULL,1,'2019-01-23 09:18:28'),(109,'KINNIYA','KINNIYA',10,411,412,3,16,1,252,'2019-02-21 06:12:31',1,'2019-01-23 09:18:37'),(110,'TRINCOMALEE NORTH','TRINCOMALEE NORTH',10,413,414,3,17,1,NULL,NULL,1,'2019-01-23 09:18:56'),(111,'COLOMBO NORTH','COLOMBO NORTH',13,12,13,4,1,1,NULL,NULL,1,'2019-01-23 09:23:03'),(112,'COLOMBO CENTRAL','COLOMBO CENTRAL',13,14,15,4,2,1,NULL,NULL,1,'2019-01-23 09:23:16'),(113,'COLOMBO SOUTH','COLOMBO SOUTH',13,16,17,4,3,1,NULL,NULL,1,'2019-01-23 09:23:29'),(114,'BORELLA','BORELLA',13,18,19,4,4,1,NULL,NULL,1,'2019-01-23 09:23:56'),(115,'HOMAGAMA - D','HOMAGAMA',15,32,33,4,1,1,NULL,NULL,1,'2019-01-23 09:25:05'),(116,'HANWELLA','HANWELLA',15,34,35,4,2,1,NULL,NULL,1,'2019-01-23 09:25:25'),(117,'PADUKKA','PADUKKA',15,36,37,4,3,1,NULL,NULL,1,'2019-01-23 09:25:35'),(118,'KOLONNAWA','KOLONNAWA',14,22,23,4,1,1,NULL,NULL,1,'2019-01-23 09:26:14'),(119,'NUGEGODA','NUGEGODA',14,24,25,4,2,1,NULL,NULL,1,'2019-01-23 09:26:24'),(120,'MAHARAGAMA','MAHARAGAMA',14,26,27,4,3,1,NULL,NULL,1,'2019-01-23 09:26:35'),(121,'KADUWELA','KADUWELA',14,28,29,4,4,1,NULL,NULL,1,'2019-01-23 09:26:45'),(122,'DEHIWALA','DEHIWALA',12,4,5,4,1,1,NULL,NULL,1,'2019-01-23 09:27:06'),(123,'MORATUWA','MORATUWA',12,6,7,4,2,1,NULL,NULL,1,'2019-01-23 09:27:27'),(124,'KESBEWA','KESBEWA',12,8,9,4,3,1,NULL,NULL,1,'2019-01-23 09:27:41'),(125,'DIVULAPITIYA','DIVULAPITIYA',18,58,59,4,1,1,NULL,NULL,1,'2019-01-23 09:28:08'),(128,'GAMPAHA - D','GAMPAHA',22,94,95,4,1,1,NULL,NULL,1,'2019-01-23 09:29:33'),(129,'ATTANAGALLA','ATTANAGALLA',22,96,97,4,2,1,NULL,NULL,1,'2019-01-23 09:29:44'),(130,'DOMPE','DOMPE',22,98,99,4,3,1,NULL,NULL,1,'2019-01-23 09:29:56'),(131,'MIRIGAMA','MIRIGAMA',18,60,61,4,2,1,NULL,NULL,1,'2019-01-23 09:30:35'),(132,'MINUWANGODA - D','MINUWANGODA',18,62,63,4,3,1,NULL,NULL,1,'2019-01-23 09:30:48'),(133,'KATANA','KATANA',17,50,51,4,1,1,NULL,NULL,1,'2019-01-23 09:31:25'),(134,'NEGOMBO - D','NEGOMBO',17,52,53,4,2,1,NULL,NULL,1,'2019-01-23 09:31:39'),(135,'JA- ELA','JA- ELA',17,54,55,4,3,1,NULL,NULL,1,'2019-01-23 09:31:49'),(136,'MAHARA','MAHARA',16,40,41,4,1,1,NULL,NULL,1,'2019-01-23 09:32:17'),(137,'BIYAGAMA','BIYAGAMA',16,42,43,4,2,1,NULL,NULL,1,'2019-01-23 09:32:27'),(138,'KELANIYA - D','KELANIYA',16,44,45,4,3,1,NULL,NULL,1,'2019-01-23 09:32:49'),(139,'WATTALA','WATTALA',16,46,47,4,4,1,NULL,NULL,1,'2019-01-23 09:33:00'),(140,'KALUTARA -  D','KALUTARA',19,66,67,4,1,1,258,'2019-02-21 07:06:02',1,'2019-01-23 09:33:22'),(141,'BERUWALA','BERUWALA',19,68,69,4,2,1,NULL,NULL,1,'2019-01-23 09:33:32'),(142,'PANADURA','PANADURA',19,70,71,4,3,1,NULL,NULL,1,'2019-01-23 09:33:42'),(143,'DODANGODA','DODANGODA',19,72,73,4,4,1,NULL,NULL,1,'2019-01-23 09:33:51'),(144,'MATUGAMA - D','MATUGAMA',21,84,85,4,1,1,NULL,NULL,1,'2019-01-23 09:34:27'),(145,'AGALAWATTA 1','AGALAWATTA 1',21,86,87,4,2,1,NULL,NULL,1,'2019-01-23 09:34:39'),(146,'WALALLAWITA','WALALLAWITA',21,88,89,4,3,1,NULL,NULL,1,'2019-01-23 09:34:51'),(147,'AGALAWATTA 2','AGALAWATTA 2',21,90,91,4,4,1,NULL,NULL,1,'2019-01-23 09:35:01'),(148,'BANDARAGAMA','BANDARAGAMA',20,76,77,4,1,1,NULL,NULL,1,'2019-01-23 09:35:28'),(149,'HORANA - D','HORANA',20,78,79,4,2,1,NULL,NULL,1,'2019-01-23 09:35:48'),(150,'BULATHSINHALA','BULATHSINHALA',20,80,81,4,3,1,NULL,NULL,1,'2019-01-23 09:35:59'),(151,'PATHA HEWAHETA','PATHA HEWAHETA',51,104,105,4,1,1,NULL,NULL,1,'2019-01-23 09:37:44'),(152,'YATINUWARA','YATINUWARA',52,110,111,4,1,1,NULL,NULL,1,'2019-01-23 09:38:12'),(153,'UDA NUWARA','UDA NUWARA',52,112,113,4,2,1,NULL,NULL,1,'2019-01-23 09:38:29'),(154,'UDA PALATHA','UDA PALATHA',53,116,117,4,1,1,NULL,NULL,1,'2019-01-23 09:38:47'),(155,'GANGA-IHALA KORALE','GANGA-IHALA KORALE',53,118,119,4,2,1,1,'2019-01-23 09:39:24',1,'2019-01-23 09:39:00'),(156,'PASBAGE KORALE ','PASBAGE KORALE ',53,120,121,4,3,1,NULL,NULL,1,'2019-01-23 09:39:49'),(157,'MINIPE','MINIPE',54,124,125,4,1,1,NULL,NULL,1,'2019-01-23 09:40:21'),(158,'MADADUMBARA','MADADUMBARA',54,126,127,4,2,1,NULL,NULL,1,'2019-01-23 09:40:33'),(159,'UDUDUMBARA','UDUDUMBARA',54,128,129,4,3,1,NULL,NULL,1,'2019-01-23 09:40:42'),(160,'KUNDASALE','KUNDASALE',55,132,133,4,1,1,NULL,NULL,1,'2019-01-23 09:40:58'),(161,'PATHA DUMBARA','PATHA DUMBARA',55,134,135,4,2,1,NULL,NULL,1,'2019-01-23 09:41:19'),(162,'PANVILA','PANVILA',55,136,137,4,3,1,NULL,NULL,1,'2019-01-23 09:41:42'),(163,'HARISPATTUWA','HARISPATTUWA',56,140,141,4,1,1,NULL,NULL,1,'2019-01-23 09:42:10'),(164,'GALAGEDARA','GALAGEDARA',56,142,143,4,2,1,NULL,NULL,1,'2019-01-23 09:42:21'),(165,'PUJAPITIYA','PUJAPITIYA',56,144,145,4,3,1,NULL,NULL,1,'2019-01-23 09:42:39'),(166,'AKURANA','AKURANA',56,146,147,4,4,1,NULL,NULL,1,'2019-01-23 09:43:01'),(167,'HATHARALIYEDDA','HATHARALIYEDDA',56,148,149,4,5,1,NULL,NULL,1,'2019-01-23 09:43:14'),(168,'GANGAWATA KORALE','GANGAWATA KORALE',51,106,107,4,2,1,NULL,NULL,1,'2019-01-23 09:43:35'),(169,'MATALE - D','MATALE',57,152,153,4,1,1,NULL,NULL,1,'2019-01-23 09:44:02'),(170,'RATTOTA','RATTOTA',57,154,155,4,2,1,NULL,NULL,1,'2019-01-23 09:44:23'),(171,'YATAWATTA','YATAWATTA',57,156,157,4,3,1,NULL,NULL,1,'2019-01-23 09:44:34'),(172,'UKUWELA','UKUWELA',57,158,159,4,4,1,NULL,NULL,1,'2019-01-23 09:44:44'),(173,'GALEWELA - D','GALEWELA',58,162,163,4,1,1,1,'2019-01-23 09:47:10',1,'2019-01-23 09:45:06'),(174,'DAMBULLA','DAMBULLA',58,164,165,4,2,1,NULL,NULL,1,'2019-01-23 09:46:33'),(175,'PALLEPOLA','PALLEPOLA',58,166,167,4,3,1,NULL,NULL,1,'2019-01-23 09:47:43'),(176,'AMBANGANGA KORALE','AMBANGANGA KORALE',59,170,171,4,1,1,NULL,NULL,1,'2019-01-23 09:48:21'),(177,'NAULA - D','NAULA',59,172,173,4,2,1,NULL,NULL,1,'2019-01-23 09:48:34'),(178,'WILGAMUWA - D','WILGAMUWA',60,176,177,4,1,1,NULL,NULL,1,'2019-01-23 09:48:58'),(179,'LAGGALA','LAGGALA',60,178,179,4,2,1,NULL,NULL,1,'2019-01-23 09:49:13'),
            (180,'NUWARA ELIYA - D','NUWARA ELIYA',61,182,183,4,1,1,NULL,NULL,1,'2019-01-23 09:50:01'),(181,'NUWARA ELIYA TAMIL -I','NUWARA ELIYA TAMIL -I',61,184,185,4,2,1,NULL,NULL,1,'2019-01-23 09:50:17'),(182,'NUWARA ELIYA TAMIL -II','NUWARA ELIYA TAMIL -II',61,186,187,4,3,1,NULL,NULL,1,'2019-01-23 09:50:29'),(183,'NUWARA ELIYA TAMIL -III','NUWARA ELIYA TAMIL -III',61,188,189,4,4,1,NULL,NULL,1,'2019-01-23 09:50:42'),(184,'KOTMALE - D','KOTMALE',62,192,193,4,1,1,NULL,NULL,1,'2019-01-23 09:51:05'),(185,'AMBAGAMUWA','AMBAGAMUWA',63,196,197,4,1,1,NULL,NULL,1,'2019-01-23 09:51:30'),(186,'HATTON TAMIL - I','HATTON TAMIL - I',63,198,199,4,2,1,NULL,NULL,1,'2019-01-23 09:51:56'),(187,'HATTON TAMIL - II','HATTON TAMIL - II',63,200,201,4,3,1,NULL,NULL,1,'2019-01-23 09:52:18'),(188,'HATTON TAMIL - III','HATTON TAMIL - III',63,202,203,4,4,1,NULL,NULL,1,'2019-01-23 09:52:33'),(189,'WALAPANE - D','WALAPANE',64,206,207,4,1,1,NULL,NULL,1,'2019-01-23 09:52:56'),(190,'UDAHEWAHETA','UDAHEWAHETA',65,210,211,4,1,1,NULL,NULL,1,'2019-01-23 09:53:19'),(191,'GALLE - D','GALLE',74,216,217,4,1,1,NULL,NULL,1,'2019-01-23 09:53:51'),(192,'HABARADUWA','HABARADUWA',74,218,219,4,2,1,NULL,NULL,1,'2019-01-23 09:54:06'),(193,'AKMEEMANA','AKMEEMANA',74,220,221,4,3,1,NULL,NULL,1,'2019-01-23 09:54:16'),(194,'BADDEGAMA','BADDEGAMA',74,222,223,4,4,1,NULL,NULL,1,'2019-01-23 09:54:28'),(195,'ELPITIYA - D','ELPITIYA',75,226,227,4,1,1,NULL,NULL,1,'2019-01-23 09:54:50'),(196,'BENTOTA','BENTOTA',75,228,229,4,2,1,NULL,NULL,1,'2019-01-23 09:54:59'),(197,'KARANDENIYA','KARANDENIYA',75,230,231,4,3,1,NULL,NULL,1,'2019-01-23 09:55:11'),(198,'DIVITHURA WELIVITIYA','DIVITHURA WELIVITIYA',75,232,233,4,4,1,1,'2019-01-23 09:56:09',1,'2019-01-23 09:55:21'),(199,'PITIGALA(NIYAGAMA)','PITIGALA(NIYAGAMA)',75,234,235,4,5,1,NULL,NULL,1,'2019-01-23 09:55:38'),(200,'HIKKADUWA','HIKKADUWA',76,238,239,4,1,1,NULL,NULL,1,'2019-01-23 09:56:33'),(201,'AMBALANGODA - D','AMBALANGODA',76,240,241,4,2,1,NULL,NULL,1,'2019-01-23 09:56:47'),(202,'BALAPITIYA','BALAPITIYA',76,242,243,4,3,1,NULL,NULL,1,'2019-01-23 09:57:01'),(203,'MAPALAGAMA','MAPALAGAMA',77,246,247,4,1,1,NULL,NULL,1,'2019-01-23 09:58:31'),(204,'YAKKALAMULLA','YAKKALAMULLA',77,248,249,4,2,1,NULL,NULL,1,'2019-01-23 09:58:42'),(205,'TAWALAMA','TAWALAMA',77,250,251,4,3,1,NULL,NULL,1,'2019-01-23 09:58:52'),(206,'MATARA - D','MATARA',78,254,255,4,1,1,NULL,NULL,1,'2019-01-23 09:59:11'),(207,'WELIGAMA','WELIGAMA',78,256,257,4,2,1,NULL,NULL,1,'2019-01-23 09:59:23'),(208,'DEVINUWARA','DEVINUWARA',78,258,259,4,3,1,NULL,NULL,1,'2019-01-23 09:59:33'),(209,'DICKWELLA','DICKWELLA',78,260,261,4,4,1,NULL,NULL,1,'2019-01-23 09:59:43'),(210,'AKURESSA - D','AKURESSA',79,264,265,4,1,1,NULL,NULL,1,'2019-01-23 10:00:11'),(211,'WELIPITIYA','WELIPITIYA',79,266,267,4,2,1,NULL,NULL,1,'2019-01-23 10:00:19'),(212,'MALIMBODA','MALIMBODA',79,268,269,4,3,1,NULL,NULL,1,'2019-01-23 10:00:29'),(213,'NS-PILIYANDALA','NS-PILIYANDALA',11,417,418,3,1,1,1,'2019-02-17 04:24:05',1,'2019-02-17 04:23:00'),(214,'NS-COLOMBO','NS-COLOMBO',11,419,420,3,2,1,NULL,NULL,1,'2019-02-17 04:24:31'),(215,'NS-MINUWANGODA','NS-MINUWANGODA',11,421,422,3,3,1,NULL,NULL,1,'2019-02-17 04:24:55'),(216,'NS-GAMPAHA','NS-GAMPAHA',11,423,424,3,4,1,NULL,NULL,1,'2019-02-17 04:25:36'),(217,'NS-HOMAGAMA','NS-HOMAGAMA',11,425,426,3,5,1,NULL,NULL,1,'2019-02-17 04:25:56'),(218,'NS-SRI JAYA\' PURA','NS-SRI JAYA\' PURA',11,427,428,3,6,1,NULL,NULL,1,'2019-02-17 04:26:48'),(219,'NS-NEGOMBO','NS-NEGOMBO',11,429,430,3,7,1,NULL,NULL,1,'2019-02-17 04:27:07'),(220,'NS-KELANIYA','NS-KELANIYA',11,431,432,3,8,1,NULL,NULL,1,'2019-02-17 04:27:38'),(221,'NS-KALUTARA','NS-KALUTARA',11,433,434,3,9,1,NULL,NULL,1,'2019-02-17 04:28:05'),(222,'NS-HORANA','NS-HORANA',11,435,436,3,10,1,NULL,NULL,1,'2019-02-17 04:28:23'),(223,'NS-MATUGAMA','NS-MATUGAMA',11,437,438,3,11,1,NULL,NULL,1,'2019-02-17 04:28:39'),(224,'NS-KANDY','NS-KANDY',11,439,440,3,12,1,NULL,NULL,1,'2019-02-17 13:00:16'),(225,'NS-DENUWARA','NS-DENUWARA',11,441,442,3,13,1,NULL,NULL,1,'2019-02-17 13:00:34'),(226,'NS-GAMPOLA','NS-GAMPOLA',11,443,444,3,14,1,NULL,NULL,1,'2019-02-17 13:01:22'),(227,'NS-TELDENIYA','NS-TELDENIYA',11,445,446,3,15,1,NULL,NULL,1,'2019-02-17 13:01:40'),(228,'NS-WATHEGAMA','NS-WATHEGAMA',11,447,448,3,16,1,NULL,NULL,1,'2019-02-17 13:02:16'),(229,'NS-KATUGASTOTA','NS-KATUGASTOTA',11,449,450,3,17,1,NULL,NULL,1,'2019-02-17 13:02:35'),(230,'NS-MATALE','NS-MATALE',11,451,452,3,18,1,NULL,NULL,1,'2019-02-17 13:03:09'),(231,'NS-GALEWALA','NS-GALEWALA',11,453,454,3,19,1,NULL,NULL,1,'2019-02-17 13:03:24'),(232,'NS-NAULA','NS-NAULA',11,455,456,3,20,1,NULL,NULL,1,'2019-02-17 13:03:39'),(233,'NS-WILGAMUWA','NS-WILGAMUWA',11,457,458,3,21,1,NULL,NULL,1,'2019-02-17 13:04:19'),(234,'NS-NUWARA ELIYA','NS-NUWARA ELIYA',11,459,460,3,22,1,NULL,NULL,1,'2019-02-17 13:04:39'),(235,'NS-KOTHMALE','NS-KOTHMALE',11,461,462,3,23,1,NULL,NULL,1,'2019-02-17 13:05:23'),(236,'NS-HATTON','NS-HATTON',11,463,464,3,24,1,NULL,NULL,1,'2019-02-17 13:05:39'),(237,'NS-WALAPANE','NS-WALAPANE',11,465,466,3,25,1,NULL,NULL,1,'2019-02-17 13:06:23'),(238,'NS-HANGURANKETHA','NS-HANGURANKETHA',11,467,468,3,26,1,NULL,NULL,1,'2019-02-17 13:06:44'),(239,'NS-BATTICALOA','NS-BATTICALOA',11,469,470,3,27,1,NULL,NULL,1,'2019-02-18 03:13:33'),(240,'NS-KALKUDAH','NS-KALKUDAH',11,471,472,3,28,1,NULL,NULL,1,'2019-02-18 03:14:03'),(241,'NS-PADDIRUPPU','NS-PADDIRUPPU',11,473,474,3,29,1,NULL,NULL,1,'2019-02-18 03:14:35'),(242,'NS-BATTICALOACENTRAL','NS-BATTICALOACENTRAL',11,475,476,3,30,1,NULL,NULL,1,'2019-02-18 03:15:14'),(243,'NS-BATTICALOAWEST','NS-BATTICALOAWEST',11,477,478,3,31,1,NULL,NULL,1,'2019-02-18 03:16:03'),(244,'NS-AMPARA','NS-AMPARA',11,479,480,3,32,1,NULL,NULL,1,'2019-02-18 03:16:29'),(245,'NS-KALMUNAI','NS-KALMUNAI',11,481,482,3,33,1,NULL,NULL,1,'2019-02-18 03:16:58'),(246,'NS-SAMMANTHURAI','NS-SAMMANTHURAI',11,483,484,3,34,1,NULL,NULL,1,'2019-02-18 03:17:24'),(247,'NS-MAHAOYA','NS-MAHAOYA',11,485,486,3,35,1,NULL,NULL,1,'2019-02-18 03:17:53'),(248,'NS-DEHIATTAKANDIYA','NS-DEHIATTAKANDIYA',11,487,488,3,36,1,NULL,NULL,1,'2019-02-18 03:18:38'),(249,'NS-AKKARAIPATTU','NS-AKKARAIPATTU',11,489,490,3,37,1,NULL,NULL,1,'2019-02-18 03:19:11'),(250,'NS-THIRUKKOVIL','NS-THIRUKKOVIL',11,491,492,3,38,1,NULL,NULL,1,'2019-02-18 03:19:34'),(251,'NS-TRINCOMALEE','NS-TRINCOMALEE',11,493,494,3,39,1,NULL,NULL,1,'2019-02-18 03:19:59'),(252,'NS-MUTUR','NS-MUTUR',11,495,496,3,40,1,NULL,NULL,1,'2019-02-18 03:20:22'),(253,'NS-KANTALAI','NS-KANTALAI',11,497,498,3,41,1,NULL,NULL,1,'2019-02-18 03:20:43'),(254,'NS-KINNIYA','NS-KINNIYA',11,499,500,3,42,1,NULL,NULL,1,'2019-02-18 03:21:04'),(255,'NS-TRINCOMALEENORTH','NS-TRINCOMALEENORTH',11,501,502,3,43,1,NULL,NULL,1,'2019-02-18 03:21:53');
        ");
        $this->execute("UNLOCK TABLES;");
    }
}
