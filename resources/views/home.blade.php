@extends('layouts.app')

@section('content')
	<div class="left-side">
		<h2>Preencha o formulário abaixo para calcularmos o valor da ligação com os seus respectivos planos</h2>
		<div class="left-content">
      <div id="msg"></div>
			<form name="simulation" id="simulation">
				<div class="row">
					<div class="col-md-4 mb-3">
						<select class="form-control" name="phone_care" id="phone_care" required>
							<option>Escolha o plano</option>
              @foreach($plans as $plans)
							  <option value="{{$plans->values}}">{{$plans->plan_name}}</option>
              @endforeach
						</select>
					</div>
					<div class="col-md-4 mb-3">
						<select class="form-control" name="from" id="from" required>
								<option>DDD de Origem</option>
								<option value="011">011</option>
								<option value="016">016</option>
								<option value="017">017</option>
								<option value="018">018</option>
						</select>
					</div>
					<div class="col-md-4 mb-3">
						<select class="form-control" name="to" id="to" required>
								<option>DDD de Destino</option>
								<option value="016">016</option>
								<option value="011">011</option>
								<option value="017">017</option>
								<option value="018">018</option>
						</select>
					</div>
        </div>
        <br />
        <div class="row">
					<div class="col-md-4 mb-3">
						<input type="number" name="duration" required class="form-control" id="duration" placeholder="Duração da ligação">
					</div>
          <div class="col-md-1 mb-3"></div>
          <div class="col-md-5 mb-3">
            <button type="submit"
                    id="btn" class="btn btn-primary">
              Simular
            </button>
          </div>
				</div>
			</form>
      <br /><br />
      <div id="table">
        <h4>Veja aqui o resultado da sua simulação</h4>
        <table class="table table-striped table-borderd">
          <thead>
            <tr>
              <th>Origem</th>
              <th>Destino</th>
              <th>Tempo</th>
              <th>Plano</th>
              <th>Com Fale Mais</th>
              <th>Sem Fale Mais</th>
            </tr>
          </thead>
          <tbody id="tr">
          </tbody>
        </table>
      </div>
    </div>
	</div>

	<div class="right-side">
		<h3>Tabela com a precificação para as respectivas ligações</h3>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Origem</th>
					<th>Destino</th>
					<th>$/min</th>
				</tr>
			</thead>
			<tbody>
      @foreach($values as $value)
				<tr>
          <td>{{$value->ddd_from}}</td>
          <td>{{$value->ddd_to}}</td>
          <td>R$ {{number_format($value->value_min, 2, ',','')}}</td>
				</tr>
      @endforeach
			</tbody>
		</table>
	</div>
@endsection
