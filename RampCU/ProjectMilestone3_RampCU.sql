CREATE TABLE engineering (destination varchar(255), directions varchar(255));

INSERT INTO engineering (destination, directions) VALUES 
('umc', 'go straight north'),
('koelbel', 'exit building and head south using ramps'),
('c4c', 'use ramps near engineering quad and go up the hill to ramp'),
('rec center', 'go towards umc, then go towards stadium, then head to umc using ramps');

CREATE TABLE umc (destination varchar(255), directions varchar(255));

INSERT INTO umc (destination, directions) VALUES
('engineering', 'use path towards farrand field, go through quad'),
('c4c', 'use path towards farrand field, go past farrand market, use ramp to get to c4c'),
('rec center', 'go through path down towards norlin, use ramp to get to entrance'),
('koelbel', 'go towards farrand field, then go to c4c, then go past quad');

CREATE TABLE c4c (destination varchar(255), directions varchar(255));

INSERT INTO c4c (destination, directions) VALUES 
('engineering', 'go down the hill using ramps, head towards folsom, enter building'),
('koelbel', 'go down the hill using ramps, head towards koelbel'),
('rec center', 'head towards farrand market, then go past physics building, past the stadium and up ramp to rec center'),
('umc', 'go towards farrand field, then go straight west and use ramp to get to umc');

CREATE TABLE koelbel (destination varchar(255), directions varchar(255));

INSERT INTO koelbel (destination, directions) VALUES 
('engineering', 'go straight north into engineering building'),
('c4c', 'go west up the c4c hill and use ramp accordingly'),
('rec center', 'go towards physics building, use ramp and bike path, use ramp to access building'),
('umc', 'go towards farrand field, use ramp to get up stairs');

CREATE TABLE rec_center (destination varchar(255), directions varchar(255));

INSERT INTO rec_center (destination, directions) VALUES 
('engineering', 'go down the hill towards physics, then head east towards engineering'),
('c4c', 'go towards farrand field, past farrand market, up the hill using ramp'),
('koelbel', 'go down the hill towards physics, then head east towards engineering, then head south towards koelbel'),
('umc', 'go towards norlin, then go up hill towards chem, then go south to get to umc using ramps');
