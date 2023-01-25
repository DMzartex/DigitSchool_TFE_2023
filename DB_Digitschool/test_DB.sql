/* CLASS */
insert into class(name)
Values('6TTI');


insert into student(name,firstName,email,password,phoneNumber,birthDate,adress,postalCode,ville,function,respondablePay,classId)
Values('Michaux','Dorian','dorian-michaux21@outlook.be','Dorian21012004','0493378771','2004-01-21 10:15:00','17 Rue Cuvelier','5300','Andenne', 'student',false,1);


insert into teacher(name,firstName,email,password,adress,postalCode,ville,phoneNumber,birthDate,function)
Values('Benoit','Delahaut','benoit-delahaut@outlook.fr','Benoit12568','25 Rue de la station','5500','Namur','0439654527','1985-02-24 12:56:00','teacher');



insert into cours(name,teacherId,classId)
Values('FR_6TTI',1,1);



insert into student_cours(coursId,studentId)
Values(1,1);




insert into teacher_class(teacherId,classId)
Values(1,1);




insert into secretary(name,firstName,email,password,adress,postalCode,ville,phoneNumber,birthDate,function)
Values('Gauthier','Sandrine','gauthiersandrine@gmail.com','gauthier123','Rue de la meuse 21','5500','Namur','0482369821','1978-05-27 00:00:00','secretary');



insert into parent(name,firstName,email,password,adress,postalCode,ville,phoneNumber,birthDate,function,responsablePay)
Values('Michaux','Yves','michauxyves@gmail.com','michaux123','22 Rue edouard','5300','Andenne','0475354829','1970-12-08 00:00:00','parent',true);

insert into student_parent (studentId,parentId) values(1,1);