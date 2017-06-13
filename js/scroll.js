$(document).ready(function() {
	$(".banner a").click(function() {
		name = $(this).attr('href');
		var scroll1 = $(name).position().top;
		$('html, body').stop().animate({scrollTop:scroll1}, 800)
	});
	$("#my-form").submit(function () {
	// alert('1');
	// document.write('manh');
        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#message").val();
        var flag = true;
        if(name == "")
        {	
            $("#name_errors").text("Bạn chưa nhập tên!");
            flag = false;
        }else{
        	$("#name_errors").text("");
        	if(email == ""){
            $("#email_errors").text("Bạn chưa nhập email!");
            flag = false;
        	}else{
	            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	            var result =  re.test(email);
	            if(result == false){
	                $("#email_errors").text("Email sai định dạng");
	                flag = false;
	            }else{
	            	$("#email_errors").text("");
	            	if(message == ""){
		            	$("#message_errors").text("Bạn chưa nhập message");
		            	flag = false;
	       			}else{
	       				flag = true;
	       			}
	            }
	        }
        }
        return flag;
    });

    $(".zoom").click(function(){
    	// $("#modal-image").removeAttr('style');
    	var src = $(this).parents(".pic").children(".image").attr("src"); 
    	$(this).parents(".pic").children(".image").addClass('active-modal');
    	$("#modal-image").attr("src",src);
    	
    });

    $(".prv").click(function() {
    	if ($(".pic-showcase .active-modal").parents(".pic").prev().is(".pic")) {
	    	$(".pic-showcase .active-modal").parents(".pic").prev().children(".image").addClass("active-modal")
	    	$("#modal-image").fadeOut('250',function (){
	    		$(".active-modal").last().removeClass("active-modal");
		    	var src = $(".pic-showcase .active-modal").attr("src");
		    	// document.write(src);
		    	$("#modal-image").attr("src",src);
	    	});
	    	$("#modal-image").fadeIn('250');
    	}else{
    		$(".pic-showcase .pic .image").last().addClass("active-modal");
    		$(".pic-showcase .pic .image").first().removeClass("active-modal");
    		$("#modal-image").fadeOut('250',function (){
    			var src = $(".pic-showcase .pic .image").last().attr("src");
	    		// document.write(src);
	    		$("#modal-image").attr("src",src);
    		});
    		$("#modal-image").fadeIn('250');
    	}
    	
    });

    $(".next").click(function() {
    	if ($(".pic-showcase .active-modal").parents(".pic").next().is(".pic")) {
    		$(".pic-showcase .active-modal").parents(".pic").next().children(".image").addClass("active-modal")
	    	$("#modal-image").fadeOut('250',function () {
	    		$(".active-modal").first().removeClass("active-modal");
	    		var src = $(".pic-showcase .active-modal").attr("src");
	    		$("#modal-image").attr("src",src);
	    	});
	    	$("#modal-image").fadeIn('250');
    	}else{
    		$(".pic-showcase .pic .image").first().addClass("active-modal");
    		$(".pic-showcase .pic .image").last().removeClass("active-modal");
    		$("#modal-image").fadeOut('250',function (){
    			var src = $(".pic-showcase .pic .image").first().attr("src");
	    		// document.write(src);
	    		$("#modal-image").attr("src",src);
    		});
    		$("#modal-image").fadeIn('250');
    	}
    });
});

// window.onload = function(){
// 	$form.addEventListener('submit', function(e){
// 		 e.preventDefault();	
// 		// var form_state = {
// 		// };
// 		var $name = $form.querySelector('#name');
// 		var $email = $form.querySelector('#email');
// 		var $message = $form.querySelector('#message');
// 		if(!$name.value){
// 			// console.log('invalid name');
// 			$form.querySelector('.form-validate__name').style.display  = 'block';
// 		}else{
// 			$form.querySelector('.form-validate__name').style.display  = 'none';
// 			if (!$email.value) {
// 			$form.querySelector('.form-validate__email').style.display = 'block';
// 			}else{
// 				$form.querySelector('.form-validate__email').style.display = 'none';
// 				if (!$message.value) {
// 					$form.querySelector('.form-validate__message').style.display = 'block';
// 				}else{
// 					$form.querySelector('.form-validate__message').style.display = 'none';
// 					document.getElementById("my-form")[0].submit();
// 				}
// 			}
// 		}
// 	})
// }


