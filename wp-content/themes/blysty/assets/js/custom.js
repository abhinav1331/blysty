var link = "http://localhost/blysty/";

/**********************Header login****************************/
jQuery(function($) {
		jQuery('#loginform').validate({
			
			rules: {
				uname: {
					required: true,
					minlength: 3
				},
				
				upass: {
					required: true,
					minlength: 6,
				}
			},
			messages: {
				uname: {
					required: "",
					minlength: ""
				},
				
				upass: {
					required: "",
					minlength: ""
				}
				
			},
			
			submitHandler: function(form) {
				var link = jQuery("input[name='link']").val()
				jQuery(form).ajaxSubmit({
					type: "POST",
					data: jQuery(form).serialize(),
					url: link+'/wp-admin/admin-ajax.php', 
					success: function(data) 
					{
					
						if(data==1) {
							toastr.error("Username already exists");
						}
						if(data==2) {
							toastr.error("Password not match");
						}
						if(data==3) {
							window.location.href=link; 
						}
							
					}
				});
			}
			
		});
	});

/**********************Header login****************************/

jQuery(function ($) {
    jQuery('#registerform').validate({
        rules: {
            emailA: {
                required: true
                , email: true
            }
            , pass: {
                required: true
                , minlength: 6
            }
        }
        , messages: {
            emailA: {
                required: ""
                , email: ""
            }
            , pass: {
                required: ""
                , minlength: ""
            }
        }
        , submitHandler: function (form) {
            jQuery(form).ajaxSubmit({
                type: "POST"
                , data: jQuery(form).serialize()
                , url: link + 'wp-admin/admin-ajax.php'
                , success: function (data) {
                    if (data == 1) {
                        toastr.error("Username already exists")
                    }
                    if (data == 2) {
                        toastr.error("Email already exists");
                    }
                    if (data == 3) {
                        window.location.href = link;
                    }
                }
            });
        }
    });
});


function myReg() {
	jQuery("#registerform").submit();
}

/**********************Create Pins****************************/
jQuery(function($) {
		jQuery('#create_blyst').validate({
			
			rules: {
				name: {
					required: true,
				},
				
				cate: {
					required: true,
				},
				
				"count[]": {
					required: true,
				}
			},
			submitHandler: function(form) {
				var link = jQuery("input[name='link']").val()
				jQuery(form).ajaxSubmit({
					type: "POST",
					data: jQuery(form).serialize(),
					url: link+'/wp-content/themes/blysty/ajax/createBlyst.php', 
					success: function(data) 
					{
						console.log(data);
						if(data == "Invalid Image Format") {
							toastr.error("Only Image attachment files are alowed");
						} else {
							jQuery(".myDataChange").empty().append(data);
							jQuery("#createBlysty").modal("hide");
							jQuery("#chooseBlysty").modal("show");
							setTimeout(function(){
								 var blystId = jQuery("input[name='BlystId']").val();
								 jQuery("input[name='blystIDChoose']").val(blystId);
							}, 1000);
						}
					}
				});
			}
			
		});
	});


	/*jQuery(function($) {
		jQuery('#update_blyst').validate({
			
			rules: {
				name: {
					required: true,
				},
				
				cate: {
					required: true,
				},
				
				"count[]": {
					required: true,
				}
			},
			submitHandler: function(form) {
				var link = jQuery("input[name='link']").val()
				jQuery(form).ajaxSubmit({
					type: "POST",
					data: jQuery(form).serialize(),
					url: link+'/wp-content/themes/blysty/ajax/updateBlyst.php', 
					success: function(data) 
					{
						console.log(data);
						if(data == "Invalid Image Format") {
							toastr.error("Only Image attachment files are alowed");
						} else {
							jQuery(".myDataChange").empty().append(data);
							jQuery("#createBlysty").modal("hide");
							jQuery("#chooseBlysty").modal("show");blystIDChoose
							setTimeout(function(){
								 var blystId = jQuery("input[name='BlystId']").val();
								 jQuery("input[name='blystIDChoose']").val(blystId);
							}, 1000);
						}
					}
				});
			}
			
		});
	});
*/
/**********************Header login****************************/



/**********************Create Board****************************/
jQuery(function($) {
		jQuery('#create_board').validate({
			
			rules: {
				name: {
					required: true,
				}
			},
			submitHandler: function(form) {
				var link = jQuery("input[name='link']").val()
				jQuery(form).ajaxSubmit({
					type: "POST",
					data: jQuery(form).serialize(),
					url: link+'/wp-content/themes/blysty/ajax/createBoard.php', 
					success: function(data) 
					{
						jQuery("#createBoard").modal("hide");
						if(data == 1) {
							toastr.success("Pins added in new board");
						} else {
							toastr.success("New Board Created");
						}
					}
				});
			}
			
		});
	});

/**********************Header Board****************************/

function formSubmit() {
	jQuery( "#create_blyst" ).submit();
}
function getModalClose() {
	
	jQuery('#userMed').modal('hide');
	setTimeout(function(){ WelDrawn(); }, 1000);
}
function getModalCloseBoadrd() {
	
	jQuery('#chooseBlysty').modal('hide');
	setTimeout(function(){jQuery("#createBoard").modal("show"); }, 1000);
}


//Add Rows Add Pin
function addRow() {
	jQuery('<li><div class="form-group"><input class="form-control" type="text" name="count[]"></div></li>').insertAfter(".listHeightCreatePin>div>div>li:last");

	if(jQuery(".listHeightCreatePin>div>div>li").length > 1) {
		jQuery(".deleteBtnBlyst").show();
	}
}
//Add Rows Add Pin

//Delete Rows Add Pin
function deleteRow() {
	jQuery(".listHeightCreatePin>div>div>li:last").remove();
	if(jQuery(".listHeightCreatePin>div>div>li").length == 1) {
		jQuery(".deleteBtnBlyst").hide();
	}
}
//Delete Rows Add Pin

//Save a Pin 
function saveblyst(event) {
	var blystId = jQuery("input[name='BlystId']").val();
	var boardID = event;
	jQuery.ajax({
		async: true,
		type: "POST",
		url: link+'/wp-content/themes/blysty/ajax/boardBlystAdd.php',		
		dataType: 'html',
		cache: false,
		data:{blystId:blystId,boardID:boardID,format:'raw'},
		success:function(resp){
			toastr.success("Blyst Create Successfully");
			jQuery("#chooseBlysty").modal("hide");
		}
		
	});
}
    jQuery(document).ready(function(){
    	
    jQuery(window).scroll(function(){
    	var checkVal = 0;
      var visible = jQuery(".footer_section").visible( "partial" );
      if(visible == true) {
      	 	disableScroll();
      	var checkVal = parseInt(checkVal) + 1;
     
      jQuery(".loader").hide();
      var checkMyscroll = jQuery("input[name='myscrollCount']").val();
      if(checkVal == checkMyscroll) {
      	enableScroll();
      	return false;
      } else {
      	jQuery("input[name='myscrollCount']").val(checkVal);
      }
      if(checkVal != 1)  {
		
      }
      	

	var blystId = jQuery("input[name='myPagination']").val();

		blystId = parseInt(blystId) + 1;
		jQuery.ajax({
			async: true,
			type: "POST",
			url: link+'/wp-content/themes/blysty/ajax/getOwnPins.php',		
			dataType: 'html',
			cache: false,
			data:{blystId:blystId,format:'raw'},
			success:function(resp){
				 var check = 0;
				enableScroll();
				if(resp == "") {
					jQuery(".loader").empty();
				} else {
     				 jQuery(".loader").show();
					jQuery(".post-list").append(resp);
					jQuery("input[name='myPagination']").val(blystId);
					var $grid = jQuery('.grid').isotope({
						// options
						itemSelector: '.grid-item',
						layoutMode: 'packery'
					});
					// layout Isotope after each image loads
					$grid.imagesLoaded().progress( function() {
						$grid.isotope('layout');
					});
					allEvents();
				}
				
			}
			
		});
      } else {
        jQuery("body").removeClass("creatAcc");
      }
    });
  })
//Save a Pin 
	function allEvents() {
		alert("aaaaaaaaaaa");
		var headheight = jQuery('header').outerHeight();
		jQuery('.page-wraspper').css('padding-top', headheight);

		var target = jQuery('.tab-target').find('.active').find('a').data('tab');

		jQuery('.' + target + '-tab').show();

		/* Post Gallery Height */
		jQuery('.modified-temp .post-gallery, .modified-temp .post-gallery .post-list, .modified-temp .post-gallery .post-list .grid-item').removeAttr('style');
		var s = jQuery('.modified-temp .post-gallery .post-list .grid-item').width();
		jQuery('.modified-temp .post-gallery .post-list .grid-item').width(s);
		var itemHeight = jQuery('.modified-temp .grid-item').outerHeight();
		var rowWidth = 0;
		jQuery('.modified-temp .post-gallery .post-list .grid-item').each(function() {
			rowWidth += $(this).outerWidth();
		});
		jQuery('.modified-temp .post-gallery .post-list').css({
			'width': rowWidth
		});
		var galleryHeight = jQuery('.modified-temp .post-gallery-wrapper').outerHeight();
		var listHeight = jQuery('.modified-temp .post-list').outerHeight();
		var scrollHeight = galleryHeight - listHeight;
		jQuery('.modified-temp .post-gallery-wrapper').css('margin-bottom', "-" + scrollHeight + 'px');

		jQuery(".empty-box").each(function() {
			jQuery(this).removeAttr('style');
			var ht = jQuery(this).parent().outerHeight();
			jQuery(this).css('height', ht - 4);
		});

		var ht = jQuery('.boardsWrapper').outerHeight();
		jQuery(".loginformContainer").css('height', ht);
	}

//Password Blur, my Account
	jQuery(document).ready(function(){
		jQuery(".passwordMyAccount").focus(function(){
			if(jQuery(this).val() == "DefaultPassword") {
				jQuery(this).val("");
			}
		});
	});
//Password Blur, my Account


function likeTheBlyst(pinID , event) {
	jQuery.ajax({
		async: true,
		type: "POST",
		url: link+'/wp-content/themes/blysty/ajax/likePin.php',	
		cache: false,
		data:{pinID:pinID,format:'raw'},
		success:function(resp){
			if(resp == 1) {
				var countt = jQuery(event).find("span").text();
				
				var FINN = parseInt(countt) + 1;
				jQuery(event).find("span").text(FINN);
				jQuery(event).addClass("active");
				toastr.success("Blyst successfully Liked");
			} else {
				var countt = jQuery(event).find("span").text();
				var FINN = parseInt(countt) - 1;
				jQuery(event).find("span").text(FINN);
				jQuery(event).removeClass("active");
				toastr.success("Blyst successfully Unliked");
			}
		}
		
	});
}


function getMyBlyst(pinID) {
		jQuery.ajax({
		async: true,
		type: "POST",
		url: link+'wp-content/themes/blysty/ajax/getPinDetails.php',	
		cache: false,
		data:{pinID:pinID,format:'raw'},
		success:function(resp){
			jQuery(".myBlystEdit").empty().append(resp);
			jQuery("#editBlysty").modal("show");
		}
		
	});
}


function getMyBoard(boardID) {
		jQuery.ajax({
		async: true,
		type: "POST",
		url: link+'wp-content/themes/blysty/ajax/getBoardDetails.php',	
		cache: false,
		data:{boardID:boardID,format:'raw'},
		success:function(resp){
			jQuery(".editMyBoard").empty().append(resp);
			jQuery("#editBoard").modal("show");
		}
		
	});
}


function formSubmitUpdate(e) {
    var postData = jQuery("#update_blyst").serializeArray();
	 jQuery.ajax({
		async: true,
		type: "POST",
		url: link+'wp-content/themes/blysty/ajax/updateBlyst.php',	
		cache: false,
		data:{postData:postData,format:'raw'},
		success:function(data){
			console.log(data);
			if(data == "Invalid Image Format") {
				toastr.error("Only Image attachment files are alowed");
			} else {
				toastr.success("Blyst SuccessFully Updated");
				/*setTimeout(function(){
					 location.reload();
				}, 1000);*/
			}
		}
		
	});
}


jQuery(function($) {
		jQuery('#update_board').validate({
			submitHandler: function(form) {
				var link = jQuery("input[name='link']").val()
				jQuery(form).ajaxSubmit({
					type: "POST",
					data: jQuery(form).serialize(),
					url: link+'/wp-content/themes/blysty/ajax/updateBoard.php', 
					success: function(data) 
					{
						toastr.success("Board Successfully");
						setTimeout(function(){
							 location.reload();
						}, 1000);
					}
				});
			}
			
		});
	});

function formSubmitUpdate(e) {
    var postData = jQuery("#update_board").serializeArray();
	 jQuery.ajax({
		async: true,
		type: "POST",
		url: link+'wp-content/themes/blysty/ajax/updateBoard.php',	
		cache: false,
		data:{postData:postData,format:'raw'},
		success:function(data){
			toastr.success("Board Successfully Updated");
			setTimeout(function(){
				 location.reload();
			}, 1000);
		}
		
	});
}

var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() {
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  
}

function followTheUser(event , status) {
	jQuery.ajax({
		async: true,
		type: "POST",
		url: link+'wp-content/themes/blysty/ajax/followUser.php',	
		cache: false,
		data:{event:event,format:'raw'},
		success:function(data){
			if(data == "already") {
				toastr.error("You are already following");
			} else {
				var MyCount = jQuery(".myFollowersCount").text();
				var arrayStr = MyCount.split(" ");
				var Finval = parseInt(arrayStr[0]) + 1;
				jQuery(".myFollowersCount").text(Finval+" Followers");
				jQuery(status).removeAttr("onclick");
				jQuery(status).text("Following "+data);
				toastr.success("You are now following "+data);
			}
			
		}
		
	});
}


jQuery(document).ready(function(){
	setInterval(function(){ 
		var MyDivLen = jQuery(".ourCateImage").length;
		if(MyDivLen != 0) {
			jQuery(".ourCateImage").each(function(){
				var Order = jQuery(this).find(".img-wrapper").find(".mySelectedCatEQ").val();
				var pinID = jQuery(this).find(".img-wrapper").find(".mySelectedPins").val();
				var catID = jQuery(this).find(".img-wrapper").find(".mySelectedCat").val();
				jQuery.ajax({
					async: true,
					type: "POST",
					url: link+'wp-content/themes/blysty/ajax/getLatestPinOfCat.php',	
					cache: false,
					data:{Order:Order,pinID:pinID,catID:catID,format:'raw'},
					success:function(data){
						if(data != "") {
							jQuery(".ourCateImage:eq("+Order+")").empty().append(data);
						}
					}
					
				});
			})
		}
	 }, 60000);
});

function getMyBlystDetails(pinID) {
	jQuery.ajax({
		async: true,
		type: "POST",
		url: link+'wp-content/themes/blysty/ajax/getMyBlystDetails.php',	
		cache: false,
		data:{pinID:pinID,format:'raw'},
		success:function(data){
			if(data != "") {
				jQuery(".popupinnerblystyList").empty().append(data);
				jQuery("#blystyList").modal("show");
			}
		}
		
	});
}