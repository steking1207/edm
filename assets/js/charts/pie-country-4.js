google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawCharts);
function drawCharts() {
    // BEGIN PIE CHART
    // pie chart data
    var pieData = google.visualization.arrayToDataTable([
        ['Country', 'Count'],
        ['中國', 7242],
        ['法國', 4563],
        ['韓國', 1345],
        ['義大利',  946],
        ['美國', 2150],
    ]);
    // pie chart options
    var pieOptions = {
        backgroundColor: 'transparent',
        pieHole: 0.5,
        colors: [
                 "e33b4a",
                 "ef664e",
                 "ef9545",
                 "efc62f",
                 "1cb39c",
                 "26ace3",
                 "297c9e",
                 "5274b6",
                 "a4678b",
                 "b65284"
                ],
//        pieSliceText: 'label',
        pieSliceTextStyle: {
            fontSize: 13,
        },
        tooltip: {
            isHtml: true,
            text: 'percentage',
            textStyle: {
                fontSize: 16,
            }
        },
        fontName: 'Noto Sans TC',
        chartArea: {
            width: '100%',
            height: '100%',
            top: "0",
            right: "150",
            bottom: "50",
            left: "0"
        },
        legend: {
            position: 'left',
            textStyle: {
                fontSize: 16,
            }
        },
        animation: {
            duration: 1200,
            easing: 'out',
			startup: true
        }
    };
    // draw pie chart
    var pieChart = new google.visualization.PieChart(document.getElementById('pie-country-4'));
    pieChart.draw(pieData, pieOptions);
}
