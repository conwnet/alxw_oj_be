create table `user` (
  `id` int PRIMARY KEY auto_increment,
  `username` varchar(127) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(255),
  `sex` int,
  `year` int,
  `phone` varchar(127),
  `email` varchar(255),
  `school` varchar(255),
  `url` varchar(1023),
  `mark` varchar(1023),
  `create_time` real,
  `status` int DEFAULT 0
 ) DEFAULT CHARSET=utf8;

create table `problem` (
  `id` int PRIMARY KEY auto_increment,
  `title` varchar(1023),
  `time_limit` int,
  `memory_limit` int,
  `accpected` int,
  `submissions` int,
  `description` text,
  `input` text,
  `output` text,
  `sample_input` text,
  `sample_output` text,
  `hint` text,
  `source` text,
  `create_time` real,
  `status` int DEFAULT 0
) DEFAULT CHARSET=utf8;

