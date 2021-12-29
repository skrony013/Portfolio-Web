	$(function(){

            //Service Image Add & Edit Preview
            $('input[type="file"][name="service_img"]').val('');
            //Image preview
            $('input[type="file"][name="service_img"]').on('change', function(){
            	var img_path = $(this)[0].value;
            	var img_holder = $('.img-holder');
            	var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();
            	if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
            		if(typeof(FileReader) != 'undefined'){
            			img_holder.empty();
            			var reader = new FileReader();
            			reader.onload = function(e){
            				$('<img/>',{'src':e.target.result,'class':'img-fluid','style':'width:110px; height:70px; margin-bottom:10px;'}).appendTo(img_holder);
            			}
            			img_holder.show();
            			reader.readAsDataURL($(this)[0].files[0]);
            		}else{
            			$(img_holder).html('This browser does not support FileReader');
            		}
            	}else{
            		$(img_holder).empty();
            	}
            });

            // Slider Image Add & Edit With Preview

            $('input[type="file"][name="bg_img"]').val('');
            //Image preview
            $('input[type="file"][name="bg_img"]').on('change', function(){
                var img_path = $(this)[0].value;
                var bg_img_holder = $('.bg-img-holder');
                var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();
                if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                    if(typeof(FileReader) != 'undefined'){
                        bg_img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'width:110px; height:70px; margin-bottom:10px;'}).appendTo(bg_img_holder);
                        }
                        bg_img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    }else{
                        $(bg_img_holder).html('This browser does not support FileReader');
                    }
                }else{
                    $(bg_img_holder).empty();
                }
            });


             // Team & testimonial Image Add & Edit With Preview

             $('input[type="file"][name="profile_img"]').val('');
            //Image preview
            $('input[type="file"][name="profile_img"]').on('change', function(){
                var img_path = $(this)[0].value;
                var team_img_holder = $('.team_img_holder');
                var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();
                if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                    if(typeof(FileReader) != 'undefined'){
                        team_img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'width:110px; height:70px; margin-bottom:10px;'}).appendTo(team_img_holder);
                        }
                        team_img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    }else{
                        $(team_img_holder).html('This browser does not support FileReader');
                    }
                }else{
                    $(team_img_holder).empty();
                }
            });


             // Blog Image Add & Edit With Preview

             $('input[type="file"][name="img"]').val('');
            //Image preview
            $('input[type="file"][name="img"]').on('change', function(){
                var img_path = $(this)[0].value;
                var blog_img_holder = $('.blog_img_holder');
                var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();
                if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                    if(typeof(FileReader) != 'undefined'){
                        blog_img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'width:110px; height:70px; margin-bottom:10px;'}).appendTo(blog_img_holder);
                        }
                        blog_img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    }else{
                        $(blog_img_holder).html('This browser does not support FileReader');
                    }
                }else{
                    $(blog_img_holder).empty();
                }
            });

             // Setting Logo Image Add & Edit With Preview

             $('input[type="file"][name="site_logo"]').val('');
            //Image preview
            $('input[type="file"][name="site_logo"]').on('change', function(){
                var img_path = $(this)[0].value;
                var blog_img_holder = $('.site_logo_holder');
                var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();
                if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                    if(typeof(FileReader) != 'undefined'){
                        blog_img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'width:100px; height:45px; margin-bottom:10px;'}).appendTo(blog_img_holder);
                        }
                        blog_img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    }else{
                        $(blog_img_holder).html('This browser does not support FileReader');
                    }
                }else{
                    $(blog_img_holder).empty();
                }
            });
             // Setting Logo Image Add & Edit With Preview

             $('input[type="file"][name="admin_logo"]').val('');
            //Image preview
            $('input[type="file"][name="admin_logo"]').on('change', function(){
                var img_path = $(this)[0].value;
                var blog_img_holder = $('.admin_logo_holder');
                var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();
                if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                    if(typeof(FileReader) != 'undefined'){
                        blog_img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'width:100px; height:45px; margin-bottom:10px;'}).appendTo(blog_img_holder);
                        }
                        blog_img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    }else{
                        $(blog_img_holder).html('This browser does not support FileReader');
                    }
                }else{
                    $(blog_img_holder).empty();
                }
            });
             // Setting favicon Image Add & Edit With Preview

             $('input[type="file"][name="site_favicon"]').val('');
            //Image preview
            $('input[type="file"][name="site_favicon"]').on('change', function(){
                var img_path = $(this)[0].value;
                var blog_img_holder = $('.site_favicon_holder');
                var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();
                if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                    if(typeof(FileReader) != 'undefined'){
                        blog_img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'width:100px; height:45px; margin-bottom:10px;'}).appendTo(blog_img_holder);
                        }
                        blog_img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    }else{
                        $(blog_img_holder).html('This browser does not support FileReader');
                    }
                }else{
                    $(blog_img_holder).empty();
                }
            });



         })