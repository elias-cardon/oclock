$(function(){
	
    var timer = {
    
        hours : "",
        minutes : "",
        seconds : "",
        
        
        getNewTime : function(){
            
          var date = new Date(); 
                
            this.hours	= date.getHours();
            this.minutes  = date.getMinutes();
            this.seconds  = date.getSeconds();
             
                // Format heure, min, sec
            if (hours < 10) {
                hours = "0" + hours;
            }
            if (minutes < 10) {
                minutes = "0" + minutes;
            }
            if (seconds < 10) {
                seconds = "0" + seconds;
            }
             
            $(".digits span.hours").html(hours + ":");
            $(".digits span.minutes").html(minutes + ":");
            $(".digits span.seconds").html(seconds);
        
            // console.log(this.seconds);
        },
        
        
        
        setUserTime : function(){
    
            // créat heures
            for(var i=0; i<=24; i++){
                
                if (i < 10) {i = "0" + i; }
        
                $("select.hours").append("<option value='"+i+"'>"+i+"</option>");
                
            }
            
            // créat minutes
            for(var i=0; i<=60; i++){
                
                if (i < 10) {i = "0" + i; }
                
                $("select.minutes").append("<option value='"+i+"'>"+i+"</option>");
                
            }
            
           // créat secondes
            for(var sec=0; sec<=60; sec++){
                
                if (sec < 10) {sec = "0" + sec; }
                
                $("select.seconds").append("<option value='"+sec+"'>"+sec+"</option>");
                
            }
        },
        
        getUserTime : function(){
            
            var userHours = $("select.hours").val(); 
            
            var userMinutes = $("select.minutes").val(); 
            
            var userSeconds = $("select.seconds").val(); 
        
            // définir la valeur choisie html
            (userHours != null) ? $("select.hours").find("option:disabled").html(userHours): "";
            
            (userMinutes != null) ? $("select.minutes").find("option:disabled").html(userMinutes): "";
            
            (userSeconds != null) ? $("select.seconds").find("option:disabled").html(userSeconds): "";
            
            if( this.hours == userHours &&  this.minutes == userMinutes && this.seconds == userSeconds){
          
        // mp3 alarm 
          $(".container").find('audio').attr("src","http://docs.google.com/uc?export=open&id=1GB1fu62kjdaD9oWZFROHgk3B4XXRhT3_");
          
                $("body").addClass("body");
                
                $(".digits").addClass("animated shake infinite ");
    
                
            }else{
                
            //	console.log("le temps n'est pas encore venu");
                
            }
            
        },
        
        
        reloadPage : function(){
            
            $(".submit").on("click", function(){
            
                $("body").removeClass("body");
                
                $(".digits").removeClass("animated shake infinite ");
                        $(".container").find('audio').attr("src","");
            });
        },
        
        
        styleInput : function(){
            $( ":input" ).css({
                border:"1px solid #2C3E50",
                padding:"3px 8px",
                "border-radius": "5px",
            });
        }
       
    }
        
      timer.styleInput();   
      timer.reloadPage();
        timer.setUserTime();
        
        // 
        setInterval( timer.getNewTime, 1000 );
        
        setInterval( timer.getUserTime, 1000 );
        
    }); 