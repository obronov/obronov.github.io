$(document).ready(function() {
/*-----------Содержание------------*/

/*Запускаем Фотогалерею */
/* folding (выпадающие списки)*/
/*fancybox begin*/
/* checkbox & radio */
/*Плавный скролл к якорю*/
/*Маска для формы*/
/* Кнопка goTop*/
/*Политика конфиденциальности*/
/*Пересчитываем padding у топ меню*/
/*=========Содержание=========*/

/*Запускаем Фотогалерею */
$('.fotoGallery').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1610,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 1387,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
  ]
});
/*===========Запускаем Фотогалерею==================*/

/* folding (выпадающие списки)*/
    $(function()
    {
        $('ul.folding li > ul').each(function(i)
            {
                var parent_li = $(this).parent('li');
                parent_li.addClass('folder');
                if (!$("> a", parent_li).length)
                    {
                        var sub_ul = $(this).remove();
                        parent_li.wrapInner('<a/>');
                        parent_li.append(sub_ul);
                    }
                $("> a:first", parent_li).click(function()
                    {
                        $("~ ul", this).toggle();
                        $(parent_li).toggleClass("opened");
                        return false;
                    }
                );
            }
    );
    /*  */
    $('ul.folding li > a').click(function () {
        if(($(this).next("ul").length == 0)){
        return false
      }
    });
    /*  */
        $('ul.folding ul').hide();

      ahref = window.location.toString();
        ahref = ahref.replace(/\/[0-9]+\//, '/');
        ahref = ahref.replace(/\?.*/, '');
        //console.log('ahref = ' + ahref);
        $("ul.folding li > a[href='"+ahref+"']").parents("li").addClass("opened").children("ul").show();
        $('ul.folding li.opened').children("ul").show();
    }
);
/*==================folding===============*/

/*fancybox begin*/
    $("[data-fancybox]").fancybox({
        loop : true,
        keyboard : true,
        arrows : true,
        buttons : [
        'close'
    ]
    });
/*==========fancybox end===========*/


/* checkbox & radio */
  $("div.check-box").each(function (i)
  {
      if ($('input[type=checkbox]',this).attr('checked') == 'checked')
    {
           $(this).addClass('checked');
      }
  });

  $("div.check-box").click(function ()
  {
    if (!$(this).hasClass('checked')) {
      
      $(this).addClass('checked');
      $(this).children('input[type=checkbox]').attr('checked','checked');
    
    } else {

      $(this).removeClass('checked');
      $(this).children('input[type=checkbox]').removeAttr('checked');
    }
  });


  checkedRadioButton();
  function checkedRadioButton()
  {
    $("input:radio:not(:checked)").parent('.radio-button').removeClass('checked');
    $("input:radio:checked").parent('.radio-button').addClass('checked');
  }

  $("div.radio-button > div").click(function ()
  {
    $(this).next('input').click();
    checkedRadioButton();
  });
/* =============checkbox & radio============= */

/*Плавный скролл к якорю*/
    jQuery('button').click(function() {
            str = jQuery(this).val();
            jQuery.scrollTo("#"+str, 500);
    });
    /* =============Плавный скролл к якорю============= */
/*Маска для формы*/
    $(function(){
        var phoneBanner = $("#phoneBanner"),
          phoneFeedback = $("#phoneFeedback");
        phoneBanner.mask("+7(999) 999-9999");
        phoneFeedback.mask("+7(999) 999-9999");
    });
/* =============Маска для формы============= */


/* Кнопка goTop*/
  var btnGoTop = $(".goTop");
function goTop(){
    $("html, body").animate({
    scrollTop: 0
  }, 300);
}

btnGoTop.click(function(){
  goTop();
});/*end btnGoTop.click*/

/*===========Кнопка goTop==============*/
/*Политика конфиденциальности*/
var checkbox = $(".confidentiality .check-box");
function confidentiality(checkbox){
    var btn = checkbox.parents("form").find(".send_form");
      if(!checkbox.hasClass("checked")){
       console.log("checked");
        btn.attr("disabled", "disabled").css("opacity", "0.5");
      }else{
         btn.removeAttr("disabled").css("opacity", "1");
      }
   
}
checkbox.click( function(){
    confidentiality($(this));
 });//end checkbox.click
/*========Политика конфиденциальности======================*/


/*Пересчитываем padding у топ меню*/
var widthWindow = $(window).width();
function paddingMenu()
{
    var menu = $(".menuMain__items"),
        item = $(".menuMain__item"),
        kolvoRazd = $(".menuMain__item_razd").length,
        kolvoItem = item.length - kolvoRazd,
        link = $(".menuMain__link"), 
        widthItem,
        paddingLink;

        widthMenu = menu.innerWidth();/*Находим ширину меню*/

        widthItem = 0;
        item.each(function(){ /*вычисляем щирину всех пунктов меню*/
            widthItem += $(this).width();
        });

        
        if(widthItem > widthMenu)
        {
            paddingLink = ((widthItem - widthMenu) / (kolvoItem * 2)) * 0.9;/*вычисляем padding*/

        link.css({
            "padding-left": paddingLink,
             "padding-right": paddingLink
        });
        }
        else if(widthItem < widthMenu)
        {
        paddingLink = ((widthMenu - widthItem) / (kolvoItem * 2)) * 0.9;/*вычисляем padding*/

        link.css({
            "padding-left": paddingLink,
             "padding-right": paddingLink
        });
        }
}
$(window).resize(function() {
  paddingMenu();
});
paddingMenu();
/*=============Пересчитываем padding у топ меню===================*/
});/*end ready*/