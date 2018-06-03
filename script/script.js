var orientation =  screen.msOrientation || (screen.orientation || screen.mozOrientation || {}).type;
if (orientation === "landscape-primary" && $(window).width() > 616) {      
  //Add your javascript for large screens here 
    $(document).ready(function(){
     $( "#accordion" ).accordion();
    $( "#accordion2" ).accordion();
    var nav = false;
    $(".nav").click(function() {
        if(nav ==false)
        {  
           $("#sidenav").width("250px"); 
            $("main").css("margin-left","280px");
            nav = true;
        }
        else{
            $("#sidenav").width("0px");
            $("main").css("margin-left","30px");
            
            nav = false;
        }

    });
    
 
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("first");
    var sticky = header.offsetTop -110;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            $("#top").css("background-color","rgba(0,0,0,0.95)");
          } else {
            $("#top").css("background-color","rgba(0,0,0,0.4)");
          }
        }
    
 
    
        $(".box").mouseover(function(){
          $(".box-before",this).css("transform","rotate(0deg)"); 
            $(".box-after",this).css("transform","rotate(0deg)"); 
        });

        $(".box").mouseout(function(){
          $(".box-before",this).css("transform","rotate(3deg)"); 
            $(".box-after",this).css("transform","rotate(-3deg)"); 
        });
    
    
	});

function openLight(n){
        var d ="#light";
        var count =1;
        while($(d+count).length){
                $(d+count).hide();
                count++;
            }
        
        d ="#light"+n;
        $(d).show();
        
      }
    function closeLight(){
        var d ="#light";
        var count =1;
		console.log("hi");
        while($(d+count).length){
            $(d+count).hide();
            count++;
        }
    }
    
    $(document).keydown(function(e) {
    // ESCAPE key pressed
        if (e.keyCode == 27) {
               closeLight();
        }
        });
        
}
else{
    $(document).ready(function(){
         $( "#accordion" ).accordion();
        $( "#accordion2" ).accordion();
        var nav = false;
        $(".nav").click(function() {
            if(nav ==false)
            {  
               $(".navigation").show(); 
                nav = true;
            }
            else{
                $(".navigation").hide(); 
                nav = false;
            }

        });
      

        
        $(".navigation a").click(function(){
            $(".navigation").hide();
        });

        $(".box").mouseover(function(){
          $(".box-before",this).css("transform","rotate(0deg)"); 
            $(".box-after",this).css("transform","rotate(0deg)"); 
        });
    
		 
      
        $(".box").mouseout(function(){
          $(".box-before",this).css("transform","rotate(3deg)"); 
            $(".box-after",this).css("transform","rotate(-3deg)"); 
        });
    
    });
    function openLight(n){
        var d ="#light";
        var count =1;
        while($(d+count).length){
                $(d+count).hide();
                count++;
            }
        
        d ="#light"+n;
        $(d).show();
        $(".navigation").hide();
        
      }
    function closeLight(){
        var d ="#light";
        var count =1;

        while($(d+count).length){
            $(d+count).hide();
            count++;
        }
    }
    
    $(document).keydown(function(e) {
    // ESCAPE key pressed
        if (e.keyCode == 27) {
               closeLight();
        }
        });
 
     
}
