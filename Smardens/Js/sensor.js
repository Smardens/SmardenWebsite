var temps=[];
var hums=[];
var uvs=[];

//Generate a random int
function randi(min, max) {
  return Math.floor(Math.random() * (max - min) ) + min;
}
var rng = randi(0,2);

//RNG determines the generated historical data
//over 24 elements that represent hours in a day
for(var i =0; i<24;i++){
  
  if(rng == 0){
    temps[i]=randi(60,80);
    hums[i] = randi(50,70);
    uvs[i] = randi(0,3);
  } else{
    temps[i]=0;
    hums[i]=0;
    uvs[i]=0;
  }
}

function sCheck(){
  var tempPass = false;
  var humPass= false;
  var uvPass = false;

  // sensor will pass as long as not all data points are zero
  for(var i =0; i<24;i++){
    if(temps[i]!=0){
      tempPass = true;
    }
    if(hums[i]!=0){
      humPass = true;
    }
    if(uvs[i]!=0){
      uvPass = true;
    }
  }
  
  //Edit text based on data results
  if(tempPass){
    document.getElementById("temp").innerText = "Temp: Pass, everything looks good!";

  }else{document.getElementById("temp").innerText = "Temp: Fail, go check on your garden!";}

  if(humPass){
    document.getElementById("hum").innerText = "Humid: Pass, everything looks good!";

  }else{document.getElementById("hum").innerText = "Humid: Fail, go check on your garden!";}

  if(uvPass){
    document.getElementById("uv").innerText = "UV: Pass, everything looks good!";

  }else{document.getElementById("uv").innerText = "UV: Fail, go check on your garden!";}

}