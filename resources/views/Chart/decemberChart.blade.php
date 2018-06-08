<script>
//call
var label_A = ['Present','Handle','abandon'];
var data_prensent = <?php echo $present;?>;
var data_handle = <?php echo $handle;?>;
var data_abandon = <?php echo $abandon;?>;

var a = {
    labels: label_A,
    datasets:
    [{
        label: 'Call',
        data: [data_prensent,
              data_handle,
              data_abandon],
        backgroundColor:
        [
            'rgba(0,128,0, 0.5)'
        ],
    }],
};

//compare
var label_B = ['Present'];
var data_call_present = <?php echo $callDes;?>;
var data_ticket = <?php echo $ticket_des;?>;
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

//top quest
var label_C = <?php echo $cat;?>;
var data_top = <?php echo $question;?>;
var c = {
  labels: label_C,
  datasets:
  [{
      label: 'Top Category',
      data: data_top,
      backgroundColor:
      [
          'rgba(0,128,0, 0.5)'
      ],
  }],
};

//top topic

var label_D = ['Present'];
var data_topic = [200];
var d = {
  labels: label_D,
  datasets:
  [{
      label: 'Top Topic',
      data: data_top,
      backgroundColor:
      [
          'rgba(0,128,0, 0.5)'
      ],
  }],
};

window.onload = function(){
  var dca = document.getElementById("callDec").getContext("2d");
  var callA = new Chart(dca, {
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

  var dcb = document.getElementById("compareCallDec").getContext("2d");
  var callA = new Chart(dcb, {
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
              text: 'Call'
          }
      }
  });

  var dcc = document.getElementById("topQuestionDec").getContext("2d");
  var callA = new Chart(dcc, {
      type: 'bar',
      data: c,
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
              text: 'Category'
          }
      }
  });

  var dcd = document.getElementById("topicDec").getContext("2d");
  var callA = new Chart(dcd, {
      type: 'bar',
      data: d,
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
              text: 'Topic'
          }
      }
  });
}
</script>
