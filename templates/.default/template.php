<? 

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$APPLICATION->AddHeadString('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>');
$this->addExternalJS('/local/components/dv/feedback.form/templates/.default/ajax/main.js');

?>

<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
  Обратная связь &#128736;
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Форма обратной связи</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form id="ajax_form" action="<?=POST_FORM_ACTION_URI?>">
	      <div class="modal-body">
	        <input type="text" class="form-control mb-2" name="name" placeholder="Имя (не обязательно)">
	        <input type="tel" class="form-control" name="phone" placeholder="Телефон (обязательно)" required>
	      </div>
	      <div id="out_ajax">
	      	<?
	      		if(count($_POST) > 0){
	      			if(!empty($arResult['phone']) && $arResult['phone'] != null){
	      				echo '<span class="text-success">Успешно отправлено</span>';
		      		} else{
		      			echo '<span class="text-danger">Заполните поле - "Телефон"</span>';
		      		}
	      		}
	      	?>
	      </div>
	      <br>
	      <div class="modal-footer">
	        <input type="submit" class="btn btn-success" name="send" value="Отправить">
	      </div>
  	</form>
    </div>
  </div>
</div>