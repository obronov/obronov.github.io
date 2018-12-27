$(document).ready(function () {
/*
- Прибиваем  футер


*/
var bgMw = $('.bgMW');
function activeBg(){
  
  if(!bgMw.hasClass('active'))
  {
    bgMw.addClass('active');
  }
  else
  {
    bgMw.removeClass('active');
  }
}
$('[data-number]').click(function(e){
  e.preventDefault();
  var number = $(this).attr('data-number'),
  pos_1 = $('.header').offset().top + $('.header').outerHeight(),
  pos_2 = $('.footer').offset().top - $('.mw__contacts').outerHeight(),
  contacts = $('.mw__contacts');

  if(number == 1)
  {
    contacts.css('top', pos_1);
  }
  else
  {

    contacts.css('top', pos_2);
  }
  if(!contacts.hasClass('active'))
  {
    contacts.addClass('active');
  }
  else
  {
    contacts.removeClass('active');
    contacts.css('top', '-1250px');
  }

  activeBg();
});

$('.btnClose').click(function(){
  $('.mw__contacts').removeClass('active');
  $('.mw__contacts').css('top', '-1250px');
  activeBg();
});


objectFitImages();


/*Политика конфиденциальности*/
$("body").on('click', '.privacyPolicy label', function(){

  var check = $(this).parent(),
      btn = $(this).parents('form').find('.btnSend');

  if(!check.hasClass('check_active'))
  {
    check.addClass('check_active');
    btn.removeAttr("disabled").css("opacity", "1");
  }
  else
  {
    check.removeClass('check_active');
    btn.attr("disabled", "disabled").css("opacity", "0.5");

  } 

});/*end $(".check label").click*/

$(".check input").each(function(){
  var check = $(this).parent(),
      btn = $(this).parents('form').find('.btnSend');
  
  if($(this).prop( "checked" ))
  {

    check.addClass('check_active');
     btn.removeAttr("disabled").css("opacity", "1");
  }
  else
  {
    check.removeClass('check_active');
    btn.attr("disabled", "disabled").css("opacity", "0.5");
  }
});/*end $(".check input").each*/
/*======================*/


 
/*Прибиваем  футер*/
if($(window).width() > 1023)
{
  $(function fixedFooter(){
    var heightSite = $("body").outerHeight(),
      heightWindow = $(window).height(),
      content = $(".sectionContent"),
      heightContent;

  heightContent = (heightSite  - heightWindow) - content.outerHeight();
  content.css("min-height", heightContent);
});
}

/*================================*/

$('.wrapBtnSend').prepend("<button class='btnSend' disabled='disabled'>Отправить</button>");

/*Политика конфиденциальности*/

$("body").on('click', '.privacyPolicy label', function(){


  var check = $(this).parent(),
      btn = $(this).parents('form').find('.btnSend');


  if(!check.hasClass('check_active'))
  {

        check.removeClass('check_active');
    btn.attr("disabled", "disabled").css("opacity", "0.5");
  }
  else
  {

    check.addClass('check_active');
    btn.removeAttr("disabled").css("opacity", "1");
  } 

});/*end $(".check label").click*/

$(".privacyPolicy .check input").each(function(){
  var check = $(this).parent(),
      btn = $(this).parents('form').find('.btnSend');;
  
  if($(this).prop( "checked" ))
  {

    check.addClass('check_active');
     btn.removeAttr("disabled").css("opacity", "1");
  }
  else
  {
    check.removeClass('check_active');
    btn.attr("disabled", "disabled").css("opacity", "0.5");
  }
});/*end $(".check input").each*/
/*======================*/

/*Валидация формы*/
$('body').on( 'click', '.btnSend1', function() {
 
var formself = $(this).closest("form");
var mwForm = formself.attr('data-formMW');
var form = formself.find('input[type="text"], textarea');
var must = formself.find(".must");
var msg = formself.serialize();
var stop;
var alt;
 

$.each(must, function() {
var txt = $(this).val(); // alert(txt);
alt = $(this).attr('alt');
var text = 'Заполните обязательное поле';
if(alt == 'e-mail') {
txt = validemail(txt);
text = 'Некорректно заполнено поле';
}

if( !txt ){
alert(text); //alert(alt);
stop = text + ': ' + alt;
$(this).addClass('alert');

return false;
}
});
 
if(!stop){
msg = msg + '&grx_send=1';
 
$.ajax({
type: 'POST',
url: '',
data: msg,
success: function(data) {
 

if(data != 'not') {
//alert(data);
alert('Сообщение успешно отправлено');

  form.val('');


} else {
alert('Неверно указан код безопасности.');
}
 
},
error: function(xhr, str){
alert('Возникла ошибка: ' + xhr.responseCode);
}
});
 
return false;
} else {
//alert(stop);
 
 
return false;
}
 
return false;
 
});

  function validemail(e) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(e);
    }
    

$('[data-link]').click(function(e){
  e.preventDefault();
  var index = $(this).attr('data-link'),
      posTo = $('[data-linkTo='+ index +']').offset().top - 200;


$("html, body").animate({
    scrollTop: posTo
  }, 300);

});

function goTop(){
    $("html, body").animate({
    scrollTop: 0
  }, 300);
}

$(".goTop").click(function(){
   goTop();
});
$('.confidentiality__text').click(function(e){
  e.preventDefault();
  var left = ($(window).width() - $('.mw__pp').outerWidth()) / 2;

$('.mw__pp').css({'left': left, 'top': $(window).scrollTop()});
$('.mw__pp').addClass('actve');
activeBg();
});

$('.btnClose_pp').click(function(){

  $('.mw__pp').removeClass('actve');
  activeBg();
});
}); /*конец ready*/