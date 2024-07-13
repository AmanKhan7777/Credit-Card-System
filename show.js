function showtxt(){
  
    var holder =document.getElementById("card-holder-input").value;
   var res = document.getElementById("check");

    if(holder != 8)
    {
        res.innerHTML="Records Are Submit";
    }
    else
    {
        res.innerHTML="Records not Submit";
    }
}