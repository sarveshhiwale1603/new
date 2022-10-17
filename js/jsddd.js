$(document).ready(function(){
   $(".toggle-menu").click(function(){
       $(".toggle-menu").toggleClass("add");
       $(".number-mbl").toggleClass("point");
       $(".logo-box").toggleClass("css");
   }) ;
   $(".close2").click(function(){
      $(".orange").css("display","none"); 
      $(".banner").addClass("up");
   });

    let catdnkname;
   $("#spancatname").hide();
   $(".callmessage").keyup(function(){
	     txt_check();
	   });
	   function txt_check(){
		   let txt=$(".callmessage").val();
		   let vali =/^\d{10}$/;
		   if(!vali.test(txt)){
            catdnkname="no";
			  $("#spancatname").show().html("** Enter Mobile No. only").css("color","black").focus();
			  txt_err=false;
			  return false;
		   }
		   else{
            catdnkname="yes";
		       $("#spancatname").hide();
		       
		   }
	   }

      $(".submitBtn").click(function(){ 
         if(catdnkname =="no"){
             alert("Please fill Correct number");
           }
               txt_err = true;
               txt_check();
                 
                 if((txt_err==true)){
                    return true;
                 }
                 else{return false;}
            });
            
             let sidednkname;
   $("#spancatname").hide();
   $(".sideinputphone").keyup(function(){
	     txt_check1();
	   });
	   function txt_check1(){
		   let txt=$(".sideinputphone").val();
		   let vali =/^\d{10}$/;
		   if(!vali.test(txt)){
            sidednkname="no";
			  $("#sidephone").show().html("** Enter Mobile No only").css("color","red").focus();
			  txt_error=false;
			  return false;
		   }
		   else{
            sidednkname="yes";
		       $("#sidephone").hide();
		       
		   }
	   }

      $(".subside").click(function(){ 
         if(sidednkname =="no"){
             alert("Please fill correct number");
           }
               txt_error = true;
               txt_check1();
                 
                 if((txt_error==true)){
                    return true;
                 }
                 else{return false;}
            });
});


