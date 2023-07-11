function updateAmt(){
    var cat = document.getElementById("cat").value;
    var amt = parseFloat(document.getElementById("amt").value);
    var amt2 = document.getElementById("amt2");
    var membership = document.getElementById("membership").value;
    var freecal;
    var freemut;
    var sumamt;
    
    if(cat == ""){
        amt2.value = "Amount to Pay";
    }else{
    
  if (amt == "") {
        amt2.value = "Amount to Pay";
        }else{
        
       if (membership == "free") {
        
          if(cat == "01"){
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 1);
        }
        if (cat == "02") {
            freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 2);
           
        }
        if (cat == "03") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 1.5);
        }
        if (cat == "04") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 1);;
        }
        
         
        
        }
        
        //basic
        if (membership == "basic") {
            
        
          if(cat == "01"){
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 1.5);
        }
        if (cat == "02") {
            freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 2.5);
           
        }
        if (cat == "03") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 2);
        }
        if (cat == "04") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 1.5);;
        }
        
        
        
        }
        
        //value
        if (membership == "value") {
            
            
          if(cat == "01"){
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 1.5);
        }
        if (cat == "02") {
            freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 2.5);
           
        }
        if (cat == "03") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 2);
        }
        if (cat == "04") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 1.5);;
        }
        
         
         
        }
        
        //premium
        if (membership == "premium") {
            
            
          if(cat == "01"){
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 1.5);
        }
        if (cat == "02") {
            freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 3);
           
        }
        if (cat == "03") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 2.5);
        }
        if (cat == "04") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 1.5);;
        }
        
     
         
       
        }

        //diamond
        if (membership == "diamond") {
            
            
          if(cat == "01"){
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 2);
          
        }
        if (cat == "02") {
            freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 3);
           
        }
        if (cat == "03") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 2.5);
        }
        if (cat == "04") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 2);;
        }
         
        
      
        }

         //gold
         if (membership == "gold" || membership == "api") {
         
         
          if(cat == "01"){
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 2);
        }
        if (cat == "02") {
            freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 3.5);
           
        }
        if (cat == "03") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 3);
        }
        if (cat == "04") {
           freecal = parseFloat(amt / 100);
           freemut = parseFloat(freecal * 2);;
        }
        
         
        
         
        }
        
        
          sumamt = parseFloat(amt - freemut).toFixed(2);
          
          if(sumamt != "NaN"){
        var str = sumamt.toString().replace("â‚¦", ""), parts = false, output = [], i = 1, formatted = null;
		if(str.indexOf(".") > 0) {
			parts = str.split(".");
			str = parts[0];
		}
		str = str.split("").reverse();
		for(var j = 0, len = str.length; j < len; j++) {
			if(str[j] != ",") {
				output.push(str[j]);
				if(i%3 == 0 && j < (len - 1)) {
					output.push(",");
				}
				i++;
			}
		}
		formatted = output.reverse().join("");
		amt2.value ="â‚¦" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : "");
        
          }else{
              amt2.value = "Amount to Pay";
          }
        
        }
        
    }
   
    
}