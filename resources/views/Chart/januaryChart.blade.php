<script>
  var label_A = ['Present','Handle','abandon'];
  var data_call = [200,150,50];

  var a = {
      labels: label_A,
      datasets:
      [{
          label: 'Call',
          data: data_call,
          backgroundColor:
          [
              'rgba(0,128,0, 0.5)'
          ],
      }],

  };

  var label_B = ['Present'];
  var data_call_present = [200];
  var data_ticket = [500];

  var b = {
      labels: label_B,
      datasets:
      [{
          label: 'Call',
          data: data_call_present,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],

      },
      {
          label: 'Ticket',
          data: data_ticket,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],
      }
    ],

  };

  window.onload = function(){
    var ja = document.getElementById("callJanuary").getContext("2d");
    var callA = new Chart(ja, {
        type: 'bar',
        data: a,
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
                text: 'Call'
            }
        }
    });

    var jb = document.getElementById("compareCallJan").getContext("2d");
    var compareB = new Chart(jb, {
        type: 'bar',
        data: b,
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
                text: 'Calls and Tickets'
            }
        }
    });
  }

</script>
