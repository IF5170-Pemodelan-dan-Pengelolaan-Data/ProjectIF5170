var xValues = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var yValues = [60, 90, 100, 98, 85, 75, 90, 99, 93, 105, 110, 112];
var barColors = ["#4e73df", "#4e73df", "#4e73df", "#4e73df", "#4e73df", "#4e73df", "#4e73df", "#4e73df", "#4e73df", "#4e73df", "#4e73df", "#4e73df"];

new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: { display: false },
        title: {
            display: true,

        }
    }
});