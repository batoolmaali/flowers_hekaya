<script>
function printDiv(id) {
     xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange=function()
                        {
                           if (xmlhttp.readyState==4 && xmlhttp.status==200)
                            {
                                console.log(xmlhttp.responseText);
                                 var data = JSON.parse(xmlhttp.responseText);
                                 console.log(data);
                                  document.getElementById("name").innerHTML="Name:  "+data.data[0].name;
                                 document.getElementById("age").innerHTML="Age:  "+data.data[0].age;
                                  document.getElementById("mede1").innerHTML='1-'+data.data[0].med1;
                               document.getElementById("mede2").innerHTML='2-'+data.data[0].med2;
                                  document.getElementById("mede3").innerHTML='3-'+data.data[0].med3;
                                     document.getElementById("mede4").innerHTML='4-'+data.data[0].med4;
                                        document.getElementById("mede5").innerHTML='5-'+data.data[0].med5;
                                           document.getElementById("mede6").innerHTML='6-'+data.data[0].med6;
                              document.getElementById("created_at").innerHTML="Date:  "+data.data[0].created_at;
                              document.getElementById('printableArea').printMe();
                               }
                       }     
                           xmlhttp.open("GET", "/Drsalah/getprescreption/" + id.name , true);
                           xmlhttp.send();
  
}
HTMLElement.prototype.printMe = printMe;
function printMe(query){
  var myframe = document.createElement('IFRAME');
  myframe.domain = document.domain;
  myframe.style.position = "absolute";
  myframe.style.top = "-10000px";
  document.body.appendChild(myframe);
  myframe.contentDocument.write(this.innerHTML) ;
  $('table').addClass('table');
  setTimeout(function(){
  myframe.focus();
  myframe.contentWindow.print();
  myframe.parentNode.removeChild(myframe) ;// remove frame
  },100); // wait for images to load inside iframe
  window.focus();
 }
</script>
<div id="printableArea" style="display:none;
    direction: rtl;
    font-size: 18px;
">
    <div style="width:100%; height:100%;background-image:url("http://thurayaalnajjar.info/Drsalah/assets/images/back.png"); background-size: cover;background-position: center; ">
<img src="{{asset('assets/images/head.png')}}" style="width:50%; padding-left:25%;padding-right:25%;">
    <br><br><br>
    <div style="border-left: #fcb614;
    border-left-style: outset;
    border-width: 13px;
    padding-left: 2%;">
       <label id="name"></label>
       <br>
        <label id="age"></label>
        <br>
        <label id="created_at"></label>
    </div>
   
      <br><br><br>
     <p> R.X:</p>
     
       <table class="table table-bordered" style="width:100%;direction:ltr;" >
         <tbody>
             <tr><td>
              <label id="mede1" style="color:black;"></label>
               </tr></td>
                <tr><td>
              <label id="mede2" style="color:black;"></label>
               </tr></td>
                <tr><td>
              <label id="mede3" style="color:black;"></label>
               </tr></td>
                <tr><td>
              <label id="mede4" style="color:black;"></label>
               </tr></td>
                <tr><td>
              <label id="mede5" style="color:black;"></label>
               </tr></td> <tr><td>
              <label id="mede6" style="color:black;"></label>
               </tr></td>
         </tbody>
        </table>
     
       <br>
     

      
      <img src="{{asset('assets/images/back.png')}}" style="width:100%;   position:fixed;
          bottom:5px;"
      >
</div>
</div>
