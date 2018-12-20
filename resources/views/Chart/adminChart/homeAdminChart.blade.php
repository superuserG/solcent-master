<script>
  var month = [
    'January','February','Maret','April',
    'Mei', 'Juni', 'July', 'Agustus',
    'September','Oktober','November','Desember'
    ];
  var x = <?php echo $handled; ?>;
  // [
  //   15269,12512,15674,14767,15816,9178,15791,14423,12812,17373,15559
  // ];
  var abandoned = [1526,1251,1564,1767,1586,9178,1571,1443,1212,1373,1559];

  var calls = {
      labels: month,
      datasets:
      [{
          label: 'Abandoned',
          data: abandoned,
          backgroundColor:[
            'rgba(0,0,0, 0)'
          ],
          borderColor:
          [
            'rgba(127,255,0, 1)'
          ],

        },
        {
            label: 'Handled',
            data: x,
            backgroundColor:[
              'rgba(0,0,0, 0)'
            ],
            borderColor:
            [
              'rgba(255,0,0, 1)'
            ],
        }
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
