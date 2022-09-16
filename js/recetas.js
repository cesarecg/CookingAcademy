function init(){
    var grid=document.getElementsByClassName('grid3x3')[0];
    grid.onclick=function(e){
     if(e.target.nodeName=='IMG'){
      alert(e.target.src);
     }
    }
    window.removeEventListener('load',init,false);
   }
   window.addEventListener('load',init,false);