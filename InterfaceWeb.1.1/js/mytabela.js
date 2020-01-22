var x = document.getElementsByClassName("dados");
var myDados=[]
for(let i=0; i <x.length;i++){
    myDados.push(x[i].innerText);
}
var x = document.getElementsByClassName("data");
var myDatas=[]
for(let i=0; i <x.length;i++){
    myDatas.push((new Date(x[i].innerText).getUTCDate())+"/"+(new Date(x[i].innerText).getMonth()+1));//x[i].innerText);
}
for(let i=0; i <myDatas.length;i++){
    
}


var ctx = document.getElementById('myGraficoDados').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: myDatas,//["Jan", "Fev", "Mar", "Abr", "Mai", "Jul", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
        datasets: [{
            label: 'DADOS',
            backgroundColor: "rgba(255,255,255,0.1)",
            borderColor: "rgba(100,20,0,.8)",
            pointBackgroundColor: "rgba(250,0,0,1)",
            // pointBorderColor: "rgba(255,255,255,0.8)",
            data: myDados//[140, 50,42, 260]
        }]
    },

    // Configuration options go here
    options: {}
});