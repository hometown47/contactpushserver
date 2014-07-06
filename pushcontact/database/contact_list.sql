USE pushcontact;

SET NAMES utf8;

DROP TABLE IF EXISTS contact_list;

CREATE TABLE contact_list
(
	parent_user_id varchar(40) NOT NULL,
    child_user_id varchar(40) NOT NULL,
    time_created datetime NOT NULL,
    active_flag varchar(1) NOT NULL,
    PRIMARY KEY (parent_user_id, child_user_id)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8;
