<?php
    // all the flages
    // ==============
        /*time flag*/
    // ==============
    $ytd = "";
    $today = "date(created_at) = current_date";
    $last_week = "week(created_at) = week(now())-1";
    $last_month = "created_at> now() - INTERVAL 1 month";
    $last_6_month = "created_at> now() - INTERVAL 6 month";
    $last_1_year = "created_at> now() - INTERVAL 12 month";
    // $custom_date = "(DATE(created_at) BETWEEN '".$start_date."' AND '".$end_date."')";
    $approve = "select * from kyc_table where status = 'approve'";
    $reject = "select * from kyc_table where status = 'reject'";
    $pending = "select * from kyc_table where status = 'pending'";
    $seek_con = "select * from kyc_table where status = 'seek_con'";
    $gender_male = "select * from kyc_table where gender = 'male'";
    $gender_female = "select * from kyc_table where gender = 'female'";
    $gender_trans = "select * from kyc_table where gender = 'transgender'";
    // =================
      /* time flag end*/
    // =================
    ## all the kyc type
    $kyc_type = ['self','shg','mfg','or','jlg'];
