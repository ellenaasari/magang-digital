let optionsVisitorsProfile = {
    series: [70, 30],
    labels: ['Laki laki', 'Perempuan'],
    colors: ['#06AFDA', '#F24597'],
    chart: {
        type: 'donut',
        width: '100%',
        height: '350px'
    },
    legend: {
        position: 'bottom'
    },
    plotOptions: {
        pie: {
            donut: {
                size: '30%'
            }
        }
    }
}
var chartVisitorsProfile = new ApexCharts(document.getElementById('chart-visitors-profile'), optionsVisitorsProfile)
chartVisitorsProfile.render();
