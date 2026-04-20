

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6916834482670957"
     crossorigin="anonymous"></script>
<link rel="canonical" href="https://satta-kings-7.com/">

<title>Meerut Satta King Result | Gali, Desawar, Ghaziabad, Faridabad Fast Results 2026</title>

<meta name="description" content="Check fastest Satta King results for Meerut City, Gandhi Bazar, Sadar Bazar, Gwalior, Delhi Bazar, Gali, Desawar, Ghaziabad, Faridabad and more. Get daily live results and monthly charts for 2026.">

<meta name="keywords" content="
satta king, satta kings 7, satta-kings-7.com,
meerut satta king, meerut city satta result,
gandhi bazar satta king, sadar bazar satta,
gwalior satta result, delhi bazar satta king,
aligarh satta result, shri ganesh satta,
agra satta king, faridabad satta result,
allahabad satta king, ghaziabad satta result,
dwarka satta king, gali satta king,
mathura satta result, desawar satta king,
satta king fast result, satta king live result,
satta king today result, satta chart 2026,
monthly satta chart, satta result today india
">

<meta name="robots" content="index, follow">
<meta name="author" content="satta-kings-7.com">

<meta name="74437571aa7c30df83631a8262155470c8364788" content="74437571aa7c30df83631a8262155470c8364788" />
<link rel="alternate" href="https://satta-kings-7.com/ResultFor=January-2026.php">
<link rel="alternate" href="https://satta-kings-7.com/ResultFor=February-2026.php">
<link rel="alternate" href="https://satta-kings-7.com/ResultFor=March-2026.php">


<link rel="stylesheet" href="style.css">

</head>

<body>




<div class="top-header">
    <div style="font-size:40px;">👑</div>
    <h1>SATTA-KINGS-7<span>.com</span></h1>
</div>

<div class="description" id="dailyDesc"></div>

<div class="disclaimer">
DISCLAIMER: This website is an independent media portal for informational and journalistic purposes only. As a non-transactional service, we are not affiliated with any entity mentioned. Users are solely responsible for complying with all applicable laws in their jurisdiction.
<a href="https://satta-kings-7.com/terms-of-service">Read More...</a>
</div>

<div class="update-time" id="dateTime"></div>


<div class="result-bar">
Satta King Fast Results of 
<span id="today"></span> & 
<span id="yesterday"></span>
</div>



<div class="draw-header">
  <div>Original Offline Draw</div>
  <div id="yDate"></div>
  <div id="tDate"></div>
</div>

<div class="section">
  <div class="section-title">LIVE</div>
  <div id="live"></div>
</div>

<div class="section">
  <div class="section-title">NEXT</div>
  <div id="next"></div>
</div>

<div class="section">
  <div class="section-title">REST</div>
  <div id="rest"></div>
</div>



<div id="chartsContainer"></div>
<script>
function updateDates(){
    const now = new Date();
    const today = new Date(now);
    const yesterday = new Date(now);
    yesterday.setDate(today.getDate() - 1);
    const opt = { day:"2-digit", month:"long", year:"numeric" };

    document.getElementById("dailyDesc").innerHTML =
        "Daily Superfast Satta King Result of " +
        today.toLocaleDateString("en-IN",opt);

    document.getElementById("today").innerHTML =
        today.toLocaleDateString("en-IN",opt);

    document.getElementById("yesterday").innerHTML =
        yesterday.toLocaleDateString("en-IN",opt);

    document.getElementById("dateTime").innerHTML =
        "Updated: " + now.toLocaleString("en-IN",{timeZone:"Asia/Kolkata"}) + " IST";
}
updateDates();

document.addEventListener("DOMContentLoaded",function(){

function fmt(d){
  return d.toLocaleDateString("en-IN",{weekday:"short",day:"numeric"});
}

let now=new Date();
let y=new Date(now);
y.setDate(y.getDate()-1);

document.getElementById("tDate").innerText=fmt(now);
document.getElementById("yDate").innerText=fmt(y);

const markets = [
  {n:"MEERUT CITY",t:"11:35 AM",a:"56",b:"55",link:"meerutchart"},
  {n:"GANDHI BAZAR",t:"12:40 PM",a:"39",b:"XX"},
  {n:"SADAR BAZAR",t:"01:45 PM",a:"48",b:"XX"},
  {n:"GWALIOR",t:"02:40 PM",a:"94",b:"XX"},
  {n:"DELHI BAZAR",t:"03:00 PM",a:"43",b:"XX"},
  {n:"ALLIGARH",t:"03:55 PM",a:"11",b:"XX"},
  {n:"SHRI GANESH",t:"04:40 PM",a:"69",b:"XX"},
  {n:"AGRA",t:"05:35 PM",a:"67",b:"XX"},
  {n:"FARIDABAD",t:"06:10 PM",a:"47",b:"XX"},
  {n:"ALLAHABAD",t:"07:50 PM",a:"17",b:"XX"},
  {n:"GHAZIABAD",t:"09:40 PM",a:"97",b:"XX"},
  {n:"DWARKA",t:"10:40 PM",a:"14",b:"XX"},
  {n:"GALI",t:"11:40 PM",a:"47",b:"XX"},
  {n:"MATHURA",t:"12:35 AM",a:"60",b:"XX"},
  {n:"DISAWER",t:"05:00 AM",a:"85",b:"XX"}
];

function toTime(t){
  let [hm,p] = t.split(" ");
  let [h,m] = hm.split(":").map(Number);
  if(p==="PM" && h!==12) h+=12;
  if(p==="AM" && h===12) h=0;

  let d = new Date();
  d.setHours(h,m,0,0);

  return d;
}

function draw(){
  ["live","next","rest"].forEach(id => document.getElementById(id).innerHTML="");
  let now = new Date();

  markets.forEach(m=>{
    let t = toTime(m.t);

   
    let diff = (t - now) / 60000; 

    let box;
    if(diff <= 90 && diff >= -60){ 
      box = "live";
    } else if(diff > 90){
      box = "next";
    } else {
      box = "rest";
    }

    document.getElementById(box).innerHTML += `
      <div class="row">
        <div class="left">
          <div class="name">${m.n}</div>
          <div class="time">${m.t}<a href="${m.link}" class="record-link">Record Chart</a>
          </div>
        </div>
        <div class="num">${m.a}</div>
        <div class="num">${m.b}</div>
      </div>`;
  });
}

draw();
setInterval(draw, 60000);


const today = new Date();
const todayDate = today.getDate();
const monthName = today.toLocaleString('default',{month:'long'});
const year = today.getFullYear();


const resultData = {  
1:{MRTC:74,GDBZ:17,SDBZ:23,GWLR:78,DLBZ:39,ALGR:99,SHGN:43,AGRA:39,FRBD:35,ALBD:18,GZBD:12,DWRK:94,GALI:97,MTHR:60,DSWR:81},
2:{MRTC:14,GDBZ:19,SDBZ:91,GWLR:56,DLBZ:11,ALGR:23,SHGN:55,AGRA:73,FRBD:33,ALBD:05,GZBD:78,DWRK:14,GALI:63,MTHR:95,DSWR:41},
3:{MRTC:45,GDBZ:99,SDBZ:96,GWLR:42,DLBZ:71,ALGR:17,SHGN:58,AGRA:69,FRBD:99,ALBD:69,GZBD:00,DWRK:81,GALI:62,MTHR:95,DSWR:97},
4:{MRTC:67,GDBZ:83,SDBZ:87,GWLR:25,DLBZ:83,ALGR:90,SHGN:39,AGRA:22,FRBD:59,ALBD:80,GZBD:77,DWRK:02,GALI:75,MTHR:21,DSWR:71},
5:{MRTC:01,GDBZ:11,SDBZ:63,GWLR:04,DLBZ:67,ALGR:30,SHGN:87,AGRA:86,FRBD:29,ALBD:54,GZBD:17,DWRK:50,GALI:59,MTHR:90,DSWR:47},
6:{MRTC:69,GDBZ:40,SDBZ:08,GWLR:11,DLBZ:11,ALGR:43,SHGN:43,AGRA:24,FRBD:39,ALBD:56,GZBD:59,DWRK:12,GALI:46,MTHR:63,DSWR:44},
7:{MRTC:67,GDBZ:90,SDBZ:90,GWLR:58,DLBZ:76,ALGR:43,SHGN:96,AGRA:57,FRBD:07,ALBD:44,GZBD:26,DWRK:59,GALI:01,MTHR:13,DSWR:05},
8:{MRTC:30,GDBZ:00,SDBZ:12,GWLR:84,DLBZ:30,ALGR:40,SHGN:83,AGRA:22,FRBD:91,ALBD:68,GZBD:88,DWRK:41,GALI:42,MTHR:12,DSWR:68},
9:{MRTC:56,GDBZ:39,SDBZ:48,GWLR:94,DLBZ:43,ALGR:11,SHGN:69,AGRA:67,FRBD:47,ALBD:17,GZBD:97,DWRK:14,GALI:47,MTHR:60,DSWR:85},






    }
const charts=[
{title:"MEERUT CITY - GANDHI BAZAR - SADAR BAZAR - GWALIOR",columns:["MRTC","GDBZ","SDBZ","GWLR"]},
{title:"DELHI BAZAR - ALLIGARH - SHRI GANESH - AGRA",columns:["DLBZ","ALGR","SHGN","AGRA"]},
{title:"FARIDABAD - ALLAHABAD - GHAZIABAD - DWARKA",
columns:["FRBD","ALBD","GZBD","DWRK"]},
{title:"GALI - MATHURA - DISAWER",
columns:["GALI","MTHR","DSWR"]}
];

const container=document.getElementById("chartsContainer");

charts.forEach(chart=>{
let header=document.createElement("div");
header.className="month-header";
header.innerText=`Monthly Result Chart of ${monthName} ${year} for ${chart.title}`;
container.appendChild(header);

let table=document.createElement("table");
table.className="month-table";

let thead="<thead><tr><th>DATE</th>";
chart.columns.forEach(col=>thead+=`<th>${col}</th>`);
thead+="</tr></thead>";

let tbody="<tbody>";
for(let day=1;day<=todayDate;day++){
let highlight=day===todayDate?"class='today'":"";
let data=resultData[day]||{};
tbody+=`<tr ${highlight}>
<td class="date-col">${day.toString().padStart(2,'0')}</td>`;
chart.columns.forEach(col=>{
tbody+=`<td>${data[col]!==undefined?data[col]:""}</td>`;
});
tbody+="</tr>";
}
tbody+="</tbody>";

table.innerHTML=thead+tbody;
container.appendChild(table);
});

});
    
</script>
  

<div class="wrapper">
  
<div class="top-row">
  
        <a href="https://satta-kings-7.com/ResultFor=February-2026.php#chartsContainer" class="top-btn">Feb 2026</a>
  
        <a href="#" class="top-btn">Apr 2026</a>
  
    </div>
  

  
    <div class="info-bar">
  
        Click here to view the latest chart for Gali, Desawar, Ghaziabad, and Faridabad for March-2026
  
    </div>
  

  
    <div class="yellow-section">
  
        <p>
  
        Select a month and year to view the combined chart for Gali, Desawar, Ghaziabad, and Faridabad.
  
        </p>
  

  
        <div class="control-row">
  

  
            <select id="month">
  
                <option>January</option>
  
                <option selected>February</option>
  
                <option>March</option>
  
                <option>April</option>
  
                <option>May</option>
  
                <option>June</option>
  
                <option>July</option>
  
                <option>August</option>
  
                <option>September</option>
  
                <option>October</option>
  
                <option>November</option>
  
                <option>December</option>
  
            </select>
  

  
            <select id="year">
  
                <option selected>2026</option>
  
                <option>2025</option>
  
                <option>2024</option>
  
                <option>2023</option>
  
            </select>
  

  
            <button class="go-btn" onclick="goChart()">Go</button>
  

  
        </div>
  
    </div>
  

  
</div>
  
<script>
  
function goChart(){
  

  
    var month = document.getElementById("month").value;
  
    var year = document.getElementById("year").value;
  

  
  
  
    var links = {
  

  
        "January-2026": "https://satta-kings-7.com/ResultFor=January-2026.php#chartsContainer",
  
        "February-2026": "https://satta-kings-7.com/ResultFor=February-2026.php#chartsContainer",
  
    
  

  
        "December-2025": "https://satta-kings-7.com/ResultFor=December-2025.php#chartsContainer"
  

  
       
  
    };
  

  
    var key = month + "-" + year;
  

  
    if(links[key]){
  
        window.location.href = links[key];
  
    } else {
  
        alert("Link not available for selected month and year.");
  
    }
  
}
  
</script>

  <p>
Meerut Satta King result is updated daily with fastest speed. 
You can check Gali, Desawar, Ghaziabad and Faridabad results here.
This website provides accurate satta king charts for all markets.
</p>



</body>
  
</html>
