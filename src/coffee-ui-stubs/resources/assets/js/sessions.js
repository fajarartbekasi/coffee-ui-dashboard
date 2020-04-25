var ctx = document.getElementsByClassName("sessions");
var chart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Aktif', 'Offlaine'],
        datasets: [{
            data: [50, 50],
            backgroundColor: [
                'rgba(255, 218, 131)',
                "rgb(240, 242, 248)"
            ],
        }]
    },
    options: {
        circumference: Math.PI,
        rotation: Math.PI,
        // cutoutPercentage: 90,
        responsive: true,
        legend: {

            display: false
        }
    },
    tooltips: {
        enabled: true,

    }
});