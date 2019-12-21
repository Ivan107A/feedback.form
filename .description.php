<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 

$arComponentDescription = array(
"NAME" => GetMessage("Форма обратной связи"),
"DESCRIPTION" => GetMessage("Выводим форму обратной связи"),
"PATH" => array(
	"ID" => "dv_components",
	"CHILD" => array(
	"ID" => "feedback.form",
	"NAME" => "Форма"
)),
);