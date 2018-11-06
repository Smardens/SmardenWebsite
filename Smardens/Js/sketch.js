var grph = 'temp';
var temps=[];
var hums=[];
var uvs=[];
function changeGraph(graph){
   grph = graph;
}
function setup() {
    var canvas =createCanvas(500, 300);
   
    strokeWeight(4);
   
    for(var i = 0; i<24;i++){
        temps.push(random(30,80));
        hums.push(random(50,70));
        uvs.push(random(1,3));
    }
    canvas.parent('sketch-holder');

    

}

function draw() {
  background(171,196,142);
  if(grph == 'temp'){
  text('Temperature(F) x Hour(24)', width/3, 20);
  for(var i=0;i<=height;i+=15){
    text(-i+150 - i, 10, i*2.2 );
  }
  
  for(var i = 0; i<24;i++){
      point(40+i*17,height - temps[i]-150+15);//generated points 
  }

 }
 if(grph == 'hum'){
    text('Humidity(%) x Hour(24)',width/3, 20);
    for(var i=0;i<=100;i+=10){
        text(100-i, 10, 15+i*2.7 );
      }

      for(var i = 0; i<24;i++){
        point(40+i*17,height-(hums[i]*2.7)-15);//generated points 
    }
   }
   if(grph == 'uv'){
    text('UV x Hour(24)', width/3, 10);
    for(var i=0;i<=10;i+=1){
        text(10-i, 10, 15+i*27 );
      }
      for(var i = 0; i<24;i++){
        point(40+i*17,height-(uvs[i]*27)-15);//generated points 
    }
   }
  
  for(var i=0;i<24;i++){
    text(i+1, 40+i*17, height );
  }
 
}