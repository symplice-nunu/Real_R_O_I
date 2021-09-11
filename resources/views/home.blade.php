@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<style>
    
    main{
    margin-top: 85px;
    padding: 2rem 1.5rem;
    background-color: #f1f5f9;
    min-height: calc(100vh - 90px);
}
.cards{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap:2rem;
    margin-top: -6rem;

}
.card-single{
    display: flex;
    justify-content: space-between;
    background: #fff;
    padding: 2rem;
    border-radius: 2px;

}
.card-single div:last-child span{
    font-size: 3rem;
    color: var(--main-color);

}
.card-single div:first-child span{
    color: var(--text-grey);
}
.card-single:last-child{
    background: var(--main-color);
}
.card-single:last-child h1,
.card-single:last-child div:last-child span,
.card-single:last-child div:first-child span{
    color: #fff;
}
.recent-grid{
    margin-top: 3.5rem;
    display: grid;
    grid-gap: 2rem;
    grid-template-columns: 65% auto;
}
.card{
    background: #fff;
    border-radius: 5px;
}
.card-header,
.card-body {
    padding: 1rem;
}
.card-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #f0f0f0;
}
.card-header button {
    background: var(--main-color);
    border-radius: 10px;
    color: #fff;
    font-size: .8rem;
    padding: .5rem 1rem;
    border: 1px solid var(--main-color);

}
@media only screen and (max-width: 1200px){
 
    .main-content{
        margin-left: 70px;
    }
    .main-content header{
        width: calc(100% - 70px);
        left: 70px;
    }
    
}
@media only screen and (max-width: 960px) {
    .cards{
        grid-template-columns: repeat(3, 1fr);
    }
    .recent-grid{
        grid-template-columns: 60% 40%;
    }
}
@media only screen and (max-width: 768px) {
    .cards{
        grid-template-columns: repeat(2, 1fr);
    }
    .recent-grid{
        grid-template-columns: 100%;
    }
   
    .main-content{
        width: 100%;
        margin-left: 0rem;
    }
    #nav-toggle:checked + .sidebar {
        left: 0 !important;
        z-index: 100;
        width: 345px;
    }
    

}
@media only screen and (max-width: 560px){
    .cards{
        grid-template-columns: 100%;
    }
}
</style>
@section('content')
 
        <main>
            <div class="cards" style="color: teal;">
                <div class="card-single">
                    <div>
                        <h1>
                            {{$user}}
                        </h1>
                        <span>Users</span>
                    </div>
                    <div>
                        <span class="las la-users">

                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>
                        {{$house}}
                        </h1>
                        <span>Houses</span>
                    </div>
                    <div>
                        <span class="las la-clipboard">

                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>
                            {{$stripe}}
                        </h1>
                        <span>Payments</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag">

                        </span>
                    </div>
                </div>
                <div class="card-single" style="background-color: teal;">
                    <div>
                        <h1>
                            {{$contract}}
                        </h1>
                        <span>Agreement</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet">

                        </span>
                    </div>
                </div>

            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Real Return On Investment</h3>
                            <button>
                                <span class="las la-arrow-right">

                                </span>
                            </button>

                        </div>
                        <div class="card-body">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Users", "Houses", "Agreements", "payments"];
var yValues = [{{$user}}, {{$house}}, {{$contract}}, {{$stripe}}];
var barColors = ["red", "green","blue","orange"];

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
    legend: {display: false},
    title: {
      display: true,
      text: "Comparison"
    }
  }
});
</script>
                        </div>
                    </div>

                </div>
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3></h3>
                            <button>
                                <span class="las la-arrow-right">

                                </span>
                            </button>

                        </div>
                        <div class="card-body">
                           
                            
<canvas id="myChartp" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChartp", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Comparison"
    }
  }
});
</script>
                        </div>
        </main>
    </div>
</body>
@endsection
