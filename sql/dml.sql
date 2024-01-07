use employeedb;

INSERT INTO positions(position_name) VALUES ('Sr. RPA Developer');
INSERT INTO positions(position_name) VALUES ('Jr. Data Analyst');
INSERT INTO positions(position_name) VALUES ('Full-Stack Developer JS');
INSERT INTO positions(position_name) VALUES ('IT Support Specialist');
INSERT INTO positions(position_name) VALUES ('Devops Engineer');
INSERT INTO positions(position_name) VALUES ('Sr. Data Analyst');
INSERT INTO positions(position_name) VALUES ('Robotics Engineer');


SELECT * FROM positions;


INSERT INTO employees(name, lastname, photo, cv, position_id, entry_date)
VALUES ('Carlos', 'Ng', 'foto.jpg', 'cv.pdf', 1, '2023-06-21');


SELECT * FROM employees;


INSERT INTO users(username, user_password, email)
VALUES ('carlosngva', 'password123', 'carlosngva@mail.com');


SELECT * FROM users;
