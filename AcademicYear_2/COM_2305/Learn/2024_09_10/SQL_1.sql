
-- cd\

-- cd\xampp\mysql\bin

-- mysql -h localhost -u root -p
-- Enter password:


-- ดู databases ว่ามีอะไรบ้าง
-- show databases;

-- สร้าง databases
-- CREATE DATABASE myprojectl;

-- ลบ databases
-- Drop DATABASE myprojectl;

-- เข้าไปใช้งาน databases 
-- USE myprojectl;

-- ดูตาราง
-- Show TABLES;

-- ___________________________________________________________________________________________________________________________

-- สร้างตารางใน databases
-- CREATE TABLE faculty (
--    Fac_id Int(3) NOT NULL,
--    Fac_name VARCHAR(50),
--    PRIMARY KEY (Fac_id)
-- );

-- CREATE TABLE student (
--    student_id VARCHAR(10) NOT NULL,
--    student_name VARCHAR(50),
--    student_surname VARCHAR(50),
--    student_tal VARCHAR(10),
--    Fac_id int(3),
--    PRIMARY KEY (student_id),
--    Foreign KEY (Fac_id) references faculty(Fac_id)
-- );

-- ___________________________________________________________________________________________________________________________

-- ลบตาราง
-- Drop TABLE faculty; 

-- ดูโครงสร้างของตาราง
-- SHOW CREATE TABLE faculty;

-- ดูรายละเอียดของตาราง
-- desc faculty;

-- เพิ่มข้อมูล ลบ แก้ไข
-- Alter TABLE faculty add ชื่อฟิล;
-- Alter TABLE faculty Drop column ชื่อฟิล;
-- Alter TABLE faculty modify column ชื่อฟิล;

-- insert into ชื่อตาราง (ชื่อฟิลที่1,ชื่อฟิลที่2)
-- VALUE (ค่าที่จัดเก็บ1,ค่าที่จัดเก็บ2);

-- INSERT INTO faculty VALUE (001,"Science and Technology"); *
-- INSERT INTO faculty (Fac_id,Fac_name) VALUE (002,"Education"); *

-- ___________________________________________________________________________________________________________________________

-- ดูข้อมูลในตาราง 
-- select * from faculty;
-- -*-*-*-*-*-*-*-*-*-*-*-*-*-*-

-- INSERT INTO student VALUE (66143432,"Pocharapon","Hakad",0637512233,001);*

-- แก้ไขข้อมูลในตาราง
-- UPDATE ช่อตาราง SET ชื่อฟิล1 = ค่าที่ปรับปรุงหรือแก้ไข,
-- ชื่อฟิลที่2 = ค่าที่ปรับปรุงหรือแก้ไข,
-- WHERE ชื่อฟิลของสิ่งที่แก้ = 111; *

-- ลบข้อมูลในตาราง
-- DELETE FROM ชื่อตาราง
-- WHERE ชื่อฟิล = 1111; *แนะนำเป็นตาราง PK หรือตารางที่ไม่ซ้ำ






