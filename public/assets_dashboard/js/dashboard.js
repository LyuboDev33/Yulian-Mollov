
window.addEventListener("load", (event) => {
  campaignStatus();
  showCancelModal ();
  faqAccordion ();
});
  

function campaignStatus () { 
    let spansText = document.querySelectorAll('.status');
    
    spansText.forEach(text => {
        if(text.innerText === "waiting") { 
          text.innerText = "В изчакване";
          text.classList.add('waiting')
        }

        if(text.innerText === "approved") { 
          text.innerText = "Одобрено";
          text.classList.add('approved')
        }

        if(text.innerText === "canceled") { 
          text.innerText = "Отхвърлено";
          text.classList.add('canceled')
        }

        if (text.innerText === "Изчаква одоборение") { 
          text.classList.add('waiting');
      }
      
      if (text.innerText === "Активна") { 
          text.classList.add('approved');
      }
      
      if (text.innerText === "Спряна") { 
          text.classList.add('canceled');
      }
    })
}



function showCancelModal () { 
    
    let background = document.querySelector('.background_msg');
    let button = document.querySelector('.cancel_sub');
    let close_modal = document.querySelector('.close_modal');

    if(background) { 
      
    button.addEventListener('click', function () { 
      background.style.display = "flex"; 
  })

    close_modal.addEventListener('click', function () { 
        background.style.display = "none"; 
    })
    
    }

}

function faqAccordion () { 
  const faqItems = document.querySelectorAll('.faq-item');

  if (faqItems) { 
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      const answer = item.querySelector('.faq-answer');
      const arrow = item.querySelector('.arrow');
    
      question.addEventListener('click', () => {
        const isOpen = answer.classList.contains('open');
    
        // Close all open answers
        document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));
        document.querySelectorAll('.arrow').forEach(a => a.classList.remove('open'));
    
        // Toggle current item
        if (!isOpen) {
          answer.classList.add('open');
          arrow.classList.add('open');
        }
      });
    });
  }

}


// $(function () {


  // =====================================
  // Profit
  // =====================================
  // var chart = {
  //   series: [
  //     { name: "Earnings this month:", data: [355, 390, 300, 350, 390, 180, 355, 390] },
  //     { name: "Expense this month:", data: [280, 250, 325, 215, 250, 310, 280, 250] },
  //   ],

  //   chart: {
  //     type: "bar",
  //     height: 345,
  //     offsetX: -15,
  //     toolbar: { show: true },
  //     foreColor: "#adb0bb",
  //     fontFamily: 'inherit',
  //     sparkline: { enabled: false },
  //   },


  //   colors: ["#5D87FF", "#49BEFF"],


  //   plotOptions: {
  //     bar: {
  //       horizontal: false,
  //       columnWidth: "35%",
  //       borderRadius: [6],
  //       borderRadiusApplication: 'end',
  //       borderRadiusWhenStacked: 'all'
  //     },
  //   },
  //   markers: { size: 0 },

  //   dataLabels: {
  //     enabled: false,
  //   },


  //   legend: {
  //     show: false,
  //   },


  //   grid: {
  //     borderColor: "rgba(0,0,0,0.1)",
  //     strokeDashArray: 3,
  //     xaxis: {
  //       lines: {
  //         show: false,
  //       },
  //     },
  //   },

  //   xaxis: {
  //     type: "category",
  //     categories: ["16/08", "17/08", "18/08", "19/08", "20/08", "21/08", "22/08", "23/08"],
  //     labels: {
  //       style: { cssClass: "grey--text lighten-2--text fill-color" },
  //     },
  //   },


  //   yaxis: {
  //     show: true,
  //     min: 0,
  //     max: 400,
  //     tickAmount: 4,
  //     labels: {
  //       style: {
  //         cssClass: "grey--text lighten-2--text fill-color",
  //       },
  //     },
  //   },
  //   stroke: {
  //     show: true,
  //     width: 3,
  //     lineCap: "butt",
  //     colors: ["transparent"],
  //   },


  //   tooltip: { theme: "light" },

  //   responsive: [
  //     {
  //       breakpoint: 600,
  //       options: {
  //         plotOptions: {
  //           bar: {
  //             borderRadius: 3,
  //           }
  //         },
  //       }
  //     }
  //   ]


  // };

  // var chart = new ApexCharts(document.querySelector("#chart"), chart);
  // chart.render();


  // =====================================
  // Breakup
  // =====================================
  // var breakup = {
  //   color: "#adb5bd",
  //   series: [38, 40, 25],
  //   labels: ["2022", "2021", "2020"],
  //   chart: {
  //     width: 180,
  //     type: "donut",
  //     fontFamily: "Plus Jakarta Sans', sans-serif",
  //     foreColor: "#adb0bb",
  //   },
  //   plotOptions: {
  //     pie: {
  //       startAngle: 0,
  //       endAngle: 360,
  //       donut: {
  //         size: '75%',
  //       },
  //     },
  //   },
  //   stroke: {
  //     show: false,
  //   },

  //   dataLabels: {
  //     enabled: false,
  //   },

  //   legend: {
  //     show: false,
  //   },
  //   colors: ["#5D87FF", "#ecf2ff", "#F9F9FD"],

  //   responsive: [
  //     {
  //       breakpoint: 991,
  //       options: {
  //         chart: {
  //           width: 150,
  //         },
  //       },
  //     },
  //   ],
  //   tooltip: {
  //     theme: "dark",
  //     fillSeriesColor: false,
  //   },
  // };

  // var chart = new ApexCharts(document.querySelector("#breakup"), breakup);
  // chart.render();



  // =====================================
  // Earning
  // =====================================
  // var earning = {
  //   chart: {
  //     id: "sparkline3",
  //     type: "area",
  //     height: 60,
  //     sparkline: {
  //       enabled: true,
  //     },
  //     group: "sparklines",
  //     fontFamily: "Plus Jakarta Sans', sans-serif",
  //     foreColor: "#adb0bb",
  //   },
  //   series: [
  //     {
  //       name: "Earnings",
  //       color: "#49BEFF",
  //       data: [25, 66, 20, 40, 12, 58, 20],
  //     },
  //   ],
  //   stroke: {
  //     curve: "smooth",
  //     width: 2,
  //   },
  //   fill: {
  //     colors: ["#f3feff"],
  //     type: "solid",
  //     opacity: 0.05,
  //   },

  //   markers: {
  //     size: 0,
  //   },
  //   tooltip: {
  //     theme: "dark",
  //     fixed: {
  //       enabled: true,
  //       position: "right",
  //     },
  //     x: {
  //       show: false,
  //     },
  //   },
  // };
  // new ApexCharts(document.querySelector("#earning"), earning).render();
// })