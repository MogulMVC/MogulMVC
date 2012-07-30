$(document).ready(function() {

  $("input").attr("autocomplete", "off");
  
  /*Input Prompts*/
  promptSet();
  promptPasswordSet();
  
  /*Tabs*/
  $(".eztab_group").easytabs({updateHash:false});
  
  /*Tooltips*/
  $("[tip=n]").MTip({
    gravity: "n",
    delayIn: speedSlow
  });
  
  $("[tip=nw]").MTip({
    gravity: "nw",
    delayIn: speedSlow
  });
    
  $("[tip=ne]").MTip({
    gravity: "ne",
    delayIn: speedSlow
  });

  $("[tip=s]").MTip({
    gravity: "s",
    delayIn: speedSlow
  });
  
  $("[tip=sw]").MTip({
    gravity: "sw",
    delayIn: speedSlow
  });
    
  $("[tip=se]").MTip({
    gravity: "se",
    delayIn: speedSlow
  });
  
  $("[tip=w]").MTip({
    gravity: "w",
    delayIn: speedSlow
  });
  
  $("[tip=e]").MTip({
    gravity: "e",
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