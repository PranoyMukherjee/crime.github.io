var cluster = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(cluster, {
    type: 'bar',
    data: {
        labels: ['Cluster1', 'Cluster2', 'Cluster3'],
        datasets: [{
            label: 'Cluster No.',
            data: [33,14,12],
            backgroundColor: [
                'rgba(199,22,31,1)',
                'rgba(39,36,251,1)',
                'rgba(40,167,45,1)'
            ],
            borderColor: [
                'rgba(199,22,31,0.5)',
                'rgba(39,36,251,0.5)',
                'rgba(40,167,45,0.5)'
            ],
            borderWidth: 4
        }]
    },
    options: {
        responsive: false,
        layout: {
            padding: {
                left: 100,
                right: 0,
                top: 50,
                bottom: 0
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Cluster Frequency',
                position: "bottom"
            },
            legend: {
                display: true,
                labels: {
                    color: 'blue'
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var crimen = document.getElementById('crime').getContext('2d');
var crime = new Chart(crimen, {
    type: 'bar',
    data: {
        labels: ['Arson', 'Causing death by negligence', 'counterfeiting', 
        'Criminal breach of trust', 'Criminal Tresspass/Burglary', 
        'Disclousure of identity of victims', 'Forgery', 'Kidnapping and Abduction', 
        'Riots', 'Unlawful Assembly', 'Causing of identity of victims', 'Cheating', 
        'Extortion', 'Offences against state', 'Other ipc crimes'],
        datasets: [{
            label: 'Crime No.',
            data: [5, 1, 4, 3, 6, 3, 5, 4, 3, 6, 2, 4, 1, 3, 9],
            backgroundColor: [
                'rgba(199,22,31,1)',
                'rgba(39,36,251,1)',
                'rgba(40,167,45,1)',
                'rgba(156,39,176,1)',
                'rgba(255,235,59,1)',
                'rgba(177,79,43,1)',
                'rgba(33,150,243,1)',
                'rgba(71,79,82,1)',
                'rgba(15,42,1,1)',
                'rgba(139,135,74,1)',
                'rgba(233,30,99,1)',
                'rgba(117,129,193,1)'
            ],
            borderColor: [
                'rgba(199,22,31,0.5)',
                'rgba(39,36,251,0.5)',
                'rgba(40,167,45,0.5)',
                'rgba(156,39,176,0.5)',
                'rgba(255,235,59,0.5)',
                'rgba(177,79,43,0.5)',
                'rgba(33,150,243,0.5)',
                'rgba(71,79,82,0.5)',
                'rgba(15,42,1,0.5)',
                'rgba(139,135,74,0.5)',
                'rgba(233,30,99,0.5)',
                'rgba(117,129,193,0.5)'
            ],
            borderWidth: 4
        }]
    },
    options: {
        responsive: false,
        layout: {
            padding: {
                left: 100,
                right: 0,
                top: 50,
                bottom: 0
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Crime Frequency',
                position: "bottom"
            },
            legend: {
                display: true,
                labels: {
                    color: 'blue'
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var date = document.getElementById('DateM').getContext('2d');
var DateM = new Chart(date, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 
        'May', 'June', 'July', 'August', 'September', 
        'October', 'November', 'December'],
        datasets: [{
            label: 'Month no.',
            data: [2,5,5,7,3,4,3,5,5,6,8,6],
            backgroundColor: [
                'rgba(199,22,31,1)',
                'rgba(39,36,251,1)',
                'rgba(40,167,45,1)',
                'rgba(156,39,176,1)',
                'rgba(255,235,59,1)',
                'rgba(177,79,43,1)',
                'rgba(33,150,243,1)',
                'rgba(71,79,82,1)',
                'rgba(15,42,1,1)',
                'rgba(139,135,74,1)',
                'rgba(233,30,99,1)',
                'rgba(117,129,193,1)'
            ],
            borderColor: [
                'rgba(199,22,31,0.5)',
                'rgba(39,36,251,0.5)',
                'rgba(40,167,45,0.5)',
                'rgba(156,39,176,0.5)',
                'rgba(255,235,59,0.5)',
                'rgba(177,79,43,0.5)',
                'rgba(33,150,243,0.5)',
                'rgba(71,79,82,0.5)',
                'rgba(15,42,1,0.5)',
                'rgba(139,135,74,0.5)',
                'rgba(233,30,99,0.5)',
                'rgba(117,129,193,0.5)'
            ],
            borderWidth: 4
        }]
    },
    options: {
        responsive: false,
        layout: {
            padding: {
                left: 100,
                right: 0,
                top: 50,
                bottom: 0
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Month Frequency',
                position: "bottom"
            },
            legend: {
                display: true,
                labels: {
                    color: 'blue'
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var timing = document.getElementById('Timing').getContext('2d');
var Timing = new Chart(timing, {
    type: 'bar',
    data: {
        labels: ['6AM-6PM', '6PM-6AM'],
        datasets: [{
            label: 'time',
            data: [26,33],
            backgroundColor: [
                'rgba(233,30,99,1)',
                'rgba(117,129,193,1)'
            ],
            borderColor: [
                'rgba(233,30,99,0.5)',
                'rgba(117,129,193,0.5)'
            ],
            borderWidth: 4
        }]
    },
    options: {
        responsive: false,
        layout: {
            padding: {
                left: 100,
                right: 0,
                top: 50,
                bottom: 0
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Time Frequency',
                position: "bottom"
            },
            legend: {
                display: true,
                labels: {
                    color: 'blue'
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var place = document.getElementById('Place').getContext('2d');
var Place = new Chart(place, {
    type: 'bar',
    data: {
        labels: ['North Kolkata', 'Central Kolkata', 'South Kolkata'],
        datasets: [{
            label: 'places',
            data: [20,17,22],
            backgroundColor: [
                'rgba(139,135,74,1)',
                'rgba(233,30,99,1)',
                'rgba(117,129,193,1)'
            ],
            borderColor: [
                'rgba(139,135,74,0.5)',
                'rgba(233,30,99,0.5)',
                'rgba(117,129,193,0.5)'
            ],
            borderWidth: 4
        }]
    },
    options: {
        responsive: false,
        layout: {
            padding: {
                left: 100,
                right: 0,
                top: 50,
                bottom: 0
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Place Frequency',
                position: "bottom"
            },
            legend: {
                display: true,
                labels: {
                    color: 'blue'
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});