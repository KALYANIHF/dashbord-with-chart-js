-- select isnull(select count(*) from kyc_table where YEAR(created_at) = 2021 GROUP BY(kyc_type), 0);

-- select COALESCE(count(*), 0) from kyc_table where YEAR(created_at) = 2020 GROUP BY(kyc_type);

-- select a.kyc_type,(select count(*) from kyc_table x where x.kyc_type = a.kyc_type and YEAR(created_at) = 2019) as count from kyc_table a group by(kyc_type);

SELECT a.kyc_type,(SELECT COUNT(*) FROM kyc_table x WHERE x.kyc_type = a.kyc_type and date(created_at) = current_date) as status from kyc_table a group by(status);

SELECT COUNT(*) as per_kyc FROM kyc_table WHERE ${$date_range} UNION ALL SELECT COUNT(*) as per_kyc FROM kyc_table WHERE ${$date_range} GROUP BY(kyc_type)

SELECT (SELECT COUNT(*) FROM kyc_table x where x.)

SELECT a.kyc_type,(SELECT COUNT(*) FROM kyc_table x WHERE x.kyc_type = a.kyc_type) as kyc_type a group by(kyc_type);

SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.gender = a.gender) as status from kyc_table a group by(gender);

SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.status = a.status) as status a group by(status);