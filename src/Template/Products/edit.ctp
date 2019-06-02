<div class="justify-content-md-center">
<div class="col-md-6">
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
  <div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          Cadastrar novo
        </h3>
      </div>
    </div>
    <div class="kt-portlet__body">
        <?php echo $this->Form->create($product, ["class" => "kt-form"]); ?>
				<div class="kt-portlet__body">
					<div class="form-group">
						<label>Descrição</label>
						<?php echo $this->Form->control("name", ["class" => "form-control", "label" => false, "placeholder"=> "Descrição do produto"]); ?>
					</div>

          <div class="form-group">
            <label>Quantidade inicial</label>
            <?php echo $this->Form->control("quant", ["class" => "form-control", "label" => false, "placeholder"=> "Quantidade inicial do produto"]); ?>
          </div>

          <div class="form-group">
            <label>Unidade de apresentação</label>
            <?php echo $this->Form->control("un", ["class" => "form-control", "label" => false, "placeholder"=> "Quantidade inicial do produto"]); ?>
          </div>

          <div class="form-group">
            <label>Categoria</label>
            <?php echo $this->Form->control("category_id", ["class" => "form-control", "label" => false, "placeholder"=> "Categoria"]); ?>
          </div>

				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary">Salvar edição</button>
            <a href="../" style="text-decoration:none;">
						<button class="btn btn-danger">
                Voltar
            </button>
            </a>
					</div>
				</div>
			</form>
    </div>
  </div>
</div>
</div>
</div>
