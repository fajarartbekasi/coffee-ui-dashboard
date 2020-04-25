// Create chart
var ctx = document.getElementsByClassName("usersDial");
var chart = new Chart(ctx, {
    type:"doughnut",
    data: {
        labels : ["Red","Blue"],
        datasets: [{
            label: "Gauge",
            data : [20, 100],
            backgroundColor: [
                "rgb(255, 99, 132)",
                "rgb(240, 242, 248)"
            ],
        }]
    },
    options: {
        circumference: Math.PI,
        rotation : Math.PI,
        cutoutPercentage : 90, // precent
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