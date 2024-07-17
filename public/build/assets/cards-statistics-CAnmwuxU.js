(function(){let r,s,o,a;isDarkStyle?(r=config.colors_dark.cardColor,o=config.colors_dark.textMuted,a=config.colors_dark.headingColor,s="dark"):(r=config.colors.cardColor,o=config.colors.textMuted,a=config.colors.headingColor,s="");const t={donut:{series1:config.colors.success,series2:"#99E570",series3:"#B5EC97",series4:"#E3F8D7"}},i=document.querySelector("#orderChart"),g={chart:{height:80,type:"area",toolbar:{show:!1},sparkline:{enabled:!0}},markers:{size:6,colors:"transparent",strokeColors:"transparent",strokeWidth:4,discrete:[{fillColor:r,seriesIndex:0,dataPointIndex:6,strokeColor:config.colors.success,strokeWidth:2,size:6,radius:8}],hover:{size:7}},grid:{show:!1,padding:{right:8}},colors:[config.colors.success],fill:{type:"gradient",gradient:{shade:s,shadeIntensity:.8,opacityFrom:.8,opacityTo:.25,stops:[0,85,100]}},dataLabels:{enabled:!1},stroke:{width:2,curve:"smooth"},series:[{data:[180,175,275,140,205,190,295]}],xaxis:{show:!1,lines:{show:!1},labels:{show:!1},stroke:{width:0},axisBorder:{show:!1}},yaxis:{stroke:{width:0},show:!1}};typeof i!==void 0&&i!==null&&new ApexCharts(i,g).render();const l=document.querySelector("#revenueChart"),u={chart:{height:80,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{barHeight:"80%",columnWidth:"75%",startingShape:"rounded",endingShape:"rounded",borderRadius:2,distributed:!0}},grid:{show:!1,padding:{top:-20,bottom:-12,left:-10,right:0}},colors:[config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors.primary,config.colors_label.primary,config.colors_label.primary],dataLabels:{enabled:!1},series:[{data:[40,95,60,45,90,50,75]}],legend:{show:!1},xaxis:{categories:["M","T","W","T","F","S","S"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{colors:o,fontSize:"13px"}}},yaxis:{labels:{show:!1}}};typeof l!==void 0&&l!==null&&new ApexCharts(l,u).render();const n=document.querySelector("#profitChart"),b={series:[{data:[58,28,50,80]},{data:[50,22,65,72]}],chart:{type:"bar",height:90,toolbar:{tools:{download:!1}}},plotOptions:{bar:{columnWidth:"65%",startingShape:"rounded",endingShape:"rounded",borderRadius:3,dataLabels:{show:!1}}},grid:{show:!1,padding:{top:-30,bottom:-12,left:-10,right:0}},colors:[config.colors.success,config.colors_label.success],dataLabels:{enabled:!1},stroke:{show:!0,width:5,colors:r},legend:{show:!1},xaxis:{categories:["Jan","Apr","Jul","Oct"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{colors:o,fontSize:"13px"}}},yaxis:{labels:{show:!1}}};typeof n!==void 0&&n!==null&&new ApexCharts(n,b).render();const d=document.querySelector("#sessionsChart"),C={chart:{height:90,type:"area",toolbar:{show:!1},sparkline:{enabled:!0}},markers:{size:6,colors:"transparent",strokeColors:"transparent",strokeWidth:4,discrete:[{fillColor:r,seriesIndex:0,dataPointIndex:8,strokeColor:config.colors.warning,strokeWidth:2,size:6,radius:8}],hover:{size:7}},grid:{show:!1,padding:{right:8}},colors:[config.colors.warning],fill:{type:"gradient",gradient:{shade:s,shadeIntensity:.8,opacityFrom:.8,opacityTo:.25,stops:[0,95,100]}},dataLabels:{enabled:!1},stroke:{width:2,curve:"straight"},series:[{data:[280,280,240,240,200,200,260,260,310]}],xaxis:{show:!1,lines:{show:!1},labels:{show:!1},axisBorder:{show:!1}},yaxis:{show:!1}};typeof d!==void 0&&d!==null&&new ApexCharts(d,C).render();const c=document.querySelector("#expensesChart"),y={chart:{sparkline:{enabled:!0},parentHeightOffset:0,type:"radialBar"},colors:[config.colors.primary],series:[78],plotOptions:{radialBar:{startAngle:-90,endAngle:90,hollow:{size:"65%"},track:{background:config.colors_label.secondary},dataLabels:{name:{show:!1},value:{fontSize:"22px",color:a,fontWeight:500,offsetY:0}}}},grid:{show:!1,padding:{left:-10,right:-10}},stroke:{lineCap:"round"},labels:["Progress"]};typeof c!==void 0&&c!==null&&new ApexCharts(c,y).render();const h=document.querySelector("#visitorsChart"),w={chart:{height:120,width:200,parentHeightOffset:0,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{barHeight:"75%",columnWidth:"40px",startingShape:"rounded",endingShape:"rounded",borderRadius:5,distributed:!0}},grid:{show:!1,padding:{top:-25,bottom:-12}},colors:[config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors.primary,config.colors_label.primary],dataLabels:{enabled:!1},series:[{data:[40,95,60,45,90,50,75]}],legend:{show:!1},xaxis:{categories:["M","T","W","T","F","S","S"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{colors:o,fontSize:"13px"}}},yaxis:{labels:{show:!1}},responsive:[{breakpoint:1440,options:{plotOptions:{bar:{borderRadius:9,columnWidth:"60%"}}}},{breakpoint:1300,options:{plotOptions:{bar:{borderRadius:9,columnWidth:"60%"}}}},{breakpoint:1200,options:{plotOptions:{bar:{borderRadius:8,columnWidth:"50%"}}}},{breakpoint:1040,options:{plotOptions:{bar:{borderRadius:8,columnWidth:"50%"}}}},{breakpoint:991,options:{plotOptions:{bar:{borderRadius:8,columnWidth:"50%"}}}},{breakpoint:420,options:{plotOptions:{bar:{borderRadius:8,columnWidth:"50%"}}}}]};typeof h!==void 0&&h!==null&&new ApexCharts(h,w).render();const f=document.querySelector("#activityChart"),m={chart:{height:120,width:220,parentHeightOffset:0,toolbar:{show:!1},type:"area"},dataLabels:{enabled:!1},stroke:{width:2,curve:"smooth"},series:[{data:[15,20,14,22,17,40,12,35,25]}],colors:[config.colors.success],fill:{type:"gradient",gradient:{shade:s,shadeIntensity:.8,opacityFrom:.8,opacityTo:.25,stops:[0,85,100]}},grid:{show:!1,padding:{top:-20,bottom:-8}},legend:{show:!1},xaxis:{categories:["A1","A2","A3","A4","A5","A6","A7","A8","A9"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{fontSize:"13px",colors:o}}},yaxis:{labels:{show:!1}}};typeof f!==void 0&&f!==null&&new ApexCharts(f,m).render();const p=document.querySelector("#leadsReportChart"),x={chart:{height:157,width:130,parentHeightOffset:0,type:"donut"},labels:["Electronic","Sports","Decor","Fashion"],series:[45,58,30,50],colors:[t.donut.series1,t.donut.series2,t.donut.series3,t.donut.series4],stroke:{width:0},dataLabels:{enabled:!1,formatter:function(e,k){return parseInt(e)+"%"}},legend:{show:!1},tooltip:{theme:!1},grid:{padding:{top:15}},plotOptions:{pie:{donut:{size:"75%",labels:{show:!0,value:{fontSize:"1.5rem",fontFamily:"Public Sans",color:a,fontWeight:500,offsetY:-15,formatter:function(e){return parseInt(e)+"%"}},name:{offsetY:20,fontFamily:"Public Sans"},total:{show:!0,fontSize:".7rem",label:"1 Week",color:o,formatter:function(e){return"32%"}}}}}}};typeof p!==void 0&&p!==null&&new ApexCharts(p,x).render()})();
