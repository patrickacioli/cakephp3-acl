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
        <?php echo $this->Form->create($client, ["class" => "kt-form"]); ?>
				<div class="kt-portlet__body">

          <div class="form-group">
            <label>CPF</label>
            <?php echo $this->Form->control("cpf", ["class" => "form-control", "label" => false, "placeholder"=> "CPF"]); ?>
          </div>

					<div class="form-group">
						<label>Nome</label>
						<?php echo $this->Form->control("name", ["class" => "form-control", "label" => false, "placeholder"=> "Nome do cliente"]); ?>
					</div>

          <div class="form-group">
            <label>Telefone</label>
            <?php echo $this->Form->control("phone", ["class" => "form-control", "label" => false, "placeholder"=> "Telefone de contato"]); ?>
          </div>

          <div class="form-group">
            <label>email</label>
            <?php echo $this->Form->control("email", ["class" => "form-control", "label" => false, "placeholder"=> "E-mail"]); ?>
          </div>


          <div class="form-group">
            <label>Rótulo</label>
            <?php echo $this->Form->control("label",
              [
                "class" => "form-control",
                "label" => false,
                "placeholder"=> "Rótulo do cliente",
                "options" => [
                  "funcionário" => "Funcionario",
                  "cidadao" => "Cidadão",
                  "outro" => "Outro"
                ]
              ]); ?>
          </div>


				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary">Inserir</button>
						<button type="reset" class="btn btn-secondary">Voltar</button>
					</div>
				</div>
			</form>
    </div>
  </div>
</div>
</div>
</div>
