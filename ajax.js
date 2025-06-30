//insert section start 
  $(".btn").click(function(){

  var name = $("#name").val();
  var email = $("#email").val();
  var password = $("#password").val();


    $.ajax({
    	method:"POST",
    	url:"insert.php",
      data:{name:name, email:email, pass:password},   
    	success:function(){
         read(); 
    	}
    }); 
  });
 //insert section end

 // reading data section start
   function read(){
    var read ="";
    $.ajax({
      url:"read.php",
      method:"POST",
      data:{read:read},
      success:function(data){
         $("#tbody").html(data);
      }
    });
   }    

 // reading data section end 

 //delete section start 
   function Delete(userId){
     $con = confirm("are you sure?");
     if($con == true){
           $.ajax({
          url:"delete.php",
          method:"POST",
          data:{userId:userId},
          success:function(){
              read()
           } 
        });
     }
   }
 //delete section end

 //edit start
   function edit(userid){
     var name = $("#name").val();
     var email = $("#email").val();
     var password = $("#password").val();

     $.ajax({
      url:"edit.php",
      method:"GET",
      data:{userId:userid},
      success:function(data){
         $("body").html(data);
      }
     });
   }
 //edit end
 //update start
   function update_(userid){
      var name = $("#name").val();
      var email = $("#email").val();
      var password = $("#password").val();
   
     $.ajax({
      url:"update.php",
      method:"GET",
      data:{user_name:name, email:email, pass:password, userId:userid },
      success:function(data){
         alert(data);
      }
     });
   }
 //update end

   //read button
   $(".read").click(function(){

    var read ="";
    $.ajax({
      url:"read.php",
      method:"POST",
      data:{read:read},
      success:function(data){
         $("#tbody").html(data);
       }
     });
   });

   function home(){
     var read ="";

    $.ajax({
      url:"index.php",
      method:"POST",
      data:{read:read},
      success:function(data){
         $("body").html(data);
       }
     });
   }