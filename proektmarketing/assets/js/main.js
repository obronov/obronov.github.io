$(document).ready(function () {

/*Анимация поля формы обо мне*/

var completedField = {
	find: 	function findAactiveField(input){
			var box = input.parent(),
				label = box.children();

				if(input.val().length > 0)
				{
					box.addClass('wrapData_active');
				}
			},
	activate: 	function activateField(input){
					var box = input.parent(),
						label = box.children();

					if(!$(this).parent().hasClass("wrapData_active"))
					{
						box.addClass('wrapData_active');
					}
					else
					{
						return false;
					}
				},
	deactivate: 	function checkField(input){
						var box = input.parent(),
							label = box.children();

							if(input.val().length > 0)
							{
								box.addClass('wrapData_active');
							}
							else
							{
								box.removeClass('wrapData_active');
							}
				}
}/*end var completedField*/

$('.field').each(function(){
	completedField.find($(this));
});/*end $('.field').each*/


$('body').on('focusin', '.field', function(){
	completedField.activate($(this));
 });/*end$ ('.field').focusin*/


$('body').on('focusout', '.field', function(){
	completedField.deactivate($(this));
 });/*end $('.field').focusout*/

/*===============*/

/*Активируем  чекбокс*/
$("body").on('click', 'label', function(){

	var check = $(this).parent();

	if(!check.hasClass('check_active'))
	{
		check.addClass('check_active');
	}
	else
	{
		check.removeClass('check_active');
	}	
});/*end $(".check label").click*/
/*======================*/

/*Находим все чекнутые инпуты*/
$(".check input").each(function(){
	var check = $(this).parent();
	
	if($(this).prop( "checked" ))
	{

		check.addClass('check_active');
	}
	else
	{
		check.removeClass('check_active');
	}
});/*end $(".check input").each*/
/*======================*/

/*Показываем поле хобби*/
var state = false;
//console.log(state);
$('.wrapContent').append('<div class="newBlock"><div class="wrapBtnClose"><button class="btnClose"><img src="assets/image/design/btnClose.png" alt="закрыть"></img></button></div></div>');
$('.title').click(function(){

	$('.newBlock').removeClass('newBlock_activeDB').addClass('newBlock_active');

	if($('.newBlock').children('.wrapData').length < 1)
	{
		$('.newBlock').append('<div class="wrapData"><label for="userHobby" class="label" >Ваше хобби</label><textarea name="userHobby" class="field field_textarea" id="userHobby">1) Занимаюсь в тренажерном зале 2) Читаю проф. литературу. 3) Смотрю фильмы, сериалы и youtube. 4) Встречи с друзьями.</textarea></div><img class="newBlock__img" src="assets/image/content/img_1.jpg" alt="мое фото">');
		$('.newBlock .field_textarea').focus();
		state = true;
	}
	else
	{
		return false;
	}
console.log(state);
});/*end $('.title').click*/
/*====================*/

/*Показываем дополнительное поле фотографию*/
$('.title').dblclick(function(){
	if(state != false)
	{
		$('.newBlock').removeClass('newBlock_active').addClass('newBlock_activeDB');
		state = true;
	}
	else
	{
		return false;
	}
});/*end $('.title').click*/

/*====================*/

/*Закрываем допю поле*/

$('body').on('click', '.btnClose', function(){
	var box = $(this).parents('.newBlock');

	box.removeClass('newBlock_active').removeClass('newBlock_activeDB');
});/*end 'click', '.newBlock'*/
/*===================*/

/*Позиционируем кнопку "отправить"*/

function calcPosBtn(refPoint, btn){
	var pos = refPoint.outerWidth() - btn.outerWidth();

	btn.css('margin-right', pos);
}

calcPosBtn($('.section_5 .setСheckbox'), $('.btnSend'));

$(window).resize(function(){
	calcPosBtn($('.section_5 .setСheckbox'), $('.btnSend'));
});/*end $(window).resize*/
/*=========================*/

/*Skill animation*/
function startAnimation(box){
	console.log('старт');
	box.addClass('svgSkills_active');
	
}

var animationStartPoint = $('.svgSkills').offset().top - 350; 
var marker = true;

console.log('animationStartPoint' + '=' + animationStartPoint);

$(window).on('scroll', function () {
	if($(window).scrollTop() >= animationStartPoint)
	{
	  	if(marker) 
	  	{
	  		startAnimation($('.svgSkills'));
        	marker = false;
        	
        }
	}
});/*end $(window).scroll*/

/*=========================*/



}); /*конец ready*/