<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyc DashBord</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
    <!-- popup box -->
    <div class="popup-box">
        <div class="popup-content">
            <div class="close"></div>
            <div class="main-content">
                <div id="table_heading">

                </div>
                <div id="table_content">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- popup box end -->
    <div class="container-fluid">
        <!-- main header section -->
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <div class="chart-title">
                    <h5 id="chart-figure" class="display-4" class="figure">DashBord Status</h5>
                    <h3 id="chart-figure-type" class="type">Your Login Date and Time: <script>document.write(new Date().toLocaleString("en-US", {timeZone:
                        "Asia/Kolkata"}))</script></h3>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 justify-content mt-2">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <select class="custom-select" id="date_range">
                          <option value="ytd" selected>YTD</option>
                          <option value="today">Today</option>
                          <option value="last_week">Last 1 Week</option>
                          <option value="last_month">Last 1 Month</option>
                          <option value="last_6_month">Last 6 Month</option>
                          <option value="last_1_year">Last 1 Year</option>
                          <option value="custom_date">Custom Date</option>
                        </select>
                        <div id="custom_date">
                            <!-- pick date part -->
                            <div class="form-row">
                                <div class="col">
                                    <label for="start-date">Start Date</label>
                                    <input type="date" max="<?php echo date("Y-m-d") ?>" name="start_date" id="start_date">
                                </div>
                                <div class="col">
                                    <label for="end-date">End Date</label>
                                    <input type="date" disabled value="<?php echo date("Y-m-d") ?>" name="end_date" id="end_date">
                                </div>
                                <div class="col align_item">
                                    <button class="btn btn-success btn-sm mt-4" id="check_date" type="submit" name="check_date">Check</button>
                                </div>
                            </div>
                            <!-- pick date part end -->
                        </div>
                </form>
            </div>
        </div>
        <!-- main header section end -->
        <!-- grid section for showing the data -->
        <div class="container mt-5 mb-5">
            <div class="grid-system">

            </div>
        </div>
        <!-- grid section end -->
        <!-- main two pie chart section -->
        <div class="row p-4">
            <div class="col-sm-6 col-md-6">
                <div class="error_massage">
                    <div class="massage_text">
                        <h5>No date is found</h5>
                        <h6>Please select a Date Range</h6>
                    </div>
                </div>
                <div class="inside rounded" id="dynamic_chart_">
                    <div class="select_menu mt-5 justify-content">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                            <select class="custom-select" id="kyc_type">
                               <option value="total_kyc" selected>TOTAL KYC</option>
                               <option value="self">SELF</option>
                               <option value="shg">SHG</option>
                               <option value="mfg">MFG</option>
                               <option value="or">Organization</option>
                               <option value="jlg">JLG</option>
                            </select>
                        </form>
                    </div>
                    <!-- left pie chart -->
                        <canvas id="myChart1" width="300px" height="300px"></canvas>
                    <!-- left pie chart end -->
                    <h6 id="chart_text1" class="text-center pt-2 text-uppercase"></h6>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="error_massage">
                    <div class="massage_text">
                        <h5>No date is found</h5>
                        <h6>Please select a Date Range</h6>
                    </div>
                </div>
                <div class="inside rounded" id="dynamic_chart">
                    <div class="select_menu mt-5 justify-content">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                            <select class="custom-select" id="filter_type">
                              <option value="gender" selected>Gender</option>
                              <option value="caste">Caste</option>
                              <option value="religion">Religion</option>
                              <option value="marital_status">Marital Status</option>
                            </select>
                        </form>
                    </div>
                    <!-- right pie chart -->
                        <canvas id="myChart2" width="300px" height="300px"></canvas>
                    <!-- right pie chart end -->
                        <h6 id="chart_text2" class="text-center pt-2 text-uppercase"></h6>
                </div>
            </div>
        </div>
        <!-- main two pie chart section end -->
        <!-- bar chart start -->
        <div class="row p-4">
            <div class="col-sm-12 col-md-12">
                <div class="error_massage">
                    <div class="massage_text">
                        <h5>No date is found</h5>
                        <h6>Please select a Date Range</h6>
                    </div>
                </div>
                <div class="inside_ rounded" id="dynamic_barchart">
                        <canvas id="myChart3"></canvas>
                        <h6 id="chart_text3" class="text-center pt-2 text-uppercase"></h6>
                </div>
            </div>
        </div>
        <!-- bar chart end -->
    </div>
    <!-- footer section start -->
        <div class="footer p-3 bg-secondary">
            <div class="container">
                <div class="content_footer">
                    <h6 class="letter_space">All Right Reserved &copy; <script>document.write(new Date().getFullYear())</script></h6>
                </div>
            </div>
        </div>
    <!-- footer section end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="./assets/function.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- default global color section -->
    <script>
        kyc_color_set = ['#EDEEC0','#433E0E','#7C9082','#D0C88E'];
        gender_color_set= [
            '#fe5f55',
            '#f0b67f',
            '#d6d1b1'
        ]
        caste_color_set = [
            '#aa4465',
            '#edf0da',
            '#a89b8c',
            '#f0dfad',
            '#8f5c38'
        ]
        religion_color_set = [
            '#ee6055',
            '#60d394',
            '#aaf683',
            '#ffd97d'
        ]
        marital_color_set = [
            '#9e2b25',
            '#51355a',
            '#2a0c4e'
        ]
        barchart_color_set = ['#d72638','#3f88c5','#f49d37','#f22b29','#140f2d']
        kyc_label_set = ['approve','reject','pending','seek clarification'];
        gender_label_set = ['Male','Female','Transgender','Mixed'];
        caste_label_set = ['st','sc','obc','general','minority'];
        religion_label_set = ['hindu','muslim','christian','others'];
        marital_label_set = ['married','unmarried','others'];
        kyc_barchart_label = ['Self','Shg','Mfg','Organization','Jlg'];
        main_fieldSet = ["total_kyc","self","shg","mfg","jlg","organization"];
        // main_fieldSet = ["alpha","beta","gama","delta","nano","pico","sudo","ls"];
        main_colorSet = ['#555','#d72638','#3f88c5','#f49d37','#140f2d','#f22b29'];
        // main_colorSet = ['#555','#d72638','#3f88c5','#f49d37','#140f2d','#140f36','#140f9d','#0f0'];
    </script>
    <!-- default global color section end -->
    <!-- main vanilla script ES6 -->
    <script>
        window.addEventListener('load',()=>{
            $(".popup-box").hide();
            date_range = document.getElementById('date_range').value;
            kyc_type = document.getElementById('kyc_type').value;
            filter_type = document.getElementById('filter_type').value;
            $('.error_massage').hide();
            $('#custom_date').hide();
            //dynamic data call
            sessionStorage.clear();
            data = JSON.parse(Load_all_Data(date_range,kyc_type,filter_type));
            // console.log(data);
            dataSanitize(data);
            all_loading_data = dataSanitize(data);
            onload_TotalData(all_loading_data[0],main_fieldSet,main_colorSet);
            // chart1
            // name of the argumants of this function (dataSet,colorSet,labelSet)
            LeftPieChart(all_loading_data[1],kyc_color_set,kyc_label_set,'kyc by status till YTD');
            // chart2
            // name of the argumants of this function (dataSet,colorSet,labelSet)
            RightPieChart(all_loading_data[2],gender_color_set,gender_label_set,'kyc status by gender till YTD');
            // chart3
            // same as above
            BottomBarChart(all_loading_data[3],barchart_color_set,all_loading_data[4],'All Kyc DataSheet till YTD');
            const countElements = document.querySelectorAll('.count');
            // const speed  = 200;
            const inc = 0;
            countElements.forEach(e=>{
                // define a function to incement the value of the element
                const updateCount = ()=>{
                    const target = e.getAttribute('data-target');
                    const count =+ e.innerHTML;
                    // increment the value by devide the target value with the speed value
                    const inc =+ 10;
                    if (count < target) {
                        // Add inc to count and output in counter
                        e.innerText = count + inc;
                        // Call function every 3ms count delay
                        setTimeout(updateCount, 1.5);
                    }else{
                        e.innerHTML = target;
                    }
                };
                updateCount();
            });
        })
    </script>
    <!-- main vanilla script end ES6 -->
    <!-- all other data manupulation -->
    <script>
        // total data value change
        document.getElementById('date_range').addEventListener('change',()=>{
            $("#start_date").val("");
            $('#kyc_type').prop('selectedIndex',0);
            $('#filter_type').prop('selectedIndex',0);
            date_range = document.getElementById('date_range').value;
            kyc_type = document.getElementById('kyc_type').value;
            filter_type = document.getElementById('filter_type').value;
                $('#custom_date').hide();
                $('.inside,.inside_').show();
                $('.error_massage').hide();
            // if the date range is custom date then execute this
            // clear session stroage
            sessionStorage.clear();
            if (date_range == "custom_date") {
                $('#custom_date').show();
                document.querySelectorAll(".count").forEach(e=>{
                    e.innerHTML='0';
                })
                $('.inside,.inside_').hide();
                $('.error_massage').show();
            }
            // otherwise execute this
            else{
                kyc_type_ = document.getElementById('kyc_type').value;
                data = JSON.parse(Load_all_Data(date_range,kyc_type,filter_type));
                all_loading_data =  dataSanitize(data);
                dynamic_TotalData(all_loading_data[0],main_fieldSet,main_colorSet);
                LeftPieChart(all_loading_data[1],kyc_color_set,kyc_label_set,`kyc by status till ${date_range} for ${kyc_type_}`);
                RightPieChart(all_loading_data[2],gender_color_set,gender_label_set,`kyc status by ${filter_type} till ${date_range}`);
                BottomBarChart(all_loading_data[3],barchart_color_set,all_loading_data[4],'All Kyc DataSheet till YTD');
            }
            
        })
        // left drop down
        document.getElementById('kyc_type').addEventListener('change',()=>{
            $('#filter_type').prop('selectedIndex',0);
            date_range = document.getElementById('date_range').value;
            kyc_type = document.getElementById('kyc_type').value;
            filter_type = document.getElementById('filter_type').value;
            // TODO: FIXME:
            // console.log(sessionStorage.getItem('start_date'));
            // console.log(sessionStorage.getItem('end_date'));
            data = JSON.parse(Load_all_Data_UponKycStatus(date_range, kyc_type, filter_type,sessionStorage.getItem('start_date'),sessionStorage.getItem('end_date')));
            all_loading_data = dataSanitize_onKycType(data);
            LeftPieChart(all_loading_data[0],kyc_color_set,kyc_label_set,`kyc by status till ${date_range} for ${kyc_type}`);
            RightPieChart(all_loading_data[1],gender_color_set,gender_label_set,`kyc status by ${filter_type} till ${date_range}`);
        })
        // right drop down
        document.getElementById('filter_type').addEventListener('change',()=>{
            date_range = document.getElementById('date_range').value;
            kyc_type = document.getElementById('kyc_type').value;
            filter_type = document.getElementById('filter_type').value;
            data = JSON.parse(Load_all_Data_UponFilter(date_range, kyc_type, filter_type,sessionStorage.getItem('start_date'),sessionStorage.getItem('end_date')));
            kyc_filter_data = dataSanitize_onFilter(data);
            if (filter_type == 'gender') {
                RightPieChart(kyc_filter_data,gender_color_set,gender_label_set,`kyc status by ${filter_type} till ${date_range}`);
            }
            if (filter_type == 'caste') {
                RightPieChart(kyc_filter_data,caste_color_set,caste_label_set,`kyc status by ${filter_type} till ${date_range}`);
            }
            if (filter_type == 'religion') {
                RightPieChart(kyc_filter_data,religion_color_set,religion_label_set,`kyc status by ${filter_type} till ${date_range}`);
            }
            if (filter_type == 'marital_status') {
                RightPieChart(kyc_filter_data,marital_color_set,marital_label_set,`kyc status by ${filter_type} till ${date_range}`);
            }
        });
        // On custom data data value
        document.getElementById('check_date').addEventListener('click',(e)=>{
            const start_date = document.querySelector('#start_date').value;
            const end_date = document.querySelector('#end_date').value;
            // make this two as session varibale 
            sessionStorage.setItem('start_date',start_date);
            sessionStorage.setItem('end_date',end_date);
            // check if the date is empty or not
            if (start_date == null || start_date == '') {
                e.preventDefault();
                alert('Please Select Date Range Before Click Check');
            }else{
                e.preventDefault();
                // console.log(start_date,end_date);
                $('#custom_date').hide();
                $('.inside,.inside_').show();
                $('.error_massage').hide();
                // attach two extra arguments start_date and end_date
                data = JSON.parse(Load_all_Data(date_range,kyc_type,filter_type,start_date,end_date));
                all_loading_data =  dataSanitize(data);
                // console.log(all_loading_data);
                // =========== all the chart data
                dynamic_TotalData(all_loading_data[0],main_fieldSet,main_colorSet);
                LeftPieChart(all_loading_data[1],kyc_color_set,kyc_label_set,`All Kyc DataSheet Between ${start_date} and ${end_date}`);
                RightPieChart(all_loading_data[2],gender_color_set,gender_label_set,`All Kyc DataSheet Between ${start_date} and ${end_date}`);
                BottomBarChart(all_loading_data[3],barchart_color_set,all_loading_data[4],`All Kyc DataSheet Between ${start_date} and ${end_date}`);
            }
        })
    </script>
    <!-- end of JS script for data manupulation -->
    <!-- close button click event -->
    <script>
        function Ajax_call4(date_range, kyc_type, start_date = "", end_date = "") {
            var response = $.ajax({
                url: "getTable_data.php",
                type: "post",
                async: false,
                dataType: "json",
                data: {
                date_range: date_range,
                kyc_type: kyc_type,
                start_date: start_date,
                end_date: end_date,
                },
            }).responseText;
            // console.log(typeof response);
            return response;
            // console.log(data_value);
        }

        function Load_all_TableData(
            date_range,
            kyc_type,
            start_date = "",
            end_date = ""
            ) {
            return Ajax_call4(date_range, kyc_type,start_date,end_date);
        }

        function table_heading(arg){
            date_range = document.getElementById('date_range').value;
            kyc_type = arg;
            filter_type = document.getElementById('filter_type').value;
            if (date_range != 'custom_date') {
                data = JSON.parse(Load_all_TableData(date_range,kyc_type));
            }else{
                data = JSON.parse(Load_all_TableData(date_range,kyc_type,sessionStorage.getItem('start_date'),sessionStorage.getItem('end_date')));
            }
            // console.log(data);
            document.getElementById("table_heading").innerHTML = `<h2 class="text-info table-heading">${arg} Content Table</h2>
            <h4 id="chart-figure-type" class="type">Your Login Date and Time : ${(new Date().toLocaleString("en-US", {timeZone:"Asia/Kolkata"}))} </h4>`;
            dynamic_tableData = '';
            var i = 0;
            data.forEach(e => {
                dynamic_tableData+=`
                <tr>
                    <td>${++i}</td>
                    <td>${e.kyc_type}</td>
                    <td>${e.status}</td>
                    <td>${e.member_name}</td>
                    <td>${e.gender}</td>
                    <td>${e.marital_status}</td>
                    <td>${e.caste}</td>
                    <td>${e.religion}</td>
                    <td>${e.created_at}</td>
                </tr>
                `;
            });
            document.querySelector('#table_content').innerHTML = `
            <table class="table table-striped" id="data_table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kyc Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Marital Status</th>
                        <th scope="col">Caste</th>
                        <th scope="col">Religion</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    ${dynamic_tableData}
                </tbody>
            </table>
            `;
            $('#data_table').DataTable({
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "scrollY": 300,
            });
        }
        document.querySelector('.close').addEventListener('click',()=>{
           $(".popup-box").hide();
        });
        function getID(e){
           $(".popup-box").show();
           $("#table_heading").empty();
           $("#table_content").empty();
           table_heading(e.slice(0,e.length-4));
        }
    </script>
    <!-- close button click event end -->
</body>
</html>
