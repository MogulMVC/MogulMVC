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
  $(".popup_container").draggable();
  $(".hover_form").draggable();
  $(".hover_message").draggable();

  $(".popup_container").addTouch();
  $(".hover_form").addTouch();
  $(".hover_message").addTouch();

  /*Sidebar*/
  sidebarMenuPlaceholderHeight();
  sidebarMenuTop();

  $("#sidebar").mouseenter(function() {
      $("#sidebar").css("overflow-y", "auto");
  });

  $("#sidebar").mouseleave(function() {
      $("#sidebar").css("overflow-y", "hidden");
  });

});

$(window).resize(function() {
  toolbarPosition();
  sidebarScale();
});

$(document).mousemove(function(event){
  sidebarTriggerProximity(event);
});