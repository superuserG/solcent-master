<script>
  // Home Chart
// Pie Ticket
  var data_ivanti = <?php echo $ivanti; ?>;
  var data_cisco = <?php echo $cisco; ?>;
  var pieChartData = {
      datasets:
      [{
          data: [data_ivanti, data_cisco],
          backgroundColor:
          [
              'rgba(255, 99, 132, 1.0)',
              'rgba(89, 158, 207, 1.0)',

          ],
          borderColor:
          [
            'rgba(255, 99, 132, 1.0)',
            'rgba(54, 162, 235, 1.0)',

          ]
      }],

      labels:
        [
            'Ticket','Call'
        ]


  };

// Bar Question
  var cat = <?php echo $cat; ?>;
  var data_category = <?php echo $question; ?>;
  var questionChartData = {
      labels: cat,
      datasets:
      [{
          label: 'Top Category 1',
          data: data_category,
          backgroundColor:
          [
            'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
            'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
          ],
      }],

  };


// Kanwil
  var kanwil =  <?php echo $labelKanwil; ?>;
  var data_kanwil = <?php echo $kanwil; ?>;
  var kanwilChartData = {
      labels: kanwil,
      datasets:
      [{
          label: 'Top Calling',
          data: data_kanwil,
          backgroundColor:
          [
            'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
            'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
          ]
      }],
  };


// Cabang
  var cabang = <?php echo $labelSite; ?>;
  var data_cabang = <?php echo $cabang; ?>;
  var cabangChartData = {
      labels: cabang,
      datasets:
      [{
          label: 'Top Branch Calling',
          data: data_cabang,
          backgroundColor:
          [
            'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
            'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
          ]
      }],
  };


  window.onload = function() {
      // Report Calls Home
      var ctx = document.getElementById("reportCalls").getContext("2d");
      var callsBar = new Chart(ctx, {

          type: 'pie',
          data: pieChartData,
          options: {
              elements: {
                  rectangle: {
                      borderColor: 'rgb(0, 255, 0)',
                      borderSkipped: 'bottom'
                  }
              },
              responsive: true,
              title: {
                  display: true,
                  text: 'Calls Report'
              },
              legend:{
                display: false
              }

          }
      });

      // Report Question Home
      var cty = document.getElementById("reportQuestion").getContext("2d");
      var questionBar = new Chart(cty, {
          type: 'bar',
          data: questionChartData,
          options: {
            scales: {
               yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
               }],
               xAxes: [{
                       ticks: {
                        fontSize: 10
                       },

                      }]
              },
              elements: {
                  rectangle: {
                      borderSkipped: 'bottom'
                  }
              },
              responsive: true,
              title: {
                  display: true,
                  text: 'Question Report'
              },
             animation: {
                  duration: 3,
                  onComplete: function () {
                      var chartInstance = this.chart,
                          ctx = chartInstance.ctx;
                      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                      ctx.textAlign = 'center';
                      ctx.textBaseline = 'bottom';

                      this.data.datasets.forEach(function (dataset, i) {
                          var meta = chartInstance.controller.getDatasetMeta(i);
                          meta.data.forEach(function (bar, index) {
                              var data = dataset.data[index];
                              ctx.fillText(data, bar._model.x, bar._model.y - 5);
                          });
                      });
                  }
              }
          }
      });

      // Report Kanwil Home
      var ctz = document.getElementById("reportKanwil").getContext("2d");
      var wilayahBar = new Chart(ctz, {
          type: 'bar',
          data: kanwilChartData,
          options: {
            scales: {
             yAxes: [{
                ticks: {
                      beginAtZero: true
                }
             }],
             xAxes: [{
                     ticks: {
                      fontSize: 10
                     }
                    }]
            },
              elements: {
                  rectangle: {
                      borderColor: 'rgb(0, 255, 0)',
                      borderSkipped: 'bottom'
                  }
              },
              responsive: true,
              title: {
                  display: true,
                  text: 'Kanwil Report'
              },
              animation: {
                  duration: 3,
                  onComplete: function () {
                      var chartInstance = this.chart,
                          ctx = chartInstance.ctx;
                      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                      ctx.textAlign = 'center';
                      ctx.textBaseline = 'bottom';

                      this.data.datasets.forEach(function (dataset, i) {
                          var meta = chartInstance.controller.getDatasetMeta(i);
                          meta.data.forEach(function (bar, index) {
                              var data = dataset.data[index];
                              ctx.fillText(data, bar._model.x, bar._model.y - 5);
                          });
                      });
                  }
              }
          }
      });

      // Report Cabang Home
      var ctw = document.getElementById("reportCabang").getContext("2d");
      var cabangBar = new Chart(ctw, {
          type: 'bar',
          data: cabangChartData,
          options: {
            scales: {
               yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
               }],
               xAxes: [{
                       ticks: {
                        fontSize: 10
                       }
                      }]
              },
              elements: {
                  rectangle: {
                      borderColor: 'rgb(0, 255, 0)',
                      borderSkipped: 'bottom'
                  }
              },
              responsive: true,
              title: {
                  display: true,
                  text: 'Cabang Report'
              },
              animation: {
                  duration: 3,
                  onComplete: function () {
                      var chartInstance = this.chart,
                          ctx = chartInstance.ctx;
                      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                      ctx.textAlign = 'center';
                      ctx.textBaseline = 'bottom';

                      this.data.datasets.forEach(function (dataset, i) {
                          var meta = chartInstance.controller.getDatasetMeta(i);
                          meta.data.forEach(function (bar, index) {
                              var data = dataset.data[index];
                              ctx.fillText(data, bar._model.x, bar._model.y - 5);
                          });
                      });
                  }
              }
          }
      });


  };
</script>
