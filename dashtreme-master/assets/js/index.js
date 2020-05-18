$(function() {
    "use strict";

    // chart 1

    var ctx = document.getElementById('chart1').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: 'BTC',
                data: [0.0000, 0.0002, 0.0004, 0.0008, 0.0008, 0, 0, 0, 0, 0],
                backgroundColor: '#fff',
                borderColor: "transparent",
                pointRadius: "0",
                borderWidth: 3
            }, {
                label: 'USD',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                backgroundColor: "rgba(255, 255, 255, 0.25)",
                borderColor: "transparent",
                pointRadius: "0",
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false,
                labels: {
                    fontColor: '#ddd',
                    boxWidth: 40
                }
            },
            tooltips: {
                displayColors: false
            },
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                        display: true,
                        color: "rgba(221, 221, 221, 0.08)"
                    },
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                        display: true,
                        color: "rgba(221, 221, 221, 0.08)"
                    },
                }]
            }

        }
    });


    // chart 2

    var ctx = document.getElementById("chart2").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Direct", "Affiliate", "E-mail", "Other"],
            datasets: [{
                backgroundColor: [
                    "#ffffff",
                    "rgba(255, 255, 255, 0.70)",
                    "rgba(255, 255, 255, 0.50)",
                    "rgba(255, 255, 255, 0.20)"
                ],
                data: [1, 1, 1, 1],
                borderWidth: [0, 0, 0, 0]
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                position: "bottom",
                display: false,
                labels: {
                    fontColor: '#ddd',
                    boxWidth: 15
                }
            },
            tooltips: {
                displayColors: false
            }
        }
    });




});