<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Highloadblock\HighloadBlockTable as HLBT;

$arResult['name'] = $_POST['name'];
$arResult['phone'] = $_POST['phone'];

if(!empty($arResult['phone']) && $arResult['phone'] != null){
	$id = $arParams["HIGHLOAD_ID"];

	CModule::IncludeModule('highloadblock');

	function GetEntityDataClass($HlBlockId) {
		if (empty($HlBlockId) || $HlBlockId < 1)
		{
			return false;
		}
		$hlblock = HLBT::getById($HlBlockId)->fetch();	
		$entity = HLBT::compileEntity($hlblock);
		$entity_data_class = $entity->getDataClass();
		return $entity_data_class;
	}

	$entity_data_class = GetEntityDataClass($id);
	$result = $entity_data_class::add(array(
      	'UF_NAME' => $arResult['name'],
	  	'UF_PHONE' => $arResult['phone'],
   	));

}

$this->IncludeComponentTemplate();
