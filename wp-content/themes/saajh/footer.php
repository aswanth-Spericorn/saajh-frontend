<footer>
    <div class="fut-top">
        <div class="custom-container container">
            <div class="row">
                <div class="col-md-6">
                    <div class="fut-logo">
                        <img src="<?php echo get_template_directory_uri().'/images/logo-black.png';?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fut-menu">
                        <p><a href="#">About us</a></p>
                        <p><a href="#">Terms & condition</a></p>
                        <p><a href="#">Privacy Policy</a></p>
                        <p><a href="#">Contact us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fut-bottom">
        <div class="custom-container container">
            <div class="row">
                <div class="col-md-6">
                    <div class="fut-copyrht">
                        <p>Copyright © 2010-2020 saajh. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fut-socialmedia">
                        <img src="<?php echo get_template_directory_uri().'/images/facebook.png';?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/images/twitter.png';?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
Launch demo modal
</button> -->

<!-- Modal login page -->
<div class="modal fade" id="page-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Login Your Account</h5>
  <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> -->
</div>
<div class="modal-body">
    <div class="modal-logo">
        <img src="<?php echo get_template_directory_uri().'/images/logo-black.png';?>" alt="">
    </div>
    <div class="login-form">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="User Name">
            </div>
            <div class="form-group">
            <input type="password" class="form-control" placeholder="Password">
            <a href="" data-toggle="modal" data-target="#page-resetpassword" class="form-text">Forgot Password</a>
            </div>

            <button type="submit" class="btn btn-primary btn-log">LOGIN</button>
        </form>
    </div>
</div>
<div class="modal-footer">
  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button> -->
  <p>Don't Have An Account? <span>Sign Up</span></p>
</div>
</div>
</div>
</div>

<!-- Modal reset password page -->
<div class="modal fade" id="page-resetpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Reset Password</h5>
  <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> -->
</div>
<div class="modal-body">
    <div class="modal-logo">
        <img src="<?php echo get_template_directory_uri().'/images/logo-black.png';?>" alt="">
    </div>
    <div class="login-form">
        <form>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="New Password">
            </div>
            <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm Password">
            </div>

            <button type="submit" class="btn btn-primary btn-log">RESET PASSWORD</button>
        </form>
    </div>
</div>
<div class="modal-footer">

</div>
</div>
</div>
</div>


<!-- add to favorite -->
<div class="modal fade" id="page-addfavourite" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Add to  Favourite</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
    <div class="login-form">
        <form>
            <div class="form-group d-flex align-items-center">
                <div>
                    <label class="create-new" for="exampleInputEmail1">Create New Label</label>
                    <input type="text" class="form-control" placeholder="Enter Label name">
                </div>
                <div class="add-more">
                    <button id="b1" class="btn btn-primary btn-add-more" type="button">+</button>
                </div>
            </div>
            <div class="form-group recently-updated">
                <div>
                    <label class="create-new" for="exampleInputEmail1">Recently Updated</label>
                </div>
                <div class="updated-options">
                    <div class="btns">
                        <a href="">My Favourite <span><i class="fas fa-chevron-right"></i></span></a>
                    </div>
                    <div class="btns">
                        <a href="">Saajh <span><i class="fas fa-chevron-right"></i></span></a>
                    </div>
                    <div class="btns">
                        <a href="">My Producer<span><i class="fas fa-chevron-right"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm Password">
            </div> -->

        </form>
    </div>
</div>
<div class="modal-footer">

</div>
</div>
</div>
</div>

<!-- Modal signup page -->
<div class="modal fade" id="page-signup-subscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-signup" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Sign up & Subscribe to enjoy unlimited tracks just in 2 steps</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
    <div class="signup-form">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="create-new" for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="create-new" for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="create-new" for="exampleInputEmail1">Phone number</label>
                        <input type="text" class="form-control" placeholder="Phone number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="create-new" for="exampleInputEmail1">Email Id</label>
                        <input type="email" class="form-control" placeholder="Email Id">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="create-new" for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="create-new" for="exampleInputEmail1">Confirm password</label>
                        <input type="password" class="form-control" placeholder="Confirm password">
                    </div>
                </div>
            </div>

            <div class="row wd">
                <div class="col-md-6">
                    <div class="signup-last">
                        <p>Already have account ? <span>LOGIN</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="signup-last text-right">
                        <button type="submit" class="btn btn-primary btn-proceed">PROCEED</button>
                    </div>
                </div>
            </div>


        </form>
    </div>
</div>
<div class="modal-header payment">
    <h5 class="modal-title" id="exampleModalLongTitle">Payment Details</h5>
    <div class="card tab-card">
    <div class="card-header tab-card-header">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
          <li class="nav-item">
              <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true"><img class="credit" src="<?php echo get_template_directory_uri().'/images/credit-card.svg';?>" alt="">Credit Card</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false"><img class="paytm" src="<?php echo get_template_directory_uri().'/images/paytm.svg';?>" alt="">Paytm</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false"><img class="paypal" src="<?php echo get_template_directory_uri().'/images/paypal.svg';?>" alt="">Paypal</a>
          </li>
        </ul>
      </div>
      </div>
  </div>
<div class="modal-body">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="create-new" for="exampleInputEmail1">Card Number</label>
                        <input type="number" class="form-control card-number" placeholder="Card Number">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="create-new" for="exampleInputEmail1">Card CVV</label>
                        <input type="number" class="form-control card-cvv" placeholder="Card CVV">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="create-new" for="exampleInputEmail1">Name on Card</label>
                        <input type="text" class="form-control" placeholder="Name on Card">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="create-new" for="exampleInputEmail1">Valid through</label>
                        <div class="d-flex">
                            <input type="text" class="form-control valid-month" placeholder="Month">
                            <input type="text" class="form-control" placeholder="Year">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">

        </div>
        <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">

        </div>
    </div>
</div>
</div>
</div>
</div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<script>

// $(document).on("click",".play",function() {
//   alert('click');
//   var id = this.id;
//   var x = document.getElementById("audio"+id);
//   // console.log(x)
//   x.play();
// });
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
 integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/2.0.5/wavesurfer.min.js"></script>
<script type="text/javascript">
var base_url = window.location.origin;
var wavesurfer = [];
$.ajax({
    cache: false,
    type: "GET",
    dataType: "json",
    url: "http://103.79.221.146:5019/api/tracks/getall",
    success: function(data){
      data.forEach(function(track){
        waveid = "waveform"+track.id;


          console.log(data)
            // $('.list-tracks').append("<audio controls='controls' src='"+base_url+"/saajh/wp-content/themes/saajh/images/file_example.mp3'>Your browser does not support the HTML5 audio element.</audio>");
          $('.list-tracks').append("<div class='song-track'><div><img src='"+base_url+"/saajh/wp-content/themes/saajh/images/thump-img.jpg' alt=''></div><div class='time-t'><p class='time-duration'>  "+track.durationMin+":"+track.durationSec+" </p><button id='play' value="+track.id+" class='centre play'></button></div> <div class='audio-track'><div id='"+waveid+"'></div> </div> <div class='tune-name'><p>"+track.orgName+"</p><div class='un-btn d-flex'><p>oneshot</p><p>vocals</p><p>hip hop</p><p>trap</p><p>chants</p></div></div><div class='content-style'><p>"+track.key+"</p></div><div class='content-style'><p>"+track.raga+"</p></div><div class='content-style'><p>141</p></div><div class='d-flex i-icons'><div class='fav'><img src='"+base_url+"/wp-content/themes/saajh/images/favort.svg' alt=''></div><div><img src='"+base_url+"/wp-content/themes/saajh/images/d-arrow.png' alt=''></div><div><img src='"+base_url+"/wp-content/themes/saajh/images/dots.png' alt=''></div></div></div>");

          // http://103.79.221.146:5019/api/tracks/mp3/:"+track.id+"  file_example.mp3
          // "+base_url+"/saajh/wp-content/themes/saajh/images/file_example.mp3

          // alert('loaded')


              wavesurfer[track.id]= WaveSurfer.create({
              //container: '#waveform',
              container: document.querySelector('#'+waveid),
              waveColor: '#ababab',
              progressColor: '#ffa180',
              barHeight: 1.7
          });
          wavesurfer[track.id].load("http://103.79.221.146:5019/api/tracks/mp3/"+track.id);

        });

          $(document).on("click",".play,.pause",function() {
            var tid = this.value;
              wavesurfer[tid].playPause();

              $( this).css( "display", "block" );
              $( this).prev().css( "display", "none" );

              if(this.className  === 'play'){
                  this.className = "pause";
              }else{
                  this.className = "play";
              }

              // wavesurfer[tid].load("http://103.79.221.146:5019/api/tracks/mp3/"+tid);
            });

            // wavesurfer[track.id].load('https://ia800508.us.archive.org/15/items/LoveThemeFromTheGodfather/02LoveThemeFromTheGodfather.mp3');

    }
});
</script>

<script>
    $(function () {
      // For each image with an SVG class, execute the following function.
      $("img.svg").each(function () {
      // Perf tip: Cache the image as jQuery object so that we don't use the selector muliple times.
      var $img = jQuery(this);
      // Get all the attributes.
      var attributes = $img.prop("attributes");
      // Get the image's URL.
      var imgURL = $img.attr("src");
      // Fire an AJAX GET request to the URL.
      $.get(imgURL, function (data) {
      // The data you get includes the document type definition, which we don't need.
      // We are only interested in the <svg> tag inside that.
      var $svg = $(data).find('svg');
      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');
      // Loop through original image's attributes and apply on SVG
      $.each(attributes, function() {
      $svg.attr(this.name, this.value);
      });
      // Replace image with new SVG
      $img.replaceWith($svg);
      });
      });
      });
  </script>
  <script type="text/javascript">

function DropDown(el) {
this.dd = el;
this.placeholder = this.dd.children('span');
this.opts = this.dd.find('ul.dropdown > li');
this.val = '';
this.index = -1;
this.initEvents();
}
DropDown.prototype = {
initEvents : function() {
  var obj = this;

  obj.dd.on('click', function(event){
    $(this).toggleClass('active');
    return false;
  });

  obj.opts.on('click',function(){
    var opt = $(this);
    obj.val = opt.text();
    obj.index = opt.index();
    obj.placeholder.text(obj.val);
  });
},
getValue : function() {
  return this.val;
},
getIndex : function() {
  return this.index;
}
}

$(function() {

var dd = new DropDown( $('#dd') );

$(document).click(function() {
  // all dropdowns
  $('.wrapper-dropdown-3').removeClass('active');
            // $('.wrapper-dropdown-3').addClass('active');
});

});

    $(function() {

        var de = new DropDown( $('#de') );

        $(document).click(function() {
            // all dropdowns
            $('.wrapper-dropdown-3').removeClass('active');
        });

    });

    $(function() {

        var df = new DropDown( $('#df') );

        $(document).click(function() {
            // all dropdowns
            $('.wrapper-dropdown-3').removeClass('active');
        });

    });

</script>
<script>
    // With JQuery

$(document).ready(function(){
$("#ex2").slider({});
});

// Without JQuery
//var slider = new Slider('#ex2', {});
</script>
<!-- play track  -->
<script>
  // alert('play')
    //
    // var wavesurfer = WaveSurfer.create({
    //     //container: '#waveform',
    //     container: document.querySelector('#waveform'),
    //     waveColor: '#ababab',
    //     progressColor: '#ffa180',
    //     barHeight: 1.7
    // });

</script>
<script>

    // play.addEventListener('click', function() {
    // $(document).on("click",".play",function() {
    //   var tid = this.value;
    //
    //     wavesurfer.playPause();
    //
    //     $( this).css( "display", "block" );
    //     $( this).prev().css( "display", "none" );
    //
    //     if(this.className  === 'play'){
    //         this.className = "pause";
    //     }else{
    //         this.className = "play";
    //     }
    //
    //     wavesurfer.load('https://ia800508.us.archive.org/15/items/LoveThemeFromTheGodfather/02LoveThemeFromTheGodfather.mp3');
    //   });
</script>
<!-- <script>
//  $(document).ready(function() {
// $('.dropdown').click(function() {
// 	$('.dropdown-content').addClass('visible');
// });
//     $(document).on('click', 'body', function() {
//         $('.dropdown').click(function() {
//     $('.dropdown-content').removeClass('visible');
// })
//});
var removeClass = true;
$(".dropdown").click(function () {
$(".dropdown-content").toggleClass('open');
removeClass = false;
});

$(".dropdown-content").click(function() {
$(".dropdown-content").addClass('open');
// alert("a");
//removeClass = false;
});

$("html").click(function () {
if (removeClass) {
$(".dropdown-content").removeClass('open');
}
removeClass = true;
});
</script> -->
