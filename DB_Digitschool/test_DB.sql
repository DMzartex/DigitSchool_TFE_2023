/* CREATION D'UNE CLASSE */
insert into class(className)
Values('6TTI');

/* CREATION D'UN STUDENT */
insert into student(studentName,studentFirstName,studentEmail,studentPassword,studentPhoneNumber,studentBirthDate,studentAdress,studentPostalCode,studentFunction,studentRespondablePay,classId)
Values('Michaux','Dorian','dorian-michaux21@outlook.be','Dorian21012004','0493378771','2004-01-21 10:15:00','17 Rue Cuvelier','5300', 'student',false,1);

/* CREATION D'UN TEACHER */

insert into teacher(teacherName,teacherFirstName,teacherEmail,teacherPassword,teacherAdress,teacherPostalCode,teacherPhoneNumber,teacherBirthDate,teacherFunction)
Values('Benoit','Delahaut','benoit-delahaut@outlook.fr','Benoit12568','25 Rue de la station','5500','0439654527','1985-02-24 12:56:00','teacher');

/* CREATION D'UN COURS */

insert into cours(courName,teacherId,classId)
Values('FR_6TTI',1,1);

/* CREATION STUDENT_COURS */

insert into student_cours(coursId,studentId)
Values(1,3);
