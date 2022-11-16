/* CLASS */
insert into class(className)
Values('6TTI');

/* STUDENT */
insert into student(studentName,studentFirstName,studentEmail,studentPassword,studentPhoneNumber,studentBirthDate,studentAdress,studentPostalCode,studentVille,studentFunction,studentRespondablePay,classId)
Values('Michaux','Dorian','dorian-michaux21@outlook.be','Dorian21012004','0493378771','2004-01-21 10:15:00','17 Rue Cuvelier','5300','Andenne', 'student',false,1);

/* TEACHER */

insert into teacher(teacherName,teacherFirstName,teacherEmail,teacherPassword,teacherAdress,teacherPostalCode,teacherVille,teacherPhoneNumber,teacherBirthDate,teacherFunction)
Values('Benoit','Delahaut','benoit-delahaut@outlook.fr','Benoit12568','25 Rue de la station','5500','Namur','0439654527','1985-02-24 12:56:00','teacher');

/* COURS */

insert into cours(courName,teacherId,classId)
Values('FR_6TTI',1,1);

/* STUDENT_COURS */

insert into student_cours(coursId,studentId)
Values(1,1);


/* TEACHER_CLASS */

insert into teacher_class(teacherId,classId)
Values(1,1);


/* SECRETARY */

insert into secretary(secretaryName,secretaryFirstName,secretaryEmail,secretaryPassword,secretaryAdress,secretaryPostalCode,secretaryVille,secretaryPhoneNumber,secretaryBirthDate,secretaryFunction)
Values('Gauthier','Sandrine','gauthiersandrine@gmail.com','gauthier123','Rue de la meuse 21','5500','Namur','0482369821','1978-05-27 00:00:00','secretary');

/* PARENT */

insert into parent(parentName,parentFirstName,parentEmail,parentPassword,parentAdress,parentPostalCode,parentVille,parentPhoneNumber,parentBirthDate,parentFunction,parentResponsablePay)
Values('Michaux','Yves','michauxyves@gmail.com','michaux123','22 Rue edouard','5300','Andenne','0475354829','1970-12-08 00:00:00','parent',true);


