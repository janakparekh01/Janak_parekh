1. Get First_Name from employee table using alias name “Employee Name”. 

Ans. select first_name from employee;

2.Get FIRST_NAME, Joining year, Joining Month and Joining Date from employee 
table.

SELECT first_name,joining_date from employee;

3.Get all employee details from the employee table order by First Name Ascending 
And Salary descending?

select* from employee ORDER by first_name asc;
select* from employee ORDER by salary DESC;

4.Get employee details from employee table whose first name contains „o‟.
SELECT * FROM `employee` WHERE first_name LIKE '_o%';


5. Get employee details from employee table whose joining month is “January
SELECT * FROM `employee` WHERE extract(month from joining_date)= 1;

6.Get all employee details from the employee table order by First Name Ascending 
And Salary descending?

select* from employee ORDER by salary DESC;
select department from employee;

7. Get department wise maximum salary from employee table order by salary 
ascending?
select*from employee  ORDER BY salary ASC;
select departmenrt from employee;

8.Select first_name, incentive amount from employee and incentives table for those 
Employees who have incentives and incentive amount greater than 3000 

select incentive_amount,first_name from incentives,employee where incentive_amount>=3000;

9. Select 2nd Highest salary from employee table
