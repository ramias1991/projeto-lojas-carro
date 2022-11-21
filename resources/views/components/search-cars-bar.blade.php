<div class="container-fluid search-cars-bar">
    <div class="container">
        <form class="row gy-2 gx-3 justify-content-center">
            <div class="col-3">
                <label class="visually-hidden" for="autoSizingInput">Pequisar</label>
                <input type="text" class="form-control" id="autoSizingInput" placeholder="Pesquisar...">
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingSelect">Marcas</label>
                <select class="form-select" id="marca">
                    <option selected>Marcas</option>
                    @foreach ($marcas as $marca)
                        <option value={{ $marca['id'] }}>{{ $marca['descricao'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingSelect">Marcas</label>
                <select class="form-select" id="modelo">
                    <option selected>Modelo</option>

                </select>
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingSelect">Marcas</label>
                <select class="form-select" id="anoModelo">
                    <option selected>Ano Modelo</option>
                    @for ($i = date('Y') - 42; $i <= date('Y'); $i++)
                        <option value={{ $i }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn bg-default text-white">Pesquisar</button>
            </div>
        </form>
    </div>
</div>
