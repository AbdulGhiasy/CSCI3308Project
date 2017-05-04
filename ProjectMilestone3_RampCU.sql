CREATE TABLE engineering (destination varchar(255), directions varchar(255), image varchar(255));

INSERT INTO engineering (destination, directions, image) VALUES 
('umc', 'Go towards the Engineering Quad, and then use the sidewalk along Farrand Field.
	Then cross 18th street and use the ramp either in the front of UMC or the back of UMC.', 'engineering.umc.png'),
('koelbel', 'Go south along the sidewalk and use the front entrance to enter the building.', 'engineering.koelbel.png'),
('c4c', 'Use the path towards Kittredge and either go up the hill towards C4C or go around 
	the building and use the back entrance.', 'engineering.c4c.png'),
('rec', 'Use the path between Engineering Quad and Math. Go towards Duane and cross 18th 
	street to Folsom. Go up the bike path towards the Rec Center and use the ramp.', 'engineering.rec.png'),
('norlin', 'Use the path between Engineering Quad and Math. Go North-West towards 18th street and cross. Enter the front building.', 'engineering.norlin.png'),
('kittredge', 'Use the path towards Koelbel and go along the bike path. Pass through the tunnel and cross the street.
	Use the ramp on the side of the door.', 'engineering.kittredge.png'),
('muenzinger', 'Use the path between Engineering Quad and Math. 
	Go North-West towards 18th street and cross. Use ramp in the back of the building.', 'engineering.muenzinger.png');

CREATE TABLE umc (destination varchar(255), directions varchar(255), image varchar(255));

INSERT INTO umc (destination, directions, image) VALUES
('engineering', 'Go towards 18th street and use the path along Farrand Field. Go through the Engineering Quad and enter the building', 'umc.engineering.png'),
('c4c', 'Go towards 18th street and use the path along Farrand Field. Go past Farrand Market and use the ramp to enter building.', 'umc.c4c.png'),
('rec', 'Use path near Norlin. Go down the hill towards Rec Center.', 'umc.rec.png'),
('koelbel', 'Go towards 18th street and cross. Use path along Farrand Field and cross through Engineering Quad.', 'umc.koelbel.png'),
('norlin', 'Go north towards Humanities and enter Norlin using ramp in front entrance.', 'umc.norlin.png'),
('kittredge', 'Use path towards Farrand Field. Go past the path along C4C and use bike path to pass through tunnel. Cross street 
	and use ramp to enter building.', 'umc.kittredge.png'),
('muenzinger', 'Go towards 18th street. Use sidewalk along 18th street and go north. Enter building using ramp.', 'umc.muenzinger.png');

CREATE TABLE c4c (destination varchar(255), directions varchar(255), image varchar(255));

INSERT INTO c4c (destination, directions, image) VALUES 
('engineering', 'Use path alongside Engineering Quad and enter building.', 'c4c.engineering.png'),
('koelbel', 'Use path alongside Engineering Quad and cross the court yard.', 'c4c.koelbel.png'),
('rec', 'Go towards Farrand Field and use sidewalk to go to Duane. Cross to Folsom and use bike path north to get to Rec Center.', 'c4c.rec.png'),
('umc', 'Go towards Farrand Field and use path to cross 18th street. Use Ramp either in front or back of building.', 'c4c.umc.png'),
('norlin', 'Go towards Farrand Field and use sidewalk to go north. Enter building. ', 'c4c.norlin.png'),
('kittredge', 'Use ramp either in back or front of building to go towards bike path. Go under tunnel and cross street towards Kitt.', 'c4c.kittredge.png'),
('muenzinger', 'Use path towards Duane Physics building and head west along Colorado.', 'c4c.muenzinger.png');

CREATE TABLE koelbel (destination varchar(255), directions varchar(255), image varchar(255));

INSERT INTO koelbel (destination, directions, image) VALUES 
('engineering', 'Use sidewalk to go north towards engineering.', 'koelbel.engineering.png'),
('c4c', 'Use path alongside engienering quad and go west up the hill and use ramp.', 'koelbel.c4c.png'),
('rec', 'Use path between engineering quad and Math. Go towards Duane and cross to Folsom Field. Go up bike
	ramp and enter rec center.', 'koelbel.rec.png'),
('umc', 'Cross engineering quad and head towards Farrand Field. Cross 18th street and use ramp.', 'koelbel.umc.png'),
('norlin', 'Use path along Math building. Cross Colorado street. Go west up Colorado street.', 'koelbel.norlin.png'),
('kittredge', 'Use bike path near C4C and enter tunnel. Cross street.', 'koelbel.kittredge.png'),
('muenzinger', 'Use path towards Duane Physics. Cross to Folsom Field. Go up 18th street.', 'koelbel.muenzinger.png');

CREATE TABLE rec (destination varchar(255), directions varchar(255), image varchar(255));

INSERT INTO rec (destination, directions, image) VALUES 
('engineering', 'Use bike path down. Go east along Colorado. Make a right and enter.', 'rec.engineering.png'),
('c4c', 'Use bike path to go south. Cross to Duane. Go towards Farrand Market. Use ramp to enter C4C.', 'rec.c4c.png'),
('koelbel', 'Use bike path to go south. Cross to Duane. Go towards Engineering. Use path along Koelbel.', 'rec.koelbel.png'),
('umc', 'Go west up hill. Cross Norlin Quad. Enter UMC with ramp.', 'rec.umc.png'),
('norlin', 'Go directly south towards path. Enter building.', 'rec.kittredge.png'),
('kittredge', 'Use bike path to go south. Cross to Duane. Cross through engineering quad. Use bike path and pass
	through tunnel. Use ramp.', 'rec.kittredge.png'),
('muenzinger', 'Go towards Norlin Library. Go east of Colorado street. Use ramp.', 'rec.muenzinger.png');

CREATE TABLE norlin (destination varchar(255), directions varchar(255), image varchar(255));

INSERT INTO norlin (destination, directions, image) VALUES 
('engineering', 'Go east on Colorado. Make a right. Use ramp to enter.', 'rec.engineering.png'),
('c4c', 'Go east on Colorado. Cross to Duane. Cross Farrand Market and use ramp.', 'rec.c4c.png'),
('koelbel', 'Go east on Colorado and make a right. Pass engineering and enter.', 'rec.koelbel.png'),
('umc', 'Go south on 18th street. Then go west path construction. Use ramp either in front or back of building.', 'rec.umc.png'),
('muenzinger', 'Go towards the bend between 18th and Colorado. Enter building.', 'norlin.muenzinger.png'),
('kittredge', 'Go east on Colorado. Make a right at engineering. Go past Koelbel and use bike path to 
	enter tunnel. Cross street and use ramp.', 'norlin.kittredge.png'),
('rec', 'Go north of norlin and use ramp to enter Rec Center.', 'norlin.rec.png');

CREATE TABLE muenzinger (destination varchar(255), directions varchar(255), image varchar(255));

INSERT INTO muenzinger (destination, directions, image) VALUES 
('engineering', 'Go east of Colorado. Make a right.', 'rec.engineering.png'),
('c4c', 'Go east of Colorado street. Go past Duane and cross Farrand Market. Use ramp to enter building. ', 'rec.c4c.png'),
('koelbel', 'Go east of Colorado. Make a right at engineering and keep following path.', 'rec.koelbel.png'),
('umc', 'Go south of 18th street. Use ramp to enter UMC.', 'rec.umc.png'),
('kittredge', 'Go down Colorado street. Go towards Koelbel and use bike path to enter tunnel. Cross street and 
	enter building using ramp.', 'muenzinger.kittredge.png'),
('norlin', 'Go up street and enter Norlin', 'muenzinger.norlin.png'),
('rec', 'Use path along Norlin and use ramp to enter building.', 'muenzinger.rec.png');

CREATE TABLE kittredge (destination varchar(255), directions varchar(255), image varchar(255));

INSERT INTO kittredge (destination, directions, image) VALUES 
('engineering', 'Go north to the tunnel and use bike path towards Engineering Center.', 'rec.engineering.png'),
('c4c', 'Go north to the tunnel and use ramp to access C4C.', 'rec.c4c.png'),
('koelbel', 'Go north to the tunnel and use back path and continue onto sidewalk and enter Koelbel.', 'rec.koelbel.png'),
('umc', 'Go north towards tunnel and use bike path. Cross through Engineering Quad and use path alongside Farrand Field.
	Cross Colorado street and use ramp in front of building or behind.', 'rec.umc.png'),
('norlin', 'Use tunnel and use bike path up the hill towards C4C. Use ', 'kittredge.norlin.png'),
('muenzinger', 'Use tunnel and go towards Farrand Field. Cross towards Duane and go up Colorado street.', 'kittredge.muenzinger.png'),
('rec', 'Use tunnel and go towards Engineering Center. Cross', 'kittredge.rec.png');