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