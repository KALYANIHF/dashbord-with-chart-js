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


-- select isnull(select count(*) from kyc_table where YEAR(created_at) = 2021 GROUP BY(kyc_type), 0);

-- select COALESCE(count(*), 0) from kyc_table where YEAR(created_at) = 2020 GROUP BY(kyc_type);

-- select a.kyc_type,(select count(*) from kyc_table x where x.kyc_type = a.kyc_type and YEAR(created_at) = 2019) as count from kyc_table a group by(kyc_type);

SELECT a.kyc_type,(SELECT COUNT(*) FROM kyc_table x WHERE x.kyc_type = a.kyc_type and date(created_at) = current_date) as status from kyc_table a group by(status);

SELECT COUNT(*) as per_kyc FROM kyc_table WHERE ${$date_range} UNION ALL SELECT COUNT(*) as per_kyc FROM kyc_table WHERE ${$date_range} GROUP BY(kyc_type)

SELECT (SELECT COUNT(*) FROM kyc_table x where x.)

SELECT a.kyc_type,(SELECT COUNT(*) FROM kyc_table x WHERE x.kyc_type = a.kyc_type) as kyc_type a group by(kyc_type);

SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.gender = a.gender) as status from kyc_table a group by(gender);

SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.status = a.status) as status a group by(status);

INSERT INTO kyc_table(kyc_type,status,member_name,gender,marital_status,caste,religion,)