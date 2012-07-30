$(document).ready(function() {

  $("input").attr("autocomplete", "off");
  
  /*Input Prompts*/
  promptSet();
  promptPasswordSet();
  
  /*Tabs*/
  $(".eztab_group").easytabs({updateHash:false});
  
  /*Tooltips*/
  $("[tip=n]").MTip({
    gravity: "N",
    delayIn: speedSlow
  });
  
  $("[tip=nw]").MTip({
    gravity: "NW",
    delayIn: speedSlow
  });
    
  $("[tip=ne]").MTip({
    gravity: "NE",
    delayIn: speedSlow
  });

  $("[tip=s]").MTip({
    gravity: "S",
    delayIn: speedSlow
  });
  
  $("[tip=sw]").MTip({
    gravity: "SW",
    delayIn: speedSlow
  });
    
  $("[tip=se]").MTip({
    gravity: "SE",
    delayIn: speedSlow
  });
  
  $("[tip=w]").MTip({
    gravity: "W",
    delayIn: speedSlow
  });
  
  $("[tip=e]").MTip({
    gravity: "E",
    delayIn: speedSlow
  });
  
});

$(window).load(function(){

  toolbarPosition();
  
  toolbarMessageFadeOut();

  sidebarScale();
  
  listFadeIn();
  
  /*Fade in all images*/
  $("#MMainWindow img").animate({opacity: 1}, speedSlow);
  
  /*Draggable*/
  $(".MPopupContainer").draggable();
  $(".MHoverForm").draggable();
  $(".MHoverMessage").draggable();

  $(".MPopupContainer").addTouch();
  $(".MHoverForm").addTouch();
  $(".MHoverMessage").addTouch();

  /*Sidebar*/
  sidebarMenuPlaceholderHeight();
  sidebarMenuTop();

  $("#MSidebar").mouseenter(function() {
      $("#MSidebar").css("overflow-y", "auto");
  });

  $("#MSidebar").mouseleave(function() {
      $("#MSidebar").css("overflow-y", "hidden");
  });

});

$(window).resize(function() {
  toolbarPosition();
  sidebarScale();
});

$(document).mousemove(function(event){
  sidebarTriggerProximity(event);
});