//bar
var ctxB = document.getElementById("barChart").getContext('2d');
var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
            <div class="row">
    <div class="col-xl-2"><label class="col-form-label">Database:</label></div>
    <div class="col-xl-3">
        <div class="dropdown btn-modify"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown</button>
            <div role="menu" class="dropdown-menu"><a role="presentation" href="#" class="dropdown-item">First Item</a><a role="presentation" href="#" class="dropdown-item">Second Item</a><a role="presentation" href="#" class="dropdown-item">Third Item</a></div>
        </div>
    </div>
    <div class="col-xl-2"><label class="col-form-label">Table:</label></div>
    <div class="col">
        <div class="dropdown btn-modify"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown</button>
            <div role="menu" class="dropdown-menu"><a role="presentation" href="#" class="dropdown-item">First Item</a><a role="presentation" href="#" class="dropdown-item">Second Item</a><a role="presentation" href="#" class="dropdown-item">Third Item</a></div>
        </div>
    </div>
</div><div class="row">
    <div class="col-xl-2"><label class="col-form-label">Database:</label></div>
    <div class="col-xl-3">
        <div class="dropdown btn-modify"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown</button>
            <div role="menu" class="dropdown-menu"><a role="presentation" href="#" class="dropdown-item">First Item</a><a role="presentation" href="#" class="dropdown-item">Second Item</a><a role="presentation" href="#" class="dropdown-item">Third Item</a></div>
        </div>
    </div>
    <div class="col-xl-2"><label class="col-form-label">Table:</label></div>
    <div class="col">
        <div class="dropdown btn-modify"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown</button>
            <div role="menu" class="dropdown-menu"><a role="presentation" href="#" class="dropdown-item">First Item</a><a role="presentation" href="#" class="dropdown-item">Second Item</a><a role="presentation" href="#" class="dropdown-item">Third Item</a></div>
        </div>
    </div>
</div>