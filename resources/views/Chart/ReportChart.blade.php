<script>
  // Home Chart
// Pie Ticket
  var label = ['2018'];
  var data_presented = <?php echo $presented; ?>;
  var data_completed = <?php echo $completed; ?>;
  var data_in_progress = <?php echo $in_progress; ?>;
  var pieChartData = {
      datasets:
      [{
          data: [data_presented, data_completed, data_in_progress],
          backgroundColor:
          [
              'rgba(255, 99, 132, 0.7)',
              'rgba(54, 162, 235, 0.7)',
              'rgba(255, 206, 86, 0.7)',
          ],
          borderColor:
          [
            'rgba(255, 99, 132, 1.0)',
            'rgba(54, 162, 235, 1.0)',
            'rgba(255, 206, 86, 1.0)',
          ]
      }],

      labels:
        [
            'Presented',
            'completed',
            'in_progress'
        ]


  };

// Bar Question
  var cat = <?php echo $cat; ?>;
  var data_category = <?php echo $question; ?>;
  var questionChartData = {
      labels: cat,
      datasets:
      [{
          data: data_category,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)',
              'rgba(0,128,128, 0.5)',
              'rgba(0,255,0, 0.5)	',
              'rgba(0,255,255, 0.5)',
              'rgba(128,128,0, 0.5)',
              'rgba(128,128,128, 0.5)',
              'rgba(255,0,255, 0.5)',
              'rgba(255,255,0, 0.5)'
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
          data: data_kanwil,
          backgroundColor:
          [
            'rgba(0,0,128, 0.5)',
            'rgba(0,0,255, 0.5)',
            'rgba(0,128,0, 0.5)',
            'rgba(0,128,128, 0.5)',
            'rgba(0,255,0, 0.5)	',
            'rgba(0,255,255, 0.5)',
            'rgba(128,128,0, 0.5)',
            'rgba(128,128,128, 0.5)',
            'rgba(255,0,255, 0.5)',
            'rgba(255,255,0, 0.5)'
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
          data: data_cabang,
          backgroundColor:
          [
            'rgba(0,0,128, 0.5)',
            'rgba(0,0,255, 0.5)',
            'rgba(0,128,0, 0.5)',
            'rgba(0,128,128, 0.5)',
            'rgba(0,255,0, 0.5)	',
            'rgba(0,255,255, 0.5)',
            'rgba(128,128,0, 0.5)',
            'rgba(128,128,128, 0.5)',
            'rgba(255,0,255, 0.5)',
            'rgba(255,255,0, 0.5)'
          ]
      }],
  };

  // Report Chart bulanan
// jumlah ticket dari bulan ke bulan
//

  window.onload = function() {
      // Report Calls Home
      var ctx = document.getElementById("reportCalls").getContext("2d");
      var callsBar = new Chart(ctx, {
          type: 'doughnut',
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
                    min: 0,
                    stepSize: 2
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
                  text: 'Question Report'
              }
          }
      });
      // Report Kanwil Home
      var ctz = document.getElementById("reportKanwil").getContext("2d");
      var wilayahBar = new Chart(ctz, {
          type: 'horizontalBar',
          data: kanwilChartData,
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
                  text: 'Kanwil Report'
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
                    min: 0,
                    stepSize: 2
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
              }
          }
      });

      
  };
</script>
