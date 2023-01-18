create table teacher(
                        teacherId int primary key not null AUTO_INCREMENT,
                        name varchar(32) not null,
                        firstName varchar(32) not null,
                        email varchar(254) not null,
                        password varchar(100) not null,
                        adress varchar(50) not null,
                        postalCode varchar(20) not null,
                        ville varchar(30) not null,
                        phoneNumber varchar(20) not null,
                        birthDate datetime not null,
                        function varchar(32) not null
);

create table class(
                      classId int primary key not null AUTO_INCREMENT,
                      name varchar(32)
);

create table teacher_class(
                              teacher_class int primary key not null AUTO_INCREMENT,
                              teacherId int,
                              classId int,
                              foreign key (teacherId) references teacher(teacherId),
                              foreign key (classId) references class(classId)
);

create table cours(
                      coursId int primary key not null AUTO_INCREMENT,
                      name varchar(20) not null,
                      teacherId int,
                      classId int,
                      foreign key (teacherId) references teacher(teacherId),
                      foreign key (classId) references class(classId)
);

create table student(
                        studentId int primary key not null AUTO_INCREMENT,
                        name varchar(32) not null,
                        firstName varchar(32) not null,
                        email varchar(254) not null,
                        password varchar(100) not null,
                        phoneNumber varchar(20) not null,
                        birthDate datetime not null,
                        adress varchar(50) not null,
                        postalCode varchar(20) not null,
                        ville varchar(30) not null,
                        function varchar(32) not null,
                        respondablePay boolean not null,
                        classId int,
                        foreign key (classId) references class(classId)
);

create table student_cours(
                              student_cours int primary key not null AUTO_INCREMENT,
                              coursId int,
                              studentId int,
                              foreign key (coursId) references cours(coursId),
                              foreign key (studentId) references student(studentId)
);

create table interro(
                        Id int primary key not null AUTO_INCREMENT,
                        name varchar(100) not null,
                        resultat int not null,
                        cotation int not null,
                        teacherId int,
                        studentId int,
                        foreign key (teacherId) references teacher(teacherId),
                        foreign key (studentId) references student(studentId)
);

create table secretary(
                          secretaryId int primary key not null AUTO_INCREMENT,
                          name varchar(32) not null,
                          firstName varchar(32) not null,
                          email varchar(254) not null,
                          password varchar(100) not null,
                          adress varchar(50) not null,
                          postalCode varchar(20) not null,
                          ville varchar(30) not null,
                          phoneNumber varchar(20) not null,
                          birthDate datetime not null,
                          function varchar(32) not null
);

create table parent(
                       parentId int primary key not null AUTO_INCREMENT,
                       name varchar(32) not null,
                       firstName varchar(32) not null,
                       email varchar(254) not null,
                       password varchar(100) not null,
                       adress varchar(50) not null,
                       postalCode varchar(20) not null,
                       ville varchar(30) not null,
                       phoneNumber varchar(20) not null,
                       birthDate datetime not null,
                       function varchar(32) not null,
                       responsablePay boolean not null
);

create table student_parent(
                               student_parent int primary key not null AUTO_INCREMENT,
                               studentId int,
                               parentId int,
                               foreign key (studentId) references student(studentId),
                               foreign key (parentId) references parent(parentId)
);

create table facture(
                        factureId int primary key not null AUTO_INCREMENT,
                        name varchar(32) not null,
                        firstName varchar(32) not null,
                        adress varchar(50) not null,
                        postalCode varchar(20) not null,
                        communication varchar(50) not null,
                        montant float not null,
                        paye boolean not null,
                        secretaryId int not null ,
                        studentId int not null ,
                        parentId int not null,
                        foreign key (secretaryId) references secretary(secretaryId),
                        foreign key (studentId) references student(studentId),
                        foreign key (parentId) references parent(parentId)
);

create table educator(
                         educatorId int primary key not null AUTO_INCREMENT,
                         name varchar(32) not null,
                         firstName varchar(32) not null,
                         email varchar(254) not null,
                         password varchar(100) not null,
                         adress varchar(50) not null,
                         postalCode varchar(20) not null,
                         phoneNumber varchar(20) not null,
                         birthDate datetime not null,
                         function varchar(32) not null
);

create table remark(
                       remarkId int primary key not null AUTO_INCREMENT,
                       title varchar(50),
                       content varchar(300) not null,
                       date datetime not null,
                       teacherId int,
                       studentId int,
                       educatorId int,
                       foreign key (teacherId) references teacher(teacherId),
                       foreign key (studentId) references student(studentId),
                       foreign key (educatorId) references educator(educatorId)
);

create table infoImp(
                        infoImpId int primary key not null AUTO_INCREMENT,
                        title varchar(50) not null,
                        content text not null,
                        date datetime not null,
                        secretaryId int,
                        educatorId int,
                        foreign key (secretaryId) references secretary(secretaryId),
                        foreign key (educatorId) references educator(educatorId)
);

create table absence(
                        absenceId int primary key not null AUTO_INCREMENT,
                        type varchar(20) not null,
                        cause varchar(100) not null,
                        signature varchar(50) not null,
                        dateDebut datetime not null,
                        dateFin datetime not null,
                        studentId int,
                        educatorId int,
                        foreign key (studentId) references student(studentId),
                        foreign key (educatorId) references educator(educatorId)
);

create table retard(
                       retardId int primary key not null AUTO_INCREMENT,
                       type varchar(20) not null,
                       cause varchar(100) not null,
                       signature varchar(50) not null,
                       date datetime not null,
                       educatorId int,
                       studentId int,
                       foreign key (educatorId) references educator(educatorId),
                       foreign key (studentId) references student(studentId)
);












