truncate table users;
INSERT into users (id, name, email)
values ('', 'Pernille Matthews', 'Pernille.matthews@hotmail.com');

truncate table person;
INSERT into person (id, name, initialer, email, telefon)
values ('', 'Jonas Nissen', 'Jona1234', 'Nissen@gmail.com', '12345678'),
('', 'Nicklas Lindeman', 'Nick2345', 'Nicky@gmail.dk', '23456789'),
('', 'Jens Jackobsen', 'Jens3456', 'Jensemand@basyd.dk', '34567890'),
('', 'Linda Rosa', 'Lind4567', 'RosaLinda1@hotmail.com', '45678901'),
('', 'Maria Jensen', 'Mari5678', 'MariaJ@gmail.com', '56789012'),
('', 'Niels Müller Larsen', 'NML', 'nml@iba.dk', '67890123');

truncate table reservation;
INSERT into reservation (id, lokale, datotid)
values ('', '4.01', '26-02-2019 08:20'),
('', '4.02', '26-02-2019 12:15'),
('', '4.03', '26-02-2019 08:00'),
('', '4.04', '26-02-2019 12:15'),
('', '4.05', '26-02-2019 12:15'),
('', '4.06', '26-02-2019 13:00'),
('', '4.07', '26-02-2019 13:00'),
('', '4.08', '26-02-2019 13:00'),
('', '4.10', '26-02-2019 13:00'),
('', '4.11', '26-02-2019 13:00');

truncate table reservation;
INSERT into reservation (id, lokale, datotid)
values ('', '4.01', '26-02-2019 08:20'),
('', '4.02', '26-02-2019 12:15'),
('', '4.03', '26-02-2019 08:00'),
('', '4.04', '26-02-2019 12:15'),
('', '4.05', '26-02-2019 12:15'),
('', '4.06', '26-02-2019 13:00'),
('', '4.07', '26-02-2019 13:00'),
('', '4.08', '26-02-2019 13:00'),
('', '4.10', '26-02-2019 13:00'),
('', '4.11', '26-02-2019 13:00');



truncate table rekvirent;
INSERT into rekvirent (id, name, initialer, type)
values ('', 'Jonas Nissen', 'Jona1234', 'Person'),
('', 'Nicklas Lindeman', 'Nick2345', 'Person'),
('', 'Jens Jackobsen', 'Jens3456', 'Person'),
('', 'Linda Rosa', 'Lind4567', 'Person'),
('', 'Maria Jensen', 'Mari5678', 'Person'),
('', 'Niels Müller Larsen', 'NML', 'Person'),
('', 'Webudvikling', 'PBWEB18', 'Klasse'),
('', 'Finans', 'FIN18', 'Klasse'),
('', 'Finansøkonom', 'FINØ18', 'Klasse'),
('', 'Multimediedesigner', 'MD18', 'KLasse');



truncate table lokale;
INSERT into lokale (id, lokalebetegnelse, w, h, projektor,
kapacitet, created_at, updated_at)
values ('', '4.01', '7','8', '1', '30','',''),
('', '4.02', '7','7', '1', '28','',''),
('', '4.03', '7','7', '1', '31','',''),
('', '4.04', '7','7', '1', '40','',''),
('', '4.05', '6','10', '1', '40','',''),
('', '4.06', '6','10', '1', '40','',''),
('', '4.07', '7','11', '1', '40','',''),
('', '4.08', '5','8', '1', '26','',''),
('', '4.10', '6','10', '1', '21','',''),
('', '4.11', '6','10', '1', '29','','');

