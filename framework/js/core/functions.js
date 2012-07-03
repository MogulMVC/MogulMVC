function cookieSet(name, value, expires, path, domain, secure) {
  var today = new Date();
  today.setTime( today.getTime() );
  if ( expires ){
    expires = expires * 1000 * 60 * 60 * 24;
  }
  var expires_date = new Date( today.getTime() + (expires) );
  document.cookie = name + " = " +escape( value ) +
  ( ( expires ) ? ";expires = " + expires_date.toGMTString() : "" ) +
  ( ( path ) ? ";path = " + path : "" ) +
  ( ( domain ) ? ";domain = " + domain : "" ) +
  ( ( secure ) ? ";secure" : "" );
}

function cookieGet(name){
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++){
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==name)
    {
    return unescape(y);
    }
  }
}

function passwordToggle(id) {
   var element = document.getElementById(id);
   if(element.type == "password"){
      element.type = "text";
   }else{
      element.type = "password";
   }
}

function slideHiddenBG(default_toggle_value,new_toggle_value){
  
  var hidden_bg_toggle = document.getElementById("hidden_bg_toggle");
  
  if(document.getElementById("hidden_bg").clientHeight == 0){
    hidden_bg_toggle.innerHTML = default_toggle_value;
    
    var hidden_content_height = document.getElementById("hidden_content").clientHeight;
    
    $("#hidden_bg").animate({height: hidden_content_height},speedSlow, function() {
      $("#hidden_bg").css("height","auto");
    });
    
    $("#hidden_content").animate({opacity: 1}, speedSlow);
    
    $("#toolbar_resize_container").show();
    
    $("#toolbar_resize_container").animate({width: "146px",},speedSlow, function() {
      $("#toolbar_resize_container").css("width","auto");
    });
    
  }else{
    
    hidden_bg_toggle.innerHTML = new_toggle_value;
    
    $("#hidden_bg").animate({height: "0px",},speedSlow);
    
    $("#hidden_content").animate({opacity: 0}, speedSlow);
    
    $("#toolbar_resize_container").animate({width: "0px",},speedSlow, function() {
      $("#toolbar_resize_container").hide();
    });
    
  }
}

function sidebarMenuPlaceholderHeight() {
  
  if(document.getElementById("sidebar_menu_fixed")){

    /*Placeholder height*/
    var sidebar_menu_fixed_height = $("#sidebar_menu_fixed").height();
    $("#sidebar_menu_fixed_placeholder").height(sidebar_menu_fixed_height);
    
  }
}

function sidebarMenuTop() {

  if(document.getElementById("sidebar_menu_fixed")){

    /*Top Position*/
    var headerHeight = $("#header").height();
    var toolbarHeight = $("#toolbar").height();
    
    if(isNaN(headerHeight)){
      headerHeight = 0;
    }
    
    if(isNaN(toolbarHeight)){
      toolbarHeight = 0;
    }
    
    var sidebarMenuTop = headerHeight + toolbarHeight;
    
    $("#sidebar_menu_fixed").css("top", sidebarMenuTop);
    
  }
  
}

function sidebarScale() {
  
  sidebarMenuPlaceholderHeight();
  sidebarMenuTop();

  var windowHeight = $(window).height();
  var headerHeight = $("#header").height();
  var toolbarHeight = $("#toolbar").height();

  if(isNaN(headerHeight)){
    headerHeight = 0;
  }
  
  if(isNaN(toolbarHeight)){
    toolbarHeight = 0;
  }
  
  var sidebarHeight = windowHeight - headerHeight - toolbarHeight;
  $("#sidebar").css("top", headerHeight + toolbarHeight);
  $("#sidebar").css("height", sidebarHeight);
}

function sidebarRightShow() {
  
  sidebarScale();
  
  $("#sidebar_container").animate({minWidth: 352}, speedNorm);
  $("#sidebar").animate({right: 0}, speedNorm);
  $(".icon_arrow_left").hide();
}

function sidebarRightHide() {  
  $("#sidebar_container").animate({minWidth: 0}, speedNorm);
  $("#sidebar").animate({right: -360}, speedNorm);
  $(".icon_arrow_left").show();
}

function sidebarLeftShow() {
  
  sidebarScale();
  
  $("#sidebar_container").animate({minWidth: 352}, speedNorm);
  $("#sidebar").animate({left: 0}, speedNorm);
  $(".icon_arrow_right").hide();
}

function sidebarLeftHide() {
  $("#sidebar_container").animate({minWidth: 0}, speedNorm);
  $("#sidebar").animate({left: -360}, speedNorm);
  $(".icon_arrow_right").show();
}

function sidebarTriggerIndicatorSet(){
  if(document.getElementById("sidebar_trigger_left") && !document.getElementById("sidebar_trigger_left_indicator")){
    $("#sidebar_trigger_left").append('<div id="sidebar_trigger_left_indicator"></div>');
  }
  
  if(document.getElementById("sidebar_trigger_right") && !document.getElementById("sidebar_trigger_right_indicator")){
    $("#sidebar_trigger_right").append('<div id="sidebar_trigger_right_indicator"></div>');
  }
}

function sidebarTriggerProximity(event) {
  
  sidebarTriggerIndicatorSet();
  
  var mouseX = event.pageX;
  var windowWidth = $(window).width();
  
  //Distace away that the indicator should show, in px
  var indicationDistanceStart = 150;
  
  //Left
  if(document.getElementById("sidebar_trigger_left_indicator")){

    var indicatorWidth = $("#sidebar_trigger_left_indicator").width();

    if(mouseX < indicationDistanceStart && mouseX != 0){
      var percentAwayDecimal = mouseX / indicationDistanceStart;
      var indicatorCSSLeft = -(percentAwayDecimal * indicatorWidth);
      $("#sidebar_trigger_left_indicator").css("left", indicatorCSSLeft);
    }else{
      $("#sidebar_trigger_left_indicator").css("left", -indicatorWidth);
    }
  
  }
  
  //Right
  if(document.getElementById("sidebar_trigger_right_indicator")){
    
    var indicatorWidth = $("#sidebar_trigger_right_indicator").width();
    
    if(mouseX > windowWidth - indicationDistanceStart && mouseX != windowWidth){
      var percentAwayDecimal = (windowWidth - mouseX) / indicationDistanceStart;
      var indicatorCSSLeft = -(percentAwayDecimal * indicatorWidth);
      $("#sidebar_trigger_right_indicator").css("right", indicatorCSSLeft);
    }else{
      $("#sidebar_trigger_right_indicator").css("right", -indicatorWidth);
    }
    
  }
  
}

function tabSwitch(tabGroup, tabContainer, tabId) {
  
  //$(".tab_body" + "." + tabGroup).removeClass("tab_body_selected");
  //$(".tab_body_sidebar" + "." + tabGroup).removeClass("tab_body_selected");
  $(".tab_body" + "." + tabGroup).css({"display":"none"});
  $(".tab_body_sidebar" + "." + tabGroup).css({"display":"none"});
  $(".tab" + "." + tabGroup).removeClass("tab_selected");
  
  //$("#" + tabContainer).addClass("tab_body_selected");
  $("#" + tabContainer).css({"display":"block"});
  $("#" + tabId).addClass("tab_selected");

}

function listSelect(id) {
  if(document.getElementById("checkbox_" + id).checked){
    $("#list_item_container_" + id).addClass("blue");
  }else{
    $("#list_item_container_" + id).removeClass("blue");
  }
}

function scrollBottom() {
  var scrollBottom = $(window).scrollTop() + $(window).height();
  var documentHeight = $(document).height();

  if (scrollBottom == documentHeight){
    return true;
  }
}

function searchableHide(string){
  
  /*Makes contains case insensitive*/
  $.expr[':'].Contains = function(x, y, z){
    return jQuery(x).text().toUpperCase().indexOf(z[3].toUpperCase())>=0;
  };
  
  if(string == ""){
    $("[searchable=true]").show();
  }else{
    $("[searchable=true]").hide();
    $("[searchable=true]:Contains(" + string + ")").show();
  }
  
}

function toolbarPosition(){
  if(!document.getElementById("header") && !document.getElementById("header_placeholder")){
    $("#toolbar").css("top", "0px");
  }
}

function toolbarMessageFadeOut() {
  $(".toolbar_message").delay(5000).fadeOut(speedSlow);
}

function listFadeIn() {
  var i = 0;
  $(".list_item_container").each(function() {
    $(this).delay(i).animate({opacity: 1}, speedNorm);   
    i = i + 50;
  });
  
  var i = 0;
  $("#sidebar li").each(function() {
    $(this).delay(i).animate({opacity: 1}, speedNorm);
    i = i + 50;
  }); 
}

function promptSet(){
  
    $("[prompt]").each(function(index) {
    
    //Set the prompt
    var originalPrompt = $(this).attr("prompt");
    
    $(this).val(originalPrompt);
    
    //Set the focus
    $(this).focus(function() {
      
      var currentPrompt = $(this).val();
      
      if(currentPrompt == originalPrompt){
	$(this).val("");
      }
      
    });
  
    //Set the blur
    $(this).blur(function() {
      
      var currentPrompt = $(this).val();
      
      if(currentPrompt == ""){
	$(this).val(originalPrompt);
      }
      
    });
    
  });

}

function promptPasswordSet(){
  
    $("[promptPassword]").each(function(index) {
    
    //Set the prompt
    var originalPrompt = $(this).attr("promptPassword");
    
    $(this).val(originalPrompt);
    
    //Set the focus
    $(this).focus(function() {
      
      var currentPrompt = $(this).val();
      
      if(currentPrompt == originalPrompt){
	$(this).val("");
	this.type = "password";
      }
      
    });
  
    //Set the blur
    $(this).blur(function() {
      
      var currentPrompt = $(this).val();
      
      if(currentPrompt == ""){
	$(this).val(originalPrompt);
	this.type = "text";
      }
      
    });
    
  });

}

function locationReset() {
  var answer = confirm("All your changes will be disgarded.\nAre you sure you want to reset?");
  
  if(answer){
    location.reload(true);
    return true
  }
}