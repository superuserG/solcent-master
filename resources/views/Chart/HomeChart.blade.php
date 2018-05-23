<script>
var data_presented = <?php echo $presented; ?>;
var data_completed = <?php echo $completed; ?>;


var pieChartData = {
      datasets:
      [{
          data: [data_presented, data_completed],
          backgroundColor:
          [
              'rgba(255, 99, 132, 1.0)',
              'rgba(54, 162, 235, 1.0)'
          ]
      }],

      labels:
        [
            'Presented',
            'Completed'
        ]


  };

  window.onload = function() {
      // Report Calls
      var ctx = document.getElementById("reportCalls2").getContext("2d");
      var callsBar = new Chart(ctx, {
          type: 'pie',
          data: pieChartData,
          options: {
              elements: {
                  rectangle: {
                      borderWidth: 2,
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

</script>
