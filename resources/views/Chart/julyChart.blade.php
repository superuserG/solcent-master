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
          'rgba(255, 99, 132, 0.9)',
          'rgba(89, 158, 207, 0.9)',
          'rgba(255, 206, 86, 0.9)',
        ],
    }],
};

//compare
var label_B = ['Present'];
var data_call_present = <?php echo $callJuly;?>;
var data_ticket = <?php echo $ticket_july;?>;
var b = {
    labels: label_B,
    datasets:
    [{
        label: 'Call',
        data: data_call_present,
        backgroundColor:
        [
          'rgba(227,123,64, 0.5)'
        ],

    },
    {
        label: 'Ticket',
        data: data_ticket,
        backgroundColor:
        [
            'rgba(50,77,92, 0.5)'
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
        'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)',
        'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)',
        'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)'
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
        'rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)',
      ],
  }],
};

window.onload = function(){
  var jla = document.getElementById("callJuly").getContext("2d");
  var callA = new Chart(jla, {
      type: 'doughnut',
      data: a,
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

  var jlb = document.getElementById("compareCallJuly").getContext("2d");
  var callA = new Chart(jlb, {
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

  var jlc = document.getElementById("topQuestionJul").getContext("2d");
  var callA = new Chart(jlc, {
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

  var jld = document.getElementById("topicJul").getContext("2d");
  var callA = new Chart(jld, {
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
