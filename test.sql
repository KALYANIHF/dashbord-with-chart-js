-- SELECT COUNT(*) as per_kyc FROM kyc_table WHERE week(created_at) = week(now())-1
 
-- UNION ALL 

-- SELECT COUNT(*) as per_kyc FROM kyc_table WHERE week(created_at) = week(now())-1 GROUP BY(kyc_type) 

-- UNION ALL 

-- SELECT COUNT(*) as status FROM kyc_table WHERE week(created_at) = week(now())-1 GROUP BY(status) 

-- UNION ALL 

-- SELECT COUNT(*) FROM kyc_table WHERE week(created_at) = week(now())-1 GROUP BY(gender);

--  select DATE(NOW()) - INTERVAL 1 DAY UNION
--  select DATE(NOW()) - INTERVAL 2 DAY UNION
--  select DATE(NOW()) - INTERVAL 3 DAY UNION
--  select DATE(NOW()) - INTERVAL 4 DAY UNION
--  select DATE(NOW()) - INTERVAL 5 DAY UNION
--  select DATE(NOW()) - INTERVAL 6 DAY UNION
--  select DATE(NOW()) - INTERVAL 7 DAY 

-- FOR 6 MONTH
-- SELECT MONTHNAME(NOW()) as MONTHNAME , MONTH(NOW()) as MONTH_NUMBER UNION
-- SELECT MONTHNAME(NOW() - INTERVAL 1 month), MONTH(NOW() - INTERVAL 1 month) as MONTH_NUMBER UNION
-- SELECT MONTHNAME(NOW() - INTERVAL 2 month), MONTH(NOW() - INTERVAL 2 month) as MONTH_NUMBER UNION
-- SELECT MONTHNAME(NOW() - INTERVAL 3 month), MONTH(NOW() - INTERVAL 3 month) as MONTH_NUMBER UNION
-- SELECT MONTHNAME(NOW() - INTERVAL 4 month), MONTH(NOW() - INTERVAL 4 month) as MONTH_NUMBER UNION
-- SELECT MONTHNAME(NOW() - INTERVAL 5 month), MONTH(NOW() - INTERVAL 5 month) as MONTH_NUMBER;
-- FOR 6 MONTH END

-- FOR 12 MONTH (1 Year)
SELECT MONTHNAME(NOW()) as MONTHNAME , MONTH(NOW()) as MONTH_NUMBER UNION
SELECT MONTHNAME(NOW() - INTERVAL 1 month), MONTH(NOW() - INTERVAL 1 month) as MONTH_NUMBER UNION
SELECT MONTHNAME(NOW() - INTERVAL 2 month), MONTH(NOW() - INTERVAL 2 month) as MONTH_NUMBER UNION
SELECT MONTHNAME(NOW() - INTERVAL 3 month), MONTH(NOW() - INTERVAL 3 month) as MONTH_NUMBER UNION
SELECT MONTHNAME(NOW() - INTERVAL 4 month), MONTH(NOW() - INTERVAL 4 month) as MONTH_NUMBER UNION
SELECT MONTHNAME(NOW() - INTERVAL 5 month), MONTH(NOW() - INTERVAL 5 month) as MONTH_NUMBER UNION
SELECT MONTHNAME(NOW() - INTERVAL 6 month), MONTH(NOW() - INTERVAL 6 month) as MONTH_NUMBER UNION
SELECT MONTHNAME(NOW() - INTERVAL 7 month), MONTH(NOW() - INTERVAL 7 month) as MONTH_NUMBER UNION
SELECT MONTHNAME(NOW() - INTERVAL 8 month), MONTH(NOW() - INTERVAL 8 month) as MONTH_NUMBER UNION
SELECT MONTHNAME(NOW() - INTERVAL 9 month), MONTH(NOW() - INTERVAL 9 month) as MONTH_NUMBER UNION
SELECT MONTHNAME(NOW() - INTERVAL 10 month), MONTH(NOW() - INTERVAL 10 month) as MONTH_NUMBER UNION
SELECT MONTHNAME(NOW() - INTERVAL 11 month), MONTH(NOW() - INTERVAL 11 month) as MONTH_NUMBER;
-- FOR 12 MONTH END (1 Year)
