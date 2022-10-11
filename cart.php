<?php
include "header.php";
?>


<section class="section">
<div class="container-fluid">	
    <div id="cart_checkout">
    </div>
</div>
<!-- Chat button--> 
<div class="section mainn mainn-raised b">
                <button type="button" class="btn btn-dark btn-floating clearfix"  id="btn" style="width: 100px; height: 40px; padding: 7px; font-weight:bold;width: 100px; font-family: 'Archivo Black'; position" id="btn" data-mdb-toggle="collapse" data-target="#chatb" data-toggle="modal">Chat&nbsp;<i class="far fa-comment-alt"></i>
                </button>
				</div>
                <!-- !Chat Button-->
				<div class="modal fade modal-dialog float-right chats " id="chatb" tabindex="-1" aria-labelledby="chatlabel" aria-hidden="true" role="dialog">
              <div class="modal-dialog float-lg-right">
                <div class="modal-content chat">
                  <div class="modal-header d-block">
                    <button type="button" class="btn-close-white" data-dismiss="modal" aria-label="Close" style="margin-top: 15px; width: 15px; float: right;"></button>
                    <p class="modal-title text-center" id="chatlabel" style="font-weight:bold;"><img src="System Icons\white.png" alt="" width="30" height="20">Zero O'clock Prints</p>
                  </div>
                  <div style="background-color: white; border-width: thin;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    </div>
					
                  <div class="questions modal-body justify-content">
				  <h5 class="text-center" id="chatlabel" style="padding-top: 10px; font-weight:bold; color: white;">Question</h5>
                  <p class="solid">Payment Option<i class="fa-solid fa-paper-plane" style="float: right;"></i></p>
                  <p class="solid">Size Chart<i class="fa-solid fa-paper-plane" style="float: right;"></i></p>
                  <p class="solid">Track my Order<i class="fa-solid fa-paper-plane" style="float: right;"></i></p>
                  <p class="solid">Estimated Date of Delivery<i class="fa-solid fa-paper-plane" style="float: right;"></i></p>
                  </div>
				  <div class="foot input-group ">
                    <div class="input-group">
                      <div class="custom-file">
                  <span style="position: absolute;"><input class="custom-file-input" type="file" id="files" style="float: left"><label class="custom-file-label" for="files"><i class="fa-solid fa-paperclip"></i></label></span>
                  </div></div>
                  <textarea class="form-control" id="textinput" rows="1" placeholder="Send chat to Zero O'clock Prints..." style="width: 71%; margin-left: 45px;"></textarea>
                  <div class="input-group"><span>
                    <button class="btn btn-sm" type="button"  id="lightbtn" style="height:40px; font-family: 'Archivo Black'; float: right;">Send <i class="fa-solid fa-paper-plane"></i></button></label></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</section>	

<?php
include "footer.php";
?>