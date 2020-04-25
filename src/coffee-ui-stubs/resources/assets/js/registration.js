var ctx = document.getElementById('regist');
var regist = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Target', 'Feb'],
        datasets: [{
            data: [70, 50],
            backgroundColor: [
                'rgb(237,236,254)',
                'rgba(142, 234, 188)',

            ],
        }]
    },

    options: {
        responsive: true,
        legend: {
            position: 'bottom',
            display: false
        }

    }
});