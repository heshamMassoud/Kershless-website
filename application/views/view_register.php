<!--<? header("Content-Type: text/html; charset=UTF-8"); ?>-->

<!-- //**local_to_global FOR all  paths remove '/Kershless'-->

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<title>Welcome to CodeIgniter</title>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript"
	src="/Assets/js/jquery.tipsy.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/Assets/css/tipsy.css"
	type="text/css" />
<link rel="stylesheet"
	href="/Assets/css/kershless_form_stylesheet.css"
	type="text/css" />
<script type='text/javascript' id="jqFunctions">
	// Required for drag and drop file access
	jQuery.event.props.push('dataTransfer');
	
  	$(function() {
		
		var profile_picture_name = "empty";
		var weight_image_name = "empty";
		var height_image_name = "empty";
		//$('#example-1').tipsy();
		
		
		
		if($('#country').attr('class') == 'input_form_error')
		{
			$('#country').attr('title', $('#country_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#country').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#country').tipsy('show');
		}
		
		if($('#nationality').attr('class') == 'input_form_error')
		{
			$('#nationality').attr('title', $('#nationality_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#nationality').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#nationality').tipsy('show');
		}
		
		if($('#profile_picture_upload').attr('class') == 'input_form_error')
		{
			$('#profile_picture_upload').attr('title', $('#profile_picture_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#profile_picture_upload').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#profile_picture_upload').tipsy('show');
		}
		
		if($('#weight_upload_div').attr('class') == 'input_form_error')
		{
			$('#weight_upload_div').attr('title', $('#weight_image_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#weight_upload_div').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#weight_upload_div').tipsy('show');
		}
		
		if($('#height_upload_div').attr('class') == 'input_form_error')
		{
			$('#height_upload_div').attr('title', $('#height_image_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#height_upload_div').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#height_upload_div').tipsy('show');
		}
		
		if($('#fullname').attr('class') == 'input_form_error')
		{
			$('#fullname').attr('title', $('#fullname_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#fullname').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#fullname').tipsy('show');
		}
		
		if($('#mobile_number').attr('class') == 'input_form_error')
		{
			$('#mobile_number').attr('title', $('#mobile_number_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#mobile_number').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#mobile_number').tipsy('show');
		}
		
		if($('#dial_code').attr('class') == 'input_form_error')
		{
			$('#dial_code').attr('title', $('#dial_code_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#dial_code').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#dial_code').tipsy('show');
		}
		
		if($('#weight').attr('class') == 'input_form_error')
		{
			$('#weight').attr('title', $('#weight_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#weight').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'w'});
			$('#weight').tipsy('show');
		}
		
		if($('#height').attr('class') == 'input_form_error')
		{
			$('#height').attr('title', $('#height_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#height').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'e'});
			$('#height').tipsy('show');
		}
		
		if($('#reason').attr('class') == 'input_form_error')
		{
			$('#reason').attr('title', $('#reason_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#reason').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#reason').tipsy('show');
		}
		
		if($('#provocation').attr('class') == 'input_form_error')
		{
			$('#provocation').attr('title', $('#provocation_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#provocation').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'n'});
			$('#provocation').tipsy('show');
		}
		
		if($('#email').attr('class') == 'input_form_error')
		{
			$('#email').attr('title', $('#email_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#email').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#email').tipsy('show');
		}
		
		if($('#facebook').attr('class') == 'input_form_error')
		{
			$('#facebook').attr('title', $('#facebook_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#facebook').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#facebook').tipsy('show');
			return false;
		}
		
		if($('#friend_code').attr('class') == 'input_form_error')
		{
			$('#friend_code').attr('title', $('#friend_code_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#friend_code').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#friend_code').tipsy('show');
			return false;
		}
		
		if($('#overall_agreement_hidden_error').attr('value') != '')
		{
			//alert($('#overall_agreement_hidden_error').attr('value'));
			$('#overall_agreement').attr('title', $('#overall_agreement_hidden_error').attr('value'));
			//alert($('#fullname').attr('title'));
			$('#overall_agreement').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#overall_agreement').tipsy('show');
		}
		
		//$('#mobile_number').tipsy({trigger: 'focus', gravity: 'w', fade:false, html:true,opacity: 1,gravity:'s'});
		//$('#country_code').tipsy({trigger: 'focus', gravity: 'w', fade:false, html:true,opacity: 1,gravity: 'w'});
		
		$("#profile_picture_upload").on('drop', function(e) {
			if( !e ) e = window.event;
			$('#profile_picture_upload').attr('style','background: url(\'/Assets/Images/loader.gif\') no-repeat 50 50');
			var x=document.getElementById("profile_picture_upload");
			if(x.firstChild != null && (e.target.files[0]!=null))
			{
				x.removeChild(x.firstChild);
			}
		   // Or else the browser will open the file
		  e.preventDefault && e.preventDefault();
		   $("#profile_picture_upload").attr('class', 'normal');
		   // Do something with the file(s)
		   var files = e.dataTransfer.files;
		   var formData = new FormData();
	   
		   var file = e.dataTransfer.files[0];
		   
		   formData.append('file', file);
		    if (file.type.match('image.*')) {
		      // Deal with file
			  // now post a new XHR request
			  var xhr = new XMLHttpRequest();
			  if(profile_picture_name=="empty")
			  {
				  
			  }
			  else
			  {
				  //alert(image_name);
				  //alert("/kershlesswebsite/uploads/" + image_name);
				  $.ajax({
					  type: 'POST',
					  data: {
						  action: 'deleteimage',
						  imagefile: profile_picture_name,
					  },
					  url: '/Assets/scripts/delete_file.php',
					  success: function(msg) {
						  //alert(msg);
					  }
				  })
				  
			  }
			  
			  xhr.open('POST', '/Assets/scripts/handle_file_upload.php', true);
			  xhr.onload = function () {
			    if (xhr.status === 200) {
					//alert(this.response.indexOf("Invalid file"));
					if(this.response.indexOf("Invalid file") >= 0)
					{
						alert("Invalid file uploaded!");
					}
					else
					{
					var image = document.createElement('img');		
					resp = JSON.parse(this.response);
					image.src = resp.dataUrl;
					profile_picture_name = resp.name;
					
					setTimeout(function(){
						var imageWidth = image.width;
						var imageHeight = image.height;
						
						var aspectRatio = imageWidth/imageHeight;
						//alert(image.width + "X" + image.height);
						image.width = "126";
						image.id = "draggableImg0";
						image.height = (126*imageHeight)/(imageWidth);
						image.style.left = "0px";
						image.style.top = image.height/4 + "px";
						//alert(image.width + "X" + image.height);
			
						var x=document.getElementById("profile_picture_upload");
						//x.style.backgroundColor = "white";
						var newDiv = document.createElement("div");
						newDiv.id = "draggable0";
						newDiv.style.cursor = "move";
						x.appendChild(newDiv);
						newDiv.appendChild(image);
					
						$("#draggable0").draggable();
					
					},100);
					/* $.post("<?php echo base_url(); ?>test/add", {name: msg}, function(data) {
					   $this.load(data.url);
					 },"json");
					
			*/
						$('#profile_picture_upload').attr('style','background: url(\'/Assets/Images/loader.gif\') no-repeat 150 150');
					}
			      //console.log('all done: ' + xhr.status);
			    } else {
					alert("Something went terribly wrong...!");
			      //console.log('Something went terribly wrong...');
			    }
			  };
			  xhr.send(formData);
			  $('#profile_picture_upload').tipsy('hide');
			  //$('#profile_picture_upload').attr('class','normal');
			  
		    } else {
		      //alert("However you want to handle error that dropped file wasn't an image");
			  alert(":) لو سمحت حط صورة");
		    }
	   

		});
		
		
		$("#profile_picture_upload").hover(
		  function () {
		 	$(this).css( 'cursor', 'pointer');
			$('#profile_picture_upload').attr('title', 'Drag & Drop or Click to upload');
			//alert($('#fullname').attr('title'));
			$('#profile_picture_upload').tipsy({trigger: 'hover', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#profile_picture_upload').tipsy('show');
			//$("#profile_picture_upload").attr('class', 'hover');TEMPORARY(HARGA3LAHA)
		  },
		  function () {
			  $('#profile_picture_upload').tipsy('hide');
		    //$("#profile_picture_upload").attr('class', 'normal');TEMPORARY(HARGA3LAHA)
		  }
		);
		
		$("#profile_picture_file_upload").change(function(e) {
			if( !e ) e = window.event;
			$('#profile_picture_upload').attr('style','background: url(\'/Assets/Images/loader.gif\') no-repeat 55 55');
			var x=document.getElementById("profile_picture_upload");
			if(x.firstChild != null && (e.target.files[0]!=null))
			{
				x.removeChild(x.firstChild);
			}

			var formData = new FormData();
			var file = e.target.files[0];//should be changed to e for firefox
			formData.append('file', file);
			if (file.type.match('image.*')) {
				// Deal with file
				// now post a new XHR request
				var xhr = new XMLHttpRequest();
				if(profile_picture_name=="empty")
				{
					
				}
				else
				{
					//alert(image_name);
					//alert("/kershlesswebsite/uploads/" + image_name);
					$.ajax({
						type: 'POST',
						data: {
							action: 'deleteimage',
							imagefile: profile_picture_name,
						},
						url: '/Assets/scripts/delete_file.php',
						success: function(msg) {
							//alert(msg);
						}
					})
				}
				xhr.open('POST', '/Assets/scripts/handle_file_upload.php', true);
				
				xhr.onload = function () {
					if (xhr.status === 200) {
						//alert(this.response.indexOf("Invalid file"));
						if(this.response.indexOf("Invalid file") >= 0)
						{
							alert("Invalid file uploaded!");
						}
						else
						{
							var image = document.createElement('img');
							resp = JSON.parse(this.response);
							
							image.src = resp.dataUrl;
							profile_picture_name = resp.name;
						
							
							
							setTimeout(function()
							{
								var imageWidth = image.width;
								var imageHeight = image.height;
								
								var aspectRatio = imageWidth/imageHeight;
								//alert(image.width + "X" + image.height);
	 							image.width = "126";
	 							image.id = "draggableImg0";
	 							image.height = (126*imageHeight)/(imageWidth);
	 							image.style.left = "0px";
	 							image.style.top = image.height/4 + "px";
	 							//alert(image.width + "X" + image.height);
			
	 							var x=document.getElementById("profile_picture_upload");
							
			
	 							var newDiv = document.createElement("div");
	 							newDiv.id = "draggable0";
	 							newDiv.style.cursor = "move";
	 							x.appendChild(newDiv);
	 							newDiv.appendChild(image);
					
	 							$("#draggable0").draggable();
							},100);
							//alert('uploaded');
							$('#profile_picture_upload').attr('style','background: url(\'/Assets/Images/loader.gif\') no-repeat 150 150');
						}
						 //console.log('all done: ' + xhr.status);
					}
					else {
						alert("Something went terribly wrong...!");
					}
				};
				xhr.send(formData);
				$('#profile_picture_upload').tipsy('hide');
				
				//$('#profile_picture_upload').attr('class','normal');
			}
			else {
				alert(":) لو سمحت حط صورة");
			}
		});
		
		
		$("#bottom_middle_submit").click(function(event) {
			var full_name_validator = false;
			var weight_validator = false;
			var height_validator = false;
			var nationality_validator = true;
			var country_validator = true;
			var reason_validator = false;
			var provocation_validator = false;
			var email_validator = false;
			var facebook_validator = false;
			var mobile_number_validator = false;
			var dial_code_validator = false;
			var profile_picture_validator = true;
			var weight_image_validator = true;
			var height_image_validator = true;
			var overall_checkbox_validator = true;
			if(!document.getElementById("overall_agreement").checked)
			{
				$('#overall_agreement').attr('title','	إقرار البيانات من فضلك');
				$('#overall_agreement').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#overall_agreement').tipsy('show');
				overall_checkbox_validator = false;
			}
			if(height_image_name == "empty")
			{
				$("#height_upload_div").attr('class', 'input_form_error');
				$('#height_upload_div').attr('title', 'صورة طولك من فضلك');
				//alert($('#fullname').attr('title'));
				$('#height_upload_div').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#height_upload_div').tipsy('show');
				height_image_validator = false;
			}
			if(weight_image_name == "empty")
			{
				$("#weight_upload_div").attr('class', 'input_form_error');
				$('#weight_upload_div').attr('title', '	صورة وزنك من فضلك');
				//alert($('#fullname').attr('title'));
				$('#weight_upload_div').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#weight_upload_div').tipsy('show');
				weight_image_validator = false;
			}
			if(profile_picture_name == "empty")
			{
				$("#profile_picture_upload").attr('class', 'input_form_error');
				$('#profile_picture_upload').attr('title', 'الصورة الشخصية من فضلك');
				//alert($('#fullname').attr('title'));
				$('#profile_picture_upload').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#profile_picture_upload').tipsy('show');
				profile_picture_validator = false;
			}
			if(mobile_number_client_validation_blur())
			{
				mobile_number_validator = true;
			}
			if(dial_code_client_validation_blur())
			{
				dial_code_validator = true;
			}
			if(facebook_client_validation_blur())
			{
				facebook_validator = true;
			}
			if(email_client_validation_blur())
			{
				email_validator = true;
			}
			if(reason_client_validation_blur())
			{
				reason_validator = true;
			}
			if(provocation_client_validation_blur())
			{
				provocation_validator = true;
			}
			if(weight_client_validation_blur())
			{
				weight_validator = true;
			}
			if(height_client_validation_blur())
			{
				height_validator = true;
			}
			if(full_name_client_validation_blur())
			{
				full_name_validator = true;
			}
			
			if(document.getElementById("nationality").value == 'NONE' || document.getElementById("nationality").value == '')
			{
				$("#nationality").attr('class', 'input_form_error');
				$('#nationality').attr('title', 'الجنسية من فضلك');
				$('#nationality').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#nationality').tipsy('show');
				nationality_validator = false;
			}
			else
			{
				$("#nationality").attr('class', 'input_form');
				$('#nationality').tipsy('hide');
				nationality_validator = true;
			}
			
			if(document.getElementById("country").value == 'NONE' || document.getElementById("country").value == '')
			{
				$("#country").attr('class', 'input_form_error');
				$('#country').attr('title', '	بلد الإقامة من فضلك');
				$('#country').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#country').tipsy('show');
				nationality_validator = false;
			}
			else
			{
				$("#country").attr('class', 'input_form');
				$('#country').tipsy('hide');
				country_validator = true;
			}
			
			if(full_name_validator && nationality_validator && country_validator && weight_validator && height_validator && 				provocation_validator && reason_validator && email_validator && facebook_validator && mobile_number_validator && 					profile_picture_validator && weight_image_validator && height_image_validator && overall_checkbox_validator && 						dial_code_validator)
			{
				$("#form_submitter").click();
			}
		});
		/*
		$("#weight_upload_div").hover(
  		  function () {
	  		$('#weight_upload_div').attr('title', '<img src="/Assets/Images/weight_example.jpg">');
	  		$('#weight_upload_div').tipsy({trigger: 'hover', fade:false, html:true,opacity: 1,gravity:'w'});
			$('#weight_upload_div').tipsy('show');
  		  },
  		  function () {
			  $('#weight_upload_div').tipsy('hide');
  		    //$("#profile_picture_upload").attr('class', 'normal');TEMPORARY(HARGA3LAHA)
  		  }
  		);*/
		
		$("#profile_picture_upload").click(function(event) {
			$("#profile_picture_file_upload").click();
		});
	
		$("#profile_picture_upload").on("dragover", function(event) {

		  // Do something to UI to make page look droppable
		  
		  $("#profile_picture_upload").attr('class', 'hover');
		  
		  
		  
		  // Required for drop to work
		  return false;
		});
		
	
		$("#profile_picture_upload").on("dragleave", function(event) {

		  // Remove UI change
		  $("#profile_picture_upload").attr('class', 'normal');

		});
		
		
		$("#weight_image_file_upload").change(function(e) {
			if( !e ) e = window.event;
			if(e.target.files[0]!=null)
			{
				$('#weight_upload_div').attr('class','input_form');
			}
			var formData = new FormData();
			var file = e.target.files[0];
			formData.append('file', file);
			if (file.type.match('image.*')) {
				// Deal with file
				// now post a new XHR request
				var xhr = new XMLHttpRequest();
				if(weight_image_name=="empty")
				{
				}
				else
				{
					$.ajax({
						type: 'POST',
						data: {
							action: 'deleteimage',
							imagefile: weight_image_name,
						},
						url: '/Assets/scripts/delete_file.php',
						success: function(msg) {
							//alert(msg);
						}
					})
				}
				
				$('#weight_upload_div').attr('class','loading');
				var weight_upload_text=document.getElementById("weight_upload_button");
				weight_upload_text.innerHTML = "&nbsp;";
				xhr.open('POST', '/Assets/scripts/handle_file_upload.php', true);
				xhr.onload = function () {
					if (xhr.status === 200) {
						//alert(this.response.indexOf("Invalid file"));
						if(this.response.indexOf("Invalid file") >= 0)
						{
							alert("Invalid file uploaded!");
						}
						else
						{
							resp = JSON.parse(this.response);
							weight_image_name = resp.name;
							$('#weight_upload_div').attr('class','uploaded');
							var weight_upload_text=document.getElementById("weight_upload_button");
							weight_upload_text.innerHTML = "تم رفع الصورة";
							$('#weight_upload_div').tipsy('hide');
						}
					}
					//console.log('all done: ' + xhr.status);
					else {
						alert("Something went terribly wrong...!");
						//console.log('Something went terribly wrong...');
					}
				};
				xhr.send(formData);
				//$('#weight_upload_div').attr('class','uploaded');
				//$('#weight_upload_div').tipsy('hide');
			}
			else {
				alert(":) لو سمحت حط صورة");
			}
		});
	
		$("#height_image_file_upload").change(function(e) {
			if( !e ) e = window.event;
			if(e.target.files[0]!=null)
			{
				$('#height_upload_div').attr('class','input_form');
			}
			var formData = new FormData();
			var file = e.target.files[0];
			formData.append('file', file);
			if (file.type.match('image.*')) {
				// Deal with file
				// now post a new XHR request
				var xhr = new XMLHttpRequest();
				if(height_image_name=="empty")
				{
				}
				else
				{
					$.ajax({
						type: 'POST',
						data: {
							action: 'deleteimage',
							imagefile: height_image_name,
						},
						url: '/Assets/scripts/delete_file.php',
						success: function(msg) {
							//alert(msg);
						}
					})
				}
				$('#height_upload_div').attr('class','loading');
				var height_upload_text=document.getElementById("height_upload_button");
				height_upload_text.innerHTML = "&nbsp;";
				xhr.open('POST', '/Assets/scripts/handle_file_upload.php', true);
				xhr.onload = function () {
					if (xhr.status === 200) {
						//alert(this.response.indexOf("Invalid file"));
						if(this.response.indexOf("Invalid file") >= 0)
						{
							alert("Invalid file uploaded!");
						}
						else
						{
							
							resp = JSON.parse(this.response);
							height_image_name = resp.name;
							$('#height_upload_div').attr('class','uploaded');
							var height_upload_text=document.getElementById("height_upload_button");
							height_upload_text.innerHTML = "تم رفع الصورة";
							$('#height_upload_div').tipsy('hide');
						}
					}
					//console.log('all done: ' + xhr.status);
					else {
						alert("Something went terribly wrong...!");
						//console.log('Something went terribly wrong...');
					}
				};
				xhr.send(formData);
				//$('#height_upload_div').attr('class','uploaded');
				//$('#height_upload_div').tipsy('hide');
			}
			else {
				alert(":) لو سمحت حط صورة");
			}
		});
		
		
		$("#weight_upload_button").click(function(event) {
			$("#weight_image_file_upload").click();
		});
		
		$("#height_upload_button").click(function(event) {
			$("#height_image_file_upload").click();
		});
		
		
		$('#form_submitter').click(function(e){
			//e.preventDefault();
				/*
				var image = $('#draggable0');
				alert(image_name);
				var userLeft = image.attr('offsetLeft');
				var userTop = image.attr('offsetTop');
				
				var image_n ="Name:-"+image_name+"Position:-\n"+userLeft+","+userTop;
				*/
				//alert(image_name);
				//alert(profile_picture_name + "" + weight_image_name +  "" + height_image_name);
			$("#profile_picture_name").attr('value', profile_picture_name);
			$("#weight_image_name").attr('value', weight_image_name);
			$("#height_image_name").attr('value', height_image_name);
		});
		
		$('*').keypress(function(e)
		{
			 // if the key pressed is the enter key=
			 if (e.keyCode == 13)
			 {
				 $("#bottom_middle_submit").click();
				 return false;
			 }
		 });
		
		
		$('#nationality').change(function() {
			var field = document.getElementById("nationality");
			if(field.value == 'NONE' || field.value == '' )
			{
				$("#nationality").attr('class', 'input_form_error');
				$('#nationality').attr('title', '	الجنسية من فضلك');
				$('#nationality').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#nationality').tipsy('show');
				//return false;
			}
			else
			{
				$("#nationality").attr('class', 'input_form');
				$('#nationality').tipsy('hide');
				//return true;
			}
		});
		
		$('#country').change(function() {
			var field = document.getElementById("country");
			if(field.value == 'NONE' || field.value == '')
			{
				$("#country").attr('class', 'input_form_error');
				$('#country').attr('title', '	بلد الإقامة من فضلك');
				$('#country').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#country').tipsy('show');
				//return false;
			}
			else
			{
				$("#country").attr('class', 'input_form');
				$('#country').tipsy('hide');
				//return true;
			}
		});
			
	});
	
	function full_name_client_validation_blur()
	{
		var field = document.getElementById("fullname");
		if(field.value == '')
		{
			$("#fullname").attr('class', 'input_form_error');
			$('#fullname').attr('title', '	الإسم من فضلك');
			$('#fullname').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#fullname').tipsy('show');
			return false;
		}
		else{
			var regex_1 =/^ *[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]+ +[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]+ +[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]+ *$/;
			//var regex_2 =/^[A-Za-z][a-z]* [A-Za-z][a-z]* [A-Za-z][a-z]* *$/;
			if (!regex_1.test(field.value))// && !regex_2.test(field.value))
			{
				$("#fullname").attr('class', 'input_form_error');
				$('#fullname').attr('title', 'الإسم ثلاثي و باللغة العربية من فضلك');
				$('#fullname').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#fullname').tipsy('show');
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	
	function full_name_client_validation_focus()
	{
		$("#fullname").attr('class', 'input_form');
		$('#fullname').tipsy('hide');
	}
	
	function weight_client_validation_blur()
	{
		var field = document.getElementById("weight");
		if(field.value == '')
		{
			$("#weight").attr('class', 'input_form_error');
			$('#weight').attr('title', '	وزنك بالكجم من فضلك');
			$('#weight').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'w'});
			$('#weight').tipsy('show');
			return false;
		}
		else{
			var regex =/^[1-9][0-9]?[0-9]?(\.[0-9]+)?$/;
			if (!regex.test(field.value))
			{
				$("#weight").attr('class', 'input_form_error');
				$('#weight').attr('title', 'هذا الوزن غير صحيح');
				$('#weight').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'w'});
				$('#weight').tipsy('show');
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	
	function weight_client_validation_focus()
	{
		$("#weight").attr('class', 'input_form');
		$('#weight').tipsy('hide');
	}
	
	function height_client_validation_blur()
	{
		var field = document.getElementById("height");
		if(field.value == '')
		{
			$("#height").attr('class', 'input_form_error');
			$('#height').attr('title', '	طولك بالمتر من فضلك');
			$('#height').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'e'});
			$('#height').tipsy('show');
			return false;
		}
		else{
			var regex =/^[0-2](\.[0-9]+)?$/;
			if (!regex.test(field.value))
			{
				$("#height").attr('class', 'input_form_error');
				$('#height').attr('title', 'هذا الطول غير صحيح');
				$('#height').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'e'});
				$('#height').tipsy('show');
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	
	function height_client_validation_focus()
	{
		$("#height").attr('class', 'input_form');
		$('#height').tipsy('hide');
	}
	
	function reason_client_validation_blur()
	{
		var field = document.getElementById("reason");
		if(field.value == '')
		{
			$("#reason").attr('class', 'input_form_error');
			$('#reason').attr('title', '	هدفك من المشاركة من فضلك');
			$('#reason').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#reason').tipsy('show');
			return false;
		}
		else{
				return true;
		}
	}
	
	function reason_client_validation_focus()
	{
		$("#reason").attr('class', 'input_form');
		$('#reason').tipsy('hide');
	}
	
	function provocation_client_validation_blur()
	{
		var field = document.getElementById("provocation");
		if(field.value == '')
		{
			$("#provocation").attr('class', 'input_form_error');
			$('#provocation').attr('title', 'كلمة للمنافسين من فضلك');
			$('#provocation').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'n'});
			$('#provocation').tipsy('show');
			return false;
		}
		else{
			return true;
		}
	}
	
	function provocation_client_validation_focus()
	{
		$("#provocation").attr('class', 'input_form');
		$('#provocation').tipsy('hide');
	}
	
	function email_client_validation_blur()
	{
		var field = document.getElementById("email");
		if(field.value == '')
		{
			$("#email").attr('class', 'input_form_error');
			$('#email').attr('title', 'البريد الالكتروني من فضلك');
			$('#email').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#email').tipsy('show');
			return false;
		}
		else{
			var regex =/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
			if (!regex.test(field.value))
			{
				$("#email").attr('class', 'input_form_error');
				$('#email').attr('title', 'هذا الايميل غير صحيح');
				$('#email').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#email').tipsy('show');
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	
	function email_client_validation_focus()
	{
		$("#email").attr('class', 'input_form');
		$('#email').tipsy('hide');
	}
	
	function facebook_client_validation_blur()
	{
		var field = document.getElementById("facebook");
		if(field.value == '')
		{
			return true;
		}
		else{
			var regex =/^(((https:\/\/)|(http:\/\/))?(www.)?)?(((facebook)|(fb)).com\/)(([a-z0-9])+\.)*([a-z0-9])+$/;
			if (!regex.test(field.value))
			{
				$("#facebook").attr('class', 'input_form_error');
				$('#facebook').attr('title', 'الفيسبوك غير صحيح');
				$('#facebook').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#facebook').tipsy('show');
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	
	function facebook_client_validation_focus()
	{
		$("#facebook").attr('class', 'input_form');
		$('#facebook').tipsy('hide');
	}
	
	function friend_code_client_validation_blur()
	{
		var field = document.getElementById("friend_code");
		var male = document.getElementById("male_radio");
		var female = document.getElementById("female_radio");
		if(field.value == '')
		{
			return true;
		}
		else{
			var regex;
			if(male.checked)
				regex =/^1[3-9]KM(([1-9][0-9]*)|(0))((,1[3-9]KM(([1-9][0-9]*)|(0))|, 1[3-9]KM(([1-9][0-9]*)|(0))))*$/;
			else
			{
				if(female.checked)
					regex =/^1[3-9]KF(([1-9][0-9]*)|(0))((,1[3-9]KF(([1-9][0-9]*)|(0))|, 1[3-9]KF(([1-9][0-9]*)|(0))))*$/;
				else
					regex =/^1[3-9]K(M|F)(([1-9][0-9]*)|(0))((,1[3-9]K(M|F)(([1-9][0-9]*)|(0))|, 1[3-9]K(M|F)(([1-9][0-9]*)|(0))))*$/;
			}
			if (!regex.test(field.value))
			{
				$("#friend_code").attr('class', 'input_form_error');
				$('#friend_code').attr('title', 'الكود غير صحيح');
				$('#friend_code').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#friend_code').tipsy('show');
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	
	function friend_code_client_validation_focus()
	{
		$("#friend_code").attr('class', 'input_form');
		$('#friend_code').tipsy('hide');
	}
	
	function mobile_number_client_validation_blur()
	{
		var field = document.getElementById("mobile_number");
		if(field.value == '')
		{
			$("#mobile_number").attr('class', 'input_form_error');
			$('#mobile_number').attr('title', '	رقم الهاتف من فضلك');
			$('#mobile_number').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#mobile_number').tipsy('show');
			return false;
		}
		else{
			var regex =/^[0-9]*$/;
			if (!regex.test(field.value))
			{
				$("#mobile_number").attr('class', 'input_form_error');
				$('#mobile_number').attr('title', 'رقم الهاتف غير صحيح');
				$('#mobile_number').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#mobile_number').tipsy('show');
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	
	function mobile_number_client_validation_focus()
	{
		$("#mobile_number").attr('class', 'input_form');
		$('#mobile_number').tipsy('hide');
	}
	
	function dial_code_client_validation_blur()
	{
		var field = document.getElementById("dial_code");
		if(field.value == '')
		{
			$("#dial_code").attr('class', 'input_form_error');
			$('#dial_code').attr('title', '	كود البلد من فضلك');
			$('#dial_code').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#dial_code').tipsy('show');
			return false;
		}
		else{
			var regex =/^[0-9]*$/;
			if (!regex.test(field.value))
			{
				$("#dial_code").attr('class', 'input_form_error');
				$('#dial_code').attr('title', 'كود البلد غير صحيح');
				$('#dial_code').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
				$('#dial_code').tipsy('show');
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	
	function dial_code_client_validation_focus()
	{
		$("#dial_code").attr('class', 'input_form');
		$('#dial_code').tipsy('hide');
	}
	
	function toggle_overall_agreement_checkbox()
	{
		if(!document.getElementById("overall_agreement").checked)
		{
			$('#overall_agreement').attr('title','	إقرار البيانات من فضلك');
			$('#overall_agreement').tipsy({trigger: 'manual', fade:false, html:true,opacity: 1,gravity:'s'});
			$('#overall_agreement').tipsy('show');
		}
		else{
			$('#overall_agreement').tipsy('hide');
		}
		
	}
	
	</script>

<style>
/*
	div#profile_picture_upload.normal{
		text-align:center;
		border:solid;
		border-color:;
		width:126px;
		height:126px;
		border-radius:63px;
		margin-left:auto;
		margin-right:auto;
		margin-top:200px;
		overflow:hidden;
	}
	
	div#profile_picture_upload.hover{
		text-align:center;
		border:solid;
		border-color:red;
		width:126px;
		height:126px;
		border-radius:63px;
		margin-left:auto;
		margin-right:auto;
		margin-top:200px;
		overflow:hidden;
	}
	
	.form_input#fullname{
		height :25px;
		width : 200px;
		border:none;
		background: url('/kershlesswebsite/Assets/Images/user.png') no-repeat 222px 12px;
		background-color : #dbf9f9;
		padding:6px 30px 6px 15px;
	}
	
	.form_input#friend_code{
		height :25px;
		width : 200px;
		border:none;
		background: url('/kershlesswebsite/Assets/Images/user.png') no-repeat 222px 12px;
		background-color : #dbf9f9;
		padding:6px 30px 6px 15px;
	}
	
	.form_input#job{
		height :25px;
		width : 200px;
		border:none;
		background: url('/kershlesswebsite/Assets/Images/tools.png') no-repeat 222px 12px;
		background-color : #dbf9f9;
		padding:6px 30px 6px 15px;
	}
	
	.form_input#email{
		height :25px;
		width : 200px;
		border:none;
		background: url('/kershlesswebsite/Assets/Images/mail.png') no-repeat 222px 12px;
		background-color : #dbf9f9;
		padding:6px 30px 6px 15px;
	}
	
	.form_input#facebook{
		height :25px;
		width : 200px;
		border:none;
		background: url('/kershlesswebsite/Assets/Images/twitter.png') no-repeat 222px 12px;
		background-color : #dbf9f9;
		padding:6px 30px 6px 15px;
	}
	*/
</style>
</head>


<?php

//echo validation_errors();
function getCountryInformation($filter = '') {

	//Let's define the array
	$countryArray = array(
		'AD' => '376',
		'AE' => '971',
		'AF' => '93',
		'AG' => '1268',
		'AI' => '1264',
		'AL' => '355',
		'AM' => '374',
		'AN' => '599',
		'AO' => '244',
		'AQ' => array(
		'country_name' => 'ANTARCTICA',
		'dial_code' => '672'
		),
		'AR' => array(
		'country_name' => 'ARGENTINA',
		'dial_code' => '54'
		),
		'AS' => array(
		'country_name' => 'AMERICAN SAMOA',
		'dial_code' => '1684'
		),
		'AT' => array(
		'country_name' => 'AUSTRIA',
		'dial_code' => '43'
		),
		'AU' => array(
		'country_name' => 'AUSTRALIA',
		'dial_code' => '61'
		),
		'AW' => array(
		'country_name' => 'ARUBA',
		'dial_code' => '297'
		),
		'AZ' => array(
		'country_name' => 'AZERBAIJAN',
		'dial_code' => '994'
		),
		'BA' => array(
		'country_name' => 'BOSNIA AND HERZEGOVINA',
		'dial_code' => '387'
		),
		'BB' => array(
		'country_name' => 'BARBADOS',
		'dial_code' => '1246'
		),
		'BD' => array(
		'country_name' => 'BANGLADESH',
		'dial_code' => '880'
		),
		'BE' => array(
		'country_name' => 'BELGIUM',
		'dial_code' => '32'
		),
		'BF' => array(
		'country_name' => 'BURKINA FASO',
		'dial_code' => '226'
					),
					'BG' => array(
					'country_name' => 'BULGARIA',
					'dial_code' => '359'
				),
				'BH' => array(
				'country_name' => 'BAHRAIN',
				'dial_code' => '973'
					),
					'BI' => array(
					'country_name' => 'BURUNDI',
					'dial_code' => '257'
					),
					'BJ' => array(
					'country_name' => 'BENIN',
					'dial_code' => '229'
					),
					'BL' => array(
					'country_name' => 'SAINT BARTHELEMY',
					'dial_code' => '590'
				),
				'BM' => array(
				'country_name' => 'BERMUDA',
				'dial_code' => '1441'
					),
					'BN' => array(
					'country_name' => 'BRUNEI DARUSSALAM',
					'dial_code' => '673'
					),
					'BO' => array(
					'country_name' => 'BOLIVIA',
					'dial_code' => '591'
					),
					'BR' => array(
					'country_name' => 'BRAZIL',
					'dial_code' => '55'
				),
				'BS' => array(
				'country_name' => 'BAHAMAS',
				'dial_code' => '1242'
					),
					'BT' => array(
					'country_name' => 'BHUTAN',
					'dial_code' => '975'
					),
					'BW' => array(
					'country_name' => 'BOTSWANA',
					'dial_code' => '267'
					),
					'BY' => array(
					'country_name' => 'BELARUS',
					'dial_code' => '375'
				),
				'BZ' => array(
				'country_name' => 'BELIZE',
				'dial_code' => '501'
					),
					'CA' => array(
					'country_name' => 'CANADA',
					'dial_code' => '1'
					),
					'CC' => array(
					'country_name' => 'COCOS (KEELING) ISLANDS',
					'dial_code' => '61'
					),
					'CD' => array(
					'country_name' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
					'dial_code' => '243'
					),
					'CF' => array(
					'country_name' => 'CENTRAL AFRICAN REPUBLIC',
					'dial_code' => '236'
					),
					'CG' => array(
					'country_name' => 'CONGO',
					'dial_code' => '242'
					),
					'CH' => array(
					'country_name' => 'SWITZERLAND',
					'dial_code' => '41'
				),
				'CI' => array(
				'country_name' => 'COTE D IVOIRE',
				'dial_code' => '225'
					),
					'CK' => array(
					'country_name' => 'COOK ISLANDS',
					'dial_code' => '682'
					),
					'CL' => array(
					'country_name' => 'CHILE',
					'dial_code' => '56'
					),
					'CM' => array(
					'country_name' => 'CAMEROON',
					'dial_code' => '237'
					),
					'CN' => array(
					'country_name' => 'CHINA',
					'dial_code' => '86'
					),
					'CO' => array(
					'country_name' => 'COLOMBIA',
					'dial_code' => '57'
					),
					'CR' => array(
					'country_name' => 'COSTA RICA',
					'dial_code' => '506'
				),
				'CU' => array(
				'country_name' => 'CUBA',
				'dial_code' => '53'
					),
					'CV' => array(
					'country_name' => 'CAPE VERDE',
					'dial_code' => '238'
					),
					'CX' => array(
					'country_name' => 'CHRISTMAS ISLAND',
					'dial_code' => '61'
					),
					'CY' => array(
					'country_name' => 'CYPRUS',
					'dial_code' => '357'
					),
					'CZ' => array(
					'country_name' => 'CZECH REPUBLIC',
					'dial_code' => '420'
					),
					'DE' => array(
					'country_name' => 'GERMANY',
					'dial_code' => '49'
					),
					'DJ' => array(
					'country_name' => 'DJIBOUTI',
					'dial_code' => '253'
				),
				'DK' => array(
				'country_name' => 'DENMARK',
				'dial_code' => '45'
					),
					'DM' => array(
					'country_name' => 'DOMINICA',
					'dial_code' => '1767'
					),
					'DO' => array(
					'country_name' => 'DOMINICAN REPUBLIC',
					'dial_code' => '1809'
				),
				'DZ' => array(
				'country_name' => 'ALGERIA',
				'dial_code' => '213'
					),
					'EC' => array(
					'country_name' => 'ECUADOR',
					'dial_code' => '593'
					),
					'EE' => array(
					'country_name' => 'ESTONIA',
					'dial_code' => '372'
					),
					'EG' => array(
					'country_name' => 'EGYPT',
					'dial_code' => '20'
				),
				'ER' => array(
				'country_name' => 'ERITREA',
				'dial_code' => '291'
					),
					'ES' => array(
					'country_name' => 'SPAIN',
					'dial_code' => '34'
					),
					'ET' => array(
					'country_name' => 'ETHIOPIA',
					'dial_code' => '251'
				),
				'FI' => array(
				'country_name' => 'FINLAND',
				'dial_code' => '358'
					),
					'FJ' => array(
					'country_name' => 'FIJI',
					'dial_code' => '679'
					),
					'FK' => array(
					'country_name' => 'FALKLAND ISLANDS (MALVINAS)',
					'dial_code' => '500'
					),
					'FM' => array(
					'country_name' => 'MICRONESIA, FEDERATED STATES OF',
					'dial_code' => '691'
				),
				'FO' => array(
				'country_name' => 'FAROE ISLANDS',
				'dial_code' => '298'
					),
					'FR' => array(
					'country_name' => 'FRANCE',
					'dial_code' => '33'
					),
					'GA' => array(
					'country_name' => 'GABON',
					'dial_code' => '241'
					),
					'GB' => array(
					'country_name' => 'UNITED KINGDOM',
					'dial_code' => '44'
					),
					'GD' => array(
					'country_name' => 'GRENADA',
					'dial_code' => '1473'
					),
					'GE' => array(
					'country_name' => 'GEORGIA',
					'dial_code' => '995'
					),
					'GH' => array(
					'country_name' => 'GHANA',
					'dial_code' => '233'
					),
					'GI' => array(
					'country_name' => 'GIBRALTAR',
					'dial_code' => '350'
				),
				'GL' => array(
				'country_name' => 'GREENLAND',
				'dial_code' => '299'
				),
				'GM' => array(
				'country_name' => 'GAMBIA',
				'dial_code' => '220'
				),
				'GN' => array(
				'country_name' => 'GUINEA',
				'dial_code' => '224'
				),
				'GQ' => array(
				'country_name' => 'EQUATORIAL GUINEA',
				'dial_code' => '240'
					),
					'GR' => array(
					'country_name' => 'GREECE',
					'dial_code' => '30'
					),
					'GT' => array(
					'country_name' => 'GUATEMALA',
					'dial_code' => '502'
					),
					'GU' => array(
					'country_name' => 'GUAM',
					'dial_code' => '1671'
		   		),
		   		'GW' => array(
		   		'country_name' => 'GUINEA-BISSAU',
		   		'dial_code' => '245'
		   		),
		   		'GY' => array(
		   		'country_name' => 'GUYANA',
		   		'dial_code' => '592'
		   		),
		   		'HK' => array(
		   		'country_name' => 'HONG KONG',
		   		'dial_code' => '852'
		   		),
		   		'HN' => array(
		   		'country_name' => 'HONDURAS',
		   		'dial_code' => '504'
			  		),
			  		'HR' => array(
			  		'country_name' => 'CROATIA',
			  		'dial_code' => '385'
			  		),
			  		'HT' => array(
			  		'country_name' => 'HAITI',
			  		'dial_code' => '509'
				  		),
				  		'HU' => array(
				  		'country_name' => 'HUNGARY',
				  		'dial_code' => '36'
						  		),
						  		'ID' => array(
						  		'country_name' => 'INDONESIA',
						  		'dial_code' => '62'
					  		),
					  		'IE' => array(
					  		'country_name' => 'IRELAND',
					  		'dial_code' => '353'
			  		),
			  		'IL' => array(
			  		'country_name' => 'ISRAEL',
			  		'dial_code' => '972'
			  		),
			  		'IM' => array(
			  		'country_name' => 'ISLE OF MAN',
			  		'dial_code' => '44'
							),
							'IN' => array(
							'country_name' => 'INDIA',
							'dial_code' => '91'
							),
							'IQ' => array(
							'country_name' => 'IRAQ',
							'dial_code' => '964'
							),
							'IR' => array(
							'country_name' => 'IRAN, ISLAMIC REPUBLIC OF',
							'dial_code' => '98'
							),
							'IS' => array(
							'country_name' => 'ICELAND',
							'dial_code' => '354'
								),
								'IT' => array(
								'country_name' => 'ITALY',
								'dial_code' => '39'
								),
								'JM' => array(
								'country_name' => 'JAMAICA',
								'dial_code' => '1876'
								),
								'JO' => array(
								'country_name' => 'JORDAN',
								'dial_code' => '962'
								),
								'JP' => array(
								'country_name' => 'JAPAN',
								'dial_code' => '81'
								),
								'KE' => array(
								'country_name' => 'KENYA',
								'dial_code' => '254'
								),
								'KG' => array(
								'country_name' => 'KYRGYZSTAN',
								'dial_code' => '996'
								),
								'KH' => array(
								'country_name' => 'CAMBODIA',
								'dial_code' => '855'
							),
							'KI' => array(
							'country_name' => 'KIRIBATI',
							'dial_code' => '686'
					   		),
					   		'KM' => array(
					   		'country_name' => 'COMOROS',
					   		'dial_code' => '269'
								),
								'KN' => array(
								'country_name' => 'SAINT KITTS AND NEVIS',
								'dial_code' => '1869'
			    		),
			    		'KP' => array(
			    		'country_name' => 'KOREA DEMOCRATIC PEOPLES REPUBLIC OF',
			    		'dial_code' => '850'
			  		),
			  		'KR' => array(
			  		'country_name' => 'KOREA REPUBLIC OF',
			  		'dial_code' => '82'
			  		),
			  		'KW' => array(
			  		'country_name' => 'KUWAIT',
			  		'dial_code' => '965'
		      		),
		      		'KY' => array(
		      		'country_name' => 'CAYMAN ISLANDS',
		      		'dial_code' => '1345'
				),
				'KZ' => array(
				'country_name' => 'KAZAKSTAN',
				'dial_code' => '7'
					),
					'LA' => array(
					'country_name' => 'LAO PEOPLES DEMOCRATIC REPUBLIC',
					'dial_code' => '856'
					),
					'LB' => array(
					'country_name' => 'LEBANON',
					'dial_code' => '961'
					),
					'LC' => array(
					'country_name' => 'SAINT LUCIA',
					'dial_code' => '1758'
					),
					'LI' => array(
					'country_name' => 'LIECHTENSTEIN',
					'dial_code' => '423'
			  		),
			  		'LK' => array(
			  		'country_name' => 'SRI LANKA',
			  		'dial_code' => '94'
		    		),
		    		'LR' => array(
		    		'country_name' => 'LIBERIA',
		    		'dial_code' => '231'
					),
					'LS' => array(
					'country_name' => 'LESOTHO',
					'dial_code' => '266'
					),
					'LT' => array(
					'country_name' => 'LITHUANIA',
					'dial_code' => '370'
					),
					'LU' => array(
					'country_name' => 'LUXEMBOURG',
					'dial_code' => '352'
						),
						'LV' => array(
						'country_name' => 'LATVIA',
						'dial_code' => '371'
					),
					'LY' => array(
					'country_name' => 'LIBYAN ARAB JAMAHIRIYA',
					'dial_code' => '218'
					),
					'MA' => array(
					'country_name' => 'MOROCCO',
					'dial_code' => '212'
						),
						'MC' => array(
						'country_name' => 'MONACO',
						'dial_code' => '377'
							),
							'MD' => array(
							'country_name' => 'MOLDOVA, REPUBLIC OF',
							'dial_code' => '373'
								),
								'ME' => array(
								'country_name' => 'MONTENEGRO',
								'dial_code' => '382'
								),
								'MF' => array(
								'country_name' => 'SAINT MARTIN',
								'dial_code' => '1599'
						),
						'MG' => array(
						'country_name' => 'MADAGASCAR',
						'dial_code' => '261'
						),
						'MH' => array(
						'country_name' => 'MARSHALL ISLANDS',
						'dial_code' => '692'
								),
								'MK' => array(
								'country_name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
								'dial_code' => '389'
									),
									'ML' => array(
									'country_name' => 'MALI',
									'dial_code' => '223'
									),
									'MM' => array(
									'country_name' => 'MYANMAR',
									'dial_code' => '95'
									),
									'MN' => array(
									'country_name' => 'MONGOLIA',
									'dial_code' => '976'
										),
										'MO' => array(
										'country_name' => 'MACAU',
										'dial_code' => '853'
	 									),
	 									'MP' => array(
	 									'country_name' => 'NORTHERN MARIANA ISLANDS',
	 									'dial_code' => '1670'
	 									),
	 									'MR' => array(
	 									'country_name' => 'MAURITANIA',
	 									'dial_code' => '222'
	 									),
	 									'MS' => array(
	 									'country_name' => 'MONTSERRAT',
	 									'dial_code' => '1664'
	 									),
	 									'MT' => array(
	 									'country_name' => 'MALTA',
	 									'dial_code' => '356'
	 									),
	 									'MU' => array(
	 									'country_name' => 'MAURITIUS',
	 									'dial_code' => '230'
									),
									'MV' => array(
									'country_name' => 'MALDIVES',
									'dial_code' => '960'
									),
									'MW' => array(
									'country_name' => 'MALAWI',
									'dial_code' => '265'
						 		),
						 		'MX' => array(
						 		'country_name' => 'MEXICO',
						 		'dial_code' => '52'
						),
						'MY' => array(
						'country_name' => 'MALAYSIA',
						'dial_code' => '60'
						),
						'MZ' => array(
						'country_name' => 'MOZAMBIQUE',
						'dial_code' => '258'
				),
				'NA' => array(
				'country_name' => 'NAMIBIA',
				'dial_code' => '264'
					),
					'NC' => array(
					'country_name' => 'NEW CALEDONIA',
					'dial_code' => '687'
					),
					'NE' => array(
					'country_name' => 'NIGER',
					'dial_code' => '227'
					),
					'NG' => array(
					'country_name' => 'NIGERIA',
					'dial_code' => '234'
					),
					'NI' => array(
					'country_name' => 'NICARAGUA',
					'dial_code' => '505'
					),
					'NL' => array(
					'country_name' => 'NETHERLANDS',
					'dial_code' => '31'
					),
					'NO' => array(
					'country_name' => 'NORWAY',
					'dial_code' => '47'
					),
					'NP' => array(
					'country_name' => 'NEPAL',
					'dial_code' => '977'
						),
						'NR' => array(
						'country_name' => 'NAURU',
						'dial_code' => '674'
						),
						'NU' => array(
						'country_name' => 'NIUE',
						'dial_code' => '683'
						),
						'NZ' => array(
						'country_name' => 'NEW ZEALAND',
						'dial_code' => '64'
						),
						'OM' => array(
						'country_name' => 'OMAN',
						'dial_code' => '968'
						),
						'PA' => array(
						'country_name' => 'PANAMA',
						'dial_code' => '507'
						),
						'PE' => array(
						'country_name' => 'PERU',
						'dial_code' => '51'
						),
						'PF' => array(
						'country_name' => 'FRENCH POLYNESIA',
						'dial_code' => '689'
					),
					'PG' => array(
					'country_name' => 'PAPUA NEW GUINEA',
					'dial_code' => '675'
						),
						'PH' => array(
						'country_name' => 'PHILIPPINES',
						'dial_code' => '63'
						),
						'PK' => array(
						'country_name' => 'PAKISTAN',
						'dial_code' => '92'
						),
						'PL' => array(
						'country_name' => 'POLAND',
						'dial_code' => '48'
					),
					'PM' => array(
					'country_name' => 'SAINT PIERRE AND MIQUELON',
					'dial_code' => '508'
						),
						'PN' => array(
						'country_name' => 'PITCAIRN',
						'dial_code' => '870'
						),
						'PR' => array(
						'country_name' => 'PUERTO RICO',
						'dial_code' => '1'
						),
						'PT' => array(
						'country_name' => 'PORTUGAL',
						'dial_code' => '351'
						),
						'PW' => array(
						'country_name' => 'PALAU',
						'dial_code' => '680'
						),
						'PY' => array(
						'country_name' => 'PARAGUAY',
						'dial_code' => '595'
						),
						'QA' => array(
						'country_name' => 'QATAR',
						'dial_code' => '974'
						),
						'RO' => array(
						'country_name' => 'ROMANIA',
						'dial_code' => '40'
					),
					'RS' => array(
					'country_name' => 'SERBIA',
					'dial_code' => '381'
					),
					'RU' => array(
					'country_name' => 'RUSSIAN FEDERATION',
					'dial_code' => '7'
					),
					'RW' => array(
					'country_name' => 'RWANDA',
					'dial_code' => '250'
					),
					'SA' => array(
					'country_name' => 'SAUDI ARABIA',
					'dial_code' => '966'
					),
					'SB' => array(
					'country_name' => 'SOLOMON ISLANDS',
					'dial_code' => '677'
					),
					'SC' => array(
					'country_name' => 'SEYCHELLES',
					'dial_code' => '248'
						),
						'SD' => array(
						'country_name' => 'SUDAN',
						'dial_code' => '249'
						),
						'SE' => array(
						'country_name' => 'SWEDEN',
						'dial_code' => '46'
						),
						'SG' => array(
						'country_name' => 'SINGAPORE',
						'dial_code' => '65'
					),
					'SH' => array(
					'country_name' => 'SAINT HELENA',
					'dial_code' => '290'
						),
						'SI' => array(
						'country_name' => 'SLOVENIA',
						'dial_code' => '386'
					),
					'SK' => array(
					'country_name' => 'SLOVAKIA',
					'dial_code' => '421'
						),
						'SL' => array(
						'country_name' => 'SIERRA LEONE',
						'dial_code' => '232'
						),
						'SM' => array(
						'country_name' => 'SAN MARINO',
						'dial_code' => '378'
						),
						'SN' => array(
						'country_name' => 'SENEGAL',
						'dial_code' => '221'
						),
						'SO' => array(
						'country_name' => 'SOMALIA',
						'dial_code' => '252'
						),
						'SR' => array(
						'country_name' => 'SURINAME',
						'dial_code' => '597'
					),
					'ST' => array(
					'country_name' => 'SAO TOME AND PRINCIPE',
					'dial_code' => '239'
					),
					'SV' => array(
					'country_name' => 'EL SALVADOR',
					'dial_code' => '503'
					),
					'SY' => array(
					'country_name' => 'SYRIAN ARAB REPUBLIC',
					'dial_code' => '963'
					),
					'SZ' => array(
					'country_name' => 'SWAZILAND',
					'dial_code' => '268'
  		  		),
  		  		'TC' => array(
  		  		'country_name' => 'TURKS AND CAICOS ISLANDS',
  		  		'dial_code' => '1649'
	  				),
	  				'TD' => array(
	  				'country_name' => 'CHAD',
	  				'dial_code' => '235'
	  				),
	  				'TG' => array(
	  				'country_name' => 'TOGO',
	  				'dial_code' => '228'
			  		),
			  		'TH' => array(
			  		'country_name' => 'THAILAND',
			  		'dial_code' => '66'
  		    		),
  		    		'TJ' => array(
  		    		'country_name' => 'TAJIKISTAN',
  		    		'dial_code' => '992'
					),
					'TK' => array(
					'country_name' => 'TOKELAU',
					'dial_code' => '690'
				),
				'TL' => array(
				'country_name' => 'TIMOR-LESTE',
				'dial_code' => '670'
		  		),
		  		'TM' => array(
		  		'country_name' => 'TURKMENISTAN',
		  		'dial_code' => '993'
		  		),
		  		'TN' => array(
		  		'country_name' => 'TUNISIA',
		  		'dial_code' => '216'
		  		),
		  		'TO' => array(
		  		'country_name' => 'TONGA',
		  		'dial_code' => '676'
				),
				'TR' => array(
				'country_name' => 'TURKEY',
				'dial_code' => '90'
					),
					'TT' => array(
					'country_name' => 'TRINIDAD AND TOBAGO',
					'dial_code' => '1868'
					),
					'TV' => array(
					'country_name' => 'TUVALU',
					'dial_code' => '688'
					),
					'TW' => array(
					'country_name' => 'TAIWAN, PROVINCE OF CHINA',
					'dial_code' => '886'
						),
						'TZ' => array(
						'country_name' => 'TANZANIA, UNITED REPUBLIC OF',
						'dial_code' => '255'
								),
								'UA' => array(
								'country_name' => 'UKRAINE',
								'dial_code' => '380'
								),
								'UG' => array(
								'country_name' => 'UGANDA',
								'dial_code' => '256'
									),
									'US' => array(
									'country_name' => 'UNITED STATES',
									'dial_code' => '1'
						),
						'UY' => array(
						'country_name' => 'URUGUAY',
						'dial_code' => '598'
						),
						'UZ' => array(
						'country_name' => 'UZBEKISTAN',
						'dial_code' => '998'
						),
						'VA' => array(
						'country_name' => 'HOLY SEE (VATICAN CITY STATE)',
						'dial_code' => '39'
								),
								'VC' => array(
								'country_name' => 'SAINT VINCENT AND THE GRENADINES',
								'dial_code' => '1784'
									),
									'VE' => array(
									'country_name' => 'VENEZUELA',
									'dial_code' => '58'
									),
									'VG' => array(
									'country_name' => 'VIRGIN ISLANDS, BRITISH',
									'dial_code' => '1284'
									),
									'VI' => array(
									'country_name' => 'VIRGIN ISLANDS, U.S.',
									'dial_code' => '1340'
							),
							'VN' => array(
							'country_name' => 'VIET NAM',
							'dial_code' => '84'
								),
								'VU' => array(
								'country_name' => 'VANUATU',
								'dial_code' => '678'
						),
						'WF' => array(
						'country_name' => 'WALLIS AND FUTUNA',
						'dial_code' => '681'
						),
						'WS' => array(
						'country_name' => 'SAMOA',
						'dial_code' => '685'
				),
				'XK' => array(
				'country_name' => 'KOSOVO',
				'dial_code' => '381'
						),
						'YE' => array(
						'country_name' => 'YEMEN',
						'dial_code' => '967'
					),
					'YT' => array(
					'country_name' => 'MAYOTTE',
					'dial_code' => '262'
					),
					'ZA' => array(
					'country_name' => 'SOUTH AFRICA',
					'dial_code' => '27'
						),
						'ZM' => array(
						'country_name' => 'ZAMBIA',
						'dial_code' => '260'
								),
								'ZW' => array(
								'country_name' => 'ZIMBABWE',
								'dial_code' => '263'
								)
	);

	//Return
	return ( $filter == '' ) ? $countryArray : (isset($countryArray[$filter]) ? $countryArray[$filter] : 'no array');
}
//$country_dial_list = getCountryInformation();
//echo form_dropdown('dialCodes',$country_dial_list,'EG');
function buildDayDropdown($name='',$value='')
{
	$days='1';
	while ( $days <= '31'){
            $day[]=$days;$days++;
        }
        $dd_id = 'id="DOB" class="input_form"';
        return form_dropdown($name, $day, $value-1, $dd_id);
}

function buildYearDropdown($name='',$value='')
{
	$current_year = 1960;
	while($current_year <= 1995)
	{
		$year[$current_year] = $current_year;
		$current_year++;
	}
	$dd_id = 'id="YOB" class="input_form"';
	return form_dropdown($name, $year, $value, $dd_id);
}

function buildMonthDropdown($name='',$value='')
{
	$month=array(
            '01'=>'يناير',
            '02'=>'فبراير',
            '03'=>'مارس',
            '04'=>'أبريل',
            '05'=>'مايو',
            '06'=>'يونيو',
            '07'=>'ﻳﻭﻟﻳﻭ',
            '08'=>'أغسطس',
            '09'=>'سبتمبر',
            '10'=>'أكتوبر',
            '11'=>'نوفمبر',
            '12'=>'ديسمبر');
        $dd_id = 'id="MOB" class="input_form"';
        return form_dropdown($name, $month, $value, $dd_id);
}

echo form_open_multipart('register/register_validation/');



if (form_error('profile_picture_name')!='')
{
	$profile_picture_class = "input_form_error";
	$profile_picture_hidden_error = array(
				  'id' => 'profile_picture_hidden_error',
	              'name'  => 'profile_picture_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('profile_picture_name')
	            );
	echo form_input($profile_picture_hidden_error);
}
else
{
	$profile_picture_class = "normal";
}


$profile_picture_name = array(
			  'id' => 'profile_picture_name',
              'name'  => 'profile_picture_name',
              'type' => 'hidden',
              'value'   => 'empty'
            );

$profile_picture_file_upload = array(
	'id' => 'profile_picture_file_upload',
	'name'  => 'profile_picture_file_upload',
	'hidden' => 'true'
);

echo form_input($profile_picture_name);

echo form_upload($profile_picture_file_upload);


//-------------------------------------------------
if (form_error('weight_image_name')!='')
{
	$weight_image_class = "input_form_error";
	$weight_image_hidden_error = array(
				  'id' => 'weight_image_hidden_error',
	              'name'  => 'weight_image_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('weight_image_name')
	            );
	echo form_input($weight_image_hidden_error);
}
else
{
	$weight_image_class = "input_form";
}

$weight_image_name = array(
			  'id' => 'weight_image_name',
              'name'  => 'weight_image_name',
              'type' => 'hidden',
              'value'   => 'empty'
            );

$weight_image_file_upload = array(
	'id' => 'weight_image_file_upload',
	'name'  => 'weight_image_file_upload',
	'hidden' => 'true'
);

echo form_input($weight_image_name);

echo form_upload($weight_image_file_upload);

//-------------------------------------------------
if (form_error('height_image_name')!='')
{
	$height_image_class = "input_form_error";
	$height_image_hidden_error = array(
				  'id' => 'height_image_hidden_error',
	              'name'  => 'height_image_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('height_image_name')
	            );
	echo form_input($height_image_hidden_error);
}
else
{
	$height_image_class = "input_form";
}

$height_image_name = array(
			  'id' => 'height_image_name',
              'name'  => 'height_image_name',
              'type' => 'hidden',
              'value'   => 'empty'
            );

$height_image_file_upload = array(
	'id' => 'height_image_file_upload',
	'name'  => 'height_image_file_upload',
	'hidden' => 'true'
);

echo form_input($height_image_name);

echo form_upload($height_image_file_upload);

//-------------------------------------------------


if (form_error('fullname')!='')
{
	$fullname_class = "input_form_error";
	$fullname_hidden_error = array(
				  'id' => 'fullname_hidden_error',
	              'name'  => 'fullname_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('fullname')
	            );
	echo form_input($fullname_hidden_error);
}
else
{
	$fullname_class = "input_form";
}

if (form_error('weight')!='')
{
	$weight_class = "input_form_error";
	$weight_hidden_error = array(
				  'id' => 'weight_hidden_error',
	              'name'  => 'weight_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('weight')
	            );
	echo form_input($weight_hidden_error);
}
else
{
	$weight_class = "input_form";
}

if (form_error('height')!='')
{
	$height_class = "input_form_error";
	$height_hidden_error = array(
				  'id' => 'height_hidden_error',
	              'name'  => 'height_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('height')
	            );
	echo form_input($height_hidden_error);

}
else
{
	$height_class = "input_form";
}


if (form_error('reason')!='')
{
	$reason_class = "input_form_error";
	$reason_hidden_error = array(
				  'id' => 'reason_hidden_error',
	              'name'  => 'reason_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('reason')
	            );
	echo form_input($reason_hidden_error);

}
else
{
	$reason_class = "input_form";
}


if (form_error('provocation')!='')
{
	$provocation_class = "input_form_error";
	$provocation_hidden_error = array(
				  'id' => 'provocation_hidden_error',
	              'name'  => 'provocation_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('provocation')
	            );
	echo form_input($provocation_hidden_error);

}
else
{
	$provocation_class = "input_form";
}

if (form_error('email')!='')
{
	$email_class = "input_form_error";
	$email_hidden_error = array(
				  'id' => 'email_hidden_error',
	              'name'  => 'email_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('email')
	            );
	echo form_input($email_hidden_error);

}
else
{
	$email_class = "input_form";
}

if (form_error('facebook')!='')
{
	$facebook_class = "input_form_error";
	$facebook_hidden_error = array(
				  'id' => 'facebook_hidden_error',
	              'name'  => 'facebook_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('facebook')
	            );
	echo form_input($facebook_hidden_error);

}
else
{
	$facebook_class = "input_form";
}


if (form_error('mobile_number')!='')
{
	$mobile_number_class = "input_form_error";
	$mobile_number_hidden_error = array(
				  'id' => 'mobile_number_hidden_error',
	              'name'  => 'mobile_number_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('mobile_number')
	            );
	echo form_input($mobile_number_hidden_error);
}
else
{
	$mobile_number_class = "input_form";
}

if (form_error('dial_code')!='')
{
	$dial_code_class = "input_form_error";
	$dial_code_hidden_error = array(
				  'id' => 'dial_code_hidden_error',
	              'name'  => 'dial_code_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('dial_code')
	            );
	echo form_input($dial_code_hidden_error);
}
else
{
	$dial_code_class = "input_form";
}

if (form_error('nationality')!='')
{
	$nationality_class = "input_form_error";
	$nationality_hidden_error = array(
				  'id' => 'nationality_hidden_error',
	              'name'  => 'nationality_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('nationality')
	            );
	echo form_input($nationality_hidden_error);
}
else
{
	$nationality_class = "input_form";
}


if (form_error('country')!='')
{
	$country_class = "input_form_error";
	$country_hidden_error = array(
				  'id' => 'country_hidden_error',
	              'name'  => 'country_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('country')
	            );
	echo form_input($country_hidden_error);
}
else
{
	$country_class = "input_form";
}

if (form_error('overall_agreement')!='')
{
	$overall_agreement_hidden_error = array(
				  'id' => 'overall_agreement_hidden_error',
	              'name'  => 'overall_agreement_hidden_error',
	              'type' => 'hidden',
	              'value'   => form_error('overall_agreement')
	            );
	echo form_input($overall_agreement_hidden_error);
}
else
{
}


$full_name = array(
	'name'        => 'fullname',
	'id'          => 'fullname',
	'value'       => set_value('fullname'),
	'class'      => $fullname_class,
	'placeholder' => 'الإسم (ﺛﻼﺛﻲ ﻋﻠﻰ ﺍﻷﻗﻝ) *',
	'onBlur'  	=> 'full_name_client_validation_blur();',
	'onFocus'  	=> 'full_name_client_validation_focus();'
 	//'maxlength'   => '24',
    //'size'        => '24',
    //'style'       => '',
 );

$job = array(
	'name'        => 'job',
	'id'          => 'job',
	'value'       => set_value('job'),
	'placeholder' => 'المهنة',
	'class'		  => 'input_form'
);

$mobile_number = array(
	'name'        => 'mobile_number',
	'id'          => 'mobile_number',
	'class'       => $mobile_number_class,
	'value'       => set_value('mobile_number'),
	'placeholder' => 'رقم الهاتف *',
	'onBlur'  	=> 'mobile_number_client_validation_blur();',
	'onFocus'  	=> 'mobile_number_client_validation_focus();'
);

$dial_code = array(
	'name'        => 'dial_code',
	'id'          => 'dial_code',
	'class'       => $dial_code_class,
	'value'       => set_value('dial_code'),
	'placeholder' => 'الكود *',
	'onBlur'  	=> 'dial_code_client_validation_blur();',
	'onFocus'  	=> 'dial_code_client_validation_focus();'
);

$email = array(
	'name'        => 'email',
	'id'          => 'email',
	'value'       => set_value('email'),
	'placeholder' => 'الايميل *',
	'class'		  => $email_class,
	'onBlur'  	=> 'email_client_validation_blur();',
	'onFocus'  	=> 'email_client_validation_focus();'
);

$facebook = array(
	'name'        => 'facebook',
	'id'          => 'facebook',
	'value'       => set_value('facebook'),
	'placeholder' => 'فيسبوك',
	'class'		  => $facebook_class,
	'onBlur'  	=> 'facebook_client_validation_blur();',
	'onFocus'  	=> 'facebook_client_validation_focus();'
);

$weight = array(
	'name'        => 'weight',
	'id'          => 'weight',
	'class'       => $weight_class,
	'value'       => set_value('weight'),
	'placeholder' => 'وزنك بالكجم *',
	'onBlur'  	=> 'weight_client_validation_blur();',
	'onFocus'  	=> 'weight_client_validation_focus();'
);

$height = array(
	'name'        => 'height',
	'id'          => 'height',
	'class'       => $height_class,
	'value'       => set_value('height'),
	'placeholder' => 'طولك بالمتر *',
	'onBlur'  	=> 'height_client_validation_blur();',
	'onFocus'  	=> 'height_client_validation_focus();'
);

$reason = array(
	'name'        => 'reason',
	'id'          => 'reason',
	'class'       => $reason_class,
	'value'       => set_value('reason'),
	'placeholder' => 'كلمة توضح فيها هدفك من الاشتراك في كرشلس *',
	'onBlur'  	=> 'reason_client_validation_blur();',
	'onFocus'  	=> 'reason_client_validation_focus();'
);

$provocation = array(
	'name'        => 'provocation',
	'id'          => 'provocation',
	'class'       => $provocation_class,
	'value'       => set_value('provocation'),
	'placeholder' => 'كلمة توجهها للمنافسين *',
	'onBlur'  	=> 'provocation_client_validation_blur();',
	'onFocus'  	=> 'provocation_client_validation_focus();'
);

$friend_code = array(
	'name'        => 'friend_code',
	'id'          => 'friend_code',
	'class'       => 'input_form',
	'value'       => set_value('friend_code'),
	'placeholder' => 'كود التسجيل الخاص بصديقك',
	'onBlur'  	=> 'friend_code_client_validation_blur();',
	'onFocus'  	=> 'friend_code_client_validation_focus();'
);


$name_agreement_checkbox = $this->input->post('name_agreement',TRUE)==null ? FALSE : TRUE;
$name_agreement = array(
    'name'        => 'name_agreement',
    'id'          => 'name_agreement',
	'value'       => 'accept',
	'checked'     => $name_agreement_checkbox
    );

$picture_agreement_checkbox = $this->input->post('picture_agreement',TRUE)==null ? FALSE : TRUE;
$picture_agreement = array(
	'name'        => 'picture_agreement',
	'id'          => 'picture_agreement',
	'value'       => 'accept',
	'checked'     => $picture_agreement_checkbox
	);

$overall_agreement_checkbox = $this->input->post('overall_agreement',TRUE)==null ? FALSE : TRUE;
$overall_agreement = array(
	'name'        => 'overall_agreement',
	'id'          => 'overall_agreement',
	'value'		  => 'accept',
	'checked'     => $overall_agreement_checkbox,
	'onClick'    => 'toggle_overall_agreement_checkbox();'
	);

$form_submitter = array(
	'name'        => 'submit',
	'id'          => 'form_submitter',
	'value'		  => 'submit!',
	'style'	  => 'visibility:hidden'
	);


?>

<body dir="rtl">

	<div id="left_div_header">
		<div id="left_div_header_title">بيانات التواصل</div>
	</div>
	<div id="left_div">
		<div id="left_div_content">
			<?php echo form_input($mobile_number); ?>
			<?php
			/*
			 $dial_code = array(

			'AD' => '376',

			 		'AE' => '971',

			 		'AF' => '93',

			 		'AG' => '1268',

			 		'AI' => '1264',

			 		'AL' => '355',

			 		'AM' => '374',

			 		'AN' => '599',

			 		'AO' => '244',

			 		'AQ' => '672',

			 		'AR' => '54',

			 		'AS' => '1684',

			 		'AT' => '43',

			 		'AU' => '61',

			 		'AW' => '297',

			 		'AZ' => '994',

			 		'BA' => '387',

			 		'BB' =>'1246',

			 		'BD' => '880',

			 		'BE' => '32',

			 		'BF' => '226',

			 		'BG' => '359',

			 		'BH' => '973',

			 		'BI' => '257',

			 		'BJ' => '229',

			 		'BL' => '590',

			 		'BM' => '1441',

			 		'BN' => '673',

			 		'BO' => '591',

			 		'BR' => '55',

			 		'BS' => '1242',

			 		'BT' => '975',

			 		'BW' => '267',

			 		'BY' => '375',

			 		'BZ' => '501',

			 		'CA' => '1',

			 		'CC' => '61',

			 		'CD' => '243',

			 		'CF' => '236',

			 		'CG' => '242',

			 		'CH' => '41',

			 		'CI' => '225',

			 		'CK' => '682',

			 		'CL' => '56',

			 		'CM' => '237','CN' => '86',

			 		'CO' => '57',

			 		'CR' => '506',

			 		'CU' => '53',

			 		'CV' => '238',

			 		'CX' => '61',

			 		'CY' => '357',

			 		'CZ' => '420',

			 		'DE' => '49',

			 		'DJ' => '253',

			 		'DK' => '45',

			 		'DM' => '1767',

			 		'DO' => '1809',

			 		'DZ' => '213',

			 		'EC' => '593',

			 		'EE' => '372',

			 		'EG' => '20',

			 		'ER' => '291',

			 		'ES' => '34',

			 		'ET' => '251',

			 		'FI' => '358',

			 		'FJ' => '679',

			 		'FK' => '500',

			 		'FM' => '691',

			 		'FO' => '298',

			 		'FR' => '33',

			 		'GA' => '241',

			 		'GB' => '44',

			 		'GD' => '1473',

			 		'GE' => '995',

			 		'GH' => '233',

			 		'GI' => '350',

			 		'GL' => '299',

			 		'GM' => '220',

			 		'GN' => '224',

			 		'GQ' => '240',

			 		'GR' => '30',

			 		'GT' => '502',

			 		'GU' => '1671',

			 		'GW' => '245',

			 		'GY' => '592',

			 		'HK' => '852',

			 		'HN' => '504',

			 		'HR' => '385',

			 		'HT' => '509',

			 		'HU' => '36','ID' => '62',

			 		'IE' => '353',

			 		'IL' => '972',

			 		'IM' => '44',

			 		'IN' => '91',

			 		'IQ' => '964',

			 		'IR' => '98',

			 		'IS' => '354',

			 		'IT' => '39',

			 		'JM' => '1876',

			 		'JO' => '962',

			 		'JP' => '81',

			 		'KE' => '254',

			 		'KG' => '996',

			 		'KH' => '855',

			 		'KI' => '686',

			 		'KM' => '269',

			 		'KN' => '1869',

			 		'KP' => '850',

			 		'KR' => '82',

			 		'KW' => '965',

			 		'KY' => '1345',

			 		'KZ' =>'7',

			 		'LA' => '856',

			 		'LB' => '961',

			 		'LC' => '1758',

			 		'LI' => '423',

			 		'LK' => '94',

			 		'LR' => '231',

			 		'LS' => '266',

			 		'LT' => '370',

			 		'LU' => '352',

			 		'LV' => '371',

			 		'LY' => '218',

			 		'MA' => '212',

			 		'MC' => '377',

			 		'MD' => '373',

			 		'ME' => '382',

			 		'MF' => '1599',

			 		'MG' => '261',

			 		'MH' => '692',

			 		'MK' => '389',

			 		'ML' => '223',

			 		'MM' => '95',

			 		'MN' => '976',

			 		'MO' => '853','MP' => '1670',

			 		'MR' => '222',

			 		'MS' => '1664',

			 		'MT' => '356',

			 		'MU' => '230',

			 		'MV' => '960',

			 		'MW' => '265',

			 		'MX' => '52',

			 		'MY' => '60',

			 		'MZ' => '258',

			 		'NA' => '264',

			 		'NC' => '687',

			 		'NE' => '227',

			 		'NG' => '234',

			 		'NI' => '505',

			 		'NL' => '31',

			 		'NO' => '47',

			 		'NP' => '977',

			 		'NR' => '674',

			 		'NU' => '683',

			 		'NZ' => '64',

			 		'OM' => '968',

			 		'PA' => '507',

			 		'PE' => '51',

			 		'PF' => '689',

			 		'PG' => '675',

			 		'PH' => '63',

			 		'PK' => '92',

			 		'PL' => '48',

			 		'PM' => '508',

			 		'PN' => '870',

			 		'PR' => '1',

			 		'PT' => '351',

			 		'PW' => '680',

			 		'PY' => '595',

			 		'QA' => '974',

			 		'RO' => '40',

			 		'RS' => '381',

			 		'RU' => '7',

			 		'RW' => '250',

			 		'SA' => '966',

			 		'SB' => '677',

			 		'SC' => '248',

			 		'SD' => '249',

			 		'SE' => '46',

			 		'SG' => '65','SH' => '290',

			 		'SI' => '386',

			 		'SK' => '421',

			 		'SL' => '232',

			 		'SM' => '378',

			 		'SN' => '221',

			 		'SO' => '252',

			 		'SR' => '597',

			 		'ST' => '239',

			 		'SV' => '503',

			 		'SY' => '963',

			 		'SZ' => '268',

			 		'TC' => '1649',

			 		'TD' => '235',

			 		'TG' => '228',

			 		'TH' => '66',

			 		'TJ' => '992',

			 		'TK' => '690',

			 		'TL' => '670',

			 		'TM' => '993',

			 		'TN' => '216',

			 		'TO' => '676',

			 		'TR' => '90',

			 		'TT' => '1868',

			 		'TV' => '688',

			 		'TW' => '886',

			 		'TZ' => '255',

			 		'UA' => '380',

			 		'UG' => '256',

			 		'US' => '1',

			 		'UY' => '598',

			 		'UZ' => '998',

			 		'VA' => '39',

			 		'VC' => '1784',

			 		'VE' => '58',

			 		'VG' => '1284',

			 		'VI' => '1340',

			 		'VN' => '84',

			 		'VU' => '678',

			 		'WF' => '681',

			 		'WS' => '685',

			 		'XK' => '381',

			 		'YE' => '967',

			 		'YT' => '262',

			 		'27' => '27',

			 		'ZM' =>'260','ZW' => '263');*/
			echo form_input($dial_code);
			?>
			<i><label
				style="color: #999999; font-size: 10px; font-family: 'Open Sans', sans-serif;"><span>(Number
						on WhatsApp)</span> </label> </i>
			<p></p>
			<?php echo form_input($email); ?>
			<p></p>
			<?php echo form_input($facebook); ?>
			<i><label
				style="color: #999999; font-size: 10px; font-family: 'Open Sans', sans-serif;"><span>(Ex:
						www.facebook.com/your_username) </span> </label> </i>
			<p></p>
			<label> <?php echo form_checkbox($name_agreement); ?> <span>موافق على
					عرض إسمي.</span>
			</label>
			<p></p>
			<label> <?php echo form_checkbox($picture_agreement); ?> <span>موافق
					على عرض صورتي.</span>
			</label>
			<p></p>
			<label> <?php echo form_checkbox($overall_agreement); ?> 
			<span>أقر
بأن جميع البيانات المذكورة صحيحة و على مسئوليتي الشخصية طبقاً <a  id="agreement_rules" href="http://www.kershless.com/main/view_rules" target="_blank"
				style="text-decoration: none; color: #16a085;">للشروط و الأحكام.</a> *</span>
			
			</label>
			<p></p>
			<div id="bottom_middle_submit">
				<div style="line-height: 50%;">
					<br>
				</div>
				<div id="bottom_middle_submit_title"
					onclick="document.myform.submit()">جاهز للتحدي</div>
			</div>

		</div>
	</div>
	<div id="bottom_left_note">
		<div id="bottom_left_note_title">(*) بيانات لا يكتمل التسجيل بدونها</div>
	</div>


	<div id="middle_div_header">
		<div id="middle_div_header_title">بيانات المسابقة</div>
	</div>
	<div id="middle_div">
		<div id="middle_div_content">
			<div id="profile_picture_upload"
				class="<?php echo $profile_picture_class ?>"></div>
			<i><label
				style="color: #999999; font-size: 10px; font-family: 'Open Sans', sans-serif; margin-right: 13px"><span>(Files(.png/.jpg/.jpeg)
						should be less than 2 MB) </span> </label> </i>
			<div id="weight_upload_div" class="<?php echo $weight_image_class ?>">
				<div id="weight_upload_button">صورة وزنك *</div>
			</div>
			<div id="height_upload_div" class="<?php echo $height_image_class ?>">
				<div id="height_upload_button">صورة طولك *</div>
			</div>
			<p></p>
			<?php echo form_input($weight); ?>
			<?php echo form_input($height); ?>
			<p></p>
			<?php echo form_textarea($reason); ?>
			<p></p>
			<?php echo form_textarea($provocation); ?>
			<p></p>
			<?php echo form_input($friend_code); ?>
			<i><label
				style="color: #999999; font-size: 10px; font-family: 'Open Sans', sans-serif;"><span>(..If
						more than one: code1, code2, code3, etc) </span> </label> </i>
		</div>
	</div>

	<div id="right_div_header">
		<div id="right_div_header_title">بيانات عامة</div>
	</div>
	<div id="right_div">
		<div id="right_div_content">
			<?php echo form_input($full_name); ?>
			<p></p>
			تاريخ الميلاد * <br>
			<?php
			echo buildDayDropdown('DOB', $this->input->post('DOB')+1);
			?>
			<?php
			echo buildMonthDropdown('MOB', $this->input->post('MOB'));
			?>
			<?php
			echo buildYearDropdown('YOB', $this->input->post('YOB'));
			?>
			<p></p>
			النوع * <br>

			<?php



			$gender_radiobutton = $this->input->post('gender');
			if($gender_radiobutton == 1)
			{?>
			<label> <?php
			echo form_radio('gender', '1', True, 'id="male_radio"');
			?> <span>ذكر</span>
			</label> <label> <?php
			echo form_radio('gender', '2', False, 'id="female_radio"');
			?> <span>أنثي</span>
			</label>
			<?php
			}
			else
			{
				if($gender_radiobutton == 2)
				{
					?>
			<label> <?php
			echo form_radio('gender', '1', False, 'id="male_radio"');
			?> <span>ذكر</span>
			</label> <label> <?php
			echo form_radio('gender', '2', True, 'id="female_radio"');
			?> <span>أنثي</span>
			</label>
			<?php
				}
				else
				{
					?>
			<label> <?php
			echo form_radio('gender', '1', True, 'id="male_radio"');
			?> <span>ذكر</span>
			</label> <label> <?php
			echo form_radio('gender', '2', False, 'id="female_radio"');
			?> <span>أنثي</span>
			</label>
			<?php
				}
			}
			?>

			<p></p>
			الحالة الإجتماعية * <br>

			<?php

			$marital_status_radiobutton = $this->input->post('marital_status');
			if($marital_status_radiobutton == 1)
			{?>

			<label> <?php
			echo form_radio('marital_status', '1', True);
			?> <span>أعزب</span>
			</label> <label> <?php
			echo form_radio('marital_status', '2', False);
			?> <span>متزوج</span>
			</label> <label> <?php
			echo form_radio('marital_status', '3', False);
			?> <span>ﺃﺧﺭﻯ</span>
			</label>
			<?php
			}
			else
			{
				if($marital_status_radiobutton == 2)
				{?>
			<label> <?php
			echo form_radio('marital_status', '1', False);
			?> <span>أعزب</span>
			</label> <label> <?php
			echo form_radio('marital_status', '2', True);
			?> <span>متزوج</span>
			</label> <label> <?php
			echo form_radio('marital_status', '3', False);
			?> <span>ﺃﺧﺭﻯ</span>
			</label>
			<?php

				}
				else
				{
					if($marital_status_radiobutton == 3)
					{?>
			<label> <?php
			echo form_radio('marital_status', '1', False);
			?> <span>أعزب</span>
			</label> <label> <?php
			echo form_radio('marital_status', '2', False);
			?> <span>متزوج</span>
			</label> <label> <?php
			echo form_radio('marital_status', '3', True);
			?> <span>ﺃﺧﺭﻯ</span>
			</label>
			<?php

					}
					else
					{?>
			<label> <?php
			echo form_radio('marital_status', '1', True);
			?> <span>أعزب</span>
			</label> <label> <?php
			echo form_radio('marital_status', '2', False);
			?> <span>متزوج</span>
			</label> <label> <?php
			echo form_radio('marital_status', '3', False);
			?> <span>ﺃﺧﺭﻯ</span>
			</label>
			<?php
					}
				}
			}

			?>
			<p></p>
			<?php echo form_input($job); ?>
			<p></p>
			<?php
			$nationality = array(
				'NONE' => 'الجنسية *',
				  'DZ' => 'الجزائر',
				'BH' => 'البحرين',
				  'TD' => 'تشاد',
				  'KM' => 'جزر القمر',
				  'DJ' => 'جيبوتي',
				  'EG' => 'مصر',
				  'IQ' => 'العراق',
				  'JO' => 'الأردن',
				  'KW' => 'الكويت',
				'LB' => 'لبنان',
				  'LY' => 'ليبيا',
				  'MR' => 'موريتانيا',
				  'MA' => 'المغرب',
				  'OM' => 'عمان',
				  'PS' => 'فلسطين',
				  'QA' => 'قطر',
				  'SA' => 'المملكة العربية السعودية',
				  'SO' => 'الصومال',
				  'SD' => 'السودان',
				  'SY' => 'سوريا',
				  'TN' => 'تونس',
 				'AE' => 'الامارات العربية المتحدة',
				  'YE' => 'اليمن',
				'AW' => 'آروبا',
				  'AZ' => 'أذربيجان',
				  'AM' => 'أرمينيا',
				  'ES' => 'أسبانيا',
				  'AU' => 'أستراليا',
				  'AF' => 'أفغانستان',
				  'AL' => 'ألبانيا',
				  'DE' => 'ألمانيا',
				  'AG' => 'أنتيجوا وبربودا',
				  'AO' => 'أنجولا',
				  'AI' => 'أنجويلا',
				  'AD' => 'أندورا',
				  'UY' => 'أورجواي',
				  'UZ' => 'أوزبكستان',
				  'UG' => 'أوغندا',
				  'UA' => 'أوكرانيا',
				  'IE' => 'أيرلندا',
				  'IS' => 'أيسلندا',
				  'ET' => 'اثيوبيا',
				  'ER' => 'اريتريا',
				  'EE' => 'استونيا',
				  'IL' => 'اسرائيل',
				  'AR' => 'الأرجنتين',
				  'EC' => 'الاكوادور',
				  'BS' => 'الباهاما',
				  'BR' => 'البرازيل',
				  'PT' => 'البرتغال',
				  'BA' => 'البوسنة والهرسك',
				  'GA' => 'الجابون',
				  'ME' => 'الجبل الأسود',
				  'DK' => 'الدانمرك',
				  'CV' => 'الرأس الأخضر',
				  'SV' => 'السلفادور',
				  'SN' => 'السنغال',
				  'SE' => 'السويد',
				  'EH' => 'الصحراء الغربية',
				  'CN' => 'الصين',
				  'VA' => 'الفاتيكان',
				  'PH' => 'الفيلبين',
				  'AQ' => 'القطب الجنوبي',
				  'CM' => 'الكاميرون',
				  'CG' => 'الكونغو - برازافيل',
				  'HU' => 'المجر',
				  'IO' => 'المحيط الهندي البريطاني',
				  'TF' => 'المقاطعات الجنوبية الفرنسية',
				  'MX' => 'المكسيك',
				  'GB' => 'المملكة المتحدة',
				  'NO' => 'النرويج',
				  'AT' => 'النمسا',
				  'NE' => 'النيجر',
				  'IN' => 'الهند',
				  'US' => 'الولايات المتحدة الأمريكية',
				  'JP' => 'اليابان',
				  'GR' => 'اليونان',
				  'ID' => 'اندونيسيا',
				  'IR' => 'ايران',
				  'IT' => 'ايطاليا',
				  'PG' => 'بابوا غينيا الجديدة',
				  'PY' => 'باراجواي',
				  'PK' => 'باكستان',
				  'PW' => 'بالاو',
				  'BW' => 'بتسوانا',
				  'PN' => 'بتكايرن',
				  'BB' => 'بربادوس',
				  'BM' => 'برمودا',
				  'BN' => 'بروناي',
				  'BE' => 'بلجيكا',
				  'BG' => 'بلغاريا',
				  'BZ' => 'بليز',
				  'BD' => 'بنجلاديش',
				  'PA' => 'بنما',
				  'BJ' => 'بنين',
				  'BT' => 'بوتان',
				  'PR' => 'بورتوريكو',
				  'BF' => 'بوركينا فاسو',
				  'BI' => 'بوروندي',
				  'PL' => 'بولندا',
				  'BO' => 'بوليفيا',
				  'PF' => 'بولينيزيا الفرنسية',
				  'PE' => 'بيرو',
				  'TZ' => 'تانزانيا',
				  'TH' => 'تايلند',
				  'TW' => 'تايوان',
				  'TM' => 'تركمانستان',
				  'TR' => 'تركيا',
				  'TT' => 'ترينيداد وتوباغو',
				  'TG' => 'توجو',
				  'TV' => 'توفالو',
				  'TK' => 'توكيلو',
				  'TO' => 'تونجا',
				  'TL' => 'تيمور الشرقية',
				  'JM' => 'جامايكا',
				  'GI' => 'جبل طارق',
				  'GD' => 'جرينادا',
				  'GL' => 'جرينلاند',
				  'AX' => 'جزر أولان',
				  'AN' => 'جزر الأنتيل الهولندية',
				  'TC' => 'جزر الترك وجايكوس',
				  'KY' => 'جزر الكايمن',
				  'MH' => 'جزر المارشال',
				  'MV' => 'جزر الملديف',
				  'UM' => 'جزر الولايات المتحدة البعيدة الصغيرة',
				  'SB' => 'جزر سليمان',
				  'FO' => 'جزر فارو',
				  'VI' => 'جزر فرجين الأمريكية',
				  'VG' => 'جزر فرجين البريطانية',
				  'FK' => 'جزر فوكلاند',
				  'CK' => 'جزر كوك',
				  'CC' => 'جزر كوكوس',
				  'MP' => 'جزر ماريانا الشمالية',
				  'WF' => 'جزر والس وفوتونا',
				  'CX' => 'جزيرة الكريسماس',
				  'BV' => 'جزيرة بوفيه',
				  'IM' => 'جزيرة مان',
				  'NF' => 'جزيرة نورفوك',
				  'HM' => 'جزيرة هيرد وماكدونالد',
				  'CF' => 'جمهورية افريقيا الوسطى',
				  'CZ' => 'جمهورية التشيك',
				  'DO' => 'جمهورية الدومينيك',
				  'CD' => 'جمهورية الكونغو الديمقراطية',
				  'ZA' => 'جمهورية جنوب افريقيا',
				  'GT' => 'جواتيمالا',
				  'GP' => 'جوادلوب',
				  'GU' => 'جوام',
				  'GE' => 'جورجيا',
				  'GS' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
				  'JE' => 'جيرسي',
				  'DM' => 'دومينيكا',
				  'RW' => 'رواندا',
				  'RU' => 'روسيا',
				  'BY' => 'روسيا البيضاء',
				  'RO' => 'رومانيا',
				  'RE' => 'روينيون',
				  'ZM' => 'زامبيا',
				  'ZW' => 'زيمبابوي',
				  'CI' => 'ساحل العاج',
				  'WS' => 'ساموا',
				  'AS' => 'ساموا الأمريكية',
				  'SM' => 'سان مارينو',
				  'PM' => 'سانت بيير وميكولون',
				  'VC' => 'سانت فنسنت وغرنادين',
				  'KN' => 'سانت كيتس ونيفيس',
				  'LC' => 'سانت لوسيا',
				  'MF' => 'سانت مارتين',
				  'SH' => 'سانت هيلنا',
				  'ST' => 'ساو تومي وبرينسيبي',
				  'LK' => 'سريلانكا',
				  'SJ' => 'سفالبارد وجان مايان',
				  'SK' => 'سلوفاكيا',
				  'SI' => 'سلوفينيا',
				  'SG' => 'سنغافورة',
				  'SZ' => 'سوازيلاند',
				  'SR' => 'سورينام',
				  'CH' => 'سويسرا',
				  'SL' => 'سيراليون',
				  'SC' => 'سيشل',
				  'CL' => 'شيلي',
				  'RS' => 'صربيا',
				  'CS' => 'صربيا والجبل الأسود',
				  'TJ' => 'طاجكستان',
				  'GM' => 'غامبيا',
				  'GH' => 'غانا',
				  'GF' => 'غويانا',
				  'GY' => 'غيانا',
				  'GN' => 'غينيا',
				  'GQ' => 'غينيا الاستوائية',
				  'GW' => 'غينيا بيساو',
				  'VU' => 'فانواتو',
				  'FR' => 'فرنسا',
				  'VE' => 'فنزويلا',
				  'FI' => 'فنلندا',
				  'VN' => 'فيتنام',
				  'FJ' => 'فيجي',
				  'CY' => 'قبرص',
				  'KG' => 'قرغيزستان',
				  'KZ' => 'كازاخستان',
				  'NC' => 'كاليدونيا الجديدة',
				  'HR' => 'كرواتيا',
				  'KH' => 'كمبوديا',
				  'CA' => 'كندا',
				  'CU' => 'كوبا',
				  'KR' => 'كوريا الجنوبية',
				  'KP' => 'كوريا الشمالية',
				  'CR' => 'كوستاريكا',
				  'CO' => 'كولومبيا',
				  'KI' => 'كيريباتي',
				  'KE' => 'كينيا',
				  'LV' => 'لاتفيا',
				  'LA' => 'لاوس',
				  'LU' => 'لوكسمبورج',
				  'LR' => 'ليبيريا',
				  'LT' => 'ليتوانيا',
				  'LI' => 'ليختنشتاين',
				  'LS' => 'ليسوتو',
				  'MQ' => 'مارتينيك',
				  'MO' => 'ماكاو الصينية',
				  'MT' => 'مالطا',
				  'ML' => 'مالي',
				  'MY' => 'ماليزيا',
				  'YT' => 'مايوت',
				  'MG' => 'مدغشقر',
				  'MK' => 'مقدونيا',
				  'MW' => 'ملاوي',
				  'ZZ' => 'منطقة غير معرفة',
				  'MN' => 'منغوليا',
				  'MU' => 'موريشيوس',
				  'MZ' => 'موزمبيق',
				  'MD' => 'مولدافيا',
				  'MC' => 'موناكو',
				  'MS' => 'مونتسرات',
				  'MM' => 'ميانمار',
				  'FM' => 'ميكرونيزيا',
				  'NA' => 'ناميبيا',
				  'NR' => 'نورو',
				  'NP' => 'نيبال',
				  'NG' => 'نيجيريا',
				  'NI' => 'نيكاراجوا',
				  'NZ' => 'نيوزيلاندا',
				  'NU' => 'نيوي',
				  'HT' => 'هايتي',
				  'HN' => 'هندوراس',
				  'NL' => 'هولندا',
				  'HK' => 'هونج كونج الصينية'
								);
								$resulting_array = array_combine($nationality,$nationality);
								$resulting_array["الجنسية *"] = "NONE";
								$resulting_array = array_flip($resulting_array);
								echo form_dropdown('nationality', $resulting_array,$this->input->post('nationality'),'id="nationality" class="'.$nationality_class.'"');
								?>
			<p></p>
			<?php
			$country = array(
								'NONE' => 'البلد المقيم بها *',
								  'DZ' => 'الجزائر',
								'BH' => 'البحرين',
								  'TD' => 'تشاد',
								  'KM' => 'جزر القمر',
								  'DJ' => 'جيبوتي',
								  'EG' => 'مصر',
								  'IQ' => 'العراق',
								  'JO' => 'الأردن',
								  'KW' => 'الكويت',
								'LB' => 'لبنان',
								  'LY' => 'ليبيا',
								  'MR' => 'موريتانيا',
								  'MA' => 'المغرب',
								  'OM' => 'عمان',
								  'PS' => 'فلسطين',
								  'QA' => 'قطر',
								  'SA' => 'المملكة العربية السعودية',
								  'SO' => 'الصومال',
								  'SD' => 'السودان',
								  'SY' => 'سوريا',
								  'TN' => 'تونس',
				 				'AE' => 'الامارات العربية المتحدة',
								  'YE' => 'اليمن',
								'AW' => 'آروبا',
								  'AZ' => 'أذربيجان',
								  'AM' => 'أرمينيا',
								  'ES' => 'أسبانيا',
								  'AU' => 'أستراليا',
								  'AF' => 'أفغانستان',
								  'AL' => 'ألبانيا',
								  'DE' => 'ألمانيا',
								  'AG' => 'أنتيجوا وبربودا',
								  'AO' => 'أنجولا',
								  'AI' => 'أنجويلا',
								  'AD' => 'أندورا',
								  'UY' => 'أورجواي',
								  'UZ' => 'أوزبكستان',
								  'UG' => 'أوغندا',
								  'UA' => 'أوكرانيا',
								  'IE' => 'أيرلندا',
								  'IS' => 'أيسلندا',
								  'ET' => 'اثيوبيا',
								  'ER' => 'اريتريا',
								  'EE' => 'استونيا',
								  'IL' => 'اسرائيل',
								  'AR' => 'الأرجنتين',
								  'EC' => 'الاكوادور',
								  'BS' => 'الباهاما',
								  'BR' => 'البرازيل',
								  'PT' => 'البرتغال',
								  'BA' => 'البوسنة والهرسك',
								  'GA' => 'الجابون',
								  'ME' => 'الجبل الأسود',
								  'DK' => 'الدانمرك',
								  'CV' => 'الرأس الأخضر',
								  'SV' => 'السلفادور',
								  'SN' => 'السنغال',
								  'SE' => 'السويد',
								  'EH' => 'الصحراء الغربية',
								  'CN' => 'الصين',
								  'VA' => 'الفاتيكان',
								  'PH' => 'الفيلبين',
								  'AQ' => 'القطب الجنوبي',
								  'CM' => 'الكاميرون',
								  'CG' => 'الكونغو - برازافيل',
								  'HU' => 'المجر',
								  'IO' => 'المحيط الهندي البريطاني',
								  'TF' => 'المقاطعات الجنوبية الفرنسية',
								  'MX' => 'المكسيك',
								  'GB' => 'المملكة المتحدة',
								  'NO' => 'النرويج',
								  'AT' => 'النمسا',
								  'NE' => 'النيجر',
								  'IN' => 'الهند',
								  'US' => 'الولايات المتحدة الأمريكية',
								  'JP' => 'اليابان',
								  'GR' => 'اليونان',
								  'ID' => 'اندونيسيا',
								  'IR' => 'ايران',
								  'IT' => 'ايطاليا',
								  'PG' => 'بابوا غينيا الجديدة',
								  'PY' => 'باراجواي',
								  'PK' => 'باكستان',
								  'PW' => 'بالاو',
								  'BW' => 'بتسوانا',
								  'PN' => 'بتكايرن',
								  'BB' => 'بربادوس',
								  'BM' => 'برمودا',
								  'BN' => 'بروناي',
								  'BE' => 'بلجيكا',
								  'BG' => 'بلغاريا',
								  'BZ' => 'بليز',
								  'BD' => 'بنجلاديش',
								  'PA' => 'بنما',
								  'BJ' => 'بنين',
								  'BT' => 'بوتان',
								  'PR' => 'بورتوريكو',
								  'BF' => 'بوركينا فاسو',
								  'BI' => 'بوروندي',
								  'PL' => 'بولندا',
								  'BO' => 'بوليفيا',
								  'PF' => 'بولينيزيا الفرنسية',
								  'PE' => 'بيرو',
								  'TZ' => 'تانزانيا',
								  'TH' => 'تايلند',
								  'TW' => 'تايوان',
								  'TM' => 'تركمانستان',
								  'TR' => 'تركيا',
								  'TT' => 'ترينيداد وتوباغو',
								  'TG' => 'توجو',
								  'TV' => 'توفالو',
								  'TK' => 'توكيلو',
								  'TO' => 'تونجا',
								  'TL' => 'تيمور الشرقية',
								  'JM' => 'جامايكا',
								  'GI' => 'جبل طارق',
								  'GD' => 'جرينادا',
								  'GL' => 'جرينلاند',
								  'AX' => 'جزر أولان',
								  'AN' => 'جزر الأنتيل الهولندية',
								  'TC' => 'جزر الترك وجايكوس',
								  'KY' => 'جزر الكايمن',
								  'MH' => 'جزر المارشال',
								  'MV' => 'جزر الملديف',
								  'UM' => 'جزر الولايات المتحدة البعيدة الصغيرة',
								  'SB' => 'جزر سليمان',
								  'FO' => 'جزر فارو',
								  'VI' => 'جزر فرجين الأمريكية',
								  'VG' => 'جزر فرجين البريطانية',
								  'FK' => 'جزر فوكلاند',
								  'CK' => 'جزر كوك',
								  'CC' => 'جزر كوكوس',
								  'MP' => 'جزر ماريانا الشمالية',
								  'WF' => 'جزر والس وفوتونا',
								  'CX' => 'جزيرة الكريسماس',
								  'BV' => 'جزيرة بوفيه',
								  'IM' => 'جزيرة مان',
								  'NF' => 'جزيرة نورفوك',
								  'HM' => 'جزيرة هيرد وماكدونالد',
								  'CF' => 'جمهورية افريقيا الوسطى',
								  'CZ' => 'جمهورية التشيك',
								  'DO' => 'جمهورية الدومينيك',
								  'CD' => 'جمهورية الكونغو الديمقراطية',
								  'ZA' => 'جمهورية جنوب افريقيا',
								  'GT' => 'جواتيمالا',
								  'GP' => 'جوادلوب',
								  'GU' => 'جوام',
								  'GE' => 'جورجيا',
								  'GS' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
								  'JE' => 'جيرسي',
								  'DM' => 'دومينيكا',
								  'RW' => 'رواندا',
								  'RU' => 'روسيا',
								  'BY' => 'روسيا البيضاء',
								  'RO' => 'رومانيا',
								  'RE' => 'روينيون',
								  'ZM' => 'زامبيا',
								  'ZW' => 'زيمبابوي',
								  'CI' => 'ساحل العاج',
								  'WS' => 'ساموا',
								  'AS' => 'ساموا الأمريكية',
								  'SM' => 'سان مارينو',
								  'PM' => 'سانت بيير وميكولون',
								  'VC' => 'سانت فنسنت وغرنادين',
								  'KN' => 'سانت كيتس ونيفيس',
								  'LC' => 'سانت لوسيا',
								  'MF' => 'سانت مارتين',
								  'SH' => 'سانت هيلنا',
								  'ST' => 'ساو تومي وبرينسيبي',
								  'LK' => 'سريلانكا',
								  'SJ' => 'سفالبارد وجان مايان',
								  'SK' => 'سلوفاكيا',
								  'SI' => 'سلوفينيا',
								  'SG' => 'سنغافورة',
								  'SZ' => 'سوازيلاند',
								  'SR' => 'سورينام',
								  'CH' => 'سويسرا',
								  'SL' => 'سيراليون',
								  'SC' => 'سيشل',
								  'CL' => 'شيلي',
								  'RS' => 'صربيا',
								  'CS' => 'صربيا والجبل الأسود',
								  'TJ' => 'طاجكستان',
								  'GM' => 'غامبيا',
								  'GH' => 'غانا',
								  'GF' => 'غويانا',
								  'GY' => 'غيانا',
								  'GN' => 'غينيا',
								  'GQ' => 'غينيا الاستوائية',
								  'GW' => 'غينيا بيساو',
								  'VU' => 'فانواتو',
								  'FR' => 'فرنسا',
								  'VE' => 'فنزويلا',
								  'FI' => 'فنلندا',
								  'VN' => 'فيتنام',
								  'FJ' => 'فيجي',
								  'CY' => 'قبرص',
								  'KG' => 'قرغيزستان',
								  'KZ' => 'كازاخستان',
								  'NC' => 'كاليدونيا الجديدة',
								  'HR' => 'كرواتيا',
								  'KH' => 'كمبوديا',
								  'CA' => 'كندا',
								  'CU' => 'كوبا',
								  'KR' => 'كوريا الجنوبية',
								  'KP' => 'كوريا الشمالية',
								  'CR' => 'كوستاريكا',
								  'CO' => 'كولومبيا',
								  'KI' => 'كيريباتي',
								  'KE' => 'كينيا',
								  'LV' => 'لاتفيا',
								  'LA' => 'لاوس',
								  'LU' => 'لوكسمبورج',
								  'LR' => 'ليبيريا',
								  'LT' => 'ليتوانيا',
								  'LI' => 'ليختنشتاين',
								  'LS' => 'ليسوتو',
								  'MQ' => 'مارتينيك',
								  'MO' => 'ماكاو الصينية',
								  'MT' => 'مالطا',
								  'ML' => 'مالي',
								  'MY' => 'ماليزيا',
								  'YT' => 'مايوت',
								  'MG' => 'مدغشقر',
								  'MK' => 'مقدونيا',
								  'MW' => 'ملاوي',
								  'ZZ' => 'منطقة غير معرفة',
								  'MN' => 'منغوليا',
								  'MU' => 'موريشيوس',
								  'MZ' => 'موزمبيق',
								  'MD' => 'مولدافيا',
								  'MC' => 'موناكو',
								  'MS' => 'مونتسرات',
								  'MM' => 'ميانمار',
								  'FM' => 'ميكرونيزيا',
								  'NA' => 'ناميبيا',
								  'NR' => 'نورو',
								  'NP' => 'نيبال',
								  'NG' => 'نيجيريا',
								  'NI' => 'نيكاراجوا',
								  'NZ' => 'نيوزيلاندا',
								  'NU' => 'نيوي',
								  'HT' => 'هايتي',
								  'HN' => 'هندوراس',
								  'NL' => 'هولندا',
								  'HK' => 'هونج كونج الصينية'
												);
								$resulting_array = array_combine($country,$country);
								$resulting_array["البلد المقيم بها *"] = "NONE";
								$resulting_array = array_flip($resulting_array);
								echo form_dropdown('country', $resulting_array, $this->input->post('country'), 'id="country" class="'.$country_class.'"');

								echo form_submit($form_submitter);
								echo form_close();

								?>


		</div>
	</div>

	<div id="top_middle_logo"></div>
	<!-- 
<div id="container">
		
	
	<div id="body">
		
		
		
		<?php
		
		
			/*
		echo '<table>';
		
			echo '<tr>';
				echo '<td>';
					echo 'Profile Picture:';
				echo '</td>';
				echo '<td>';
					echo '<div id="profile_picture_upload" class="normal"></div>';
				echo '</td>';
				echo '<td>';
					echo form_error('profile_picture_name', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';
			echo '</tr>';
		
			
			echo '<tr>';
				echo '<td>';
					echo 'Full Name:';
				echo '</td>';
				echo '<td>';
					echo form_input($full_name);
				echo '</td>';
				echo '<td>';
					echo form_error('fullname', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'Date of Birth:';
				echo '</td>';
				echo '<td>';
				echo buildDayDropdown('day',$this->input->post('gender'));
				echo buildMonthDropdown('month','03');
				echo buildYearDropdown('year','1991');
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'Gender:';
				echo '</td>';
				echo '<td>';
				$gender_radiobutton = $this->input->post('gender');
				if($gender_radiobutton == 1)
				{
					echo form_radio('gender', '1', True);
					echo form_label('زكر', 'gender');
					echo form_radio('gender', '2', False);
					echo form_label('أنثي', 'gender');
				echo '</td>';
				}
				else
				{
					if($gender_radiobutton == 2)
					{
						echo form_radio('gender', '1', False);
						echo form_label('زكر', 'gender');
						echo form_radio('gender', '2', True);
						echo form_label('أنثي', 'gender');
					echo '</td>';
					}
					else
					{
						echo form_radio('gender', '1', True);
						echo form_label('زكر', 'gender');
						echo form_radio('gender', '2', False);
						echo form_label('أنثي', 'gender');
					echo '</td>';
						
					}
				}
			echo '</tr>';
			
			
			
			echo '<tr>';
				echo '<td>';
					echo 'Marital Status:';
				echo '</td>';
				echo '<td>';
				$marital_status_radiobutton = $this->input->post('marital_status');
				if($marital_status_radiobutton == 1)
				{
					echo form_radio('marital_status', '1', True);
					echo form_label('أعزب', 'marital_status');
					
					echo form_radio('marital_status', '2', False);
					echo form_label('متزوج', 'marital_status');
					
					echo form_radio('marital_status', '3', False);
					echo form_label('مطلق', 'marital_status');
					
					echo form_radio('marital_status', '4', False);
					echo form_label('أرمل', 'marital_status');
				echo '</td>';
				}
				else
				{
					if($marital_status_radiobutton == 2)
					{
						echo form_radio('marital_status', '1', False);
						echo form_label('أعزب', 'marital_status');
						
						echo form_radio('marital_status', '2', True);
						echo form_label('متزوج', 'marital_status');
						
						echo form_radio('marital_status', '3', False);
						echo form_label('مطلق', 'marital_status');
						
						echo form_radio('marital_status', '4', False);
						echo form_label('أرمل', 'marital_status');
					echo '</td>';
					}
					else
					{
						if($marital_status_radiobutton == 3)
						{
							echo form_radio('marital_status', '1', False);
							echo form_label('أعزب', 'marital_status');
							
							echo form_radio('marital_status', '2', False);
							echo form_label('متزوج', 'marital_status');
							
							echo form_radio('marital_status', '3', True);
							echo form_label('مطلق', 'marital_status');
							
							echo form_radio('marital_status', '4', False);
							echo form_label('أرمل', 'marital_status');
						echo '</td>';
						}
						else
						{
							if($marital_status_radiobutton == 4)
							{
								echo form_radio('marital_status', '1', False);
								echo form_label('أعزب', 'marital_status');
								
								echo form_radio('marital_status', '2', False);
								echo form_label('متزوج', 'marital_status');
								
								echo form_radio('marital_status', '3', False);
								echo form_label('مطلق', 'marital_status');
								
								echo form_radio('marital_status', '4', true);
								echo form_label('أرمل', 'marital_status');
							echo '</td>';
							}
							else
							{
								echo form_radio('marital_status', '1', True);
								echo form_label('أعزب', 'marital_status');
								
								echo form_radio('marital_status', '2', False);
								echo form_label('متزوج', 'marital_status');
								
								echo form_radio('marital_status', '3', False);
								echo form_label('مطلق', 'marital_status');
								
								echo form_radio('marital_status', '4', False);
								echo form_label('أرمل', 'marital_status');
							echo '</td>';
							}
						}
					}
				}
			echo '</tr>';
			
			
			
			echo '<tr>';
				echo '<td>';
					echo 'Job:';
				echo '</td>';
				echo '<td>';
					echo form_input($job);
				echo '</td>';
				echo '<td>';
					echo form_error('job', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'Nationality:';
				echo '</td>';
				echo '<td>';
				$nationality = array(
					'AW' => 'آروبا',
					  'AZ' => 'أذربيجان',
					  'AM' => 'أرمينيا',
					  'ES' => 'أسبانيا',
					  'AU' => 'أستراليا',
					  'AF' => 'أفغانستان',
					  'AL' => 'ألبانيا',
					  'DE' => 'ألمانيا',
					  'AG' => 'أنتيجوا وبربودا',
					  'AO' => 'أنجولا',
					  'AI' => 'أنجويلا',
					  'AD' => 'أندورا',
					  'UY' => 'أورجواي',
					  'UZ' => 'أوزبكستان',
					  'UG' => 'أوغندا',
					  'UA' => 'أوكرانيا',
					  'IE' => 'أيرلندا',
					  'IS' => 'أيسلندا',
					  'ET' => 'اثيوبيا',
					  'ER' => 'اريتريا',
					  'EE' => 'استونيا',
					  'IL' => 'اسرائيل',
					  'AR' => 'الأرجنتين',
					  'JO' => 'الأردن',
					  'EC' => 'الاكوادور',
					  'AE' => 'الامارات العربية المتحدة',
					  'BS' => 'الباهاما',
					  'BH' => 'البحرين',
					  'BR' => 'البرازيل',
					  'PT' => 'البرتغال',
					  'BA' => 'البوسنة والهرسك',
					  'GA' => 'الجابون',
					  'ME' => 'الجبل الأسود',
					  'DZ' => 'الجزائر',
					  'DK' => 'الدانمرك',
					  'CV' => 'الرأس الأخضر',
					  'SV' => 'السلفادور',
					  'SN' => 'السنغال',
					  'SD' => 'السودان',
					  'SE' => 'السويد',
					  'EH' => 'الصحراء الغربية',
					  'SO' => 'الصومال',
					  'CN' => 'الصين',
					  'IQ' => 'العراق',
					  'VA' => 'الفاتيكان',
					  'PH' => 'الفيلبين',
					  'AQ' => 'القطب الجنوبي',
					  'CM' => 'الكاميرون',
					  'CG' => 'الكونغو - برازافيل',
					  'KW' => 'الكويت',
					  'HU' => 'المجر',
					  'IO' => 'المحيط الهندي البريطاني',
					  'MA' => 'المغرب',
					  'TF' => 'المقاطعات الجنوبية الفرنسية',
					  'MX' => 'المكسيك',
					  'SA' => 'المملكة العربية السعودية',
					  'GB' => 'المملكة المتحدة',
					  'NO' => 'النرويج',
					  'AT' => 'النمسا',
					  'NE' => 'النيجر',
					  'IN' => 'الهند',
					  'US' => 'الولايات المتحدة الأمريكية',
					  'JP' => 'اليابان',
					  'YE' => 'اليمن',
					  'GR' => 'اليونان',
					  'ID' => 'اندونيسيا',
					  'IR' => 'ايران',
					  'IT' => 'ايطاليا',
					  'PG' => 'بابوا غينيا الجديدة',
					  'PY' => 'باراجواي',
					  'PK' => 'باكستان',
					  'PW' => 'بالاو',
					  'BW' => 'بتسوانا',
					  'PN' => 'بتكايرن',
					  'BB' => 'بربادوس',
					  'BM' => 'برمودا',
					  'BN' => 'بروناي',
					  'BE' => 'بلجيكا',
					  'BG' => 'بلغاريا',
					  'BZ' => 'بليز',
					  'BD' => 'بنجلاديش',
					  'PA' => 'بنما',
					  'BJ' => 'بنين',
					  'BT' => 'بوتان',
					  'PR' => 'بورتوريكو',
					  'BF' => 'بوركينا فاسو',
					  'BI' => 'بوروندي',
					  'PL' => 'بولندا',
					  'BO' => 'بوليفيا',
					  'PF' => 'بولينيزيا الفرنسية',
					  'PE' => 'بيرو',
					  'TZ' => 'تانزانيا',
					  'TH' => 'تايلند',
					  'TW' => 'تايوان',
					  'TM' => 'تركمانستان',
					  'TR' => 'تركيا',
					  'TT' => 'ترينيداد وتوباغو',
					  'TD' => 'تشاد',
					  'TG' => 'توجو',
					  'TV' => 'توفالو',
					  'TK' => 'توكيلو',
					  'TO' => 'تونجا',
					  'TN' => 'تونس',
					  'TL' => 'تيمور الشرقية',
					  'JM' => 'جامايكا',
					  'GI' => 'جبل طارق',
					  'GD' => 'جرينادا',
					  'GL' => 'جرينلاند',
					  'AX' => 'جزر أولان',
					  'AN' => 'جزر الأنتيل الهولندية',
					  'TC' => 'جزر الترك وجايكوس',
					  'KM' => 'جزر القمر',
					  'KY' => 'جزر الكايمن',
					  'MH' => 'جزر المارشال',
					  'MV' => 'جزر الملديف',
					  'UM' => 'جزر الولايات المتحدة البعيدة الصغيرة',
					  'SB' => 'جزر سليمان',
					  'FO' => 'جزر فارو',
					  'VI' => 'جزر فرجين الأمريكية',
					  'VG' => 'جزر فرجين البريطانية',
					  'FK' => 'جزر فوكلاند',
					  'CK' => 'جزر كوك',
					  'CC' => 'جزر كوكوس',
					  'MP' => 'جزر ماريانا الشمالية',
					  'WF' => 'جزر والس وفوتونا',
					  'CX' => 'جزيرة الكريسماس',
					  'BV' => 'جزيرة بوفيه',
					  'IM' => 'جزيرة مان',
					  'NF' => 'جزيرة نورفوك',
					  'HM' => 'جزيرة هيرد وماكدونالد',
					  'CF' => 'جمهورية افريقيا الوسطى',
					  'CZ' => 'جمهورية التشيك',
					  'DO' => 'جمهورية الدومينيك',
					  'CD' => 'جمهورية الكونغو الديمقراطية',
					  'ZA' => 'جمهورية جنوب افريقيا',
					  'GT' => 'جواتيمالا',
					  'GP' => 'جوادلوب',
					  'GU' => 'جوام',
					  'GE' => 'جورجيا',
					  'GS' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
					  'DJ' => 'جيبوتي',
					  'JE' => 'جيرسي',
					  'DM' => 'دومينيكا',
					  'RW' => 'رواندا',
					  'RU' => 'روسيا',
					  'BY' => 'روسيا البيضاء',
					  'RO' => 'رومانيا',
					  'RE' => 'روينيون',
					  'ZM' => 'زامبيا',
					  'ZW' => 'زيمبابوي',
					  'CI' => 'ساحل العاج',
					  'WS' => 'ساموا',
					  'AS' => 'ساموا الأمريكية',
					  'SM' => 'سان مارينو',
					  'PM' => 'سانت بيير وميكولون',
					  'VC' => 'سانت فنسنت وغرنادين',
					  'KN' => 'سانت كيتس ونيفيس',
					  'LC' => 'سانت لوسيا',
					  'MF' => 'سانت مارتين',
					  'SH' => 'سانت هيلنا',
					  'ST' => 'ساو تومي وبرينسيبي',
					  'LK' => 'سريلانكا',
					  'SJ' => 'سفالبارد وجان مايان',
					  'SK' => 'سلوفاكيا',
					  'SI' => 'سلوفينيا',
					  'SG' => 'سنغافورة',
					  'SZ' => 'سوازيلاند',
					  'SY' => 'سوريا',
					  'SR' => 'سورينام',
					  'CH' => 'سويسرا',
					  'SL' => 'سيراليون',
					  'SC' => 'سيشل',
					  'CL' => 'شيلي',
					  'RS' => 'صربيا',
					  'CS' => 'صربيا والجبل الأسود',
					  'TJ' => 'طاجكستان',
					  'OM' => 'عمان',
					  'GM' => 'غامبيا',
					  'GH' => 'غانا',
					  'GF' => 'غويانا',
					  'GY' => 'غيانا',
					  'GN' => 'غينيا',
					  'GQ' => 'غينيا الاستوائية',
					  'GW' => 'غينيا بيساو',
					  'VU' => 'فانواتو',
					  'FR' => 'فرنسا',
					  'PS' => 'فلسطين',
					  'VE' => 'فنزويلا',
					  'FI' => 'فنلندا',
					  'VN' => 'فيتنام',
					  'FJ' => 'فيجي',
					  'CY' => 'قبرص',
					  'KG' => 'قرغيزستان',
					  'QA' => 'قطر',
					  'KZ' => 'كازاخستان',
					  'NC' => 'كاليدونيا الجديدة',
					  'HR' => 'كرواتيا',
					  'KH' => 'كمبوديا',
					  'CA' => 'كندا',
					  'CU' => 'كوبا',
					  'KR' => 'كوريا الجنوبية',
					  'KP' => 'كوريا الشمالية',
					  'CR' => 'كوستاريكا',
					  'CO' => 'كولومبيا',
					  'KI' => 'كيريباتي',
					  'KE' => 'كينيا',
					  'LV' => 'لاتفيا',
					  'LA' => 'لاوس',
					  'LB' => 'لبنان',
					  'LU' => 'لوكسمبورج',
					  'LY' => 'ليبيا',
					  'LR' => 'ليبيريا',
					  'LT' => 'ليتوانيا',
					  'LI' => 'ليختنشتاين',
					  'LS' => 'ليسوتو',
					  'MQ' => 'مارتينيك',
					  'MO' => 'ماكاو الصينية',
					  'MT' => 'مالطا',
					  'ML' => 'مالي',
					  'MY' => 'ماليزيا',
					  'YT' => 'مايوت',
					  'MG' => 'مدغشقر',
					  'EG' => 'مصر',
					  'MK' => 'مقدونيا',
					  'MW' => 'ملاوي',
					  'ZZ' => 'منطقة غير معرفة',
					  'MN' => 'منغوليا',
					  'MR' => 'موريتانيا',
					  'MU' => 'موريشيوس',
					  'MZ' => 'موزمبيق',
					  'MD' => 'مولدافيا',
					  'MC' => 'موناكو',
					  'MS' => 'مونتسرات',
					  'MM' => 'ميانمار',
					  'FM' => 'ميكرونيزيا',
					  'NA' => 'ناميبيا',
					  'NR' => 'نورو',
					  'NP' => 'نيبال',
					  'NG' => 'نيجيريا',
					  'NI' => 'نيكاراجوا',
					  'NZ' => 'نيوزيلاندا',
					  'NU' => 'نيوي',
					  'HT' => 'هايتي',
					  'HN' => 'هندوراس',
					  'NL' => 'هولندا',
					  'HK' => 'هونج كونج الصينية'
									);
					echo form_dropdown('nationality', $nationality, 'EG');
				echo '</td>';
			echo '</tr>';
			
			
			
			echo '<tr>';
				echo '<td>';
					echo 'Country Of Residence:';
				echo '</td>';
				echo '<td>';
				$country = array(
					'AW' => 'آروبا',
					  'AZ' => 'أذربيجان',
					  'AM' => 'أرمينيا',
					  'ES' => 'أسبانيا',
					  'AU' => 'أستراليا',
					  'AF' => 'أفغانستان',
					  'AL' => 'ألبانيا',
					  'DE' => 'ألمانيا',
					  'AG' => 'أنتيجوا وبربودا',
					  'AO' => 'أنجولا',
					  'AI' => 'أنجويلا',
					  'AD' => 'أندورا',
					  'UY' => 'أورجواي',
					  'UZ' => 'أوزبكستان',
					  'UG' => 'أوغندا',
					  'UA' => 'أوكرانيا',
					  'IE' => 'أيرلندا',
					  'IS' => 'أيسلندا',
					  'ET' => 'اثيوبيا',
					  'ER' => 'اريتريا',
					  'EE' => 'استونيا',
					  'IL' => 'اسرائيل',
					  'AR' => 'الأرجنتين',
					  'JO' => 'الأردن',
					  'EC' => 'الاكوادور',
					  'AE' => 'الامارات العربية المتحدة',
					  'BS' => 'الباهاما',
					  'BH' => 'البحرين',
					  'BR' => 'البرازيل',
					  'PT' => 'البرتغال',
					  'BA' => 'البوسنة والهرسك',
					  'GA' => 'الجابون',
					  'ME' => 'الجبل الأسود',
					  'DZ' => 'الجزائر',
					  'DK' => 'الدانمرك',
					  'CV' => 'الرأس الأخضر',
					  'SV' => 'السلفادور',
					  'SN' => 'السنغال',
					  'SD' => 'السودان',
					  'SE' => 'السويد',
					  'EH' => 'الصحراء الغربية',
					  'SO' => 'الصومال',
					  'CN' => 'الصين',
					  'IQ' => 'العراق',
					  'VA' => 'الفاتيكان',
					  'PH' => 'الفيلبين',
					  'AQ' => 'القطب الجنوبي',
					  'CM' => 'الكاميرون',
					  'CG' => 'الكونغو - برازافيل',
					  'KW' => 'الكويت',
					  'HU' => 'المجر',
					  'IO' => 'المحيط الهندي البريطاني',
					  'MA' => 'المغرب',
					  'TF' => 'المقاطعات الجنوبية الفرنسية',
					  'MX' => 'المكسيك',
					  'SA' => 'المملكة العربية السعودية',
					  'GB' => 'المملكة المتحدة',
					  'NO' => 'النرويج',
					  'AT' => 'النمسا',
					  'NE' => 'النيجر',
					  'IN' => 'الهند',
					  'US' => 'الولايات المتحدة الأمريكية',
					  'JP' => 'اليابان',
					  'YE' => 'اليمن',
					  'GR' => 'اليونان',
					  'ID' => 'اندونيسيا',
					  'IR' => 'ايران',
					  'IT' => 'ايطاليا',
					  'PG' => 'بابوا غينيا الجديدة',
					  'PY' => 'باراجواي',
					  'PK' => 'باكستان',
					  'PW' => 'بالاو',
					  'BW' => 'بتسوانا',
					  'PN' => 'بتكايرن',
					  'BB' => 'بربادوس',
					  'BM' => 'برمودا',
					  'BN' => 'بروناي',
					  'BE' => 'بلجيكا',
					  'BG' => 'بلغاريا',
					  'BZ' => 'بليز',
					  'BD' => 'بنجلاديش',
					  'PA' => 'بنما',
					  'BJ' => 'بنين',
					  'BT' => 'بوتان',
					  'PR' => 'بورتوريكو',
					  'BF' => 'بوركينا فاسو',
					  'BI' => 'بوروندي',
					  'PL' => 'بولندا',
					  'BO' => 'بوليفيا',
					  'PF' => 'بولينيزيا الفرنسية',
					  'PE' => 'بيرو',
					  'TZ' => 'تانزانيا',
					  'TH' => 'تايلند',
					  'TW' => 'تايوان',
					  'TM' => 'تركمانستان',
					  'TR' => 'تركيا',
					  'TT' => 'ترينيداد وتوباغو',
					  'TD' => 'تشاد',
					  'TG' => 'توجو',
					  'TV' => 'توفالو',
					  'TK' => 'توكيلو',
					  'TO' => 'تونجا',
					  'TN' => 'تونس',
					  'TL' => 'تيمور الشرقية',
					  'JM' => 'جامايكا',
					  'GI' => 'جبل طارق',
					  'GD' => 'جرينادا',
					  'GL' => 'جرينلاند',
					  'AX' => 'جزر أولان',
					  'AN' => 'جزر الأنتيل الهولندية',
					  'TC' => 'جزر الترك وجايكوس',
					  'KM' => 'جزر القمر',
					  'KY' => 'جزر الكايمن',
					  'MH' => 'جزر المارشال',
					  'MV' => 'جزر الملديف',
					  'UM' => 'جزر الولايات المتحدة البعيدة الصغيرة',
					  'SB' => 'جزر سليمان',
					  'FO' => 'جزر فارو',
					  'VI' => 'جزر فرجين الأمريكية',
					  'VG' => 'جزر فرجين البريطانية',
					  'FK' => 'جزر فوكلاند',
					  'CK' => 'جزر كوك',
					  'CC' => 'جزر كوكوس',
					  'MP' => 'جزر ماريانا الشمالية',
					  'WF' => 'جزر والس وفوتونا',
					  'CX' => 'جزيرة الكريسماس',
					  'BV' => 'جزيرة بوفيه',
					  'IM' => 'جزيرة مان',
					  'NF' => 'جزيرة نورفوك',
					  'HM' => 'جزيرة هيرد وماكدونالد',
					  'CF' => 'جمهورية افريقيا الوسطى',
					  'CZ' => 'جمهورية التشيك',
					  'DO' => 'جمهورية الدومينيك',
					  'CD' => 'جمهورية الكونغو الديمقراطية',
					  'ZA' => 'جمهورية جنوب افريقيا',
					  'GT' => 'جواتيمالا',
					  'GP' => 'جوادلوب',
					  'GU' => 'جوام',
					  'GE' => 'جورجيا',
					  'GS' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
					  'DJ' => 'جيبوتي',
					  'JE' => 'جيرسي',
					  'DM' => 'دومينيكا',
					  'RW' => 'رواندا',
					  'RU' => 'روسيا',
					  'BY' => 'روسيا البيضاء',
					  'RO' => 'رومانيا',
					  'RE' => 'روينيون',
					  'ZM' => 'زامبيا',
					  'ZW' => 'زيمبابوي',
					  'CI' => 'ساحل العاج',
					  'WS' => 'ساموا',
					  'AS' => 'ساموا الأمريكية',
					  'SM' => 'سان مارينو',
					  'PM' => 'سانت بيير وميكولون',
					  'VC' => 'سانت فنسنت وغرنادين',
					  'KN' => 'سانت كيتس ونيفيس',
					  'LC' => 'سانت لوسيا',
					  'MF' => 'سانت مارتين',
					  'SH' => 'سانت هيلنا',
					  'ST' => 'ساو تومي وبرينسيبي',
					  'LK' => 'سريلانكا',
					  'SJ' => 'سفالبارد وجان مايان',
					  'SK' => 'سلوفاكيا',
					  'SI' => 'سلوفينيا',
					  'SG' => 'سنغافورة',
					  'SZ' => 'سوازيلاند',
					  'SY' => 'سوريا',
					  'SR' => 'سورينام',
					  'CH' => 'سويسرا',
					  'SL' => 'سيراليون',
					  'SC' => 'سيشل',
					  'CL' => 'شيلي',
					  'RS' => 'صربيا',
					  'CS' => 'صربيا والجبل الأسود',
					  'TJ' => 'طاجكستان',
					  'OM' => 'عمان',
					  'GM' => 'غامبيا',
					  'GH' => 'غانا',
					  'GF' => 'غويانا',
					  'GY' => 'غيانا',
					  'GN' => 'غينيا',
					  'GQ' => 'غينيا الاستوائية',
					  'GW' => 'غينيا بيساو',
					  'VU' => 'فانواتو',
					  'FR' => 'فرنسا',
					  'PS' => 'فلسطين',
					  'VE' => 'فنزويلا',
					  'FI' => 'فنلندا',
					  'VN' => 'فيتنام',
					  'FJ' => 'فيجي',
					  'CY' => 'قبرص',
					  'KG' => 'قرغيزستان',
					  'QA' => 'قطر',
					  'KZ' => 'كازاخستان',
					  'NC' => 'كاليدونيا الجديدة',
					  'HR' => 'كرواتيا',
					  'KH' => 'كمبوديا',
					  'CA' => 'كندا',
					  'CU' => 'كوبا',
					  'KR' => 'كوريا الجنوبية',
					  'KP' => 'كوريا الشمالية',
					  'CR' => 'كوستاريكا',
					  'CO' => 'كولومبيا',
					  'KI' => 'كيريباتي',
					  'KE' => 'كينيا',
					  'LV' => 'لاتفيا',
					  'LA' => 'لاوس',
					  'LB' => 'لبنان',
					  'LU' => 'لوكسمبورج',
					  'LY' => 'ليبيا',
					  'LR' => 'ليبيريا',
					  'LT' => 'ليتوانيا',
					  'LI' => 'ليختنشتاين',
					  'LS' => 'ليسوتو',
					  'MQ' => 'مارتينيك',
					  'MO' => 'ماكاو الصينية',
					  'MT' => 'مالطا',
					  'ML' => 'مالي',
					  'MY' => 'ماليزيا',
					  'YT' => 'مايوت',
					  'MG' => 'مدغشقر',
					  'EG' => 'مصر',
					  'MK' => 'مقدونيا',
					  'MW' => 'ملاوي',
					  'ZZ' => 'منطقة غير معرفة',
					  'MN' => 'منغوليا',
					  'MR' => 'موريتانيا',
					  'MU' => 'موريشيوس',
					  'MZ' => 'موزمبيق',
					  'MD' => 'مولدافيا',
					  'MC' => 'موناكو',
					  'MS' => 'مونتسرات',
					  'MM' => 'ميانمار',
					  'FM' => 'ميكرونيزيا',
					  'NA' => 'ناميبيا',
					  'NR' => 'نورو',
					  'NP' => 'نيبال',
					  'NG' => 'نيجيريا',
					  'NI' => 'نيكاراجوا',
					  'NZ' => 'نيوزيلاندا',
					  'NU' => 'نيوي',
					  'HT' => 'هايتي',
					  'HN' => 'هندوراس',
					  'NL' => 'هولندا',
					  'HK' => 'هونج كونج الصينية'
									);
				
					echo form_dropdown('country', $country, 'EG');
				echo '</td>';
			echo '</tr>';
			
			
			echo '<tr>';
				echo '<td>';
					echo 'Mobile Number:';
				echo '</td>';
				echo '<td>';
					echo form_input($country_code);
					echo form_input($mobile_number);
				echo '</td>';
				echo '<td>';
					echo form_error('mobile_number', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'E-mail:';
				echo '</td>';
				echo '<td>';
					echo form_input($email);
				echo '</td>';
				echo '<td>';
					echo form_error('email', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'Facebook profile url:';
				echo '</td>';
				echo '<td>';
					echo form_input($facebook);
				echo '</td>';
				echo '<td>';
					echo form_error('facebook', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';
			echo '</tr>';
			
			
			echo '<tr>';
				echo '<td>';
					echo 'Please enter your weight:';
				echo '</td>';
				echo '<td>';
					echo form_input($weight);
				echo '</td>';
				echo '<td>';
					echo form_error('weight', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'Picture of your weight:';
				echo '</td>';
				echo '<td>';
					echo form_upload('weight_image');
				echo '</td>';
				echo '<td>';
					echo form_error('weight_image', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';	
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'Please enter your height:';
				echo '</td>';
				echo '<td>';
					echo form_input($height);
				echo '</td>';
				echo '<td>';
					echo form_error('height', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'Picture of your height:';
				echo '</td>';
				echo '<td>';
					echo form_upload('height_image');
				echo '</td>';
				echo '<td>';
					echo form_error('height_image', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';	
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'Reason to be Kershless:';
				echo '</td>';
				echo '<td>';
					echo form_textarea($reason);
				echo '</td>';
				echo '<td>';
					echo form_error('reason', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';	
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'Write a sentence to provoke your oponents:';
				echo '</td>';
				echo '<td>';
					echo form_textarea($provocation);
				echo '</td>';
				echo '<td>';
					echo form_error('provocation', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'If you want to be with a friend in the same season, please enter your friend\'s Kershless Code and his/her name:';
				echo '</td>';
				echo '<td>';
					echo form_input($friend_code);
				echo '</td>';
				echo '<td>';
					echo form_error('friend_code', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'Check this box if you agree on using name';
				echo '</td>';
				echo '<td>';
					echo form_checkbox($name_agreement);
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'Check this box if you agree on using your picture';
				echo '</td>';
				echo '<td>';
					echo form_checkbox($picture_agreement);
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo 'It is my responsibility that all the above information is correct';
				echo '</td>';
				echo '<td>';
					echo form_checkbox($overall_agreement);
				echo '</td>';
				echo '<td>';
					echo form_error('overall_agreement', '<div class="error" style="color:#C0392B;font-weight:bold">', '</div>');
				echo '</td>';
			echo '</tr>';
			
			//echo form_input($hidden_profile_picture);
			
			
			echo '<tr>';
				echo '<td>';
					echo form_submit($form_submitter);
				echo '</td>';
			echo '</tr>';
		echo '</table>';
		
		echo form_close();
			*/
		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
-->
</body>
</html>
