import Chart from 'chart.js/auto';
import { getRelativePosition } from 'chart.js/helpers';

const ctx = document.getElementById('myChart').getContext('2d');
ctx.canvas.height = "100%";

function vaildData(){
    if(typeof chart_data === 'undefined'){
        return new Array();
    }
}


function getData(){
    vaildData();
    return chart_data.data;
}

function getLabels(){
    vaildData();
    return chart_data.labels; 
}

function getBackgroundColor(){
    vaildData();
    return chart_data.backgroundColor;
}

function getBorderColor(){
    vaildData();
    return chart_data.borderColor;
}

function getLabel(){
    vaildData();
    return chart_data.label; 
}

const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: getLabels(),
        datasets: [{
            label: getLabel(),
            data: getData(),
            backgroundColor: getBackgroundColor(),
            borderColor: getBorderColor(),
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        animation: {
            duration: 1500,
        },
    }
});