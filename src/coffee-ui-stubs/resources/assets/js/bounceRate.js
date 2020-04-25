// Create chart
var ctx = document.getElementsByClassName("bounceRate");
var chart = new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: ["Success"],
        datasets: [{
            label: "Gauge",
            data: [100],
            backgroundColor: [
                "rgb(86, 217, 254)"
            ],
        }]
    },
    options: {
        circumference: Math.PI,
        rotation: Math.PI,
        responsive: true,
        legend: {
            display: false,
            fontColor: "rgb(67, 66, 93)"
        },
        tooltips: {
            enabled: true,

        }
    }
});