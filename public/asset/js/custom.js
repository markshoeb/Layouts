function addition() {
    value1 = document.getElementById("value1").value;
    value2 = document.getElementById("value2").value;
    result = parseFloat(value1) + parseFloat(value2);
    document.getElementById("result").value = result;
}

function subtraction() {
    value1 = document.getElementById("value1").value;
    value2 = document.getElementById("value2").value;
    result = parseFloat(value1) - parseFloat(value2);
    document.getElementById("result").value = result;
}


function multiplication() {
    value1 = document.getElementById("value1").value;
    value2 = document.getElementById("value2").value;
    result = parseFloat(value1) * parseFloat(value2);
    document.getElementById("result").value = result;
}

function division() {
    value1 = document.getElementById("value1").value;
    value2 = document.getElementById("value2").value;
    result = parseFloat(value1) / parseFloat(value2);
    document.getElementById("result").value = result;
}




// Graph
var ctx = document.getElementById("myChart");

var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ],
    datasets: [
      {
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: "transparent",
        borderColor: "#007bff",
        borderWidth: 4,
        pointBackgroundColor: "#007bff",
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: false,
          },
        },
      ],
    },
    legend: {
      display: false,
    },
  },
});