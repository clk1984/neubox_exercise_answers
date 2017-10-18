

This are the answers of a exercise given on a job interview

Coding Test for Software Engineer

Introduction: This test will try to examine your skills implementing basic tasks for PHP Web Development in SOA and N-Tier used for Web Services, you have 24 hours to finish the test but it’s estimated to take no more than two hours, when you are done please send your confirmation with the files attached to alejandraperez@neubox.net to start the review and stop the clock. Remember, stay awesome, keep it cool and do your best!! (Note: Avoid the use of Frameworks)

Part 1:
Implement a Class that extends PDO to handle MySQL connections to multiple Data Bases with a configuration file.
Create a form using CSS, and HTML5 with the following inputs:
email
password
phone number
company (Company can be null).
birthdate (use jQuery UI datepicker wih propper settings
Create a table to store this data properly and emails can’t be duplicated.
Create another file to Allow POST Methods restricted just from local host, which stores the data received from the previous file you created and also has another functions like delete, edit and get the user’s data at request from an authorized API user Call (Need credentials simulation).
Create a file to call the functions delete, edit and get users in your previous handler.
Alert the user if the data was stored successfully, otherwise you need to display an error code with an appropriate message passed in Json string.
Implement proper sanitization and filtering to prevent SQL Injections and to make sure the process will flow as expected.
Create an UML diagram to explain the process and interaction between objects.
If you have another idea to improve the process for user experience or code/process optimization…implement it and explain it as a bonus, we assure this will look great in the test…be creative!!!

Part 2:

Given
Salesperson
ID Name   Age Salary
1  Abe    61  140000
2  Bob    34  44000
5  Chris  34  40000
7  Dan    41  52000
8  Ken    57  115000
11 Joe    38  38000


Customer
ID Name     City      IndustryType
4 Samsonic  pleasant  J
6 Panasung  oaktown   J
7 Samony    jackson   B
9 Orange    Jackson   B


Orders
Number   order_date   cust_id    salesperson_id   Amount
10       8/2/96        4              2            540
20       1/30/99       4              8            1800
30       7/14/95       9              1            460
40       1/29/98       7              2            2400
50       2/3/98        6              7            600
60       3/2/98        6              7            720
70       5/6/98        9              7            150

Given the tables above, find the following:

a. The names of all salespeople that have an order with Samsonic.
b. The names of all salespeople that do not have any order with Samsonic.
c. The names of salespeople that have 2 or more orders.
d. Write a SQL statement to insert rows into a table called highAchiever (Name, Age), where a salesperson must have a salary of 100,000 or greater to be included in the table.
