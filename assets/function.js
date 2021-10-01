// main function that is responsible for the whole data menupulation

function onload_TotalData(dataSet, fieldSet, colorSet) {
  $(".grid-system").empty();
  var dynamic_data = "";
  for (let i = 0; i < fieldSet.length; i++) {
    dynamic_data += `
                <a onclick='getID(this.id)' id="${fieldSet[i]}-sub">
                  <div class="sub_grid" style="background-color: ${colorSet[i]};">
                        <h6 style="text-transform:uppercase" data-aos="fade-down" data-aos-duration="500">${fieldSet[i]}</h6>
                        <div class="counter" data-aos="fade-up" data-aos-duration="500">
                            <h5 class="count" data-target="${dataSet[i]}" id="${fieldSet[i]}">0</h5>
                        </div>
                   </div>
                </a>
        `;
  }
  // console.log(dynamic_data);
  $(".grid-system").append(dynamic_data);
}
function dynamic_TotalData(dataSet, fieldSet, colorSet) {
  $(".grid-system").empty();
  var dynamic_data = "";
  for (let i = 0; i < fieldSet.length; i++) {
    dynamic_data += `
                <a onclick='getID(this.id)' id="${fieldSet[i]}-sub">
                  <div class="sub_grid" style="background-color: ${colorSet[i]};">
                    <div class="content">
                        <h6 style="text-transform:uppercase" data-aos="fade-down" data-aos-duration="500">${fieldSet[i]}</h6>
                        <div class="counter" data-aos="fade-up" data-aos-duration="500">
                            <h5 class="count" data-target="${dataSet[i]}" id="${fieldSet[i]}">${dataSet[i]}</h5>
                        </div>
                    </div>
                  </div>
                </a>
        `;
  }
  // console.log(dynamic_data);
  $(".grid-system").append(dynamic_data);
}

// function for the left pie chart data change
function LeftPieChart(dataSet, colorSet, labelSet, text) {
  var ocan = document.getElementById("myChart1");
  document.getElementById("dynamic_chart_").removeChild(ocan);
  var canvas = document.createElement("canvas");
  canvas.id = "myChart1";
  document.getElementById("dynamic_chart_").appendChild(canvas);
  var ctx = document.getElementById("myChart1").getContext("2d");
  Chart.defaults.global.defaultFontSize = 16;
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: "pie", // also try bar or other graph types

    // The data for our dataset
    data: {
      labels: labelSet,
      // Information about the dataset
      datasets: [
        {
          backgroundColor: colorSet,
          borderColor: "royalblue",
          data: dataSet,
        },
      ],
    },

    // Configuration options
    options: {
      layout: {
        padding: 5,
      },
      legend: {
        position: "bottom",
      },
      scales: {
        yAxes: [
          {
            scaleLabel: {
              display: true,
              labelString: "Range in Percentage",
            },
          },
        ],
        xAxes: [
          {
            scaleLabel: {
              display: true,
              labelString: text,
            },
          },
        ],
      },
    },
  });

  document.getElementById("chart_text1").innerHTML = text;
}
// function for the right pie chart
function RightPieChart(dataSet, colorSet, labelSet, text) {
  var ocan = document.getElementById("myChart2");
  document.getElementById("dynamic_chart").removeChild(ocan);
  var canvas = document.createElement("canvas");
  canvas.id = "myChart2";
  document.getElementById("dynamic_chart").appendChild(canvas);
  var ctx = document.getElementById("myChart2").getContext("2d");
  Chart.defaults.global.defaultFontSize = 16;
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: "pie", // also try bar or other graph types

    // The data for our dataset
    data: {
      labels: labelSet,
      // Information about the dataset
      datasets: [
        {
          backgroundColor: colorSet,
          borderColor: "royalblue",
          data: dataSet,
        },
      ],
    },

    // Configuration options
    options: {
      layout: {
        padding: 5,
      },
      legend: {
        position: "bottom",
      },
      scales: {
        yAxes: [
          {
            scaleLabel: {
              display: true,
              labelString: "Range in Percentage",
            },
          },
        ],
        xAxes: [
          {
            scaleLabel: {
              display: true,
              labelString: text,
            },
          },
        ],
      },
    },
  });

  document.getElementById("chart_text2").innerHTML = text;
}

// function for the bottom bar chart
function BottomBarChart(dataSet, colorSet, labelSet, text) {
  var ocan = document.getElementById("myChart3");
  document.getElementById("dynamic_barchart").removeChild(ocan);
  var canvas = document.createElement("canvas");
  canvas.id = "myChart3";
  document.getElementById("dynamic_barchart").appendChild(canvas);
  var ctx = document.getElementById("myChart3").getContext("2d");
  Chart.defaults.global.defaultFontSize = 16;
  // break data
  let data0 = dataSet[0];
  let data1 = dataSet[1];
  let data2 = dataSet[2];
  let data3 = dataSet[3];
  let data4 = dataSet[4];
  // break data end
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: labelSet,
      datasets: [
        {
          label: "self",
          backgroundColor: `${colorSet[0]}`,
          data: dataSet[0],
        },
        {
          label: "shg",
          backgroundColor: `${colorSet[1]}`,
          data: dataSet[1],
        },
        {
          label: "mfg",
          backgroundColor: `${colorSet[2]}`,
          data: dataSet[2],
        },
        {
          label: "organization",
          backgroundColor: `${colorSet[3]}`,
          data: dataSet[3],
        },
        {
          label: "jlg",
          backgroundColor: `${colorSet[4]}`,
          data: dataSet[4],
        },
      ],
    },
    options: {
      tooltips: {
        displayColors: true,
        callbacks: {
          mode: "x",
        },
      },
      scales: {
        xAxes: [
          {
            stacked: true,
            gridLines: {
              display: false,
            },
          },
        ],
        yAxes: [
          {
            stacked: true,
            ticks: {
              beginAtZero: true,
            },
            type: "linear",
          },
        ],
      },
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        position: "bottom",
      },
    },
  });
  document.getElementById("chart_text3").innerHTML = text;
}

function dataSanitize(data) {
  full_sanitize_data = [];
  per_kyc_array = [];
  kyc_status = [];
  filter_status = [];
  dis_year = [];
  bar_chart_data = [];
  bar_chart_data_arrange_by_kyc = [];
  kyc_type = ["self", "shg", "mfg", "or", "jlg"];
  data["per_kyc"].forEach((e) => {
    per_kyc_array.push(e.per_kyc);
  });
  data["kyc_status"].forEach((e) => {
    kyc_status.push(e.status);
  });
  data["filter_status"].forEach((e) => {
    filter_status.push(e.filter);
  });
  data["dis_time"].forEach((e) => {
    dis_year.push(e.dis);
  });
  data["bar_chart_data"].forEach((e) => {
    let per_barChart_data = [];
    e.forEach((elem) => {
      per_barChart_data.push(elem.count);
    });
    bar_chart_data.push(per_barChart_data);
  });
  for (let i = 0; i < kyc_type.length; i++) {
    let barchart_data_byKyc = [];
    bar_chart_data.forEach((e) => {
      barchart_data_byKyc.push(e[i]);
    });
    bar_chart_data_arrange_by_kyc.push(barchart_data_byKyc);
  }
  full_sanitize_data = [
    per_kyc_array,
    kyc_status,
    filter_status,
    bar_chart_data_arrange_by_kyc,
    dis_year,
  ];
  return full_sanitize_data;
}

function dataSanitize_onKycType(data) {
  kyc_status = [];
  filter_status = [];
  data["status"].forEach((e) => {
    kyc_status.push(e.status);
  });
  data["gender"].forEach((e) => {
    filter_status.push(e.gender);
  });
  return (full_sanitize_data = [kyc_status, filter_status]);
}

// ajex call functions
// ######## all count data ########
function Ajax_Call(
  date_range,
  kyc_type,
  filter_type,
  start_date = "",
  end_date = ""
) {
  var response = $.ajax({
    url: "kyc_dashbord_dataload.php",
    type: "post",
    async: false,
    dataType: "json",
    data: {
      date_range: date_range,
      kyc_type: kyc_type,
      filter_type: filter_type,
      start_date: start_date,
      end_date: end_date,
    },
  }).responseText;
  // console.log(typeof response);
  return response;
  // console.log(data_value);
}

// for kyc type only
function Ajax_call2(
  date_range,
  kyc_type,
  filter_type,
  start_date = "",
  end_date = ""
) {
  var response = $.ajax({
    url: "dataload_upon_kycType.php",
    type: "post",
    async: false,
    dataType: "json",
    data: {
      date_range: date_range,
      kyc_type: kyc_type,
      filter_type: filter_type,
      start_date: start_date,
      end_date: end_date,
    },
  }).responseText;
  // console.log(typeof response);
  return response;
  // console.log(data_value);
}
function Load_all_Data(
  date_range,
  kyc_type,
  filter_type,
  start_date = "",
  end_date = ""
) {
  return Ajax_Call(date_range, kyc_type, filter_type);
}

function Load_all_Data_UponKycStatus(
  date_range,
  kyc_type,
  filter_type,
  start_date = "",
  end_date = ""
) {
  return Ajax_call2(date_range, kyc_type, filter_type);
}
