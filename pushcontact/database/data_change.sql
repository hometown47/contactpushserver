USE pushchat;



SET NAMES utf8;

DROP TABLE IF EXISTS data_change;

CREATE TABLE data_change
(
	message_id integer NOT NULL AUTO_INCREMENT,
	device_token varchar(64) NOT NULL,
	payload varchar(256) NOT NULL,
	time_queued datetime NOT NULL,
	time_retrieved datetime,
	PRIMARY KEY (message_id)
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;