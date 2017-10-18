USE codingtest2;
SELECT Name
FROM salespersons
LEFT JOIN orders
ON salespersons.ID = orders.salesperson_id
WHERE orders.cust_id = 4;

SELECT Name
FROM salespersons
LEFT JOIN orders
ON salespersons.ID = orders.salesperson_id
WHERE orders.cust_id != 4;


SELECT Name
FROM salespersons a
Inner join ( SELECT orders.salesperson_id, COUNT(*) AS cnt
	FROM orders
	GROUP BY orders.salesperson_id
	HAVING cnt > 1) b
On a.ID = b.salesperson_id;




INSERT INTO highArchiver(Name, Age, Salary)
    SELECT Name, Age, Salary
        FROM salespersons
        WHERE Salary >= 100000;
