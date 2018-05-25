<script>
  var cat = <?php echo $cate; ?>;
  var data_category = <?php echo $que; ?>;
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
              'rgba(0,255,0, 0.5)',
              'rgba(0,255,255, 0.5)',
              'rgba(128,128,0, 0.5)',
              'rgba(128,128,128, 0.5)',
              'rgba(255,0,255, 0.5)',
              'rgba(255,255,0, 0.5)'
          ],
      }],

  };

  window.onload = function() {
    var cta = document.getElementById("reportCalls").getContext("2d");
    var questionBar = new Chart(cta, {
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
                     }
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
            }
        }
    });
  };

</script>
