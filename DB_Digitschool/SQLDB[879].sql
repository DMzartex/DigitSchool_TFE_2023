create table teacher(
	teacherId int primary key not null AUTO_INCREMENT,
    teacherName varchar(32) not null,
    teacherFirstName varchar(32) not null,
    teacherEmail varchar(254) not null,
    teacherPassword varchar(100) not null,
    teacherAdress varchar(50) not null,
    teacherPostalCode varchar(20) not null,
    teacherVille varchar(30) not null,
    teacherPhoneNumber varchar(20) not null,
    teacherBirthDate datetime not null,
    teacherFunction varchar(32) not null
);

create table class(
    classId int primary key not null AUTO_INCREMENT,
    className varchar(32)
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
    courName varchar(20) not null,
    teacherId int,
    classId int,
    foreign key (teacherId) references teacher(teacherId),
    foreign key (classId) references class(classId)
);

create table student(
    studentId int primary key not null AUTO_INCREMENT,
    studentName varchar(32) not null,
    studentFirstName varchar(32) not null,
    studentEmail varchar(254) not null,
    studentPassword varchar(100) not null,
    studentPhoneNumber varchar(20) not null,
    studentBirthDate datetime not null,
    studentAdress varchar(50) not null,
    studentPostalCode varchar(20) not null,
    studentVille varchar(30) not null,
    studentFunction varchar(32) not null,
    studentRespondablePay boolean not null,
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
    interroId int primary key not null AUTO_INCREMENT,
    interroName varchar(100) not null,
    interroResultat int not null,
    interroCotation int not null,
    teacherId int,
    studentId int,
    foreign key (teacherId) references teacher(teacherId),
    foreign key (studentId) references student(studentId)
);

create table secretary(
    secretaryId int primary key not null AUTO_INCREMENT,
    secretaryName varchar(32) not null,
    secretaryFirstName varchar(32) not null,
    secretaryEmail varchar(254) not null,
    secretaryPassword varchar(100) not null,
    secretaryAdress varchar(50) not null,
    secretaryPostalCode varchar(20) not null,
    secretaryVille varchar(30) not null,
    secretaryPhoneNumber varchar(20) not null,
    secretaryBirthDate datetime not null,
    secretaryFunction varchar(32) not null            
);

create table parent(
    parentId int primary key not null AUTO_INCREMENT,
    parentName varchar(32) not null,
    parentFirstName varchar(32) not null,
    parentEmail varchar(254) not null,
    parentPassword varchar(100) not null,
    parentAdress varchar(50) not null,
    parentPostalCode varchar(20) not null,
    parentVille varchar(30) not null,
    parentPhoneNumber varchar(20) not null,
    parentBirthDate datetime not null,
    parentFunction varchar(32) not null,
    parentResponsablePay boolean not null
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
    factureNameDesti varchar(32) not null,
    factureFirstNameDesti varchar(32) not null,
    factureAdressDesti varchar(50) not null,
    facturePostalCodeDesti varchar(20) not null,
    factureCommunication varchar(50) not null,
    factureMontant float not null,
    facturePaye boolean,
    secretaryId int,
    studentId int,
    parentId int,
    foreign key (secretaryId) references secretary(secretaryId),
    foreign key (studentId) references student(studentId),
    foreign key (parentId) references parent(parentId)   
);

create table educator(
    educatorId int primary key not null AUTO_INCREMENT,
    educatorName varchar(32) not null,
    educatorFirstName varchar(32) not null,
    educatorEmail varchar(254) not null,
    educatorPassword varchar(100) not null,
    educatorAdress varchar(50) not null,
    educatorPostalCode varchar(20) not null,
    educatorPhoneNumber varchar(20) not null,
    educatorBirthDate datetime not null,
    educatorFunction varchar(32) not null
);

create table remark(
    remarkId int primary key not null AUTO_INCREMENT,
    remarkTitle varchar(50),
    remarkContent varchar(300) not null,
    remarkDate datetime not null,
    teacherId int,
    studentId int,
    educatorId int,
    foreign key (teacherId) references teacher(teacherId),
    foreign key (studentId) references student(studentId),
    foreign key (educatorId) references educator(educatorId)
);

create table infoImp(
    infoImpId int primary key not null AUTO_INCREMENT,
    infoImpTitle varchar(50) not null,
    infoImpContent text not null,
    infoImpDate datetime not null,
    secretaryId int,
    educatorId int,
    foreign key (secretaryId) references secretary(secretaryId),
    foreign key (educatorId) references educator(educatorId)
);

create table absence(
    absenceId int primary key not null AUTO_INCREMENT,
    absenceType varchar(20) not null,
    absenceCause varchar(100) not null,
    absenceSignature varchar(50) not null,
    absenceDateDebut datetime not null,
    absenceDateFin datetime not null,
    studentId int,
    educatorId int,
    foreign key (studentId) references student(studentId),
    foreign key (educatorId) references educator(educatorId)
);

create table retard(
    retardId int primary key not null AUTO_INCREMENT,
    retardType varchar(20) not null,
    retardCause varchar(100) not null,
    retardSignature varchar(50) not null,
    retardDate datetime not null,
    educatorId int,
    studentId int,
    foreign key (educatorId) references educator(educatorId),
    foreign key (studentId) references student(studentId)
);












