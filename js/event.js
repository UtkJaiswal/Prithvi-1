$(document).ready(function(){

  var outertabWrapper = $('.outer-tab-block'),
  outertabMenu = outertabWrapper.find('.outer-tab-menu  li'),
  outertabContent = outertabWrapper.find('.outer-tab-content > .outer-tab-pane');
  
  outertabContent.not(':first-child').hide();
  
  outertabMenu.each(function(i){
    $(this).attr('data-tab','tab'+i);
  });
  outertabContent.each(function(i){
    $(this).attr('data-tab','tab'+i);
  });
  
  outertabMenu.click(function(){
    var outertabData = $(this).data('tab');
    outertabWrapper.find(outertabContent).hide();
    outertabWrapper.find(outertabContent).filter('[data-tab='+outertabData+']').show();
    var innertabWrapper = $('.inner-tab-block'),
    innertabMenu = innertabWrapper.find('.inner-tab-menu  li'),
    innertabContent = innertabWrapper.find('.inner-tab-content > .inner-tab-pane');
    innertabWrapper.find(':first-child').show();
    innertabContent.not(':first-child').hide();
    
  });
  
  $('.outer-tab-menu > li').click(function(){
    var before = $('.outer-tab-menu li.normal-active');
    before.removeClass('normal-active');
    $(this).addClass('normal-active');
  });




  var innertabWrapper = $('.inner-tab-block'),
  innertabMenu = innertabWrapper.find('.inner-tab-menu  li'),
  innertabContent = innertabWrapper.find('.inner-tab-content > .inner-tab-pane');
  
  innertabContent.not(':first-child').hide();
  
  innertabMenu.each(function(i){
    $(this).attr('data-tab','tab'+i);
  });
  innertabContent.each(function(i){
    $(this).attr('data-tab','tab'+i);
  });
  
  innertabMenu.click(function(){
    var innertabData = $(this).data('tab');
    innertabWrapper.find(innertabContent).hide();
    innertabWrapper.find(innertabContent).filter('[data-tab='+innertabData+']').show(); 
  });
  
  $('.inner-tab-menu > li').click(function(){
    var before = $('.inner-tab-menu li.normal-active');
    before.removeClass('normal-active');
    $(this).addClass('normal-active');
  });
  
});