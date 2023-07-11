
  //bill section
  var bills = document.getElementById("billselect");
  function billSlct(){
if (bills.value == ""){
   document.getElementById("DSTV").style.display = "none";
   document.getElementById("GOTV").style.display = "none";
   document.getElementById("SMILED").style.display = "none";
   document.getElementById("STARTIMES").style.display = "none";
   document.getElementById("SMILER").style.display = "none";
 }
   if (bills.value == "DSTV"){
   document.getElementById("DSTV").style.display = "block";
   document.getElementById("GOTV").style.display = "none";
   document.getElementById("SMILED").style.display = "none";
   document.getElementById("STARTIMES").style.display = "none";
   document.getElementById("SMILER").style.display = "none";
 }
 
 if (bills.value == "GOTV"){
   document.getElementById("GOTV").style.display = "block";
   document.getElementById("DSTV").style.display = "none";
   document.getElementById("SMILED").style.display = "none";
   document.getElementById("STARTIMES").style.display = "none";
   document.getElementById("SMILER").style.display = "none";
 }
 if (bills.value == "STARTIMES"){
   document.getElementById("STARTIMES").style.display = "block";
   document.getElementById("DSTV").style.display = "none";
   document.getElementById("GOTV").style.display = "none";
   document.getElementById("SMILED").style.display = "none";
   document.getElementById("SMILER").style.display = "none";
 }
 if (bills.value == "SMILED"){
   document.getElementById("SMILED").style.display = "block";
   document.getElementById("DSTV").style.display = "none";
   document.getElementById("GOTV").style.display = "none";
   document.getElementById("STARTIMES").style.display = "none";
   document.getElementById("SMILER").style.display = "none";
 }
 if (bills.value == "SMILER"){
   document.getElementById("SMILER").style.display = "block";
   document.getElementById("SMILED").style.display = "none";
   document.getElementById("DSTV").style.display = "none";
   document.getElementById("STARTIMES").style.display = "none";
   document.getElementById("GOTV").style.display = "none";
   
 }
  }


//SMILE  DATA
var smileplan = document.getElementById("pakSMD");
  function smiledPlan(){
  if (smileplan.value == "") { 
  document.getElementById("planSMD").innerHTML =
  "<option value=''></option>";
  }
  if (smileplan.value == "SMP") { 
  document.getElementById("planSMD").innerHTML =
  "<option value=''> Select Plan </option> <option value='APV102'>3GB Anytime Plan = #3,085</option> <option value='APV150'>5GB Anytime Plan = #4,110</option> <option value='APV274'>7GB Anytime Plan = #5,140</option> <option value='DAPVA404'>10GB Anytime Plan = #7,710</option>";
  }
  if (smileplan.value == "SYR") { 
  document.getElementById("planSMD").innerHTML =
  " <option value=''> Select Plan </option> <option value='APV103'>10GB Anytime Plan = #9,240</option> <option value='APV273'>15GB Anytime Plan = #10,260</option> <option value='APV104'>20GB Anytime Plan = #17,440</option> <option value='APV105'>50GB Anytime Plan = #36,920</option> <option value='APV128'>100GB Anytime Plan = #71,775</option> <option value='APV129'>200GB Anytime Plan = #138,450</option>";
    }
   if (smileplan.value == "SUDP") { 
  document.getElementById("planSMD").innerHTML =
  "<option value=''> Select Plan </option> <option value='ULPV476'>Unlimited Lite Plan = #10,260</option> <option value='UPPV475'>Unlimited Premium Plan = #20,310</option>";
  }
  if (smileplan.value == "SFDP") { 
  document.getElementById("planSMD").innerHTML =
  "<option value=''> Select Plan </option> <option value='FPDV356'>Flexi Daily Plan = #550</option> <option value='FPDV357'>Flexi Weekly Plan = #1,250</option>";
  }
  if (smileplan.value == "SVP") { 
  document.getElementById("planSMD").innerHTML =
  "<option value=''> Select Plan </option> <option value='SOV495'>Smile Voice ONLY 75 = #550</option> <option value='SOV496'>Smile Voice ONLY 165 = #1,045</option> <option value='SOV497'>Smile Voice ONLY 500 = #3,085</option>";
  }
  if (smileplan.value == "SLP") { 
  document.getElementById("planSMD").innerHTML =
  "<option value=''> Select Plan </option> <option value='SPV220'>1GB Smile Lite Plan = #1,045</option> <option value='SPV280'>2GB Smile Lite Plan = #2,070</option>";
  }
  if (smileplan.value == "SBDP") { 
  document.getElementById("planSMD").innerHTML =
  "<option value=''> Select Plan </option> <option value='BPDV358'>30GB Bumpa Value Plan = #15,390</option> <option value='BPDV359'>60GB Bumpa Value Plan = #30,770</option> <option value='BPDV360'>80GB Bumpa Value Plan = #51,280</option>";
  }
  if (smileplan.value == "SNWDP") { 
  document.getElementById("planSMD").innerHTML =
  "<option value=''> Select Plan </option> <option value='WOPV415'>3GB Weekend Only Plan = #1,550</option>";
  }
  if (smileplan.value == "SMDP") { 
  document.getElementById("planSMD").innerHTML =
  "<option value=''> Select Plan </option> <option value='MPV413'>2GB MidNite Plan = #1,045</option> <option value='MPV414'>3GB MidNite Plan = #1,550</option> ";
  }
  }


var smileprice = document.getElementById("planSMD");
 function smiledPn(){
  if (smileprice.value=="") {
    document.getElementById("hideSD").innerHTML =
  " ";
   }
   if (smileprice.value == "FPDV356") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='500' name='price' /> <input type='hidden' value='550' name='uprice' />";
 }
 if (smileprice.value == "FPDV357") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='1200' name='price' /> <input type='hidden' value='1250' name='uprice' />";
 }
 if (smileprice.value == "SOV497") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='3000' name='price' /> <input type='hidden' value='3085' name='uprice'/> ";
 }
 if (smileprice.value == "SOV496") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='1000' name='price' /> <input type='hidden' value='1045' name='uprice' /> ";
 }
 if (smileprice.value == "SOV495") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='500' name='price' /> <input type='hidden' value='550' name='uprice' /> ";
 }
 if (smileprice.value == "SPV220") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='1000' name='price' /> <input type='hidden' value='1045' name='uprice' /> ";
 }
 if (smileprice.value == "SPV280") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='2000' name='price' /> <input type='hidden' value='2070' name='uprice' /> ";
 }
 if (smileprice.value == "MPV413") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='1000' name='price' /> <input type='hidden' value='1045' name='uprice'  /> ";
 }
 if (smileprice.value == "MPV414") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='1500' name='price' /> <input type='hidden' value='1550' name='uprice' /> ";
 }
 if (smileprice.value == "WOPV415") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='1500' name='price' /> <input type='hidden' value='1550' name='uprice' /> ";
 }
 if (smileprice.value == "APV102") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='3000' name='price' /> <input type='hidden' value='3085' name='uprice' /> ";
 }
 if (smileprice.value == "APV150") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='4000' name='price' /> <input type='hidden' value='4110' name='uprice' /> ";
 }
 if (smileprice.value == "APV274") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='5000' name='price' /> <input type='hidden' value='5140' name='uprice' /> ";
 }
 if (smileprice.value == "DAPVA404") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='7500' name='price' /> <input type='hidden' value='7710' name='uprice' /> ";
 }
 if (smileprice.value == "ULPV476") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='10000' name='price' /> <input type='hidden' value='10260' name='uprice' /> ";
 }
 if (smileprice.value == "UPPV475") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='19800' name='price' /> <input type='hidden' value='20310' name='uprice' /> ";
 }
 if (smileprice.value == "BPDV358") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='15000' name='price' /> <input type='hidden' value='15390' name='uprice' /> ";
 }
 if (smileprice.value == "BPDV359") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='30000' name='price' /> <input type='hidden' value='30770' name='uprice' /> ";
 }
 if (smileprice.value == "BPDV360") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='50000' name='price' /> <input type='hidden' value='51280' name='uprice' /> ";
 }
 if (smileprice.value == "APV103") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='9000' name='price' /> <input type='hidden' value='9240' name='uprice' /> ";
 }
 if (smileprice.value == "APV273") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='10000' name='price' /> <input type='hidden' value='10260' name='uprice' /> ";
 }
  if (smileprice.value == "APV104") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='17000' name='price' /> <input type='hidden' value='17440' name='uprice' /> ";
 }
  if (smileprice.value == "APV105") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='36000' name='price' /> <input type='hidden' value='36920' name='uprice' /> ";
 }
 
if (smileprice.value == "APV128") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='70000' name='price' /> <input type='hidden' value='71775' name='uprice' /> ";
 }
 if (smileprice.value == "APV129") {
document.getElementById("hideSD").innerHTML =
  "<input type='hidden' value='135000' name='price' /> <input type='hidden' value='138450' name='uprice' /> ";
 }
 
 }


 
  //partnership section
var pack = document.getElementById("package");
  function packCheck(){
if (pack.value == "") { 
 document.getElementById("pakPrice").innerHTML =
 "<option value=''> </option>";
 }
 
 if(pack.value == "basic"){
 document.getElementById("pakPrice").innerHTML =
 "<option value='1500'>&#8358;1500</option>";
  
  }
  
  if (pack.value == "value") { 
  document.getElementById("pakPrice").innerHTML =
  "<option value='3000'>&#8358;3000</option>";
  }
  
  if (pack.value == "premium") { 
  document.getElementById("pakPrice").innerHTML =
  "<option value='5000'>&#8358;5000</option>";
  }
  if (pack.value == "diamond") { 
  document.getElementById("pakPrice").innerHTML =
  "<option value='10000'>&#8358;10000 (Per Year)</option>";
  }
  
  if (pack.value == "gold") { 
  document.getElementById("pakPrice").innerHTML =
  "<option value='20000'>&#8358;20000 (Per Year)</option>";
  }
  }

  //fund wallet
  function validate(){
   if(document.paywallet.amount.value >= 100 && document.paywallet.amount.value <= 10000){
     return true;
   }else  {
           alert( "Minimum amount is #100 and maximum is #10000" );
           document.paywallet.amount.focus() ;
           return false;
        }
  }

//withdraw
  function validateWithdraw(){
   if(document.withdraw.amount.value >= 500){
     return true;
   }else  {
           alert( "Minimum amount is #500" );
           document.withdraw.amount.focus() ;
           return false;
        }
  }
  


  //vtu
  function validateVtu(){
   if(document.vtu.amount.value >= 50){
     return true;
   }else  {
           alert( "Minimum amount is #50" );
           document.vtu.amount.focus() ;
           return false;
        }
  }

 //electricity section
  var elect  = document.getElementById("electselect");
  function electSlct(){
if (elect.value == ""){
   document.getElementById("ikeja").style.display = "none";
   document.getElementById("ikeja_tok").style.display = "none";
   document.getElementById("ekopre").style.display = "none";
   document.getElementById("ekopos").style.display = "none";
   document.getElementById("kedpre").style.display = "none";
   document.getElementById("kedpro").style.display = "none";
   document.getElementById("abjpre").style.display = "none";
   document.getElementById("abjpos").style.display = "none";
 }
   if (elect.value == "ikeja"){
    document.getElementById("ikeja").style.display = "block";
   document.getElementById("ikeja_tok").style.display = "none";
   document.getElementById("ekopre").style.display = "none";
   document.getElementById("ekopos").style.display = "none";
   document.getElementById("kedpre").style.display = "none";
   document.getElementById("kedpro").style.display = "none";
   document.getElementById("abjpre").style.display = "none";
   document.getElementById("abjpos").style.display = "none";
 }
 
 if (elect.value == "ikeja_token"){
    document.getElementById("ikeja").style.display = "none";
   document.getElementById("ikeja_tok").style.display = "block";
   document.getElementById("ekopre").style.display = "none";
   document.getElementById("ekopos").style.display = "none";
   document.getElementById("kedpre").style.display = "none";
   document.getElementById("kedpro").style.display = "none";
   document.getElementById("abjpre").style.display = "none";
   document.getElementById("abjpos").style.display = "none";
 }
 if (elect.value == "eko_prepaid"){
   document.getElementById("ikeja").style.display = "none";
   document.getElementById("ikeja_tok").style.display = "none";
   document.getElementById("ekopre").style.display = "block";
   document.getElementById("ekopos").style.display = "none";
   document.getElementById("kedpre").style.display = "none";
   document.getElementById("kedpro").style.display = "none";
   document.getElementById("abjpre").style.display = "none";
   document.getElementById("abjpos").style.display = "none";
 }
 if (elect.value == "eko_postpaid"){
    document.getElementById("ikeja").style.display = "none";
   document.getElementById("ikeja_tok").style.display = "none";
   document.getElementById("ekopre").style.display = "none";
   document.getElementById("ekopos").style.display = "block";
   document.getElementById("kedpre").style.display = "none";
   document.getElementById("kedpro").style.display = "none";
   document.getElementById("abjpre").style.display = "none";
   document.getElementById("abjpos").style.display = "none";
 }
 if (elect.value == "kedco_prepaid"){
   document.getElementById("ikeja").style.display = "none";
   document.getElementById("ikeja_tok").style.display = "none";
   document.getElementById("ekopre").style.display = "none";
   document.getElementById("ekopos").style.display = "none";
   document.getElementById("kedpre").style.display = "block";
   document.getElementById("kedpro").style.display = "none";
   document.getElementById("abjpre").style.display = "none";
   document.getElementById("abjpos").style.display = "none";
   
 }
 if (elect.value == "kedco_postpaid"){
   document.getElementById("ikeja").style.display = "none";
   document.getElementById("ikeja_tok").style.display = "none";
   document.getElementById("ekopre").style.display = "none";
   document.getElementById("ekopos").style.display = "none";
   document.getElementById("kedpre").style.display = "none";
   document.getElementById("kedpro").style.display = "block";
   document.getElementById("abjpre").style.display = "none";
   document.getElementById("abjpos").style.display = "none";
   
 }
 if (elect.value == "abuja_prepaid"){
   document.getElementById("ikeja").style.display = "none";
   document.getElementById("ikeja_tok").style.display = "none";
   document.getElementById("ekopre").style.display = "none";
   document.getElementById("ekopos").style.display = "none";
   document.getElementById("kedpre").style.display = "none";
   document.getElementById("kedpro").style.display = "none";
   document.getElementById("abjpre").style.display = "block";
   document.getElementById("abjpos").style.display = "none";
   
 }
 if (elect.value == "abuja_postpaid"){
   document.getElementById("ikeja").style.display = "none";
   document.getElementById("ikeja_tok").style.display = "none";
   document.getElementById("ekopre").style.display = "none";
   document.getElementById("ekopos").style.display = "none";
   document.getElementById("kedpre").style.display = "none";
   document.getElementById("kedpro").style.display = "none";
   document.getElementById("abjpre").style.display = "none";
   document.getElementById("abjpos").style.display = "block";
   
 }
  }
 //edu section
  var edu = document.getElementById("eduselect");
  function eduSlct(){
   if (edu.value == ""){
   document.getElementById("neco").style.display = "none";
 }
 if (edu.value == "waec"){
   document.getElementById("neco").style.display = "none";
 }
 if (edu.value == "neco"){
   document.getElementById("neco").style.display = "block";
 }
}
//WAEC
var eduplan = document.getElementById("eduplan");
  function eduPlan(){
   if (eduplan.value == ""){
document.getElementById("hideEdu").innerHTML =
  "";
}
   if (eduplan.value == "WRCONE"){
document.getElementById("hideEdu").innerHTML =
  "<input type='hidden' value='750' name='price' /> <input type='hidden' value='800' name='uprice'  /> ";
}
if (eduplan.value == "WRCTWO"){
document.getElementById("hideEdu").innerHTML =
  "<input type='hidden' value='1500' name='price' /> <input type='hidden' value='1600' name='uprice'  /> ";
}
if (eduplan.value == "WRCTHR"){
document.getElementById("hideEdu").innerHTML =
  "<input type='hidden' value='2250' name='price' /> <input type='hidden' value='2335' name='uprice'  /> ";
}
if (eduplan.value == "WRCFOU"){
document.getElementById("hideEdu").innerHTML =
  "<input type='hidden' value='3000' name='price' /> <input type='hidden' value='3100' name='uprice'  /> ";
}
if (eduplan.value == "WRCFIV"){
document.getElementById("hideEdu").innerHTML =
  "<input type='hidden' value='3750' name='price' /> <input type='hidden' value='3900' name='uprice'  /> ";
}
  }
  //NECO
   var necoplan = document.getElementById("necoplan");
  function necoPlan(){
   if (necoplan.value == ""){
document.getElementById("hideNec").innerHTML =
  "";
}
   if (necoplan.value == "NECONE"){
document.getElementById("hideNec").innerHTML =
  "<input type='hidden' value='650' name='price' /> <input type='hidden' value='700' name='uprice' /> ";
}
if (necoplan.value == "NECTWO"){
document.getElementById("hideNec").innerHTML =
  "<input type='hidden' value='1300' name='price' /> <input type='hidden' value='1360' name='uprice' /> ";
}
if (necoplan.value == "NECTHR"){
document.getElementById("hideNec").innerHTML =
  "<input type='hidden' value='1950' name='price' /> <input type='hidden' value='2040' name='uprice' /> ";
}
if (necoplan.value == "NECFOU"){
document.getElementById("hideNec").innerHTML =
  "<input type='hidden' value='2600' name='price' /> <input type='hidden' value='2695' name='uprice' /> ";
}
if (necoplan.value == "NECFIV"){
document.getElementById("hideNec").innerHTML =
  "<input type='hidden' value='3250' name='price' /> <input type='hidden' value='3350' name='uprice' /> ";
}
  }

  //transfer
   var transplan = document.getElementById("trans_method");
  function transferCheck(){
   if (transplan.value == ""){
document.getElementById("CTW").style.display = "none";
   document.getElementById("WTW").style.display = "none";
}
if (transplan.value == "comtowal"){
document.getElementById("CTW").style.display = "block";
   document.getElementById("WTW").style.display = "none";
}
if (transplan.value == "waltowal"){
document.getElementById("CTW").style.display = "none";
   document.getElementById("WTW").style.display = "block";
}
}

//fund method
   var fundplan = document.getElementById("fund_method");
  function fundCheck(){
   if (fundplan.value == ""){
document.getElementById("CARD").style.display = "none";
   document.getElementById("COUPON").style.display = "none";
   document.getElementById("FLUTTER").style.display = "none";
}
if (fundplan.value == "paycard"){
document.getElementById("CARD").style.display = "block";
   //document.getElementById("COUPON").style.display = "none";
   document.getElementById("FLUTTER").style.display = "none";
}
if (fundplan.value == "paycoupon"){
//document.getElementById("CARD").style.display = "none";
 //  document.getElementById("COUPON").style.display = "block";
  // document.getElementById("FLUTTER").style.display = "none";
}
if (fundplan.value == "payflutter"){
 document.getElementById("CARD").style.display = "none";
    // document.getElementById("COUPON").style.display = "none";
     document.getElementById("FLUTTER").style.display = "block";
  }
}