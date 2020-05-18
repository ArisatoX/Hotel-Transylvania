--Create Users
CREATE TABLE Users 
(
	id int IDENTITY,
	firstName varchar(100),
	lastName varchar(100),
	email varchar(100),
	pass varchar(100),
	country varchar(100),
	phone varchar(100),
	roles bit,
	active bit,
	created text,
	updated text,

	CONSTRAINT PK_Users PRIMARY KEY (id)
)

--Create Rooms
CREATE TABLE Rooms
(
	id int IDENTITY,
	names varchar(100),
	price decimal,
	memberprice decimal,
	size int,
	capacity int,
	bed varchar(100),
	features text,
	descriptions text,
	picture varchar(200),
	available int,

	CONSTRAINT PK_Rooms PRIMARY KEY (id)
)

CREATE TABLE Booking
(
	id int IDENTITY,
	id_user int NOT NULL,
	id_room int NOT NULL,
	duration int,
	totalroom int,
	totalprice decimal,
	payment varchar(100),
	paid bit,
	stat varchar(100),

	CONSTRAINT PK_Booking PRIMARY KEY (id),
	CONSTRAINT FK_Booking_Users FOREIGN KEY (id_user) REFERENCES Users(id),
	CONSTRAINT FK_Booking_RoomType FOREIGN KEY (id_room) REFERENCES Rooms(id),
)

--Insert Into Users
INSERT INTO Users (firstName, lastName, email, pass, country, phone)
VALUES ('Testing', 'Account', 'tes@gmail.com', '123', 'System', '123456789123')

--Insert Into Room
INSERT INTO Rooms (names, price, memberprice, size, capacity, bed, features, descriptions, picture, available)
VALUES ('Studio', '2500000', '2375000', '23', '2', 'King', 'Bathroom, mini bar, mini refrigerator, wi-fi, TV', 'Each Studio Room is fitted with designer interiors and a marble bathroom to blend comfort and convenience seamlessly. Available with a King bed, the Studio Room comes complete with complimentary Wi-Fi, an intuitive IPTV system and Aromatherapy Associates amenities. Studio Rooms are conveniently located in the hotel East Tower in close proximity to Spa by JW and the Ebb6 Sky Garden & Swimming Pool.','/img/room/studio.jpg', '20')

INSERT INTO Rooms (names, price, memberprice, size, capacity, bed, features, descriptions, picture, available)
VALUES ('Deluxe King', '3000000', '2850000', '35', '2', 'King', 'Marble Bathroom, phones, TV, plug-in high tech room, radio, alarm clock, safe, iron and ironing board, mini bar, coffee maker / tea service, mini refrigerator', 'Offering a luxurious oasis in the heart of the Singapore city, our Deluxe King Guest Rooms are perfect for relaxing after a long day of travel. Well-appointed, the Deluxe King Guest Room features a large, marble bathroom complete with a deep-soak bathtub complete with complimentary Wi-Fi, an intuitive IPTV system and Aromatherapy Associates amenities.', '/img/room/deluxeking.jpg', '10')

INSERT INTO Rooms (names, price, memberprice, size, capacity, bed, features, descriptions, picture, available)
VALUES ('Premier Twin', '3500000', '3325000', '40', '3', 'King', 'Marble Bathroom, phones, wi-fi, cable / sattelite TV, plug-in high tech room, radio, hair dryer, robes, slippers, alarm clock, safe, desk, iron and ironing board, coffee maker / tea service, mini-refrigerator', 'Featuring added space for flexibility and comfort, our Premier King Guest Rooms allow you to transition effortlessly between work and relaxation. Well-appointed, each Premier King Guest Room features designer interiors, work desk, a large marble bathroom with deep-soak bathtub complete with complimentary Wi-Fi, an intuitive IPTV system and Aromatherapy Associates amenities.', '/img/room/premiertwin.jpg', '10')

INSERT INTO Rooms (names, price, memberprice, size, capacity, bed, features, descriptions, picture, available)
VALUES ('Premier Family', '3750000', '3562500', '40', '4', 'King', 'Marble Bathroom, phones, wi-fi, cable / sattelite TV, plug-in high tech room, radio, hair dryer, robes, slippers, alarm clock, safe, desk, iron and ironing board, coffee maker / tea service, mini-refrigerator', 'Designed for up to four adults, our Premier Family Room is perfect for friends and family travelling together. A larger guest room with added space for flexibility and comfort, Premier Family Guest Rooms feature King bedding and provides the option of an add-on Sofa Bed to comfortably sleep four guests in the room. Well-appointed, each Premier Family Guest Room features designer interiors, work desk, a large marble bathroom with deep-soak bathtub complete with complimentary Wi-Fi, an intuitive IPTV system and Aromatherapy Associates amenities.', '/img/room/premierfamily.jpg', '10')

INSERT INTO Rooms (names, price, memberprice, size, capacity, bed, features, descriptions, picture, available)
VALUES ('Premier Suite', '5000000', '4750000', '100', '3', 'King, Rollaway beds permitted, cribs permitted, pillowtop mattress, duvet, frette luxury linens', 'Executive longue access, high speed wi-fi, beverages, evening bar service, separated living room, marble bathroom, bidet, double vanities, hair dryer, robes, slippers, sofa, chair, alarm clock, safe, desk, iron and ironing board, coffee maker / tea service, mini refrigerator, phones, TV, plug-in high tech room, premium movie channels, radio','Discover ultimate pampering and relaxation in our luxurious Premier Suite featuring a spacious living room perfect for families and entertaining. Available with a King bed, the Premier Suite provides option of two extra beds in the living room for up to four adults. The Premier Suite features exclusive access to the Executive Lounge complete with complimentary breakfast, afternoon tea and evening cocktails. Well-appointed, each Premier Suite features a dedicated living room, pantry, guest bathroom, separate bedroom with designer interiors, spacious marble bathroom with deep-soak bathtub and includes complimentary Wi-Fi, work desk, an intuitive IPTV system and amenities by Aromatherapy Associates.', 'img/room/premiersuite.jpg', '3')

INSERT INTO Rooms (names, price, memberprice, size, capacity, bed, features, descriptions, picture, available)
VALUES ('Chairman Suite', '10000000', '9500000', '219', '5', '2 King, Rollaway beds permitted, cribs permitted, pillowtop mattress, duvet, frette luxury linens', 'Executive longue access, high speed wi-fi, beverages, evening bar service, separated living room, 2 marble bathroom, bidet, double vanities, hair dryer, robes, slippers, sofa, chair, alarm clock, safe, desk, iron and ironing board, coffee maker / tea service, mini refrigerator, phones, TV, plug-in high tech room, premium movie channels, radio', 'The luxuriously-appointed Chairman Suite features two bedrooms with King beds, two ensuite bathrooms, a living room, a dining room and a study. Featuring panoramic views of Singapore�s iconic skyline and the Marina Bay and located on the top floor of the hotel, the Chairman Suite comes complete with exclusive access to the Executive Lounge with complimentary breakfast, afternoon tea and evening cocktails.', 'img/room/chairmansuite.jpg', '1')

--Delete Users
DELETE FROM Users WHERE id = 3;

--Delete Users
DELETE FROM Booking WHERE id = 8;

--Delete Users
DELETE FROM Rooms;

--Update
UPDATE Users 
SET 
    active = '1'
WHERE
    firstName = 'Patrick';

UPDATE Rooms 
SET 
    available = '0'
WHERE
    names = 'Studio';

--Alter Table Users
ALTER TABLE Users
ADD ismember bit;

--Update Users
UPDATE Users
SET ismember='0'

--Update Rooms
UPDATE Rooms
SET available='3'
WHERE id='5'

-- Create Rooms
CREATE TABLE Meetings
(
    id int identity,
    location varchar(5),
    name varchar(10),
    capacity int,
    description varchar(100),
    hourPrice int,

    CONSTRAINT PK_Meetings PRIMARY KEY (id)   
);

--Create Reservation
CREATE TABLE Reservation
(
    id int identity(1,1),
    RoomID int,
    reserveDate date,
    start_time time,
    end_time time,
    price int,
    userID int,
    paid bit,
    payment varchar(100),
    
    CONSTRAINT PK_Reservation PRIMARY KEY (id),
    CONSTRAINT FK1 FOREIGN KEY (RoomID) REFERENCES Meetings(id),
    CONSTRAINT FK2 FOREIGN KEY (userID) REFERENCES Users(id)
);

INSERT INTO Meetings VALUES ('107','Magnolia',10,'A meeting room that is elegant',32000);
INSERT INTO Meetings VALUES ('108','Rafflesia',8,'Small, but looking cool meeting room',30000);
INSERT INTO Meetings VALUES ('207','Jasmine',12,'More spacious meeting room for company',35000);
INSERT INTO Meetings VALUES ('208','Lavender',10,'Some more facilities are not in the other rooms',32000);
INSERT INTO Meetings VALUES ('307','Sakura',6,'Room that is for small company, but still the facilities is as good as others',28000);
INSERT INTO Meetings VALUES ('308','Pansy',8,'A minimalist meeting room, but the facility is still as good as others',30000);