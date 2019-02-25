insert into klasse (ID, klassebetegnelse, created_at, updated_at) VALUES
('', 'PBWEB2018', '', '');



INSERT INTO t2 (pk1, visited, name, amount) VALUES
(1, '2018-04-12 15:30:45', 'JÃ¸rgen Larsen', RAND()*1000),
(2, '2018-05-10 16:40:50', 'Niklas Hansen', RAND()*1000),
(3, '2018-06-01 17:50:30', 'Jonas Jonasen', RAND()*1000),
(4, '2018-07-05 23:15:12', 'Line Lindasen', RAND()*1000),
(14, '2018-08-10 09:20:10', 'Julie Pedersen', RAND()*1000),
(200, '2018-09-02 20:10:02', 'Mikkel Hansen', RAND()*1000);


id               | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| klassebetegnelse | varchar(16)      | NO   | UNI | NULL    |                |
| created_at       | timestamp        | YES  |     | NULL    |                |
| updated_at       | timestamp        | YES  |     | NULL    |
Cannot add or update a child row: a foreign key constraint fails (`booking`.`klasse`, CONSTRAINT `klasse_klassebetegnelse_foreign` FOREIGN KEY (`klassebetegnelse`) REFERENCES `rekvirent` (`rekvirent`))

INSERT INTO book (id, pagecount) VALUES
(1, 180),
(2, 374),
(3, 193),

(9, 0);





insert into rekvirent (id, rekvirent, created_at, updated_at) VALUES
('', 'PBWEB2018', '', '');



id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| rekvirent  | varchar(16)      | NO   | UNI | NULL    |                |
| created_at | timestamp        | YES  |     | NULL    |                |
| updated_at | timestamp        | YES  |     | NULL    |                |
