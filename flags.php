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
    // =================
      /* time flag end*/
    // =================
    ## all the kyc type
    $kyc_type = ['self','shg','mfg','or','jlg'];
