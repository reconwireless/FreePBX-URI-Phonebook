DROP TABLE IF EXISTS `uribookoptions`;

CREATE TABLE `uribookoptions` (
  `id` varchar(40),
  `extension` varchar(20),
  `uridisplayname` varchar(40),
  `uribookdial' varchar(40),
	PRIMARY KEY  (`id`)  
);

INSERT INTO 'uribookoptions' ('id', 'extension' ,'uridisplayname', 'uribookuri') VALUES
(1, '1200', 'VUC', 'sip/200901@login.zipdx.com')

