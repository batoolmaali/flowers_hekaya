
var vid = document.createElement('video');
document.querySelector('#vidinput').addEventListener('change', function() {
  // create url to use as the src of the video
  var file = this.files[0];
  var fileURL = URL.createObjectURL(this.files[0]);
  vid.src = fileURL;
  // wait for duration to change from NaN to the actual duration
  vid.ondurationchange = function() {
      $dur=this.duration/60;
    if(($dur<=2) || ($dur>=4))
    {
       alert('مدة المشاركة في الفيديو ما بين 2-4  دقائق');
        return;
    }
    else
    {
    document.getElementById('upl1').style.display = 'none';
    document.getElementById('upl').style.display = 'block';
     document.getElementById('upl').style.opacity = '100';
    }
}
});


   
