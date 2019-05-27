// =====================紛絲比例圖==================================
var ctx = document.getElementById("fansDoughnut").getContext("2d");
var fansDoughnut = new Chart(ctx, {
  type: "doughnut",
  data: {
    labels: ["蔡英文", "韓國瑜"],
    datasets: [
      {
        data: [60, 40], // 資料比例
        backgroundColor: ["#fe816d", "#89878a"],
        borderColor: "#787775",
        borderWidth: 1,
        hoverBackgroundColor: ["#fe816d", "#89878a"]
      }
    ]
  },
  options: {
    cutoutPercentage: 80
  }
});

// var myConfig = {
//   type: "ring",
//   plot: {
//     slice: "70%",
//     borderWidth: 0,
//     backgroundColor: "#FBFCFE",
//     valueBox: [
//       {
//         type: "all",
//         text: "%t",
//         placement: "out"
//       },
//       {
//         type: "all",
//         text: "%npv%",
//         placement: "out"
//       }
//     ]
//   },
//   plotarea: {
//     backgroundColor: "transparent",
//     //  borderWidth: 0,
//     // borderRadius: "0 0 0 10",
//     margin: "0 0 0 0"
//   },
//   legend: {
//     toggleAction: "remove",
//     // backgroundColor: "#FBFCFE",
//     borderWidth: 0,
//     adjustLayout: true,
//     // align: "center",
//     // verticalAlign: "bottom",
//     item: {
//       fontColor: "#777",
//       cursor: "pointer",
//       offsetX: -6,
//       fontSize: 12
//     },
//     mediaRules: [
//       {
//         // maxWidth: 500,
//         visible: false
//       }
//     ]
//   },
//   scaleR: {
//     refAngle: 270
//   },
//   series: [
//     {
//       text: "Docs",
//       values: [106541],
//       lineColor: "#00BAF2",
//       backgroundColor: "#00BAF2",
//       lineWidth: 1,
//       marker: {
//         backgroundColor: "#00BAF2"
//       }
//     },
//     {
//       text: "Gallery",
//       values: [56711],
//       lineColor: "#E80C60",
//       backgroundColor: "#E80C60",
//       lineWidth: 1,
//       marker: {
//         backgroundColor: "#E80C60"
//       }
//     }
//   ]
// };

// zingchart.render({
//   id: "myChart",
//   data: {
//     // gui: {
//     //   contextMenu: {
//     //     button: {
//     //       visible: false,
//     //       lineColor: "#2D66A4",
//     //       backgroundColor: "#2D66A4"
//     //     },
//     //     gear: {
//     //       alpha: 1,
//     //       backgroundColor: "#2D66A4"
//     //     },
//     //     // position: "right",
//     //     backgroundColor: "#306EAA" /*sets background for entire contextMenu*/,
//     //     docked: true,
//     //     item: {
//     //       backgroundColor: "#306EAA",
//     //       borderColor: "#306EAA",
//     //       borderWidth: 0,
//     //       fontFamily: "Lato",
//     //       color: "#fff"
//     //     }
//     //   }
//     // },
//     graphset: [myConfig]
//   },
//   height: "300px",
//   width: "99%"
// });
