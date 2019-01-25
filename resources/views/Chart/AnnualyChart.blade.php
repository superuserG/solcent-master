<script>
  var months = ['January','February','Maret','April',
              'Mei', 'Juni', 'July', 'Agustus',
              'September','Oktober','November','Desember'];
  var ticket_2018 = [14357,11842,15227,14552,
                  15123,8661,15058,13424,
                  11963,15065,14530,13006,
                ];
  var ticket_2017 = [10769,10841,13444,11358,
                  13094,9262,13101,13390,
                  11250,12754,12900,11372,
                ];
  var detailChart = {
    labels: months,
    datasets:
    [{
      label: 'Tickets 2018',
      data: ticket_2018,
      borderColor:
      [
        'rgba(0,128,0, 0.5)',
      ],
      backgroundColor:
      [
        'rgba(0,0,128, 0.0)',
      ]
    },{
      label: 'Tickets 2017',
      data: ticket_2017,
      borderColor:
      [
        'rgba(0,0,255, 0.5)',
      ],
      backgroundColor:
      [
        'rgba(0,0,128, 0.0)',
      ]
    }
  ]};

  var year = ['2017','2018'];
  var ticket_data = [143535,162808];
  var handled_data = [ 155011, 173426];
  var ticketChart = {
    labels: year,
    datasets:
    [{
      label: 'Ticket',
      data: ticket_data,
      backgroundColor:
      [
        'rgba(0,0,255, 0.5)',
        'rgba(0,0,255, 0.5)',

      ]
    },
    {
      label: 'Call Handled',
      data: handled_data,
      backgroundColor:
      [
        'rgba(0,128,0, 0.5)',
        'rgba(0,128,0, 0.5)'
      ]
    }]
  };

  var call_data = [123,456,789];
  var callChart = {
    labels: year,
    datasets:
    [{
      label: 'Handled',
      data: call_data,
      backgroundColor:
      [
        'rgba(0,0,128, 0.5)',
        'rgba(0,0,255, 0.5)',
        'rgba(0,128,0, 0.5)'
      ]
    },{
      label: 'Handled',
      data: call_data,
      backgroundColor:
      [
        'rgba(0,0,128, 0.5)',
        'rgba(0,0,255, 0.5)',
        'rgba(0,128,0, 0.5)'
      ]
    },
  ]
  };

  var year4 = ['2018','2019','2020'];
  var cab_data = [123,456,789];
  var cabangChart =
  {
    labels: year4,
    datasets:
    [{
      data: cab_data,
      backgroundColor:
      [
        'rgba(0,0,128, 0.5)',
        'rgba(0,0,255, 0.5)',
        'rgba(0,128,0, 0.5)'
      ]
    }]
  };

  window.onload = function ()
  {
    var aca = document.getElementById("detailAnnualy").getContext("2d");
    var ticketBar = new Chart(aca,{
      type: 'line',
      data: detailChart,
      options: {
        scales:{
          yAxes:[{
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
        elements:{
          rectangle:{
            borderSkipped:'bottom'
          }
        },
        responsive:true,
        title:{
          display: true,
          text: 'Detail Tickets'
        }
      }
    });

    var acc = document.getElementById("ticketAnnualy").getContext("2d");
    var questionBar = new Chart(acc, {
        type: 'bar',
        data: ticketChart,
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
                text: 'Tickets Annualy'
            }
        }
    });

    var acb = document.getElementById("call").getContext("2d");
    var kanwilBar = new Chart(acb, {
      type: 'bar',
      data: callChart,
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
          text: 'Kanwil tickets Report'
        }
      }
    });

    var acd = document.getElementById("annualCabang").getContext("2d");
    var cabangBar = new Chart(acd, {
        type: 'bar',
        data: cabangChart,
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
                text: 'Cabang tickets Report'
            }
        }
    });
  }
</script>
