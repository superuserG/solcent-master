<script>
  var month = [
    'January','February','Maret','April',
    'Mei', 'Juni', 'July', 'Agustus',
    'September','Oktober','November','Desember'
    ];
  var handled = <?php echo $handled;?>;
  var abandoned = <?php echo $abandoned;?>;

  var calls = {
      labels: month,
      datasets:
      [{
          label: 'Handled',
          data: handled,
          backgroundColor:[
            'rgba(0,0,0, 0)'
          ],
          borderColor:
          [
            'rgba(127,255,0, 1)'
          ],
          pointHoverBorderColor:[
            'rgba(255,0,0, 1)'
          ]
        },
        {
          label: 'Abandoned',
          data: abandoned,
          backgroundColor:[
            'rgba(0,0,0, 0)'
          ],
          borderColor:
          [
            'rgba(255,0,0, 1)'
          ],

        },
      ],

  };

  window.onload = function() {
    var ctz = document.getElementById("ciscoCalls").getContext("2d");
    var x = new Chart(ctz, {
        type: 'line',
        data: calls,
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
                text: 'Call Cisco'
            },
        }
    });


  }
</script>
