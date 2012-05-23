$(document).ready(function() {

  $("input").attr("autocomplete", "off");
  
  /*Input Prompts*/
  promptSet();
  promptPasswordSet();
  
  /*Tabs*/
  $(".eztab_group").easytabs({updateHash:false});
  
  /*Tooltips*/
  $("[tip=n]").tip({
    gravity: "n",
    delayIn: speedSlow
  });
  
  $("[tip=nw]").tip({
    gravity: "nw",
    delayIn: speedSlow
  });
    
  $("[tip=ne]").tip({
    gravity: "ne",
    delayIn: speedSlow
  });

  $("[tip=s]").tip({
    gravity: "s",
    delayIn: speedSlow
  });
  
  $("[tip=sw]").tip({
    gravity: "sw",
    delayIn: speedSlow
  });
    
  $("[tip=se]").tip({
    gravity: "se",
    delayIn: speedSlow
  });
  
  $("[tip=w]").tip({
    gravity: "w",
    delayIn: speedSlow
  });
  
  $("[tip=e]").tip({
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
  $("#wrapper img").animate({opacity: 1}, speedSlow);
  
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