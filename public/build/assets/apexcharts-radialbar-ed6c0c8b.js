(function(){var e={series:[70],chart:{height:300,type:"radialBar"},colors:["#845adf"],plotOptions:{radialBar:{hollow:{size:"70%"}}},labels:["Cricket"]},a=new ApexCharts(document.querySelector("#radialbar-basic"),e);a.render();var e={series:[44,55,67,83],chart:{height:300,type:"radialBar"},plotOptions:{radialBar:{dataLabels:{name:{fontSize:"22px"},value:{fontSize:"16px"},total:{show:!0,label:"Total",formatter:function(r){return 249}}}}},colors:["#845adf","#23b7e5","#f5b849","#e6533c"],labels:["Apples","Oranges","Bananas","Berries"]},a=new ApexCharts(document.querySelector("#radialbar-multiple"),e);a.render();var e={series:[76,67,61,90],chart:{height:320,type:"radialBar"},plotOptions:{radialBar:{offsetY:0,startAngle:0,endAngle:270,hollow:{margin:5,size:"30%",background:"transparent",image:void 0},dataLabels:{name:{show:!1},value:{show:!1}}}},colors:["#845adf","#23b7e5","#f5b849","#e6533c"],labels:["Vimeo","Messenger","Facebook","LinkedIn"],legend:{show:!0,floating:!0,fontSize:"14px",position:"left",labels:{useSeriesColors:!0},markers:{size:0},formatter:function(r,t){return r+":  "+t.w.globals.series[t.seriesIndex]},itemMargin:{vertical:3}},responsive:[{breakpoint:480,options:{legend:{show:!1}}}]},a=new ApexCharts(document.querySelector("#circle-custom"),e);a.render();var e={series:[75],chart:{height:320,type:"radialBar",toolbar:{show:!0}},plotOptions:{radialBar:{startAngle:-135,endAngle:225,hollow:{margin:0,size:"70%",background:"#fff",image:void 0,imageOffsetX:0,imageOffsetY:0,position:"front",dropShadow:{enabled:!0,top:3,left:0,blur:4,opacity:.24}},track:{background:"#fff",strokeWidth:"67%",margin:0,dropShadow:{enabled:!0,top:-3,left:0,blur:4,opacity:.35}},dataLabels:{show:!0,name:{offsetY:-10,show:!0,color:"#888",fontSize:"17px"},value:{formatter:function(r){return parseInt(r)},color:"#111",fontSize:"36px",show:!0}}}},fill:{type:"gradient",gradient:{shade:"dark",type:"horizontal",shadeIntensity:.5,gradientToColors:["#23b7e5"],inverseColors:!0,opacityFrom:1,opacityTo:1,stops:[0,100]}},stroke:{lineCap:"round"},labels:["Percent"]},a=new ApexCharts(document.querySelector("#gradient-circle"),e);a.render();var e={series:[67],chart:{height:320,type:"radialBar",offsetY:-10},colors:["#845adf"],plotOptions:{radialBar:{startAngle:-135,endAngle:135,dataLabels:{name:{fontSize:"16px",color:void 0,offsetY:120},value:{offsetY:76,fontSize:"22px",color:void 0,formatter:function(r){return r+"%"}}}}},fill:{type:"gradient",gradient:{shade:"dark",shadeIntensity:.15,inverseColors:!1,opacityFrom:1,opacityTo:1,stops:[0,50,65,91]}},stroke:{dashArray:4},labels:["Median Ratio"]},a=new ApexCharts(document.querySelector("#circular-stroked"),e);a.render();var e={series:[67],chart:{height:330,type:"radialBar"},plotOptions:{radialBar:{hollow:{margin:15,size:"70%",imageWidth:32,imageHeight:32,imageClipped:!1},dataLabels:{name:{show:!1,color:"#fff"},value:{show:!0,color:"#333",offsetY:10,fontSize:"22px"}}}},fill:{type:"image",image:{src:["http://127.0.0.1:8000/build/assets/images/media/media-64.jpg"]}},stroke:{lineCap:"round"},labels:["Volatility"]},a=new ApexCharts(document.querySelector("#circle-image"),e);a.render();var e={series:[76],chart:{type:"radialBar",height:320,offsetY:-20,sparkline:{enabled:!0}},plotOptions:{radialBar:{startAngle:-90,endAngle:90,track:{background:"#fff",strokeWidth:"97%",margin:5,dropShadow:{enabled:!1,top:2,left:0,color:"#999",opacity:1,blur:2}},dataLabels:{name:{show:!1},value:{offsetY:-2,fontSize:"22px"}}}},colors:["#845adf"],grid:{padding:{top:-10}},fill:{type:"gradient",gradient:{shade:"light",shadeIntensity:.4,inverseColors:!1,opacityFrom:1,opacityTo:1,stops:[0,50,53,91]}},labels:["Average Results"]},a=new ApexCharts(document.querySelector("#circular-semi"),e);a.render()})();
